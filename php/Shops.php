<?php
/**
 * Created by PhpStorm.
 * User: Teo
 * Date: 28/11/2014
 * Time: 5:27 μμ
 */

class Shops // Tha prepei na ginei Singleton
{
    private $_Shop_ID;
    private $_ShopName;
    private $_Street;
    private $_Password;
    private $_Email;
    private $_Phone;
    private $_Offer;
    private $_Longitude;//geografiko mikos
    private $_Latitude;//geografiko platos

    public  function __construct(){

    }

    public function setShop_ID($Shop_ID){
        $this->_Shop_ID = $Shop_ID;
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

    public function setOffer($Offer){
        $this->_Offer = $Offer;
    }

    public function setLongitude($Longitude){
        $this->_Longitude = $Longitude;
    }

    public function setLatitude($Latitude){
        $this->_Latitude = $Latitude;
    }

    public function getShop_ID(){
        return $this->_Shop_ID;
    }

    public function getShopName(){
        return $this->_ShopName;
    }

    public function getStreet(){
        return $this->_Street;
    }

    public function getPassword(){
        return $this->_Password;
    }

    public function getEmail(){
        return $this->_Email;
    }

    public function getPhone(){
        return $this->_Phone;
    }

    public function getOffer(){
        return $this->_Offer;
    }

    public function getLongitude(){
        return $this->_Longitude;
    }

    public function getLatitude(){
        return $this->_Latitude;
    }

}