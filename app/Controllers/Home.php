<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    public function index()
    {
        $data = [];
        $db = Database::connect();
        $builder = $db->table('packages');
        $builder->select('*');
        $builder->join('courses', 'packages.course_id = courses.course_id');
        $query = $builder->get();

        $data['packages'] = $query->getResultArray();
        return view('landing_page', $data);
    }
    
    
   
     public function dashboard()
    {
        $data = [];
        $db = Database::connect();
        $builder = $db->table('packages');
        $builder->select('*');
        $builder->join('courses', 'packages.course_id = courses.course_id');
        $query = $builder->get();

        $data['packages'] = $query->getResultArray();
        return view('home/dashboard', $data);
    }
     public function contact()
    {
        $data = []; 
        
        return view('contact', $data);
    }
    public function pricing()
    {
        $data = []; 
         $db = Database::connect();
        $builder = $db->table('mst_packages');
        $builder->select('*');
        $builder->join('courses', 'mst_packages.course_id = courses.course_id');
         $builder->where('status', 1);
         $builder->where('active', 1);
        $query = $builder->get();

        $data['packages'] = $query->getResultArray();
      //   print_r($data['packages']); exit;
        return view('pricing', $data);
    }
    
    
    public function sendmail()
{ 
    $name    =$_POST['name']; 
    $email   =$_POST['email'];  
    $phone   =$_POST['phone'];  
    $subject =$_POST['subject'];  
    

    // Validation
    if (!$name || !$email || !$subject  ) {
        return redirect()->back()->with('error', 'Please fill all required fields');
    }

    // Email Service
    $emailService = \Config\Services::email();

    $emailService->setTo('geethuag2015@gmail.com'); // 🔴 CHANGE THIS
    $emailService->setFrom($email, $name);
    $emailService->setSubject("Enquiry from website");

    $emailBody = "
        Name: $name <br>
        Email: $email <br>
        Phone: $phone <br><br>
        Subject:<br> $subject
    ";

    $emailService->setMessage($emailBody);

    if ($emailService->send()) {
        return redirect()->back()->with('success', 'Message sent successfully!');
    } else {
        return redirect()->back()->with('error', 'Failed to send message.');
    }
}
}
