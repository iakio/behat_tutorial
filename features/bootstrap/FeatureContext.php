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
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';


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
        $sut = new PorkerGame();
        $sut->setUp(
            Card::get($suite1, $no1),
            Card::get($suite2, $no2),
            Card::get($suite3, $no3),
            Card::get($suite4, $no4),
            Card::get($suite5, $no5));
    }

    /**
     * @When /^チェンジしない$/
     */
    public function チェンジしない()
    {
        $sut->noChange();
    }

    /**
     * @Then /^ノーペアである$/
     */
    public function ノーペアである()
    {
        $result = $sut->pat();
        assertThat($result, equalTo(Pat::NP_PAIR));
    }

}
