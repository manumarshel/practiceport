<?php
namespace App\Validation;
use App\Models\AdminModel;
use App\Models\sim\CompanyModel;
use App\Models\user\UserModel;
use App\Models\InstitutionModel;
use CodeIgniter\Model;

class UserRules
{

    public function validateUser(string $str, string $fields, array $data){
        $model = new AdminModel();
        $user = $model->where('admin_email', $data['email'])
            ->first();

        if(!$user)
            return false;

        return password_verify($data['password'], $user['admin_password']);
    }

    public function validateSubscriberUser(string $str, string $fields, array $data){
        $model = new UserModel();
        $user = $model->where('email', $data['email'])
            ->first();

        if(!$user)
            return false;

        return password_verify($data['password'], $user['password']);
    }
    
     public function validateInstitution(string $str, string $fields, array $data){
        $model = new InstitutionModel();
        $user = $model->where('email', $data['email'])
            ->first();

        if(!$user)
            return false;

        return password_verify($data['password'], $user['password']);
    }

    public function validateCompanyUser(string $str, string $fields, array $data){
        $model = new CompanyModel();
        $user = $model->where('username', $data['username'])
            ->first();

        if(!$user)
            return false;

        return $data['password'] == $user['password'];//password_verify($data['password'], $user['password']);
    }

//    public function validateBusiness(string $str, string $fields, array $data){
//        $model = new UserModel();
//        $user = $model->where('email', $data['email'])
//            ->first();
//
//        if(!$user)
//            return false;
//
//        return password_verify($data['password'], $user['password']);
//    }
}
