<?php

namespace App\Controllers\EFiling;

use App\Controllers\BaseController;
use App\Models\EpaytaxModel;

class EpayTax extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];

        $companyId = session('company_id') ?? null;

        if ($companyId) {
            $tax = new EpaytaxModel();
            $data['taxes'] = $tax->where('company_id', $companyId)->where('status', 0)->findAll();
            $data['payments'] = $tax->where('company_id', $companyId)->where('status', 1)->findAll();
        }
        
        return view('efiling/epay/index', $data);
    }

    public function addNewEpayTax()
    {
        $data = [];
        
        return view('efiling/epay/add', $data);
    }

    public function editNewEpayTax()
    {
        $epaytax_id = $this->request->uri->getSegment(3);
        
        $epaytax = new EpaytaxModel();
        $tax = $epaytax->find($epaytax_id);

        return view('efiling/epay/edit', $tax);
    }

    public function newEpayTaxPaymentNature()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $data = $_POST ?? [];

            session()->set($data);
        }

        return view('efiling/epay/nature', $data);
    }

    public function editEpayTaxPaymentNature()
    {
        $data = [];

        $epaytax_id = $this->request->uri->getSegment(3);

        if ($this->request->getMethod() == 'post') {
            $data = $_POST ?? [];

            $epaytax = new EpaytaxModel();

            $tax = $epaytax->find($epaytax_id);

            $tax['assesment_year'] = $data['year'];

            $epaytax->update($epaytax_id, $tax);

        }

        $epaytax = new EpaytaxModel();

        $tax = $epaytax->find($epaytax_id);

        return view('efiling/epay/edit-nature', $tax);
    }

    public function newEpayTaxBreakup()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $data = $_POST ?? [];

            session()->set($data);
        }
        
        return view('efiling/epay/breakup', $data);
    }

    public function editEpayTaxBreakup()
    {
        $data = [];

        $epaytax_id = $this->request->uri->getSegment(3);

        if ($this->request->getMethod() == 'post') {
            $data = $_POST ?? [];

            $epaytax = new EpaytaxModel();

            $tax = $epaytax->find($epaytax_id);

            $nature = $data['nature'];
            $section = explode('-', $nature)[0] ?? '';
            $code = explode('-', $nature)[1] ?? '';

            $tax['section'] = $section;
            $tax['code'] = $code;

            $epaytax->update($epaytax_id, $tax);
        }

        $epaytax = new EpaytaxModel();

        $tax = $epaytax->find($epaytax_id);
        
        return view('efiling/epay/edit-breakup', $tax);
    }

    public function newEpayTaxSubmit()
    {
        $data = [];

        $min = 100000000000; // Minimum value for a 12-digit number
        $max = 999999999999; // Maximum value for a 12-digit number

        if ($this->request->getMethod() == 'post') {
            $nature = session('nature');
            $section = explode('-', $nature)[0] ?? '';
            $code = explode('-', $nature)[1] ?? '';

            $data = [
                'assesment_year' => session('year'),
                'section' => $section,
                'code' => $code,
                'tax' => $_POST['tax'],
                'supercharge' => $_POST['supercharge'],
                'cess' => $_POST['cess'],
                'interest' => $_POST['interest'],
                'penalty' => $_POST['penalty'],
                'fee' => $_POST['fees'],
                'total' => $_POST['total_amount'],
                'words_total' => $_POST['total_amount_words'],
                'company_id' => session('company_id'),
                'question_id' => session('question_id'),
                'user_id' => session()->get('id'),
                'type' => $_POST['form_type'],
                'status' => $_POST['status'],
                'cin' => random_int($min, $max)."UBIN"
            ];

            $epaytax = new EpaytaxModel();

            try {

                $epaytax->insert($data);
                $data['epaytax_id'] = $epaytax->getInsertID();

                if ($data['status']) {
                    return view('efiling/epay/success', $data);
                }

                return redirect()->to('e-filing/epaytax');
                
            } catch (\ReflectionException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function editEpayTaxSubmit()
    {
        $data = [];

        $min = 100000000000; // Minimum value for a 12-digit number
        $max = 999999999999; // Maximum value for a 12-digit number

        if ($this->request->getMethod() == 'post') {
           // print_r($_POST); exit;
            $data = [
                'tax' => $_POST['tax'],
                'supercharge' => $_POST['supercharge'],
                'cess' => $_POST['cess'],
                'interest' => $_POST['interest'],
                'penalty' => $_POST['penalty'],
                'fee' => $_POST['fees'],
                'total' => $_POST['total_amount'],
                'words_total' => $_POST['total_amount_words'],
                'type' => $_POST['form_type'],
                'status' => $_POST['status'],
                'cin' => random_int($min, $max)."UBIN"
            ];

            $epaytax = new EpaytaxModel();

            try {
                $epaytax_id = $this->request->uri->getSegment(3);

                $epaytax = new EpaytaxModel();

                $epaytax->update($epaytax_id, $data);

                if ($data['status']) {
                    
                    $epaytax = new EpaytaxModel();
                    
                    $data = $epaytax->find($epaytax_id);
                    $data['epaytax_id'] = $epaytax_id;
                    return view('efiling/epay/edit-success', $data);
                }

                return redirect()->to('e-filing/epaytax');
                
            } catch (\ReflectionException $e) {
                echo $e->getMessage();
            }
        }
    }

    public function deleteNewEpayTax()
    {
        try {
            $epaytax_id = $this->request->uri->getSegment(3);

            $epaytax = new EpaytaxModel();

            $tax = $epaytax->find($epaytax_id);

            if ($tax) {
                $epaytax->delete($epaytax_id);
            }

            return redirect()->to('e-filing/epaytax');
            
        } catch (\ReflectionException $e) {
            echo $e->getMessage();
        }
    }

    public function newEpayTaxReceipt()
    {
        $epaytax_id = $this->request->uri->getSegment(3);
        
        $epaytax = new EpaytaxModel();
        $tax = $epaytax->find($epaytax_id);

        return view('efiling/epay/receipt', $tax);
    }
    
    public function newEpayTaxDetail()
    {
        $epaytax_id = $this->request->uri->getSegment(3);
        
        $epaytax = new EpaytaxModel();
        $tax = $epaytax->find($epaytax_id);

        return view('efiling/epay/detail', $tax);
    }
}
