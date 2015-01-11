<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://offesview.bugs3.com/")
    $this->open("/index.php");
    $this->click("//input[@value='SignUp']");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Offers View", $this->getTitle());
    $this->assertTrue($this->isElementPresent("name=ShopName"));
    $this->assertTrue($this->isElementPresent("name=Street"));
    $this->assertTrue($this->isElementPresent("name=Password"));
    $this->assertTrue($this->isElementPresent("name=reEnterPassword"));
    $this->assertTrue($this->isElementPresent("name=Email"));
    $this->type("name=ShopName", "ballshop");
    $this->type("name=Street", "karamitrou 666");
    $this->type("name=Password", "666");
    $this->type("name=reEnterPassword", "666");
    $this->type("name=Email", "mpla@gmail.com");
    $this->click("//div[@id='map-canvas']/div/div/div[2]");
    $this->type("name=Phone", "123156");
    $this->click("id=btnSignUp");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertEquals("ballshop", $this->getValue("name=ShopName"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("karamitrou 666", $this->getValue("name=Street"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("666", $this->getValue("name=Password"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("mpla@gmail.com", $this->getValue("name=Email"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("123156", $this->getValue("name=Phone"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    $this->assertTrue($this->isElementPresent("name=Offer"));
  }
}
?>