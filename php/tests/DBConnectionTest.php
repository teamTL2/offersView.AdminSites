<?php
/**
 * Created by PhpStorm.
 * User: wolf
 * Date: 16/12/2014
 * Time: 1:19 μμ
 */
//require_once 'dbunit-master/PHPUnit/Extensions/Database/TestCase.php';
//require_once("../DBConnection.php");
class DBConnectionTest extends PHPUnit_Extensions_Database_TestCase {
     static private $pdo;
    private $conn = null;

    public function __construct(){

    }

    protected  function getConnection() {
        if($this->conn === null){
            if(self::$pdo == null){
                self::$pdo = new PDO($GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWORD']);
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, $GLOBALS['DB_DBNAME']);
        }
        return $this->conn;
    }

    protected  function getDataSet(){
        return $this->createFlatXMLDataSet('C:\xampp\htdocs\offersView.AdminSites\php\tests\teotest.xml');
    }

    public function testDatabase(){
        $expected = $this->createMySQLXMLDataSet('C:\xampp\htdocs\offersView.AdminSites\php\tests\db.xml');
        $actual = new PHPUnit_Extensions_Database_DataSet_QueryDataSet($this->getConnection());
        // Specify a SELECT query as the 2nd parameter here to limit the data set, else the entire table is used
        $actual->getTable('shops');
        $this->assertDataSetsEqual($expected, $actual);
    }

}
 