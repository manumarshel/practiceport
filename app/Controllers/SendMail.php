<?php
//
//namespace App\Controllers;
//
//class SendMail extends BaseController
//{
//    public function sendMail($to, $subject, $msg) {
//        $to = $this->request->getVar($to);
//        $subject = $this->request->getVar($subject);
//        $message = $this->request->getVar($msg);
//
//        $email = \Config\Services::email();
//        $email->setTo($to);
//        $email->setFrom('noreply@practicepot.com', 'Practicepot');
//
//        $email->setSubject($subject);
//        $email->setMessage($message);
//        if ($email->send())
//        {
//            return 'Success';
//        }
//        else
//        {
//            //            print_r($data);
//            return $email->printDebugger(['headers']);
//        }
//    }
//}
