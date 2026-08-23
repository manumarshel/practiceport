<?php


namespace App\Controllers\User;


use App\Controllers\BaseController;
use App\Libraries\DbFetchnProcess;
use App\Models\MasterPackageModel;
use App\Models\SubscriptionModel;
use App\Models\user\UserModel;
use Config\Database;

class Packages extends BaseController
{
    protected $data;
    protected $userId;
    protected $db;

    public function __construct()
    {
        $um = new UserModel();
        $this->data['user_info'] = $um->get_current_user_info();
    }

    public function index()
    {
        $sm = new SubscriptionModel();
        $um = new UserModel();
        $pm = new MasterPackageModel();
        $userId = $um->get_user_Id();
        $this->data['current_subscriptions'] = [];

        if ($userId) {
            $db = Database::connect();
            $student_new = $um->find($userId);
            $enroll_type = $student_new['enroll_type'];
            $this->data['enroll_type'] = $enroll_type;

            if ($enroll_type == "0") {
                // B2C: get latest subscription per package
                $subQuery = $db->table('mst_subscriptions')
                    ->select('MAX(subscription_id)')
                    ->where('user_id', $userId)
                    ->groupBy('package_id')
                    ->getCompiledSelect();

                $builder = $db->table('mst_subscriptions');
                $builder->select('
                    mst_packages.package_id as package_id,
                    COALESCE(NULLIF(mst_packages.custom_title, ""), mst_packages.title) as display_title,
                    mst_packages.title,
                    mst_packages.duration,
                    mst_subscriptions.start_date,
                    mst_subscriptions.end_date,
                    mst_subscriptions.cost,
                    mst_subscriptions.package_id as sub_package_id
                ');
                $builder->join('mst_packages', 'mst_packages.package_id = mst_subscriptions.package_id');
                $builder->where("mst_subscriptions.subscription_id IN ($subQuery)", null, false);
                $builder->orderBy('mst_subscriptions.subscription_id', 'DESC');
            } else {
                // B2B: get latest subscription per package
                $subQuery = $db->table('mst_subscriptions')
                    ->select('MAX(subscription_id)')
                    ->where('user_id', $userId)
                    ->where('type', 1)
                    ->groupBy('package_id')
                    ->getCompiledSelect();

                $builder = $db->table('mst_subscriptions');
                $builder->select('
                    b2b_packages.PKPackageID as package_id,
                    COALESCE(NULLIF(b2b_packages.custom_title, ""), b2b_packages.title) as display_title,
                    b2b_packages.title,
                    b2b_packages.duration,
                    mst_subscriptions.start_date,
                    mst_subscriptions.end_date,
                    mst_subscriptions.cost,
                    mst_subscriptions.package_id as sub_package_id
                ');
                $builder->join('b2b_packages', 'b2b_packages.PKPackageID = mst_subscriptions.package_id');
                $builder->where("mst_subscriptions.subscription_id IN ($subQuery)", null, false);
                $builder->orderBy('mst_subscriptions.subscription_id', 'DESC');
            }

            $this->data['current_subscriptions'] = $builder->get()->getResult();
        }

        $this->data['packages'] = $pm
            ->where('active', 1)
            ->asArray()
            ->findAll();

        return view('user/packages', $this->data);
    }
}