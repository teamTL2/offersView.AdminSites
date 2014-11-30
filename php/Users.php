<?php
/**
 * Created by PhpStorm.
 * User: Teo
 * Date: 28/11/2014
 * Time: 6:10 μμ
 */

class Users{
    private $_Email;
    private $_Password;

    function __construct(){

    }

    public function setEmail($Email){
        $this->_Email = $Email;
    }

    public function setPassword($Password){
        $this->_Password = $Password;
    }

    public function getEmail(){
        return _Email;
    }

    public function getPassword(){
        return _Password;
    }
}