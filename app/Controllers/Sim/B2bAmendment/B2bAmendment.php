<?php


namespace App\Controllers\Sim\B2bAmendment;


use App\Libraries\ProcessJsonFile;
use App\Models\gstr1\b2b_amendment\B2bAmendmentModel;

class B2bAmendment extends \App\Controllers\BaseController
{
    public function index() {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
        return view('sim/b2b-amendment/b2b-amendment', $data);
    }

    public function b2b_amendment_receiver_uploded() {
        return view('sim/b2b-amendment/b2b-amendment-receiver-uploded');
    }

    public function b2b_amendment_receiver_modified() {
        return view('sim/b2b-amendment/b2b-amendment-receiver-modified');
    }

    public function b2b_amendment_receiver_rejected() {
        return view('sim/b2b-amendment/b2b-amendment-receiver-rejected');
    }

//    public function b2b_amendment_add() {
//        return view('sim/b2b-amendment/b2b-amendment-add');
//    }

    public function b2b_amendment_add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $model = new B2bAmendmentModel();


        $data = array();

        $fin_year = ($_GET['fin_year'] )?? '';
        $invoice_no = ($_GET['invoice_no']) ?? '';
        if ( $fin_year &&  $invoice_no) {
            $invoice_details = $model->select('*')->where(array('financial_year' => $fin_year, 'invoice_no' => $invoice_no))->get()->getResult();
            if ( $invoice_details && isset($invoice_details[0])) {
                $data['invoice_details'] = $invoice_details[0];
            } else {
                $session->setFlashdata('error', 'Invalid invoice number or financial year');
                return redirect()->to('simulation/b2b-amendment/');
            }
//            echo $fin_year . "<br />" . $invoice_no;
            $data['pos_list'] = get_pos_list();
            return view('sim/b2b-amendment/b2b-amendment-add', $data);
        } else {

            $session->setFlashdata('error', 'Invalid invoice number or financial year');
            return redirect()->to('simulation/b2b-amendment/');

        }

    }
}
