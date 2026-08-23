<?php


namespace App\Controllers\Sim\B2csAmendment;
use App\Models\gstr1\amended_b2c_others\amended_b2c_others;
use App\Models\gstr1\b2c_others\B2c_othersModel;
use App\Models\sim\CompanyModel;
use App\Libraries\ProcessJsonFile;

class B2csAmendment extends \App\Controllers\BaseController
{
    public function index() {
        helper(['form', 'common']);
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $cmpny = new CompanyModel();
        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
        $data['company'] = $cmpny->find($company_id);
        $data['pos_list'] = get_pos_list();

        return view('sim/b2cs-amendment/b2cs-amendment', $data);
    }

    public function b2cs_ecomm_amendment() {
        return view('sim/b2cs-amendment/b2cs-ecomm-amendment');
    }

    public function b2cs_amendment_add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $model = new amended_b2c_others();


        $data = array();

        $fin_year = ($_GET['fin_year'] )?? '';
        $pos = ($_GET['pos']) ?? '';
        $return_filing_period = ($_GET['return_filing_period']) ?? '';
        if ( $fin_year &&  $pos) {
            $pos_details = $model->select('*')->where(array('financial_year' => $fin_year, 'original_pos' => $pos, 'return_filing_period' => $return_filing_period))->get()->getResult();
            if ( $pos_details && isset($pos_details[0])) {
                $data['invoice_details'] = $pos_details[0];
//                echo "<pre>";
//                var_dump($data['invoice_details']);
//                echo "</pre>";
            } else {
                $session->setFlashdata('error', 'Invalid invoice number or financial year');
                return redirect()->to('simulation/b2cs-amendment/');
            }
//            echo $fin_year . "<br />" . $invoice_no;
            $data['pos_list'] = get_pos_list();
            return view('sim/b2cs-amendment/b2cs-amendment-add', $data);
        } else {
            $session->setFlashdata('error', 'Invalid pos number or financial year');
            return redirect()->to('simulation/b2cs-amendment/');

        }

    }
}
