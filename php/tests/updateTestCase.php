<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://offesview.bugs3.com/")
    $this->open("/index.php");
    $this->type("id=username", "teo");
    $this->type("id=password", "teo");
    $this->click("name=login");
    $this->waitForPageToLoad("30000");
    $this->type("name=ShopName", "teo1");
    $this->type("name=Street", "teo1");
    $this->type("name=Password", "teo1");
    $this->type("name=Email", "mpla1@gmail.com");
    $this->type("name=Phone", "123141");
    $this->click("name=Update");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertEquals("teo1", $this->getValue("name=ShopName"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("teo1", $this->getValue("name=Street"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("teo1", $this->getValue("name=Password"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("mpla1@gmail.com", $this->getValue("name=Email"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("123141", $this->getValue("name=Phone"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    $this->click("css=#exit > input.btnStyle");
    $this->waitForPageToLoad("30000");
    $this->type("id=username", "teo1");
    $this->type("id=password", "teo1");
    $this->click("name=login");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertEquals("teo1", $this->getValue("name=ShopName"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("teo1", $this->getValue("name=Password"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
  }
}
?>