<?php
namespace Behat\Porker;

class Hands implements \IteratorAggregate
{
    const SIZE = 5;
    private $hands;

    public function __construct($cards)
    {
        if (count($cards) !== self::SIZE) {
            throw new \InvalidArgumentException("card size is " . count($cards));
        }
        $this->hands = new \SplObjectStorage();
        foreach ($cards as $card) {
            $this->hands->attach($card);
        }
    }

    public function getIterator()
    {
        return $this->hands;
    }
}
