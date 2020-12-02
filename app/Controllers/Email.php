<?php

namespace App\Controllers;

class Email extends BaseController
{

    public function index()
    {
        $to = 'abdul.musakir@gmail.com';
        $subject = 'JUdul';
        $message = 'Tes Pesan';

        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('sahabatdishub.gorontalo@gmail.com', 'SAHABAT');

        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {
            echo 'Email successfully sent';
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
}
