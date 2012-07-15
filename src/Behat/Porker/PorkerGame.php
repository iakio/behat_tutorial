<?php
namespace Behat\Porker;

class PorkerGame
{
    const STATUS_INIT    = 1;
    const STATUS_READY   = 2;
    const STATUS_CHANGED = 3;

    private $status = self::STATUS_INIT;
    private $hands = NULL;

    public function setUp()
    {
        if ($this->status !== self::STATUS_INIT) {
            throw new \BadMethodCallException();
        }

        $this->hands = new Hands(func_get_args());
        $this->status = self::STATUS_READY;
    }

    public function noChange()
    {
        if ($this->status !== self::STATUS_READY) {
            throw \BadMethodCallException();
        }
        $this->status = self::STATUS_CHANGED;
    }

    public function pat()
    {
        if ($this->status != self::STATUS_CHANGED) {
            throw new \BadMethodCallException();
        }

        return Pat::make($this->hands);
    }
}
