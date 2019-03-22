<?php

/**
 * Created by PhpStorm.
 * User: JackYang500
 * Date: 3/22/2019
 * Time: 2:05 PM
 */
interface Mail
{
    public function send();
}

class Email implements Mail
{

    public function send()
    {
        echo "email";
        // TODO: Implement send() method.
    }
}

class Sms implements Mail
{

    public function send()
    {
        echo "sms";
        // TODO: Implement send() method.
    }
}

class Register
{
    private $mail;

    public function __construct(Mail $mail)
    {
        //通过构造函数注入
        $this->mail=$mail;
    }
    public function register()
    {
        $this->mail->send();
    }
}

$sms=new Sms();
$email=new Email();
$register=new Register($email);
$register->register();