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
     * @Given /^手札にS(\d+),H(\d+),D(\d+),D(\d+),C(\d+)が配られた$/
     */
    public function sHDDCKuai($arg1, $arg2, $arg3, $arg4, $arg5)
    {
        throw new PendingException();
    }

    /**
     * @Given /^チェンジしない$/
     */
    public function stepDefinition1()
    {
        throw new PendingException();
    }

    /**
     * @Given /^ノーペアである$/
     */
    public function stepDefinition2()
    {
        throw new PendingException();
    }

}
