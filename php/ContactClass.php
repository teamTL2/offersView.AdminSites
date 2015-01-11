<?php
/**
 * Created by PhpStorm.
 * User: wolf
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
        $to = "theodamia@gmail.com";
        $subject = "OffersView-Email";
        $message = $_POST['messageArea'];
        $fromEmail = $_POST['fromEmail'];
        //$headers = 'From: '.$_POST['ShopName'];
        mail($to,$subject,$message, $fromEmail);
    }
}

$newEmail = new ContactClass();
$newEmail->sendEmail();
header("Location: http://offesview.bugs3.com/contact.php");