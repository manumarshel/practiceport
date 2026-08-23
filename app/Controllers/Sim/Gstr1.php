<?php

namespace App\Controllers\Sim;

use App\Libraries\DbFetchnProcess;
use App\Libraries\ItemDetails;
use App\Libraries\ProcessJsonFile;
use App\Models\gstr1\_6aExports\_6aExportsModel;
use App\Models\gstr1\_8abcd\_8abcdDetails;
use App\Models\gstr1\_9aAmendedExportsInvoices\_9aAmendedExportsInvoices;
use App\Models\gstr1\_9ab2bInvoice\_9ab2bInvoiceModel;
use App\Models\gstr1\_9ab2cLargeInvoice\_9ab2cLargeInvoiceModel;
use App\Models\gstr1\_9bcdnotes\_9bcdnotesModel;
use App\Models\gstr1\_9bcdnotesur\_9bcdnotesur;
use App\Models\gstr1\_9CAmendedCreditDebitNotesRegistered\_9CAmendedCreditDebitNotesRegistered;
use App\Models\gstr1\_9CAmendedCreditDebitNotesRegistered\_9CAmendedCreditDebitNotesUnregistered;
use App\Models\gstr1\adv_tax\AdvtaxModel;
use App\Models\gstr1\adv_tax_amendment\AdvtaxAmendmentModel;
use App\Models\gstr1\amend_tax_liability\amend_tax_liability;
use App\Models\gstr1\amended_b2c_others\amended_b2c_others;
use App\Models\gstr1\b2b\B2bModel;
use App\Models\gstr1\b2c_others\B2c_othersModel;
use App\Models\gstr1\b2cl\B2clModel;
use App\Models\gstr1\cdn_amendment\CdnAmendmentModel;
use App\Models\gstr1\documents_issues\documents_issues;
use App\Models\gstr1\hsn\HsnModel;
use App\Models\gstr1\nil_rated\NilModel;
use App\Models\gstr1\tax_paid\TaxpaidItemDetailsModel;
use App\Models\gstr1\tax_paid\TaxpaidModel;
use App\Models\gstr1\tax_paid_amendment\TaxpaidAmendmentModel;
use App\Models\sim\CompanyModel;
use App\Models\VideoModel;
use Exception;

class Gstr1 extends \App\Controllers\BaseController
{

    public function __construct()
    {
        helper(['common']);
    }

    public function return_filing_gstr1() {
        $company_id = session()->get('company_id');
        $cmpny = new CompanyModel();
        $data = array();
        $data['company'] = $cmpny->find($company_id);
        $vm = new VideoModel();
        $helpVideo = $vm->getVideo('slot23');
        $data['slot23'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot23'] = $helpVideo[0]['url'];
        }
        return view('sim/gstr1/return_filing_gstr1', $data);
    }


    public function getTemplate()
    {
        helper(['form']);
        if ($_GET['templateName'] == 'igst') {
            return view('sim/cmps/item-details-igst', ['alternate_title' => $_GET['alternate_title']]);
        } else {
            return view('sim/cmps/item-details-cgst-sgst', ['alternate_title' => $_GET['alternate_title']]);
        }
    }

    public function process()
    {
        if ($this->request->isAJAX() && isset($_COOKIE['question_id'])) {
            $value = $this->request->getPost('value');
            $action = $this->request->getPost('action');
            $type = $this->request->getPost('type');
            $field = $this->request->getPost('field');
            $is_date = intval($this->request->getPost('is_date'));

            if (!isset($type)) {
                $this->response->setStatusCode(401);
                return json_encode(array("resp" => 'Error Occurred'));
            }


//            if ($action === 'save_b2b_transaction') {
            if ($action === 'save_transaction') {
//                $errors = $this->validate_transaction($_POST);
//                if ( ! $errors ) {
                $errors = $this->save_transaction($_POST);
                if (!$errors) {
                    $this->response->setStatusCode(200);//->setJSON($data[0]);
                    return json_encode(array('resp' => 'Success')); //json_encode();
                } else {
                    $this->response->setStatusCode(401);
                    return json_encode($errors);
                }
//                }
//            else {
//                    $this->response->setStatusCode(401);
//                    return json_encode($errors);
//                }

            } else {
                if ($is_date) {
                    $value = date('Y-m-d', strtotime($value));
                }
                $data = $this->retrieve_field_val($field, $type, $value);
                if ($data) {
                    $this->response->setStatusCode(200);//->setJSON($data[0]);
                    return json_encode($data[0]);
                } else {
                    $this->response->setStatusCode(401);
                    return json_encode(array("resp" => 'Invalid Value'));
                }
            }
//            if ($action === 'get_receiver_details' && $value) {
//                $data = $this->get_receiver_details($value);
//                if ($data) {
//                    $this->response->setStatusCode(200);//->setJSON($data[0]);
//                    return json_encode($data[0]);
//                } else {
//                    $this->response->setStatusCode(401);
//                    return json_encode(array("resp" => 'Invalid Receiver GSTIN'));
//                }
//            } else if ($action === 'get_inv_no' && $value) {
//                $data = $this->get_inv_no($value, $type);
//                if ($data) {
//                    $this->response->setStatusCode(200);//->setJSON($data[0]);
//                    return json_encode(array('resp' => 'success'));
//                } else {
//                    $this->response->setStatusCode(401);
//                    return json_encode(array("resp" => 'Invalid Invoice Number'));
//                }
//            } else if ($action === 'get_total_inv_val' && $value) {
//                $data = $this->get_total_inv_val($value, $type);
//                if ($data) {
//                    $this->response->setStatusCode(200);//->setJSON($data[0]);
//                    return json_encode(array('resp' => 'success'));
//                } else {
//                    $this->response->setStatusCode(401);
//                    return json_encode(array("resp" => 'Invalid Total Invoice Value'));
//                }
//            } else if ($action === 'get_receiver_inv_date' && $value) {
//                $data = $this->get_receiver_inv_date($value);
//                if ($data) {
//                    $this->response->setStatusCode(200);//->setJSON($data[0]);
//                    return json_encode(array('resp' => 'success'));
//                } else {
//                    $this->response->setStatusCode(401);
//                    return json_encode(array("resp" => 'Invalid Invoice Date'));
//                }
//            } //            else {
//            else if ($action === 'save_b2b_transaction') {
//                $data = $this->save_b2b_transaction($_POST);
//                if ($data) {
//                    $this->response->setStatusCode(200);//->setJSON($data[0]);
//                    return $data; //json_encode();
//                } else {
//                    $this->response->setStatusCode(401);
//                    return json_encode(array("resp" => 'Error Occurred'));
//                }
//            }
        }
    }

    private function get_model_instance($type)
    {
        if ($type == 'b2b') {
            return new B2bModel();
        } else if ($type == 'b2cl') {
            return new B2clModel();
        } else if ($type == 'cdnr') {
            return new _9bcdnotesModel();
        } else if ($type == 'cdnur') {
            return new _9bcdnotesur();
        } else if ($type == 'export') {
            return new _6aExportsModel();
        } else if ($type == 'b2b-amendment') {
            return new _9ab2bInvoiceModel();
        } else if ($type == 'b2cl-amendment') {
            return new _9ab2cLargeInvoiceModel();
        } else if ($type == 'export-amendment') {
            return new _9aAmendedExportsInvoices();
        } else if ($type == 'cdnr-amendment') {
            return new CdnAmendmentModel();
        } else if ($type == 'cdnur-amendment') {
            return new _9CAmendedCreditDebitNotesUnregistered();
        } else if ($type == 'b2cs') {
            return new B2c_othersModel();
        } else if ($type == 'nil-rated') {
            return new NilModel();
        } else if ($type == 'advtax') {
            return new AdvtaxModel();
        } else if ($type == 'taxpaid') {
            return new TaxpaidModel();
        } else if ($type == 'hsn') {
            return new HsnModel();
        } else if ($type == 'document') {
            return new documents_issues();
        } else if ($type == 'taxpaid-amendment') {
            return new TaxpaidAmendmentModel();
        } else if ($type == 'advtax-amendment') {
            return new AdvtaxAmendmentModel();
        } else if ($type == 'b2cs-amendment') {
            return new amended_b2c_others();
        }
    }

    private function retrieve_field_val($field, $type, $val): array
    {
//        invoice_number
        $dataModel = $this->get_model_instance($type);
        $question_id = $_COOKIE['question_id'];
        $result = $dataModel->
        where(array($field => $val, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function get_receiver_details($rgstId)
    {
        $b2bModel = new B2bModel();
        $question_id = $_COOKIE['question_id'];
        $result = $b2bModel->
        where(array('receiver_gstin' => $rgstId, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function get_inv_no($iv_no)
    {
        $b2bModel = new B2bModel();
        $question_id = $_COOKIE['question_id'];
        $result = $b2bModel->
        where(array('invoice_number' => $iv_no, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function get_total_inv_val($inv_val)
    {
        $b2bModel = new B2bModel();
        $question_id = $_COOKIE['question_id'];
        $result = $b2bModel->
        where(array('total_invoce_value' => $inv_val, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function get_receiver_inv_date($inv_date)
    {
        $inv_date = date('Y-m-d', strtotime($inv_date));
        $b2bModel = new B2bModel();
        $question_id = $_COOKIE['question_id'];
        $result = $b2bModel->
        where(array('invoice_date' => $inv_date, 'question_id' => $question_id))->limit(1)->findAll();
        return $result;
    }

    private function get_primary_data($type)
    {
        $data = [];
        if ($type == 'b2b') {
            $data = [
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'receiver_name' => $this->request->getPost('receiver_name'),
                'invoice_number' => $this->request->getPost('invoice_number'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'pos' => $this->request->getPost('pos'),
                'total_invoce_value' => $this->request->getPost('total_invoce_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'eligible_to_taxed' => ($this->request->getPost('eligible_to_taxed') == 'on') ? 1 : 0,
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
            ];
        } else if ($type == 'b2cl') {
            $data = [
                'invoice_no' => $this->request->getPost('invoice_no'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'pos' => $this->request->getPost('pos'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
            ];
        } else if ($type == 'cdnr') {
            $data = [
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'dc_note_date' => date('Y-m-d', strtotime($this->request->getPost('dc_note_date'))),
                'pos' => $this->request->getPost('pos'),
                'note_value' => $this->request->getPost('note_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'receiver__name' => $this->request->getPost('receiver__name'),
                'note_type' => $this->request->getPost('note_type'),
                'dc_note_no' => $this->request->getPost('dc_note_no'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
            ];
        } else if ($type == 'cdnur') {
            $data = [
                'type' => $this->request->getPost('typeop'),
                'dc_note_date' => date('Y-m-d', strtotime($this->request->getPost('dc_note_date'))),
                'pos' => $this->request->getPost('pos'),
                'note_value' => $this->request->getPost('note_value'),
                'supply_type' => $this->request->getPost('supply_type'),
//                'receiver__name' => $this->request->getPost('receiver__name'),
                'note_type' => $this->request->getPost('note_type'),
                'dc_note_no' => $this->request->getPost('dc_note_no'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
            ];
        } else if ($type == 'export') {
            $data = [
                'invoice_no' => $this->request->getPost('invoice_no'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'billing_no' => $this->request->getPost('billing_no'),
                'port_code' => $this->request->getPost('port_code'),
                'shipping_date' => date('Y-m-d', strtotime($this->request->getPost('shipping_date'))),
                'supply_type' => $this->request->getPost('supply_type'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'gst_payment' => $this->request->getPost('gst_payment'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
            ];
        } else if ($type == 'b2b-amendment') {
            $data = [
//                'fin' => $this->request->getPost('fin'),
//                'invoice_no' => date('Y-m-d', strtotime($this->request->getPost('invoice_no')))
                'pos' => $this->request->getPost('pos'),
                'original_invoice_number' => $this->request->getPost('invoice_no'),
                'revised_invoice_number' => $this->request->getPost('revised_invoice_no'),
                'supply_type' => $this->request->getPost('supply_type'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'revised_invoice_date' => date('Y-m-d', strtotime($this->request->getPost('revised_invoice_date')))
            ];
        } else if ($type == 'b2cl-amendment') {
            $data = [
//                'fin' => $this->request->getPost('fin'),
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'receiver__name' => $this->request->getPost('receiver_name'),
                'invoice_no' => $this->request->getPost('invoice_number'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invoice_date'))),
                'pos' => $this->request->getPost('pos'),
                'original_invoice_number' => $this->request->getPost('original_invoice_number'),
                'revised_invoice_no' => $this->request->getPost('revised_invoice_no'),
                'revised_invoice_date' => date('Y-m-d', strtotime($this->request->getPost('revised_invoice_date'))),
                'supply_type' => $this->request->getPost('supply_type'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
            ];
        } else if ($type == 'export-amendment') {
            $data = [
//                'fin' => $this->request->getPost('fin'),
//                'invoice_number' => date('Y-m-d', strtotime($this->request->getPost('invoice_number'))),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'original_invoice_number' => $this->request->getPost('original_invoice_number'),
                'revised_invoice_number' => $this->request->getPost('revised_invoice_number'),
                'revised_invoice_date' => date('Y-m-d', strtotime($this->request->getPost('revised_invoice_date'))),

                'port_code' => $this->request->getPost('port_code'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'gst_payment' => $this->request->getPost('gst_payment'),
                'bill_date' => date('Y-m-d', strtotime($this->request->getPost('bill_date'))),
            ];
        } else if ($type == 'cdnr-amendment') {
            $data = [
//                'fin' => $this->request->getPost('fin'),
//                'invoice_no' => date('Y-m-d', strtotime($this->request->getPost('invoice_no')))
                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'dc_note_date' => date('Y-m-d', strtotime($this->request->getPost('dc_note_date'))),
                'pos' => $this->request->getPost('pos'),
                'note_value' => $this->request->getPost('note_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'receiver__name' => $this->request->getPost('receiver__name'),
                'note_type' => $this->request->getPost('note_type'),
                'dc_note_no' => $this->request->getPost('dc_note_no'),
                'reviced_invoice_no' => $this->request->getPost('reviced_invoice_no'),
                'reviced_invoice_date' => date('Y-m-d', strtotime($this->request->getPost('reviced_invoice_date'))),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
            ];
        } else if ($type == 'cdnur-amendment') {
            $data = [
//                'fin' => $this->request->getPost('fin'),
//                'invoice_no' => date('Y-m-d', strtotime($this->request->getPost('invoice_no')))
//                'receiver_gstin' => $this->request->getPost('receiver_gstin'),
                'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('dc_note_date'))),
                'pos' => $this->request->getPost('pos'),
                'note_value' => $this->request->getPost('note_value'),
                'supply_type' => $this->request->getPost('supply_type'),
//                'receiver__name' => $this->request->getPost('receiver__name'),
                'note_type' => $this->request->getPost('note_type'),
//                'note_value' => $this->request->getPost('dc_note_no'),
                'revised_invoice_number' => $this->request->getPost('revised_invoice_number'),
                'revised_invoice_date' => date('Y-m-d', strtotime($this->request->getPost('revised_invoice_date'))),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
            ];
        } else if ($type == 'b2cs') {
            $data = [
                'rate' => $this->request->getPost('rate'),
                'pos' => $this->request->getPost('pos'),
                'total_invoice_value' => $this->request->getPost('total_invoice_value'),
                'supply_type' => $this->request->getPost('supply_type'),
                'return_filing_period' => $this->request->getPost('return_filing_period'),
                'data_type' => $this->request->getPost('data_type'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'igst' => ($this->request->getPost('igst') == null) ? 0 : $this->request->getPost('igst'),
                'cgst' => ($this->request->getPost('cgst') == null) ? 0 : $this->request->getPost('cgst'),
                'sgst' => ($this->request->getPost('sgst') == null) ? 0 : $this->request->getPost('sgst'),
                'cess' => ($this->request->getPost('cess') == null) ? 0 : $this->request->getPost('cess'),
            ];
        } else if ($type == 'nil-rated') {
            $data = [
                'inter_reg_nill_rated_supplies' => $this->request->getPost('inter_reg_nill_rated_supplies'),
                'inter_reg_exempted' => $this->request->getPost('inter_reg_exempted'),
                'inter_reg_non_gst_supplies' => $this->request->getPost('inter_reg_non_gst_supplies'),
                'inter_unreg_nill_rated_supplies' => $this->request->getPost('inter_unreg_nill_rated_supplies'),
                'inter_unreg_exempted' => $this->request->getPost('inter_unreg_exempted'),
                'inter_unreg_non_gst_supplies' => $this->request->getPost('inter_unreg_non_gst_supplies'),
                'intra_reg_nill_rated_supplies' => $this->request->getPost('intra_reg_nill_rated_supplies'),
                'intra_reg_exempted' => $this->request->getPost('intra_reg_exempted'),
                'intra_reg_non_gst_supplies' => $this->request->getPost('intra_reg_non_gst_supplies'),
                'intra_unreg_nill_rated_supplies' => $this->request->getPost('intra_unreg_nill_rated_supplies'),
                'intra_unreg_exempted' => $this->request->getPost('intra_unreg_exempted'),
                'intra_unreg_non_gst_supplies' => $this->request->getPost('intra_unreg_non_gst_supplies'),
            ];
        } else if ($type == 'advtax') {
            $data = [
                'pos' => $this->request->getPost('pos'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'supply_type' => $this->request->getPost('supply_type')
            ];
        } else if ($type == 'taxpaid') {
            $data = [
                'pos' => $this->request->getPost('pos'),
                'supply_type' => $this->request->getPost('supply_type'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
            ];
        } else if ($type == 'hsn') {
            $data = [
                'hsn' => $this->request->getPost('hsn'),
                'description' => $this->request->getPost('description'),
                'uqc' => $this->request->getPost('uqc'),
                'total_quantity' => $this->request->getPost('total_quantity'),
                'total_taxable_value' => $this->request->getPost('total_taxable_value'),
                'rate' => $this->request->getPost('rate'),
                'integrated_tax' => $this->request->getPost('integrated_tax'),
                'central_tax' => $this->request->getPost('central_tax'),
                'state_tax' => $this->request->getPost('state_tax'),
                'cess' => $this->request->getPost('cess'),
            ];
        } else if ($type == 'document') {

        } else if ($type == 'taxpaid-amendment') {
            $data = [
                'financial_year' => $this->request->getPost('financial_year'),
                'return_filing_period' => $this->request->getPost('return_filing_period'),
                'pos' => $this->request->getPost('pos'),
                'eligible_to_taxed' => $this->request->getPost('eligible_to_taxed'),
            ];


        } else if ($type == 'advtax-amendment') {
            $data = [
                'financial_year' => $this->request->getPost('financial_year'),
                'return_filing_period' => $this->request->getPost('return_filing_period'),
                'pos' => $this->request->getPost('pos'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'supply_type' => $this->request->getPost('supply_type'),
//                'eligible_to_taxed' => $this->request->getPost('eligible_to_taxed'),
            ];
        } else if ($type == 'b2cs-amendment') {
            $data = [
                'financial_year' => $this->request->getPost('financial_year'),
                'return_filing_period' => $this->request->getPost('return_filing_period'),
                'original_pos' => $this->request->getPost('original_pos'),
                'revised_pos' => $this->request->getPost('revised_pos'),
                'is_igst' => ($this->request->getPost('is_igst') == 'on') ? 1 : 0,
                'supply_type' => $this->request->getPost('supply_type'),
//                'eligible_to_taxed' => $this->request->getPost('eligible_to_taxed'),
            ];
        }


        return $data;
    }

    private function get_snd_key($type)
    {

        if ($type == 'b2cs' || $type == 'hsn') return '';
        if ($type == 'cdnr' || $type == 'export-amendment') return '';
        if ($type == 'nil-rated') return '';
        if ($type == 'advtax') return '11a_tax_liabilities_item_details';
        if ($type == 'taxpaid') return 'adjustment_advance_item_details';
        if ($type == 'cdnur') return '9bcd_unregistred';
        if ($type == 'export') return '6a_exports_item_details';
        if ($type == 'b2b-amendment' || $type == 'b2cl-amendment') return '';
        if ($type == 'cdnr-amendment') return '';
        if ($type == 'cdnur-amendment') return '';

        return $type . '_item_details';
    }

    private function getB2bFormData($question_id, $b2b_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();
        // B2b
        $query = $dbProcess->fetchDataWithJoin($question_id, 'b2b',
            'b2b_item_details',
            'b2b_item_details.b2b_id = b2b.b2b_id AND b2b.b2b_id=' . $b2b_id,
            'item_details',
            'item_details.item_detail_id = b2b_item_details.item_detail_id');
        $results = $query->getResult();
        //getProcessedB2b($b2bResults);
        return $dbProcess->getProcessedData($results);
    }

    private function getB2clFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, 'b2c_large',
            'b2c_item_details',
            'b2c_item_details.b2c_id = b2c_large.b2c_id AND b2c_large.b2c_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = b2c_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        return $dbProcess->getProcessedData($b2bResults);
    }

    private function getCdnrFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '9b_cd_notes',
            '9bcd_item_details',
            '9bcd_item_details.9bcdn_id = 9b_cd_notes.9bcdn_id AND 9b_cd_notes.9bcdn_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 9bcd_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getCdnurFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '9b_cd_notes_unregistered',
            '9bcd_unregistred',
            '9bcd_unregistred.9bcdn_id = 9b_cd_notes_unregistered.9bcdn_id AND 9b_cd_notes_unregistered.9bcdn_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 9bcd_unregistred.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getExportFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '6a_exports',
            '6a_exports_item_details',
            '6a_exports_item_details.6a_id = 6a_exports.6a_id AND 6a_exports.6a_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 6a_exports_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getB2bAmendFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '9a_b2b_invoice',
            '9a_b2b_invoice_item_details',
            '9a_b2b_invoice_item_details.9a_b2b_id = 9a_b2b_invoice.9a_b2b_id AND 9a_b2b_invoice.9a_b2b_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 9a_b2b_invoice_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getB2clAmendFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '9a_b2c_large_invoice',
            '9a_b2c_large_invoice_item_details',
            '9a_b2c_large_invoice_item_details.9a_b2c_id = 9a_b2c_large_invoice.9a_b2c_id AND 9a_b2c_large_invoice.9a_b2c_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 9a_b2c_large_invoice_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getExportAmendFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '9a_exports',
            '9a_exports_item_details',
            '9a_exports_item_details.9a_exports_id = 9a_exports.9a_exports_id AND 9a_exports.9a_exports_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 9a_exports_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getCdnrAmendFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '9c_cd_notes_registered',
            '9c_cd_notes_registered_item_details',
            '9c_cd_notes_registered_item_details.9c_cdnr_id = 9c_cd_notes_registered.9c_cdnr_id AND 9c_cd_notes_registered.9c_cdnr_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 9c_cd_notes_registered_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getCdnurAmendFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '9c_cd_notes_unregistered',
            '9c_cd_notes_unregistered_item_details',
            '9c_cd_notes_unregistered_item_details.9c_cdnur_id = 9c_cd_notes_unregistered.9c_cdnur_id AND 9c_cd_notes_unregistered.9c_cdnur_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 9c_cd_notes_unregistered_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getB2csFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, 'b2c_others',
            'b2c_others_item_details',
            'b2c_others_item_details.b2c_others_id = b2c_others.b2c_others_id AND b2c_others.b2c_others_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = b2c_others_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getAdvTaxFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, '11a_tax_liabilities',
            '11a_tax_liabilities_item_details',
            '11a_tax_liabilities_item_details.11a_tax_id = 11a_tax_liabilities.11a_tax_id AND 11a_tax_liabilities.11a_tax_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = 11a_tax_liabilities_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getTaxPaidFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, 'adjustment_advances',
            'adjustment_advance_item_details',
            'adjustment_advance_item_details.11a_tax_id = adjustment_advances.11a_tax_id AND adjustment_advances.11a_tax_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = adjustment_advance_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getTaxPaidAmendFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, 'amend_adjustment_advances',
            'amend_adjustment_advances_item_details',
            'amend_adjustment_advances_item_details.aaa_id = amend_adjustment_advances.aaa_id AND amend_adjustment_advances.aaa_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = amend_adjustment_advances_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getAdvTaxAmendFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, 'amend_tax_liability',
            'amend_tax_liability_item_details',
            'amend_tax_liability_item_details.atl_id = amend_tax_liability.atl_id AND amend_tax_liability.atl_id=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = amend_tax_liability_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }

    private function getB2csAmendFormData($question_id, $pk_id = 0)
    {
        $data = [];
        $dbProcess = new DbFetchnProcess();

        $query = $dbProcess->fetchDataWithJoin($question_id, 'amended_b2c_others',
            'amend_b2c_item_details',
            'amend_b2c_item_details.amend_b2c = amended_b2c_others.amend_b2c AND amended_b2c_others.amend_b2c=' . $pk_id,
            'item_details',
            'item_details.item_detail_id = amend_b2c_item_details.item_detail_id');
        $b2bResults = $query->getResult();
        $data = $dbProcess->getProcessedData($b2bResults);
        return $data;
    }



    private function get_form_data($type, $question_id, $primary_key_value)
    {
        if ($type == 'b2b') {
            return $this->getB2bFormData($question_id, $primary_key_value);
        } else if ($type == 'b2cl') {
            return $this->getB2clFormData($question_id, $primary_key_value);
        } else if ($type == 'cdnr') {
            return $this->getCdnrFormData($question_id, $primary_key_value);
        } else if ($type == 'cdnur') {
            return $this->getCdnurFormData($question_id, $primary_key_value);
        } else if ($type == 'export') {
            return $this->getExportFormData($question_id, $primary_key_value);
        } else if ($type == 'b2b-amendment') {
            return $this->getB2bAmendFormData($question_id, $primary_key_value);
        } else if ($type == 'b2cl-amendment') {
            return $this->getB2clAmendFormData($question_id, $primary_key_value);
        } else if ($type == 'export-amendment') {
            return $this->getExportAmendFormData($question_id, $primary_key_value);
        } else if ($type == 'cdnr-amendment') {
            return $this->getCdnrAmendFormData($question_id, $primary_key_value);
        } else if ($type == 'cdnur-amendment') {
            return $this->getCdnurAmendFormData($question_id, $primary_key_value);
        } else if ($type == 'b2cs') {
//            return $this->getB2csFormData($question_id, $primary_key_value);
            return null;
        } else if ($type == 'nil-rated') {
            return null;
        } else if ($type == 'advtax') {
            return $this->getAdvTaxFormData($question_id, $primary_key_value);
        } else if ($type == 'taxpaid') {
            return $this->getTaxPaidFormData($question_id, $primary_key_value);
        } else if ($type == 'hsn') {
            return null;
//            return $this->getHsnFormData($question_id, $primary_key_value);
        } else if ($type == 'document') {
            return null;
        } else if ($type == 'taxpaid-amendment') {
            return $this->getTaxPaidAmendFormData($question_id, $primary_key_value);
        } else if ($type == 'advtax-amendment') {
            return $this->getAdvTaxAmendFormData($question_id, $primary_key_value);
        } else if ($type == 'b2cs-amendment') {
            return $this->getB2csAmendFormData($question_id, $primary_key_value);
        }
    }

    private function validate_transaction($primary_data, $type, $sndData, $question_id, $company_id, $sndKey)
    {

        $errors = [];
        $ii = 0;

        if (isset($_POST['focus_key']) && !empty($_POST['focus_key'])) {
            $focus_key = $_POST['focus_key'];
            $focus_value = $_POST[$focus_key];
            // Fetch basic data based on question id and another field(eg: invoice_number)
            $dataModel = $this->get_model_instance($type);
            $dbResult = $dataModel->where(array($focus_key => $focus_value, 'question_id' => $question_id))->limit(1)->findAll();
//            echo $dataModel->db->getLastQuery();
            if (!$dbResult) {
                return $errors[] = 'The data you entered in the field is incorrect. Please recalculate and try again.';//'Invalid Entry';
            } else {
                //get primary key value
                $primary_key_value = $dataModel->getIdValue($dbResult[0]);
                // Fetch itemDetails using getFormData (Modify it to handle based on type)
                if ($primary_key_value) {
                    $info = $this->get_form_data($type, $question_id, $primary_key_value);
//                    echo $dataModel->db->getLastQuery();
                    // Compare with results
                    // If not matched return errors

                    foreach ($info as $key => $val) {
                        if (isset($primary_data[$key])) {
                            if ($primary_data[$key] != $val) {
                                $errors[] = 'Invalid value for ' . $key; //. " " . $primary_data[$key] . "!=" . $val;
//                                $errors[] = strlen(trim($primary_data[$key]));
//                                $errors[] = strlen(trim($val));
                            }
                        } else if (isset($sndData[$key])) {
                            $taxRateName = get_rate_name($key) . '%';

                            if ($primary_data['is_igst']) {
                                if ($sndData[$key]['tax_value'] != $val['tax_value']) {
                                    $errors[] = 'Invalid value for ' . $taxRateName . ' Tax Value';
                                }
                                if ($sndData[$key]['integrated_tax'] != $val['integrated_tax']) {
                                    $errors[] = 'Invalid value for ' . $taxRateName . ' Integrated tax';
                                }
                            } else {
                                if ($sndData[$key]['tax_value'] != $val['tax_value']) {
                                    $errors[] = 'Invalid value for ' . $taxRateName . ' Tax Value';
                                }
                                if ($sndData[$key]['cgst'] != $val['cgst']) {
                                    $errors[] = 'Invalid value for ' . $taxRateName . ' CGST'; //. '  ' . $sndData[$key]['cgst'] . "!= " . $val['cgst'];
                                }
                                if ($sndData[$key]['sgst'] != $val['sgst']) {
                                    $errors[] = 'Invalid value for ' . $taxRateName . ' SGST';
                                }
                                if ($sndData[$key]['cess'] != $val['cess']) {
                                    $errors[] = 'Invalid value for ' . $taxRateName . ' CESS';
                                }
                            }

                        } else {
                            if (get_rate_name($key) !== null) {
                                $taxRateName = get_rate_name($key) . '%';
                                $errors[] = 'Invalid Item Details ' . $taxRateName;
                            }
                        }
                    }
//                    if ( $ii == 11 ) $errors[] = 'Incomplete Data';
                    return $errors;
                } else {
                    return $errors[] = 'Primary Key Value Not Found';
                }
            }
        } else if ($type === 'nil-rated') {
            $dataModel = $this->get_model_instance($type);
            $dbResult = $dataModel->where(array('question_id' => $question_id))->limit(1)->findAll();
            if (!$dbResult) {
                return $errors[] = 'Invalid Entry';
            } else {
                //get primary key value
                $nil_rated = $dbResult[0];
                foreach ($primary_data as $key => $val) {
                    if (isset($nil_rated[$key])) {
                        if ($nil_rated[$key] != $val) {
                            $errors[] = 'Invalid value for ' . $key;
                        }
                    }
                }
                return $errors;
            }
        } else if ($type === 'b2cs') {
            $focus_key ='total_invoice_value';
            $focus_value = $_POST[$focus_key];
            $dataModel = $this->get_model_instance($type);
            $dbResult = $dataModel->where(array($focus_key => $focus_value, 'question_id' => $question_id))->limit(1)->findAll();

            if (!$dbResult) {
                return $errors[] = 'Invalid Entry';
            } else {
                //get primary key value
                $b2cs = $dbResult[0];
                foreach ($primary_data as $key => $val) {
                    if (isset($b2cs[$key])) {
                        if ($b2cs[$key] != $val) {
                            $errors[] = 'Invalid value for ' . $key; //. " " . $b2cs[$key] . " = " . $val ;
                        }
                    }
                }
                return $errors;
            }

        } else if ($type === 'hsn') {
            $focus_key ='hsn';
            $focus_value = $_POST[$focus_key];
            $dataModel = $this->get_model_instance($type);
            $dbResult = $dataModel->where(array($focus_key => $focus_value, 'question_id' => $question_id))->limit(1)->findAll();

            if (!$dbResult) {
                return $errors[] = 'Invalid Entry3';
            } else {
                //get primary key value
                $hsn = $dbResult[0];
                foreach ($primary_data as $key => $val) {
                    if (isset($hsn[$key])) {
                        if ($hsn[$key] != $val) {
                            $errors[] = 'Invalid value for ' . $key;
                        }
                    }
                }
                return $errors;
            }

        } else {
            return $errors[] = 'Focus Key Value Not Found';
        }
    }

    private function save_transaction($data)
    {
        $session = session();
        $idl = new ItemDetails($data);
        $results = $idl->processResult();
        $question_id = $_COOKIE['question_id'];
        $company_id = $session->get('company_id');
        $userId = $session->get('id');
        $type = $this->request->getPost('type');
        $sndKey = $this->get_snd_key($type);

        $primary_data = $this->get_primary_data($type);

        $errors = $this->validate_transaction($primary_data, $type, $results, $question_id, $company_id, $sndKey);
        if (!$errors || empty ($errors)) {
            if ( ( $type === 'nil-rated' || $type === 'b2cs' || $type === 'hsn' )  && !empty($primary_data)) {
                $arr = array(
                    'question_id' => $question_id,
                    'company_id' => $company_id,
                    'user_id' => $userId,
                    'status' => 'Not Filed',
                    $type => $primary_data,
                    $sndKey => ''
                );

                $jsonHandle = new ProcessJsonFile();
                $this->json_go($jsonHandle, $arr, $type, $primary_data, 'nil-temp', $results);
                return false;
            } else if ($results && !empty($primary_data)) {
                $arr = array(
                    'question_id' => $question_id,
                    'company_id' => $company_id,
                    'user_id' => $userId,
                    'status' => 'Not Filed',
                    $type => $primary_data,
                    $sndKey => $results
                );

                $jsonHandle = new ProcessJsonFile();
                $this->json_go($jsonHandle, $arr, $type, $primary_data, $sndKey, $results);
                return false;
            } else {
                return ['Tax entry not found'];
            }
        } else {
            return $errors;
        }


    }

    private function json_go($jsonHandle, $arr, $primaryKey, $data, $sndKey, $results)
    {
        if ($jsonHandle->is_json_exists()) {
            $jsonOp = $jsonHandle->get_current_json();
            if ($jsonOp !== '') {
                $jsonArr = json_decode($jsonOp, true);

                $jsonArr = $jsonHandle->update_json($jsonArr, $primaryKey, $data, $sndKey, $results);
                try {
                    return $jsonHandle->save_json($jsonArr);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
        } else {
            try {
                return $jsonHandle->save_json($arr);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        return null;
    }
//    private function save_b2b_transaction($data)
//    {
//        $session = session();
//        $idl = new ItemDetails($data);
//        $results = $idl->processResult();
//        $question_id = $_COOKIE['question_id'];
//        $company_id = $session->get('company_id');
//        $userId = $session->get('id');
//
//        $b2b = [
//            'receiver_gstin' => $this->request->getPost('ruid'),
//            'receiver_name' => $this->request->getPost('u_name'),
//            'invoice_number' => $this->request->getPost('inv_no'),
//            'invoice_date' => date('Y-m-d', strtotime($this->request->getPost('invdate'))),
//            'pos' => $this->request->getPost('pos'),
//            'total_invoce_value' => $this->request->getPost('invval'),
//            'supply_type' => $this->request->getPost('supplyty'),
//        ];
//
//        if ($results) {
//            $arr = array(
//                'question_id' => $question_id,
//                'company_id' => $company_id,
//                'user_id' => $userId,
//                'b2b' => $b2b,
//                'b2b_item_details' => $results
//            );
//
//            $jsonHandle = new ProcessJsonFile();
//            return $this->json_go($jsonHandle, $arr, 'b2b', $b2b, 'b2b_item_details', $results);
//        }
//        return null;
//    }


}
