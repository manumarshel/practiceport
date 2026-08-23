<?php

namespace App\Controllers\Sim;

use App\Controllers\BaseController;
use App\Models\CompanyModel;

class CheckPeriod extends BaseController
{
    public function __construct()
    {
        helper(['common']);
    }

    public function process()
    {
        $session = session();

        if ($this->request->isAJAX()) {
            $company_id = $session->get('company_id');
            $company_model = new CompanyModel();
            $company = $company_model->find($company_id);

            $valid_qtr = $company['quarter'];
            $valid_period = $company['period'];
            $valid_fy = $company['financial_year'];

            $period = $this->request->getPost('period');
            $quarter = $this->request->getPost('quarter');
            $financial_year = $this->request->getPost('financial_year');


            if ( $financial_year == null || $valid_fy !== $financial_year ) {
                $this->response->setStatusCode(401);
                return json_encode(array('resp' => 'Invalid financial year'));
            }

            if ( $quarter == null || $valid_qtr !== $quarter ) {
                $this->response->setStatusCode(401);
                return json_encode(array('resp' => 'Invalid quarter'));
            }

            if ( $period == null || $valid_period !== $period ) {
                $this->response->setStatusCode(401);
                return json_encode(array('resp' => 'Invalid period'));
            }

            $this->response->setStatusCode(200);//->setJSON($data[0]);
            return json_encode(array('resp' => 'Success'));


        }

        $this->response->setStatusCode(401);
        return json_encode(array('resp' => 'Invalid request'));
    }
}
