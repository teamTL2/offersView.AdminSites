<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/12/2014
 * Time: 8:08 μμ
 */
class ContactClass {
    private $to;
    private $subject;
    private $message;
    private $fromEmail;

    public function __construct(){

    }

    public function sendEmail(){
        if(!$_POST['fromEmail']){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Please enter your Email')
                    window.location.href='http://offesview.bugs3.com/contact.php';
                    </SCRIPT>");
            exit;}
        $to = "suzy_tweety@live.com";
        $subject = "OffersView-Email";
        $message = $_POST['messageArea'];
        $fromEmail = $_POST['fromEmail'];
        $headers = 'From: '.$fromEmail ;
         if (mail($to,$subject,$message, $headers,'-f'.$fromEmail)){
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Mail sent successfully.We will contact you as soon as possible.Thank you')
                    window.location.href='http://offesview.bugs3.com/contact.php';
                    </SCRIPT>");
             exit;}
        else{echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('your mesage dont sent')
                    window.location.href='http://offesview.bugs3.com/contact.php';
                    </SCRIPT>");
            exit;
         }
    }
}

$newEmail = new ContactClass();
$newEmail->sendEmail();
header("Location: http://offesview.bugs3.com/contact.php");