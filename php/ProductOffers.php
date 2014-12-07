<?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 30/11/2014
 * Time: 11:12 πμ
 */

class ProductOffers {
    private $_IDProductOffer;
    private $_ProductName;
    private $_Offer;
    private $_StartingDate;
    private $_ExpirationDate;

    public function __construct(){

    }

    public function setIDProductOffer($IDProductOffer){
        $this->_IDProductOffer = $IDProductOffer;
    }

    public function setProductName($ProductName){
        $this->_ProductName = $ProductName;
    }

    public function setOffer($Offer){
        $this->_Offer = $Offer;
    }

    public function setStartingData($StartingDate){
        $this->_StartingDate = $StartingDate;
    }

    public function setExpirationDate($ExpirationDate){
        $this->_ExpirationDate = $ExpirationDate;
    }

    public function getIDProductOffer(){
        return $this->_IDProductOffer;
    }

    public function getProductName(){
        return $this->_ProductName;
    }

    public function getOffer(){
        return  $this->_Offer;
    }

    public function getStartingDate(){
        return  $this->_StartingDate;
    }

    public function getExpirationDate(){
        return  $this->_ExpirationDate;
    }

} 