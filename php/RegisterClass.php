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
    private $connection;
    public $stmt;
    public $shop;

    public function __construct(){
        $this->connection = new DBConnection();
        $this->shop = new Shops();
    }

    public function setDataShop(){
        $this->shop->setShopName($_POST['ShopName']);
        $this->shop->setStreet($_POST['Street']);
        $this->shop->setPassword($_POST['Password']);
        $this->shop->setEmail($_POST['Email']);
        $this->shop->setPhone($_POST['Phone']);
    }

    public function  registerProfile(){
        $_SESSION['ShopName'] = $this->shop->getShopName();
        $_SESSION['Street'] = $this->shop->getStreet();
        $_SESSION['Password'] = $this->shop->getPassword();
        $_SESSION['Email'] = $this->shop->getEmail();
        $_SESSION['Phone'] = $this->shop->getPhone();
    }

    public function registerSubmit(){
        //na kanw elenxo an to ShopName einai Unique kai na bgazei minima an dn einai.
        if (!$_POST['ShopName'] || !$_POST['Street'] || !$_POST['Password'] || !$_POST['Email'] || !$_POST['Phone'] || $_POST['Password'] != $_POST['reEnterPassword']) {
            die("<p>Please enter all your Shop data in the fields</p>");
        }else{
            $stmt = $this->connection->dbConnect()->prepare("INSERT INTO shops (ShopName,Street,Password,Email,Phone) VALUES(?,?,?,?,?)");
            $stmt->bind_param('ssssi', $_POST['ShopName'], $_POST['Street'], $_POST['Password'], $_POST['Email'], $_POST['Phone']);
        }

        $stmt->execute();
        $stmt->close();
    }

    public function redirect(){
        $this->registerProfile();
        header("Location: http://localhost/offersView.AdminSites/profile.php");
    }
}

$newShop = new RegisterClass();
$newShop->setDataShop();
$newShop->registerSubmit();
$newShop->redirect();
?>





