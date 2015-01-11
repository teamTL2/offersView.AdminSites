<?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 5/12/2014
 * Time: 4:58 μμ
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

    /*
     * epistrefei sta antistoixa SESSION ta apotelesmata apo to SQL erwtima wste na ta pernaei se alles selides pou ta xrisimopoioun.
     */
    public function checkShopData(){
        if(!$this->_ShopName || !$this->_Password) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Please enter all your Shop data in the fields')
                    window.location.href='http://offesview.bugs3.com/';
                    </SCRIPT>");
            exit;
        }else {
            $stmt = $this->_connection->dbConnect()->prepare("SELECT Shop_ID, ShopName, Street, Password, Email, Phone, Longitude, Latitude FROM shops WHERE ShopName = ? AND Password = ? ");
            $stmt->bind_param('ss', $this->_ShopName, $this->_Password);
            $stmt->execute();
            $stmt->bind_result($Shop_ID, $ShopName, $Street, $Password, $Email, $Phone ,$Longitude, $Latitude);
            while($stmt->fetch()){
                $_SESSION['Shop_ID'] = $Shop_ID;
                $_SESSION['ShopName'] = $ShopName;
                $_SESSION['Street'] = $Street;
                $_SESSION['Password'] = $Password;
                $_SESSION['Email'] = $Email;
                $_SESSION['Phone'] = $Phone;
                $_SESSION['Longitude'] = $Longitude;
                $_SESSION['Latitude'] = $Latitude;
            }
        }
        $stmt->close();
        $this->_connection->dbClose();
    }

    public function shopLogin(){
        if ($_SESSION['ShopName'] != $this->_ShopName || $_SESSION['Password'] != $this->_Password) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('You have probably entered invalid Shop Name or Password.Please try again.')
                    window.location.href='http://offesview.bugs3.com/';
                    </SCRIPT>");
            exit;
        } else {
            //header("Location: http://localhost/offersView.AdminSites/profile.php");
            header("Location: http://offesview.bugs3.com/profile.php");
        }
    }

}
$newLogin = new LoginClass();
$newLogin->checkShopData();
$newLogin->shopLogin();