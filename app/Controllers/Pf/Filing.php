<?php

namespace App\Controllers\Pf;

use App\Controllers\BaseController;
use Dompdf\Dompdf;
use Dompdf\Options;

class Filing extends BaseController
{
    public function __construct()
    {
    }

    public function ecrfiling()
    {


        $data = [];

        return view('pf/filing/index', $data);
    }

    public function fileupload()
    {
        $data = [];

        return view('pf/filing/step1', $data);
    }

    public function ecrview()
    {
        $data = [];

        $data['wageMonth'] = $_POST['wageMonth1'];
        $data['salaryDate'] = $_POST['salaryDate1'];
        $data['secrFileType'] = $_POST['ecrFileType'];
        $data['contributionRate'] = $_POST['contributionRate'];
        $data['contributionRateReasonCode'] = $_POST['contributionRateReasonCode'];
        $data['ecrFileUploadRemarks'] = $_POST['ecrFileUploadRemarks'];

        $randomNumber = mt_rand(100000000, 999999999);

// Append "00000" to the number
        $trrn = "00000" . $randomNumber;

        setcookie("wageMonth", $this->request->getPost('wageMonth1'), time() + 3600, "/");
        setcookie("salaryDate", $_POST['salaryDate1'], time() + 3600, "/");
        setcookie("trrn", $trrn, time() + 3600, "/");
        setcookie("ecrFileType", $_POST['ecrFileType'], time() + 3600, "/");
        setcookie("contributionRate", $_POST['contributionRate'], time() + 3600, "/");
        setcookie("contributionRateReasonCode", $_POST['contributionRateReasonCode'], time() + 3600, "/");
        setcookie("ecrFileUploadRemarks", $_POST['ecrFileUploadRemarks'], time() + 3600, "/");

        $data['trrn'] = $trrn;

        //  print_r($data);


        $file = $this->request->getFile('multiFile');  // 'txtfile' is the input name


        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Move the file to the writable/uploads folder
            $filePath = FCPATH . 'public/uploads/' . $file->getName();
            $file->move(FCPATH . 'public/uploads/');


            $grossWage = 0;
            $epf_ee = 0;
            $epf_er = 0;
            $epf_ec = 0;
            $total=0;
            $chrge1=1552;
            
            $chrge2=1554;

            // Check if file exists
            if (file_exists($filePath)) {
                // Open the file in read mode
                $file = fopen($filePath, 'r');

                if ($file) {


                    while (($line = fgets($file)) !== false) {

                        $line = trim($line);


                        $datas = explode('#~#', $line);

                        if (isset($datas[2]) && is_numeric($datas[2])) {
                            $grossWage += $datas[2];
                        }
                        if (isset($datas[6]) && is_numeric($datas[6])) {
                            $epf_ee += $datas[6];
                        }
                        if (isset($datas[8]) && is_numeric($datas[6])) {
                            $epf_er += $datas[8];
                        }
                        if (isset($datas[7]) && is_numeric($datas[7])) {
                            $epf_ec += $datas[7];
                        }

                      
                       // $net_total = $total + 1554;

                    }
                      
                      
                       $chrge=round(($grossWage*.5 )/100);
                       $total = $chrge + $epf_ee + $epf_er + $epf_ec;
                      $sub_total= $chrge+ $epf_ee + $epf_er + $epf_ec;
                       $net_total=$sub_total+$chrge;
                        //echo $grossWage." ".$epf_ee." ".$epf_er." ".$epf_ec; exit;
                     setcookie("grossWage", $grossWage, time() + 3600, "/");
                    setcookie("epf_ee", $epf_ee, time() + 3600, "/");
                   setcookie("epf_er", $epf_er, time() + 3600, "/");
                   setcookie("eps_c", $epf_ec, time() + 3600, "/");
                   setcookie("total", $total, time() + 3600, "/");
                   setcookie("chrage1", $chrge, time() + 3600, "/");
                   setcookie("sub_total", $sub_total, time() + 3600, "/");
                   setcookie("net_total", $net_total, time() + 3600, "/");

                    // Close the file
                    fclose($file);

                    // Output the total sum

                } else {
                    echo 'Could not open the file!'; exit;
                }
            } else {
                echo 'File not found!'; exit;
            }


        } else {
            // Handle errors
            echo 'File upload failed!'; exit;
        } 

        return view('pf/filing/step2', $data);
    }

    public function ecrverify()
    {
        $data = [];

        //  print_r($_SESSION['ecrData']);exit;


        return view('pf/filing/step3', $data);
    }

    public function prepare_challan()
    {
        $data = [];
        return view('pf/filing/challan-summary', $data); // summary
    }

    public function generate_challan()
    {
        $data = [];
        return view('pf/filing/challan', $data); // summary
    }

    public function finalise_challan()
    {
        $data = [];
        return view('pf/filing/finalise', $data); // summary
    }


    public function pay_challan()
    {
        $data = [];
        return view('pf/filing/pay', $data);
    }
     public function generate_receipt()
    {
        $data = [];
        
        
        return view('pf/filing/receipt1', $data);
    }

    public function offlinePayment()
    {
        $data = [];
        
        return view('pf/filing/pay-success', $data);
    }


}
