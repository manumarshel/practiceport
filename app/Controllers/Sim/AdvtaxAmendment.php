<?php


namespace App\Controllers\Sim;


use App\Models\gstr1\amend_tax_liability\amend_tax_liability;
use App\Models\gstr1\amended_b2c_others\amended_b2c_others;
use App\Models\sim\CompanyModel;

class AdvtaxAmendment extends \App\Controllers\BaseController
{
    public function index() {
        helper(['form', 'common']);
        $company_id = session()->get('company_id');
        $cmpny = new CompanyModel();
        $data = $cmpny->find($company_id);
        $data['pos_list'] = get_pos_list();
        return view('sim/advtax-amendment/advtax-amendment', $data);
    }

    public function advtax_amendment_add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $model = new amend_tax_liability();


        $data = array();

        $fin_year = ($_GET['fin_year'] )?? '';
        $pos = ($_GET['pos']) ?? '';
        $return_filing_period = ($_GET['return_filing_period']) ?? '';
        if ( $fin_year &&  $pos) {
            $pos_details = $model->select('*')->where(array('financial_year' => $fin_year, 'pos' => $pos, 'return_filing_period' => $return_filing_period))->get()->getResult();
            if ( $pos_details && isset($pos_details[0])) {
                $data['invoice_details'] = $pos_details[0];
            } else {
                $session->setFlashdata('error', 'Invalid invoice number or financial year');
                return redirect()->to('simulation/advtax-amendment/');
            }
//            echo $fin_year . "<br />" . $invoice_no;
            $data['pos_list'] = get_pos_list();
            return view('sim/advtax-amendment/advtax-amendment-add', $data);
        } else {
            $session->setFlashdata('error', 'Invalid pos number or financial year');
            return redirect()->to('simulation/advtax-amendment/');

        }

    }
}
