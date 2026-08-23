<?php


namespace App\Controllers\Admin;


use App\Models\CompanyModel;
use CodeIgniter\Model;
use Config\Services;

class Companies extends \App\Controllers\BaseController
{

    public function index(): string
    {
        $data = [];
        $company = new CompanyModel();
        $data['companies'] = $company->findAll();
        return view('admin/companies', $data);
    }

    /**
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     */
    public function add_company()
    {
        $data = [];
        helper(['form', 'common']);
        if ($this->request->getMethod() == 'post') {
            $company_id = $this->request->uri->getSegment(3);
            $validation =  Services::validation();
            $validation->setRules([
                'name' => ['label' => 'Company Name', 'rules' => 'required'],
                'gst_number' => ['label' => 'GST Number', 'rules' => 'required'],
                'legal_name' => ['label' => 'Legal Name', 'rules' => 'required'],
                'username' => ['label' => 'Username', 'rules' => 'required'],
                'password' => ['label' => 'Password', 'rules' => 'required'],
                'trade_name' => ['label' => 'Trade Name', 'rules' => 'required'],
                'signatory' => ['label' => 'Signatory', 'rules' => 'required'],
                'state' => ['label' => 'State', 'rules' => 'required'],
                'pincode' => ['label' => 'Pincode', 'rules' => 'required'],
                'email' => ['label' => 'Email', 'rules' => 'required'],
            ]);

            if (! $this->validate($validation->getRules())) {
                $data['validation'] = $this->validator;
                print_r($validation->listErrors()); exit;
                return view('admin/add_company', $data);
            }else {
                $company = new CompanyModel();
                $formData = [
                    'name' => $_POST['name'],
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'gst_number' => $_POST['gst_number'],
                    'legal_name' => $_POST['legal_name'],
                    'trade_name' => $_POST['trade_name'],
                    'signatory' => $_POST['signatory'],
                    'return_period' => $_POST['return_period'],
                    'gstr1_due_date' => $_POST['gstr1_due_date'],
                    'gstr3b_due_date' => $_POST['gstr3b_due_date'],
                    'gstr1_return_period1' => $_POST['gstr1_return_period1'],
                    'gstr1_return_period1_status' => $_POST['gstr1_return_period1_status'],
                    'gstr1_return_period2' => $_POST['gstr1_return_period2'],
                    'gstr1_return_period2_status' => $_POST['gstr1_return_period2_status'],
                    'gstr1_return_period3' => $_POST['gstr1_return_period3'],
                    'gstr1_return_period3_status' => $_POST['gstr1_return_period3_status'],
                    'gstr1_return_period4' => $_POST['gstr1_return_period4'],
                    'gstr1_return_period4_status' => $_POST['gstr1_return_period4_status'],
                    'gstr1_return_period5' => $_POST['gstr1_return_period5'],
                    'gstr1_return_period5_status' => $_POST['gstr1_return_period5_status'],
                    'gstr3b_return_period1' => $_POST['gstr3b_return_period1'],
                    'gstr3b_return_period1_status' => $_POST['gstr3b_return_period1_status'],
                    'gstr3b_return_period2' => $_POST['gstr3b_return_period2'],
                    'gstr3b_return_period2_status' => $_POST['gstr3b_return_period2_status'],
                    'gstr3b_return_period3' => $_POST['gstr3b_return_period3'],
                    'gstr3b_return_period3_status' => $_POST['gstr3b_return_period3_status'],
                    'gstr3b_return_period4' => $_POST['gstr3b_return_period4'],
                    'gstr3b_return_period4_status' => $_POST['gstr3b_return_period4_status'],
                    'gstr3b_return_period5' => $_POST['gstr3b_return_period5'],
                    'gstr3b_return_period5_status' => $_POST['gstr3b_return_period5_status'],
                    'financial_year' => $_POST['financial_year'] ?? '',
                    'quarter' => $_POST['quarter'] ?? '',
                    'period' => $_POST['period'] ?? '',
                    'status' => $_POST['status'] ?? '',
                    'address1' => $_POST['address1'],
                    'address2' => $_POST['address2'],
                    'city' => $_POST['city'],
                    'state' => $_POST['state'],
                    'pincode' => $_POST['pincode'],
                    'tan' => $_POST['tan'],
                    'pan' => $_POST['pan'],
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email'],
                ];

                try {

                    if (!$company_id) {
                        $company->insert($formData);
                        $company_id = $company->getInsertID();
                    } else {
                        $company->update($company_id, $formData);
                    }

//                    $company->save($formData);
                    return redirect()->to('admin/companies');
                } catch (\ReflectionException $e) {
                    echo $e->getMessage();
                }

            }
        }
        else if ($this->request->getMethod() == 'get') {
            $company_id = $this->request->uri->getSegment(3);

            if ($company_id) {
                $cmpny = new CompanyModel();
                $company = $cmpny->find($company_id);
                $data['company_'] = $company;
            }
            $data['financial_period_list'] = get_financial_period();
            $data['quarter_list'] = get_financial_quarter_list();

            return view('admin/add_company', $data);
        } else {
            return redirect()->to('admin/companies');
        }
    }
}
