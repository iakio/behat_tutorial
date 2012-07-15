<?php
namespace Behat\Porker\Pat;

use Behat\Porker\Pat;

class OnePair extends Pat
{
    public $no;

    public function __construct($no)
    {
        $this->no = $no;
    }
}
