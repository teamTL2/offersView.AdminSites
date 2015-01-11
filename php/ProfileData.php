<?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 4/12/2014
 * Time: 3:38 μμ
 */
session_start();
include('DBConnection.php');
include('Offers.php');
class ProfileData
{
    private $_connection;
    private $_Offer;
    public $stmtShopID;
    public $stmt;

    public function __construct(){
        $this->_connection = new DBConnection();
        $this->_Offer = new Offers();
    }

    /*
     * bazei times sto offer mas(to Shop_ID to pernei mesw tou tis klasis Shops).
     */
    public function setOffer(){
        $this->_Offer->setOffer($_POST['Offer']);
        $this->_Offer->takeShop_ID();
    }

    /*
     * bazei to epilegmeno Shop_ID toy pinaka shops ston pinaka offers.
     */
    public function mergeShopID(){
        if(!$_POST['Offer']){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Please enter your Offer')
                    window.location.href='http://offesview.bugs3.com/profile.php';
                    </SCRIPT>");
            exit;
        }else {
            $stmtShopID = $this->_connection->dbConnect()->prepare("INSERT INTO offers (Shop_ID) SELECT Shop_ID FROM shops WHERE ShopName = ?");
            $stmtShopID->bind_param('s', $_POST['ShopName']);
            $stmtShopID->execute();
            $stmtShopID->close();
            $this->_connection->dbClose();
        }
    }

    /*
     * pernei to MAX Offer_ID pou dimiourgithike apo to proigoumeno erwtima.
     */
    public function takeOffer_ID(){
        $stmt = $this->_connection->dbConnect()->prepare("SELECT MAX(Offer_ID) FROM offers");
        $stmt->execute();
        $stmt->bind_result($Offer_ID);
        while($stmt->fetch()){
            $this->_Offer->setOffer_ID($Offer_ID);
        }
        $stmt->close();
        $this->_connection->dbClose();
    }

    /*
     * dinei to offer mas sto pedio tou pinaka offers.
     */
    public function insertOffer(){
        $stmt = $this->_connection->dbConnect()->prepare("UPDATE offers SET Offer = ? WHERE Shop_ID = ? AND Offer_ID = ?");
        $stmt->bind_param('sis',$_POST['Offer'], $_SESSION['Shop_ID'], $this->_Offer->getOffer_ID());
        $stmt->execute();
        $stmt->close();
        $this->_connection->dbClose();
        //header("Location: http://localhost/offersView.AdminSites/profile.php");
        header("Location: http://offesview.bugs3.com/profile.php");
    }
    
    /*
     * 3ana-settarei ta session me ta kainourgia dedomena pou ebale o xristis(shop).
     */
    public function setUpdatedProfileData(){
        $_SESSION['ShopName'] = $_POST['ShopName'];
        $_SESSION['Street'] = $_POST['Street'];
        $_SESSION['Password'] = $_POST['Password'];
        $_SESSION['Email'] = $_POST['Email'];
        $_SESSION['Phone'] = $_POST['Phone'];
        $_SESSION['Longitude'] = $_POST['Longitude'];
        $_SESSION['Latitude'] = $_POST['Latitude'];
    }

    /*
     * kanei update ta stoixeia tou shop stin basi.
     */
    public function updateProfileData(){
        if (!$_POST['ShopName'] || !$_POST['Street'] || !$_POST['Password'] || !$_POST['Email'] || !$_POST['Phone']
            || !$_POST['Longitude'] || !$_POST['Latitude']) {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Please enter all your Shop data in the fields and choose your shop location.')
                        window.location.href='http://offesview.bugs3.com/profile.php';
                        </SCRIPT>");
                exit;
        }else{
            $stmt = $this->_connection->dbConnect()->prepare("UPDATE shops SET ShopName = ?, Street = ?, Password = ? , Email = ?, Phone = ?, Longitude = ?, Latitude = ? WHERE Shop_ID = ?");
            $stmt->bind_param('ssssiddi', $_SESSION['ShopName'], $_SESSION['Street'], $_SESSION['Password'], $_SESSION['Email'], $_SESSION['Phone'], $_SESSION['Longitude'],
                $_SESSION['Latitude'], $_SESSION['Shop_ID']);
            $stmt->execute();
            $stmt->close();
            $this->_connection->dbClose();
            //header("Location: http://localhost/offersView.AdminSites/profile.php");
            header("Location: http://offesview.bugs3.com/profile.php");
        }
    }

    /*
     * pernei ta offers enos sigekrimenou shop(me basi to Shop_ID tou) gia tin offersList.
     */
    public function takeOffers(){
        $offerList = array();

        $stmt = $this->_connection->dbConnect()->prepare("SELECT Offer FROM offers WHERE Shop_ID = ? ");
        $stmt->bind_param('i',$this->_Offer->getShop_ID());
        $stmt->execute();
        $stmt->bind_result($offers);
        while($row = $stmt->fetch()){
            $this->_Offer->setOffer($offers);
            $offerList[] = $row;
        }
        echo json_encode($offerList);
        $stmt->close();
        $this->_connection->dbClose();
    }
}
/*
 * me to isset elenxei an pataei to koumpi me name = Insert h to koumpi me name = Update
 * gia na tre3ei tis antistoixes sinartiseis.
 */
$updateProfile = new ProfileData();
if($_POST){
    if(isset($_POST['Insert'])){
        $updateProfile->setOffer();
        $updateProfile->mergeShopID();
        $updateProfile->takeOffer_ID();
        $updateProfile->insertOffer();
        $updateProfile->takeOffers();
    }elseif(isset($_POST['Update'])){
        $updateProfile->setUpdatedProfileData();
        $updateProfile->updateProfileData();
    }
}
