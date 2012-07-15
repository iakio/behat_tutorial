<?php
namespace Behat\Porker;

class Card
{
    public $no;
    public $suite;
    const SUIT_DIAMONDS = 1;
    const SUIT_SPADES   = 2;
    const SUIT_HEARTS   = 3;
    const SUIT_CLUBS    = 4;

    public function __construct($suite, $no)
    {
        $this->suite = $suite;
        $this->no = $no;
    }

    public static function get($suite, $no)
    {
        if ($no < 1 || 12 < $no) {
            throw new \InvalidArgumentExcption();
        }

        switch ($suite) {
        case 'D':
            return new Card(self::SUIT_DIAMONDS, $no);
        case 'S':
            return new Card(self::SUIT_SPADES, $no);
        case 'H':
            return new Card(self::SUIT_HEARTS, $no);
        case 'C':
            return new Card(self::SUIT_CLUBS, $no);
        default:
            throw new \InvalidArgumentExcption();
        }
    }
}
