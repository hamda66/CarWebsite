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
    private $comment;


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
     * @Given I input in a name :arg1
     */
    public function iInputInAName($arg1)
    {
       $this->comment=new comment();
       $this->comment->addGuestname($arg1);
    }

    /**
     * @Given I input in a message :arg1
     */
    public function iInputInAMessage($arg1)
    {
    $this->comment=new comment();
       $this->comment->addGuestMessage($arg1);
    }

    /**
     * @Given I input in a country :arg1
     */
    public function iInputInACountry($arg1)
    {
    $this->comment=new comment();
    $this->comment->addGuestcountry($arg1);
    }

      /**
     * @Given I input in my email :arg1
     */
    public function iInputInMyEmail($arg1)
    {
         $this->comment->addGuestEmail($arg1);
    }

}



   

