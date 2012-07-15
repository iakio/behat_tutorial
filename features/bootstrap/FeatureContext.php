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

require_once __DIR__ . '/../../vendor/autoload.php';
use Behat\Porker\PorkerGame,
    Behat\Porker\Card,
    Behat\Porker\Hands,
    Behat\Porker\Pat;

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
        $this->sut = new PorkerGame();
        $this->sut->setUp(
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
        $this->sut->noChange();
    }

    /**
     * @Then /^ノーペアである$/
     */
    public function ノーペアである()
    {
        $result = $this->sut->pat();
        assertThat($result, equalTo(new Pat\NoPair));
    }

    /**
     * @Given /^(\d+)のワンペアであるべき$/
     */
    public function ワンペアであるべき($no)
    {
        $expected = new Pat\OnePair($no);
        assertThat($this->sut->pat(), equalTo($expected));
    }
}
