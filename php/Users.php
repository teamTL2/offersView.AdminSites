<?php
/**
 * Created by PhpStorm.
 * User: Teo
 * Date: 28/11/2014
 * Time: 6:10 μμ
 */

class Users{
    private $_Username;
    private $_Password;

     public function __construct(){

    }

    public function setEmail($Username){
        $this->_Username = $Username;
    }

    public function setPassword($Password){
        $this->_Password = $Password;
    }

    public function getEmail(){
        return $this->_Username;
    }

    public function getPassword(){
        return $this->_Password;
    }
}