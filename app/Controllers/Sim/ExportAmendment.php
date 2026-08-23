<?php


namespace App\Controllers\Sim;

use App\Models\gstr1\export_amendment\Export_amendmentModel;

class ExportAmendment extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('sim/export-amendment/export-amendment');
    }
    public function export_amendment_add()
    {
        helper(['form', 'common']);
        $session = \Config\Services::session();
        $model = new Export_amendmentModel();

        $data = array();

        $fin_year = ($_GET['fin_year'] )?? '';
        $invoice_no = ($_GET['invoice_no']) ?? '';
        if ( $fin_year &&  $invoice_no) {
            $invoice_details = $model->select('*')->where(array('financial_year' => $fin_year, 'invoice_number' => $invoice_no))->get()->getResult();
            if ( $invoice_details && isset($invoice_details[0])) {
                $data['invoice_details'] = $invoice_details[0];
            } else {
                $session->setFlashdata('error', 'Invalid invoice number or financial year');
                return redirect()->to('simulation/export-amendment/');
            }

            $data['pos_list'] = get_pos_list();
            return view('sim/export-amendment/export-amendment-add', $data);
        } else {

//            $session->setFlashdata('error', 'Invalid invoice number or financial year');
//            return redirect()->to('simulation/export-amendment/');

        }
    }
}
