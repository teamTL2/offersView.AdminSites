<?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 4/12/2014
 * Time: 3:38 μμ
 */
session_start();
include('DBConnection.php');
class ProfileData
{
    private $_connection;
    private $_Offer;
    public $stmt;

    public function __construct(){
        $this->_connection = new DBConnection();
        $this->_Offer = $_POST['Offer'];
    }

    public function insertOffer(){
        if(!$this->_Offer){
            die("<p>Please enter your Offer</p>");
        }else {
            $stmt = $this->_connection->dbConnect()->prepare("UPDATE shops SET Offer =? WHERE ShopName = ?");
            $stmt->bind_param('ss',$this->_Offer, $_SESSION['ShopName']);

            $stmt->execute();
            $stmt->close();
            header("Location: http://localhost/offersView.AdminSites/profile.php");
        }
    }
    //dn leitourgei alla dn bgazei error...!!
    public function updateProfileData(){
        if($_POST['ShopName'] != $_SESSION['ShopName'] || $_POST['Street'] != $_SESSION['Street'] || $_POST['Password'] != $_SESSION['Password'] || $_POST['Email'] != $_SESSION['Email'] ||
            $_POST['Phone'] != $_SESSION['Phone']){
                $stmt = $this->_connection->dbConnect()->prepare("UPDATE shops SET ShopName = ?, Street = ?, Password = ? , Email = ?, Phone = ?");
                $stmt->bind_param('ssssi', $_POST['ShopName'], $_POST['Street'], $_POST['Password'], $_POST['Email'], $_POST['Phone']);

                $stmt->execute();
                $stmt->close();
                header("Location: http://offesview.bugs3.com/profile.php");
        }
    }

}

$updateProfile = new ProfileData();
if($_POST){
    if(isset($_POST['Insert'])){
        $updateProfile->insertOffer();
    }elseif(isset($_POST['Update'])){
        $updateProfile->updateProfileData();
    }
}
