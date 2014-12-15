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
        $headers = "From:" .$_POST['fromEmail'];
        mail($to,$subject,$message, $headers);
    }
}
$newEmail = new ContactClass();
$newEmail->sendEmail();