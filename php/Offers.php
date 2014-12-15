<?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 30/11/2014
 * Time: 11:12 πμ
 */
include('Shops.php');
class Offers extends Shops {
    private $_Offer_ID;
    private $_Offer;
    private $_Shop_ID;

    public function __construct(){

    }

    public function setOffer_ID($Offer_ID){
        $this->_Offer_ID = $Offer_ID;
    }

    public function setOffer($Offer){
        $this->_Offer = $Offer;
    }

    public function takeShop_ID(){
        $this->_Shop_ID = $this->getShop_ID();
    }

    public function getOffer_ID(){
        return $this->_Offer_ID;
    }

    public function getOffer(){
        return $this->_Offer;
    }

    public function returnShop_ID(){
        return $this->_Shop_ID;
    }

} 