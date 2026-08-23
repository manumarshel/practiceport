<?php

namespace App\Libraries;

use Config\Services;

class SendMail
{
    public function sendMail($to, $subject, $msg): string
    {
        $email = Services::email();
        $email->setTo($to);
        $email->setFrom('noreply@practicepot.com', 'Practicepot');

        $email->setSubject($subject);
        $email->setMessage($msg);
        if ($email->send())
        {
            return 'Success';
        }
        else
        {
            //            print_r($data);
            return $email->printDebugger(['headers']);
        }
    }
}
