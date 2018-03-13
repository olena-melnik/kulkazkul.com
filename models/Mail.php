<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 13.03.2018
 * Time: 11:23
 */

class Mail
{
    private $email;
    private $message;
    private $subject;

    private function setEmail(){
        $admin = array();
        $admin = include(ROOT.'/config/adminConfig.php');
        $this->email = $admin['email'];
    }

    public function getEmail(){
        return $this->email;
    }

    public function setMessage($message){
        $this->message = $message;
    }

    public function getMessage(){
        return $this->message;
    }

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function getSubject(){
        return $this->subject;
    }

    public function sendMail(){
        mail($this->getEmail(), $this->getSubject(), $this->getMessage());
    }
}