<?php


namespace App\Controllers\Sim\Dash;


use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;
use App\Libraries\ProcessJsonFile;
use App\Models\sim\CompanyModel;
use App\Models\VideoModel;

class Dashboard extends BaseController
{
    private $crud;

    public function __construct()
    {
        $this->crud = new GroceryCrud();
        $this->crud->setTheme('enlink');
    }

    public function index()
    {
        $data = [];
        $question_id = $this->request->uri->getSegment(3);
        $company_id = session()->get('company_id');
        $cmpny = new CompanyModel();
        $data = $cmpny->find($company_id);
        $data['ip_address'] = $this->request->getIPAddress();
        $vm = new VideoModel();
        $helpVideo = $vm->getVideo('slot3');
        $data['slot3'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot3'] = $helpVideo[0]['url'];
        }
        return view('sim/dash/dashboard', $data);
    }

    public function gstr1(): string
    {
        $company_id = session()->get('company_id');
        $cmpny = new CompanyModel();
        $data = $cmpny->find($company_id);

        $data['summary'] = $this->get_gstr_summary();

        $vm = new VideoModel();
        $helpVideo = $vm->getVideo('slot7');
        $data['slot7'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot7'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot8');
        $data['slot8'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot8'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot9');
        $data['slot9'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot9'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot10');
        $data['slot10'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot10'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot11');
        $data['slot11'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot11'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot12');
        $data['slot12'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot12'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot13');
        $data['slot13'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot13'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot14');
        $data['slot14'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot14'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot15');
        $data['slot15'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot15'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot16');
        $data['slot16'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot16'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot17');
        $data['slot17'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot17'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot18');
        $data['slot18'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot18'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot19');
        $data['slot19'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot19'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot20');
        $data['slot20'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot20'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot21');
        $data['slot21'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot21'] = $helpVideo[0]['url'];
        }

        $helpVideo = $vm->getVideo('slot22');
        $data['slot22'] = '#';
        if (count($helpVideo) > 0) {
            $data['slot22'] = $helpVideo[0]['url'];
        }

        return view('sim/dash/gstr1', $data);
    }

    public function get_gstr_summary()
    {
        $jsonHandle = new ProcessJsonFile();
        $arr = $jsonHandle->get_json_array();

        $data = array();
        $data['b2b'] = $this->get_indiviudal_summary($jsonHandle, $arr, 'b2b', 'b2b_item_details');
        $data['b2cl'] = $this->get_indiviudal_summary($jsonHandle, $arr, 'b2cl', 'b2cl_item_details');
        $data['b2cs'] = $this->get_indiviudal_summary($jsonHandle, $arr, 'b2cs', '');
        return $data;
    }

    public function get_indiviudal_summary($jsonHandle, $arr, $primary, $secondary)
    {
        $data = array();
        $data = array();
        $data['total_value'] = 0;
        $data['tax_value'] = 0;
        $data['tax_liability'] = 0;
        if ($arr && $primary && $secondary) {
            if (isset($arr[$primary]) && count($arr[$primary]) > 0) {
                $main = $jsonHandle->get_current_page_data($primary, true);//$arr[$primary];
                $total_invoice_value = 0;
                foreach ($main as $ind) {
                    if (isset($ind['total_invoce_value'])) {
                        $total_invoice_value += $ind['total_invoce_value'];
                    } else if (isset($ind['total_invoice_value'])) {
                        $total_invoice_value += $ind['total_invoice_value'];
                    }
                }

                $data['total_value'] = $total_invoice_value;
            }

            if (isset($arr[$secondary]) && count($arr[$secondary]) > 0) {
                $main = $jsonHandle->get_second_page_data($secondary);//$arr[$secondary];
//        echo "<pre>";
//        var_dump($main['eitnnPercent']);
//        echo "</pre>";
//                echo "<pre>";
//                var_dump($main);
//                echo "</pre>";
                $tax_value = 0;
                $tax_liability = 0;
                foreach ($main as $indArr) {

                    if ($indArr && is_array($indArr)) {
                        $flag = 0;
                        foreach ($indArr as $ind) {

                            if (isset($ind['tax_value'])) {
                                $tax_value += $ind['tax_value'];
                                $tax_liability += $ind['integrated_tax'] + $ind['cgst'] + $ind['sgst'];
                            } else if (!is_array($ind) && $flag == 0) {
//                                echo "<pre>";
//                                var_dump($indArr);
//                                echo "</pre>";
                                $flag = 1;
                                $tax_value += $indArr['tax_value'];
                                $tax_liability += $indArr['integrated_tax'] + $indArr['cgst'] + $indArr['sgst'];
                            }
                        }
                    }
                    $data['tax_value'] = $tax_value;
                    $data['tax_liability'] = $tax_liability;
                }
//
            }
        } else if ( $primary == 'b2cs' ) {
            if (isset($arr[$primary]) && count($arr[$primary]) > 0) {
                $main = $jsonHandle->get_current_page_data($primary, true);
                $total_invoice_value = 0;
                foreach ($main as $ind) {
                    if (isset($ind['total_invoce_value'])) {
                        $total_invoice_value += $ind['total_invoce_value'];
                    } else if (isset($ind['total_invoice_value'])) {
                        $total_invoice_value += $ind['total_invoice_value'];
                    }
                }

                $data['total_value'] = $total_invoice_value;
            }
        }

        return $data;

    }
}
