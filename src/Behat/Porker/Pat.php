<?php
namespace Behat\Porker;

use Behat\Porker\Pat\NoPair;

class Pat
{
    public static function make($hands)
    {
        return new NoPair;
    }
}
