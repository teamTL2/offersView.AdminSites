<?php
/*
 * To test auto elenxei ti blepei o xristis stin selida otan kanei mia energia(p.x. login)
 * to test apotinxanei gt otan kanei exit apo tin selida profile dn iparxoun stoixeia(username,pass)
 * gia na elen3ei,alliws tha eprepe na trexei swsta...
 *
 * Oi sunartiseis stin sinartisi setUp() trexoun me to Selenium2TestCase mono gia kapoio logo...
 * Antistoixa stin sinartisi testLogin leitourgoun mono me toSeleniumTestCase...
 *
 * Gt bgazei lathos ta asserts einai agnwsto...

 */

class LoginTest extends PHPUnit_Extensions_SeleniumTestCase{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://offesview.bugs3.com/");
        $this->setHost('localhost');

    }

    public function testLoginPass(){
        $this->open("/");
        $this->type("id=username", "Souzi");
        $this->type("id=password", "000");
        $this->click("id=btnLoginIndex");
        $this->waitForPageToLoad("30000");
        $this->click("css=#exit > input.btnStyle");
        $this->waitForPageToLoad("30000");
        $this->assertEquals("Souzi", $this->getText("id=username")); //Returns the text of the element.Gets the text of an element.
        $this->assertEquals("000", $this->getText("id=password"));
        $this->assertTrue($this->isElementPresent("id=username")); //Returns:true if the element is present, false otherwise.Verifies that the specified element is somewhere on the page.
        $this->assertTrue($this->isElementPresent("id=password"));
    }

    public function testLoginFail(){
        $this->open("/");
        $this->type("id=username", "Souzi");
        $this->type("id=password", "000");
        $this->click("id=btnLoginIndex");
        $this->waitForPageToLoad("30000");
        $this->click("css=#exit > input.btnStyle");
        $this->waitForPageToLoad("30000");
        $this->assertTextPresent('Wrong username or password!');
    }
}
?>