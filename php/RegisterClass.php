<?php
session_start();
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 3/12/2014
 * Time: 11:15 πμ
 */
require_once('DBConnection.php');
include ('Shops.php');

class RegisterClass{
    private $_connection;
    public $stmt;
    public $shop;

    public function __construct(){
        $this->_connection = new DBConnection();
        $this->shop = new Shops();
    }

    /*
     * bazei times stous setters tou shop(to arxikopiei).
     */
    public function setDataShop(){
        $this->shop->setShopName($_POST['ShopName']);
        $this->shop->setStreet($_POST['Street']);
        $this->shop->setPassword($_POST['Password']);
        $this->shop->setEmail($_POST['Email']);
        $this->shop->setPhone($_POST['Phone']);
        $this->shop->setLongitude($_POST['Longitude']);
        $this->shop->setLatitude($_POST['Latitude']);
    }

    /*
     * pernei to Shop_ID tou shop pou dimiourgithike(einai AUTO_ICREMENT stin basi).
     */
    public function takeShop_ID(){
        $stmt = $this->_connection->dbConnect()->prepare("SELECT Shop_ID FROM shops WHERE ShopName = ?");
        $stmt->bind_param('s',$_POST['ShopName']);
        $stmt->execute();
        $stmt->bind_result($Shop_ID);
        while($stmt->fetch()){
            $this->shop->setShop_ID($Shop_ID);
        }
        $stmt->close();
        $this->_connection->dbClose();
    }

    /*
     * apo thikeuei se SESSION tis times pou exei to shop mas.
     */
    public function  registerProfile(){
        $_SESSION['Shop_ID'] = $this->shop->getShop_ID();
        $_SESSION['ShopName'] = $this->shop->getShopName();
        $_SESSION['Street'] = $this->shop->getStreet();
        $_SESSION['Password'] = $this->shop->getPassword();
        $_SESSION['Email'] = $this->shop->getEmail();
        $_SESSION['Phone'] = $this->shop->getPhone();
        $_SESSION['Longitude'] = $this->shop->getLongitude();
        $_SESSION['Latitude'] = $this->shop->getLatitude();
    }

    /*
     * kanei insert to ta stoixeia tou shop mas stin basi ston pinaka shops.
     */
    public function registerSubmit(){
        if (!$_POST['ShopName'] || !$_POST['Street'] || !$_POST['Password'] || !$_POST['Email'] || !$_POST['Phone'] || $_POST['Password'] != $_POST['reEnterPassword']
            || !$_POST['Longitude'] || !$_POST['Latitude']) {
                die("<p>Please enter all your Shop data in the fields and choose your shop location</p>");
                //echo '<script type="text/javascript"> alert("sjkfhsd");</script>';
        }else {
            $stmt = $this->_connection->dbConnect()->prepare("INSERT INTO shops (ShopName, Street, Password, Email, Phone, Longitude, Latitude) VALUES(?,?,?,?,?,?,?)");
            $stmt->bind_param('ssssidd', $_POST['ShopName'], $_POST['Street'], $_POST['Password'], $_POST['Email'], $_POST['Phone'], $_POST['Longitude'], $_POST['Latitude']);
        }
        $stmt->execute();
        $stmt->close();
        $this->_connection->dbClose();
    }

    /*
     * mas kanei redirect stin selida profile kai trexei tin sinartisi pou apothikeuei se SESSION ta stoixeia tou shop.
     */
    public function redirect(){
        $this->registerProfile();
        //header("Location: http://localhost/offersView.AdminSites/profile.php");
        header("Location: http://offesview.bugs3.com/profile.php");
    }
}

$newShop = new RegisterClass();
$newShop->registerSubmit();
$newShop->setDataShop();
$newShop->takeShop_ID();
$newShop->redirect();
?>





