<?php



//use Behat\Behat\Tester\Exception\PendingException;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\MinkExtension\Context\RawMinkContext;

use PHPUnit_Framework_Assert as PHPUnit;

use Symfony\Component\DomCrawler\Crawler;
//use wheels\public\registeruser;
 
use Illuminate\Foundation\Testing\ApplicationTrait;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{

    public $registeruser;



    

    /**
     * @Given I input in a email :arg1
     */
    public function iInputInAEmail($arg1)
    {
        $this->registeruser = new registeruser();
        $this->registeruser->addEmail($arg1);
    }

    /**
     * @Given I input in a password :arg1
     */
    public function iInputInAPassword($arg1)
    {
        $this->registeruser->addPassword($arg1);


    }

    /**
     * @Given I press submit button
     */
    public function iPressSubmitButton()
    {
        $findName = $this->getPage()->find('xpath', "//input[contains(@id,'submit')]");
         //$this->getSession()->getPage()->find("css", arg1 );
         
        if (!$findName) {
            throw new Exception('submit' . "could not be found");
        } else {
            $findName->click();
        }
/* 
        ##ver 2 ' 
         $button = $this->getSession()->getPage()
            ->find('css', '#submit' );
        assertNotNull($button,'Could not find the submit button!');
        $button->press();*/

        
    }

     


    /**
     * @Given I am on mainpage
     */
    public function iAmOnMainpage()
    {
        $this->visit('/main');
        //$this->page = $this->session->getPage();

    }

    /**
     * @Then I should see :arg1 text
     */
    public function iShouldSeeText($arg1)
    { 
        $arg1=$text;
        $text = $this->getSession()->getPage()
        ->find('css', 'h1' );
    assertNotNull($text,'PERFECT WHEELS Offical Website');
    $text->press();
    }

}
