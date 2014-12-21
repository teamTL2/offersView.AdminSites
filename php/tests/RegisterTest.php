<?php
class RegisterTest extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://offesview.bugs3.com/");
  }

  public function testRegister()
  {
    $this->open("/");
    $this->click("id=btnSignupIndex");
    $this->waitForPageToLoad("30000");
    $this->type("name=ShopName", "lola");
    $this->type("name=Street", "lola");
    $this->type("name=Password", "lola");
    $this->type("name=reEnterPassword", "lola");
    $this->type("name=Email", "lola@gmail.com");
    $this->click("//div[@id='map-canvas']/div/div/div[2]");
    $this->type("name=Phone", "123");
    $this->click("id=btnSignUp");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("lola", $this->getText("name=ShopName"));
    $this->assertTrue($this->isElementPresent("name=ShopName"));
    $this->assertEquals("lola", $this->getText("name=Street"));
    $this->assertTrue($this->isElementPresent("name=Street"));
    $this->assertEquals("lola", $this->getText("name=Password"));
    $this->assertTrue($this->isElementPresent("name=Password"));
    $this->assertEquals("lola", $this->getText("name=reEnterPassword"));
    $this->assertTrue($this->isElementPresent("name=reEnterPassword"));
    $this->assertEquals("lola@gmail.com", $this->getText("name=Email"));
    $this->assertTrue($this->isElementPresent("name=Email"));
    $this->assertEquals("123", $this->getText("name=Phone"));
    $this->assertTrue($this->isElementPresent("name=Phone"));
  }
}
?>