<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/12/2014
 * Time: 3:12 μμ
 */
session_start();
require_once('DBConnection.php');
class LoginClass {
    public $stmt;
    private $_connection;
    private $_ShopName;
    private $_Password;

    public function __construct(){
        $this->_connection = new DBConnection();
        $this->_ShopName = $_POST['ShopName'];
        $this->_Password = $_POST['Password'];
    }
    //bind_result: pianei ta apotelesmata apo to SQL erwtima kai ta bazei stin kathorismenes metablites.
    public function checkShopData(){
        if(!$this->_ShopName || !$this->_Password) {
            die("<p>Please enter all your Shop data in the fields</p>");
        }else {
            $stmt = $this->_connection->dbConnect()->prepare("SELECT ShopName, Street, Password, Email, Phone FROM shops WHERE ShopName = ? AND Password = ? ");
            $stmt->bind_param('ss', $this->_ShopName, $this->_Password);
            $stmt->execute();
            $stmt->bind_result($_SESSION['ShopName'], $_SESSION['Street'], $_SESSION['Password'], $_SESSION['Email'], $_SESSION['Phone']);
            $stmt->close();
        }
    }

    public function shopLogin(){
        if ($_SESSION['ShopName'] != $this->_ShopName || $_SESSION['Password'] != $this->_Password) {
            die("<p>You have probably entered invalid Shop Name or Password.Please try again.</p>");
        } else {
            header("Location: http://localhost/offersView.AdminSites/profile.php");
        }
    }

}
$newLogin = new LoginClass();
$newLogin->checkShopData();
$newLogin->shopLogin();