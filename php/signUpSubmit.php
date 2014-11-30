<?php
/**
 * Created by PhpStorm.
 * User: Teo
 * Date: 28/11/2014
 * Time: 4:28 μμ
 */
include("ServerConnection.php");
include("DBConnection.php");

$ShopName = $_POST['ShopName'];
$Street = $_POST['Street'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];

if($ShopName != NULL && $Street != NULL && $Password != NULL &&
    $Email != NULL && $Phone != NULL) {
    mysql_query("INSERT INTO shops (ShopName, Street, Password, Email, Phone) VALUES ('".$ShopName."', '".$Street."', '".$Password."',
				'".$Email."', '".$Phone."') ");
}

header("Location: http://localhost/offersView.AdminSites/profile.html");
exit;
?>