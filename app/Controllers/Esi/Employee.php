<?php

namespace App\Controllers\Esi;

use App\Controllers\BaseController;

class Employee extends BaseController
{
    public function __construct()
    {
    }

    public function register()
    {
        if ($this->request->getMethod() == 'post') {
            if ($_POST['ctl00$HomePageContent$rbtnlistIsregistered'] == 2) {
                $data = [
                    'with_aadhar' => 0
                ];

                session()->set($data);

                if (isset($_POST['ctl00$HomePageContent$btnContinue'])) {
                    return view('esi/register/woaadhar', $data);
                }

                return view('esi/register/step11', $data);
            }

            if ($_POST['ctl00$HomePageContent$rbtnlistIsregistered'] == 1) {
                $data['esi_alloted'] = 0;
                session()->set($data);

                if (isset($_POST['ctl00$HomePageContent$txtmobilenumber']) && $_POST['ctl00$HomePageContent$txtmobilenumber'] == "") {
                    $error['mobile_required'] = "Please enter mobile number";
                    return view('esi/register/woesicard', $error);
                }

                if (isset($_POST['ctl00$HomePageContent$txtmobilenumber']) && $_POST['ctl00$HomePageContent$txtmobilenumber'] != "") {
                    if (strlen($_POST['ctl00$HomePageContent$txtmobilenumber']) < 10) {
                        $error['mobile_length'] = "The mobile number doesn’t contain 10 digits. Please enter correct Mobile Number";
                        return view('esi/register/woesicard', $error);
                    }

                    $data['mobile'] = $_POST['ctl00$HomePageContent$txtmobilenumber'];

                    session()->set($data);

                    return view('esi/register/woesicard1', $data);
                }

                if (isset($_POST['ctl00$HomePageContent$btnContinue'])) {
                    return view('esi/register/registerform', $data);
                }

                return view('esi/register/woesicard', $data);
            }

            if ($_POST['ctl00$HomePageContent$rbtnlistIsregistered'] == 0) {
                $data = [
                    'with_aadhar' => 1
                ];

                if (isset($_POST['ctl00$HomePageContent$btnGetOtp']) && $_POST['ctl00$HomePageContent$btnGetOtp'] == "Get Otp") {
                    if (!isset($_POST['ctl00$HomePageContent$chkAadaaar'])) {
                        $error['aadhar_error'] = "Please check declaration";
                        return view('esi/register/withaadhar', $error);
                    }
                    if ($_POST['ctl00$HomePageContent$txtAadhaarNo'] == "") {
                        $error['aadhar_error'] = "Please enter Valid Aadhaar Number.";
                        return view('esi/register/withaadhar', $error);
                    }

                    $data['aadhar_no'] = $_POST['ctl00$HomePageContent$txtAadhaarNo'];

                    session()->set($data);

                    return view('esi/register/withaadharotp', $data);
                }

                if (isset($_POST['ctl00$HomePageContent$btnValidate']) && $_POST['ctl00$HomePageContent$btnValidate'] == "Validate") {
                    if ($_POST['ctl00$HomePageContent$txtAadhaarOtp'] == "") {
                        $error['aadhar_error'] = "Enter valid otp.";
                        return view('esi/register/withaadharotp', $error);
                    }

                    $data = [];

                    return view('esi/register/registerform', $data);
                }

                if (isset($_POST['ctl00$HomePageContent$ctrlTxtIPNumber']) && $_POST['ctl00$HomePageContent$ctrlTxtIPNumber'] == "") {
                    $data = [];

                    $error['ip_required'] = "Please Enter I.P.No";

                    return view('esi/register/woaadhar', $error);
                }

                if (isset($_POST['ctl00$HomePageContent$ctrlTxtIPNumber']) && $_POST['ctl00$HomePageContent$ctrlTxtIPNumber'] != "") {
                    $data = [];

                    if (!ctype_digit($_POST['ctl00$HomePageContent$ctrlTxtIPNumber'])) {
                        $error['ip_digit'] = "Please Enter Only Digits";

                        return view('esi/register/woaadhar', $error);
                    }

                    if (isset($_POST['ctl00$HomePageContent$ctrlTxtAppointmentDate']) && $_POST['ctl00$HomePageContent$ctrlTxtAppointmentDate'] == "") {
                        $data = [];

                        $data['ip_number'] = $_POST['ctl00$HomePageContent$ctrlTxtIPNumber'];

                        $data['date_required'] = "Please Enter Appointment Date";

                        return view('esi/register/woaadhar', $data);
                    }

                    if (isset($_POST['ctl00$HomePageContent$ctrlTxtAppointmentDate']) && $_POST['ctl00$HomePageContent$ctrlTxtAppointmentDate'] != "") {
                        $data['ip_number'] = $_POST['ctl00$HomePageContent$ctrlTxtIPNumber'];
                        $data['appointement_date'] = $_POST['ctl00$HomePageContent$ctrlTxtAppointmentDate'];

                        return view('esi/register/registerform', $data);
                    }
                }



                session()->set($data);

                return view('esi/register/withaadhar', $data);
            }


        }


        $data = [
            'with_aadhar' => 0
        ];

        session()->set($data);

        return view('esi/register/step1', $data);
    }

    public function registerPost()
    {
        $data = [];

        //print_r($_POST); exit;

        $data['name'] = $_POST['ctl00$HomePageContent$ctrlTextEmpName'];
        $data['fatherOrHus'] = $_POST['ctl00$HomePageContent$ctrlFatherOrHus'];
        $data['fhname'] = $_POST['ctl00$HomePageContent$ctrlTextFatherHusName'];
        $data['dob'] = $_POST['ctl00$HomePageContent$ctrlTxtIpDate'];
        $data['married'] = $_POST['ctl00$HomePageContent$ctrlRDMarried'];
        $data['gender'] = $_POST['ctl00$HomePageContent$ctrlRDMale'];
        $data['present_address1'] = $_POST['ctl00$HomePageContent$ctrlTextPresentAddress1'];
        $data['present_address2'] = $_POST['ctl00$HomePageContent$ctrlTextPresentAddress2'];
        $data['present_address3'] = $_POST['ctl00$HomePageContent$ctrlTextPresentAddress3'];
        $data['present_pin'] = $_POST['ctl00$HomePageContent$ctrlTxtPresentPinCode'];
        $data['present_state'] = $_POST['ctl00$HomePageContent$ctrlTxtPresentState'];
        $data['present_district'] = $_POST['ctl00$HomePageContent$ctrlTextPresentDistrict'];
        $data['present_phone'] = $_POST['ctl00$HomePageContent$ctrlTextPresentphoneNo'];
        $data['present_email'] = $_POST['ctl00$HomePageContent$ctrlTextPresentEmail'];

        $data['permanent_address1'] = $_POST['ctl00$HomePageContent$ctrlTextPermanentAddress1'];
        $data['permanent_address2'] = $_POST['ctl00$HomePageContent$ctrlTextPermanentAddress2'];
        $data['permanent_address3'] = $_POST['ctl00$HomePageContent$ctrlTextPermanentAddress3'];
        $data['permanent_pin'] = $_POST['ctl00$HomePageContent$ctrlTextPermanentPinCode'] ?? "";
        $data['permanent_state'] = $_POST['ctl00$HomePageContent$ctrlTextPermanentState'] ?? '';
        $data['permanent_district'] = $_POST['ctl00$HomePageContent$ctrlTextPermanentDistrict'] ?? '';
        $data['permanent_phone'] = $_POST['ctl00$HomePageContent$ctrlTextPermanentphoneNo'];
        $data['permanent_mobile'] = $_POST['ctl00$HomePageContent$ctrlTextPermanantMobileNo'];
        $data['permanent_email'] = $_POST['ctl00$HomePageContent$ctrlTextPermanentEmailID'] ?? '';

        $data['dispensary_state'] = $_POST['ctl00$HomePageContent$ddlDispensaryState'];
        $data['dispensary_district'] = $_POST['ctl00$HomePageContent$ddlDispensaryDistrict'];
        $data['dispensary_name'] = $_POST['ctl00$HomePageContent$ctrlTextDispensary'];
        $data['dispensary_address'] = $_POST['ctl00$HomePageContent$txtDispensaryAddress'];
        $data['dispensary_imp'] = $_POST['ctl00$HomePageContent$ctrlRBDispensaryIMP'];

        $data['d_dispensary_state'] = $_POST['ctl00$HomePageContent$ddldependantDispensaryState'];
        $data['d_dispensary_district'] = $_POST['ctl00$HomePageContent$ddldependantDispensaryDistrict'];
        $data['d_dispensary_name'] = $_POST['ctl00$HomePageContent$ddldependantdispensary'];
        $data['d_dispensary_address'] = $_POST['ctl00$HomePageContent$txtdependantdispaddress'];
        $data['d_dispensary_imp'] = $_POST['ctl00$HomePageContent$ctrlRBDependantDispensaryIMP'];

        $data['appointment_date'] = $_POST['ctl00$HomePageContent$ctrlDIDateOfAppointmentDy'];
        $data['prev_employer'] = $_POST['ctl00$HomePageContent$ctrlRDPrevEmployer'];
        $data['language'] = $_POST['ctl00$HomePageContent$ddllanguage'];


        return view('esi/register/success', $data);
    }

    public function enterNomineeDetails()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $nominee = [
                'name' => $_POST['ctl00$HomePageContent$ctrlTextUserName'],
                'relation' => $_POST['ctl00$HomePageContent$RelationShipWithIp'],
                'address1' => $_POST['ctl00$HomePageContent$ctrlTextAddress1'],
                'address2' => $_POST['ctl00$HomePageContent$ctrlTextAddress2'],
                'address3' => $_POST['ctl00$HomePageContent$ctrlTextAddress3'],
                'state' => $_POST['ctl00$HomePageContent$States'],
                'district' => $_POST['ctl00$HomePageContent$Districts'],
                'pin' => $_POST['ctl00$HomePageContent$ctrlTextPin'],
                'mobile' => $_POST['ctl00$HomePageContent$ctrlTextMobileNumber']
            ];

            $data['nominee'] = $nominee;

            session()->set($data);

            $data['nominee_status'] = "success";

            return view('esi/register/nominee', $data);
        }

        return view('esi/register/nominee', $data);
    }

    public function enterFamilyDetails()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $family = [
                'name' => $_POST['ctl00$HomePageContent$txtName'],
                'dob' => $_POST['ctl00$HomePageContent$CtrlDOB'],
                'relation' => $_POST['ctl00$HomePageContent$CtrlRelation'],
                'residing' => $_POST['ctl00$HomePageContent$ctrlRDIpDisable'],
                'state' => $_POST['ctl00$HomePageContent$ctrlTextPermanentState'] ?? '',
                'district' => $_POST['ctl00$HomePageContent$ctrlTextPermanentDistrict'] ?? ''
            ];
           // session()->remove('family');

            $data['family'] = session('family') ?? [];

            $data['family'][] = $family;

            session()->set($data);

            return view('esi/register/family1', $data);
        }


        return view('esi/register/family', $data);
    }

    public function enterBankDetails()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            //print_r($_POST); exit;

            if(isset($_POST['ctl00$HomePageContent$btnIFSCcode']) && $_POST['ctl00$HomePageContent$btnIFSCcode'] == "Search") {
                $data['bank'] = [
                    'ifsc' => $_POST['ctl00$HomePageContent$txtIFSCcode']
                ];

                session()->set($data);

                return view('esi/register/bank1', $data);
            }

            if (isset($_POST['ctl00$HomePageContent$btnsubmit']) && $_POST['ctl00$HomePageContent$btnsubmit'] == "Submit") {

                $data['bank']['account_number'] = $_POST['ctl00$HomePageContent$txtacc_number'];
                $data['bank']['account_type'] = $_POST['ctl00$HomePageContent$ddlAccountType'];
                $data['bank']['ifsc'] = $_POST['ctl00$HomePageContent$txtIFSCcode'];

                $data['bank']['micr_code'] = $_POST['ctl00$HomePageContent$txtmicr'];

                $data['bank']['success'] = 1;


                session()->set($data);

                return view('esi/register/bank1', $data);
            }
        }

        return view('esi/register/bank', $data);
    }
}
