<?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 3/12/2014
 * Time: 11:05 πμ
 */

class DBConnection {
//    protected  $hostName = 'localhost';
//    protected  $userName = 'root';
//    protected  $passCode = '';
//    protected  $dbName = 'teotest';
    public  $myconn;
    protected $hostName = 'mysql.serversfree.com';
    protected $userName = 'u519377779_admin';
    protected $passCode = 'ulven1991247';
    protected $dbName = 'u519377779_offer';

    function __construct(){

    }

    public   function dbConnect(){
        $this ->myconn = new mysqli($this->hostName,$this->userName,$this->passCode,$this->dbName);
        if(mysqli_connect_errno()){
            printf("Connection failed: %s \n", mysqli_connect_error());
            exit();
        }
        return $this->myconn;
    }

    public function dbClose(){
        mysqli_close($this->myconn);
    }

}
