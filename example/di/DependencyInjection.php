<?php

/**
 * Created by PhpStorm.
 * User: AndyYoungDev
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

$sms=new Sms();
$email=new Email();

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


$register=new Register($email);
$register=new Register($sms);
$register->register();

class Register2
{
    private $mail;

    public function setMail(Mail $mail)
    {
        //通过构造函数注入
        $this->mail=$mail;
    }
    public function register()
    {
        $this->mail->send();
    }
}


//1.构造函数
$register=new Register($email);
//2.setter
$register=new Register2();
$register->setMail($sms);




$register->register();

