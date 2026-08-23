<?php


namespace App\Controllers\Sim;


use App\Libraries\ProcessJsonFile;
use App\Models\gstr1\b2cl_amendment\B2cl_amendmentModel;

class B2clAmendment extends \App\Controllers\BaseController
{
    public function index()
    {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);

        return view('sim/b2cl-amendment/b2cl-amendment', $data);
    }
    public function b2cl_amendment_add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $model = new B2cl_amendmentModel();


        $data = array();

        $fin_year = ($_GET['fin_year'] )?? '';
        $invoice_no = ($_GET['invoice_no']) ?? '';

        if ( $fin_year &&  $invoice_no) {
            $invoice_details = $model->select('*')->where(array('financial_year' => $fin_year, 'invoice_number' => $invoice_no))->get()->getResult();
            if ( $invoice_details && isset($invoice_details[0])) {
             $data['invoice_details'] = $invoice_details[0];
         } else {
                $session->setFlashdata('error', 'Invalid invoice number or financial year');
                return redirect()->to('simulation/b2cl-amendment/');
            }
//            echo $fin_year . "<br />" . $invoice_no;
            $data['pos_list'] = get_pos_list();
            return view('sim/b2cl-amendment/b2cl-amendment-add', $data);
        } else {

            $session->setFlashdata('error', 'Invalid invoice number or financial year');
            return redirect()->to('simulation/b2cl-amendment/');

        }

    }
}
