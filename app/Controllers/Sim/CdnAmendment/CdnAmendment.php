<?php


namespace App\Controllers\Sim\CdnAmendment;


use App\Libraries\ProcessJsonFile;
use App\Models\gstr1\cdn_amendment\CdnAmendmentModel;

class CdnAmendment extends \App\Controllers\BaseController
{
    public function index() {
        $company_id = session()->get('company_id');
        $jsonHandle = new ProcessJsonFile();
        $data = array();

        $page_slug = $this->request->uri->getSegment(2);

        $data = $jsonHandle->get_current_page_data($page_slug);
 
        return view('sim/cdn-amendment/cdn-amendment', $data);
    }

    public function cdn_amendment_receiver_uploded() {
        return view('sim/cdn-amendment/cdn-amendment-receiver-uploded');
    }

    public function cdn_amendment_receiver_modified() {
        return view('sim/cdn-amendment/cdn-amendment-receiver-modified');
    }

    public function cdn_amendment_receiver_rejected() {
        return view('sim/cdn-amendment/cdn-amendment-receiver-rejected');
    }

    public function cdn_amendment_add() {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $model = new CdnAmendmentModel();
        $data = array();

        $fin_year = ($_GET['fin_year'] )?? '';
        $invoice_no = ($_GET['invoice_no']) ?? '';
        if ( $fin_year &&  $invoice_no) {
            $invoice_details = $model->select('*')->where(array('financial_year' => $fin_year, 'invoice_no' => $invoice_no))->get()->getResult();
            if ( $invoice_details && isset($invoice_details[0])) {
                $data['invoice_details'] = $invoice_details[0];
            } else {
                $session->setFlashdata('error', 'Invalid invoice number or financial year');
                return redirect()->to('simulation/cdnr-amendment/');
            }
//            echo $fin_year . "<br />" . $invoice_no;
            $data['pos_list'] = get_pos_list();
            return view('sim/cdn-amendment/cdn-amendment-add', $data);
        } else {

            $session->setFlashdata('error', 'Invalid invoice number or financial year');
            return redirect()->to('simulation/cdnr-amendment/');

        }
    }
}
