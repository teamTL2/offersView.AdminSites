<?php
include ('DBConnection.php');
include ('ServerConnection.php');

$username = $_REQUEST['username'];

$password = $_REQUEST['password'];


$result = mysql_query("SELECT * FROM stoixia WHERE password = $password AND username=$username");

$row = mysql_fetch_array($result);

if($row["password"]==$password && $row["username"]==$username)
    header ("Location:profile.html");
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>