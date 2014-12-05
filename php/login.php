<?php
include ('DBConnection.php');
include ('ServerConnection.php');

$username = $_REQUEST['ShopName'];

$password = $_REQUEST['Password'];


$result = mysql_query("SELECT * FROM Shops WHERE ShopName = $ShopName AND Password=$Password");

$row = mysql_fetch_array($result);

if($row["ShopName"]==$ShopName && $row["Password"]==$Password)
    header ("Location:profile.html");
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>