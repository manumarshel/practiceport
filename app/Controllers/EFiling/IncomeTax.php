<?php

namespace App\Controllers\EFiling;

use App\Controllers\BaseController;
use App\Models\TdsModel;

class IncomeTax extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
        
        return view('efiling/etax/index', $data);
    }

    public function instruction()
    {
        $data = [];
        
        return view('efiling/etax/instruction', $data);
    }

    public function addNewTds()
    {
        $data = [];

        return view('efiling/etax/create', $data);
    }


    public function newTaxSubmit()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $tds_data = $this->request->getFile('tds_file');
            $tds_file_name = $tds_data->getRandomName();
            $tds_data->move(ROOTPATH . 'public/assets/uploads/tds/', $tds_file_name);

            $data = [
                'tds_file' => $tds_file_name,
                'company_id' => session('company_id'),
                'question_id' => session('question_id'),
                'user_id' => session('user_id'),
                'status' => 0,
                'form_type' => $_POST['form_type'],
                'financial_year' => $_POST['year'],
                'quarter' => $_POST['quarter'],
                'original_rrr' => $_POST['original_rrr'] ?? '',
                'previous_rrr' => $_POST['previous_rrr'] ?? '',
                'upload_type' => $_POST['upload_type'],
            ];

            $epaytax = new TdsModel();

            try {

                $epaytax->insert($data);
                $epaytax_id = $epaytax->getInsertID();

                return redirect()->to('e-filing/tds-e-verify/'.$epaytax_id);
                
            } catch (\ReflectionException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function tdsEverify()
    {
        $epaytax_id = $this->request->uri->getSegment(3);

        $data['epaytax_id'] = $epaytax_id;

        return view('efiling/etax/everify', $data);
    }

    public function verifySubmit()
    {
        $tax = [];

        if ($this->request->getMethod() == 'post') {

            $epaytax = new TdsModel();
            $tax = $epaytax->find($_POST['tax_id']);

            $tax['verify_type'] = $_POST['verify_type'];
            $tax['evc_code'] = $_POST['evc_code'] ?? '';

            $min = 100000000000; // Minimum value for a 12-digit number
            $max = 999999999999; // Maximum value for a 12-digit number

            $tax['original_rrr'] = random_int($min, $max);
            $tax['previous_rrr'] = random_int($min, $max);
            $tax['transaction_id'] = random_int($min, $max);
            $tax['acknowledgement_no'] = random_int($min, $max);

            $epaytax->update($_POST['tax_id'], $tax);
        }

        return redirect()->to('e-filing/everify-success/'.$tax['id']);
    }

    public function everifySuccess()
    {
        $epaytax_id = $this->request->uri->getSegment(3);

        $epaytax = new TdsModel();
        $tax = $epaytax->find($epaytax_id);

        return view('efiling/etax/everify-success', $tax);
    }

    public function filedForms()
    {
        $data = [];

        return view('efiling/etax/filed-forms', $data);
    }

    public function filedFormsDetails()
    {
        $data = [];

        $company = new TdsModel();

        // Adding a condition using Query Builder
        $data['companies'] = $company->where('company_id', session('company_id'))->findAll();

        

        return view('efiling/etax/filed-forms-details', $data);
    }

    public function filedFormsView()
    {
        $epaytax_id = $this->request->uri->getSegment(3);

        $epaytax = new TdsModel();
        $tax = $epaytax->find($epaytax_id);

        return view('efiling/etax/filed-forms-view', $tax);
    }
}
