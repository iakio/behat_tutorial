<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }


    /**
     * @Given /^手札に([SHDC])(\d+),([SHDC])(\d+),([SHDC])(\d+),([SHDC])(\d+),([SHDC])(\d+)が配られた$/
     */
    public function 手札にカードが配られた(
        $suite1, $no1,
        $suite2, $no2,
        $suite3, $no3,
        $suite4, $no4,
        $suite5, $no5)
    {
        throw new PendingException();
    }

    /**
     * @When /^チェンジしない$/
     */
    public function チェンジしない()
    {
        throw new PendingException();
    }

    /**
     * @Then /^ノーペアである$/
     */
    public function ノーペアである()
    {
        throw new PendingException();
    }

}
