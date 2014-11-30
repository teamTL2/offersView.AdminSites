<?php
/**
 * Created by PhpStorm.
 * User: Teo
 * Date: 28/11/2014
 * Time: 5:27 μμ
 */

class Shops
{
    private $_ShopName;
    private $_Street;
    private $_Password;
    private $_Email;
    private $_Phone;
    private $_Longitude;//geografiko mikos
    private $_Latitude;//geografiko platos

    function __construct(){

    }

    public function setShopName($ShopName){
        $this->_ShopName = $ShopName;
    }

    public function setStreet($Street){
        $this->_Street = $Street;
    }

    public function setPassword($Password){
        $this->_Password = $Password;
    }

    public function setEmail($Email){
        $this->_Email = $Email;
    }

    public function setPhone($Phone){
        $this->_Phone = $Phone;
    }

    public function setLongitude($Longitude){
        $this->_Longitude = $Longitude;
    }

    public function setLatitude($Latitude){
        $this->_Latitude = $Latitude;
    }

    public function getShopName(){
        return _ShopName;
    }

    public function getStreet(){
        return _Street;
    }

    public function getPassword(){
        return _Password;
    }

    public function getEmail(){
        return _Email;
    }

    public function getPhone(){
        return _Phone;
    }

    public function getLongitude(){
        return _Longitude;
    }

    public function getLatitude(){
        return _Latitude;
    }

}