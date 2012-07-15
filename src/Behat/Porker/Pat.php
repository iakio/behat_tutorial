<?php
namespace Behat\Porker;

use Behat\Porker\Pat\NoPair,
    Behat\Porker\Pat\OnePair;

abstract class Pat
{
    public static function make(Hands $hands)
    {
        $nums = array();
        foreach ($hands as $card) {
            if (array_key_exists($card->no, $nums)) {
                $nums[$card->no]++;
            } else {
                $nums[$card->no] = 1;
            }
        }
        foreach ($nums as $entry_card => $entry_count) {
            if ($entry_count === 2) {
                return new OnePair($entry_card);
            }
            /// TODO ほかの役の実装
        }
        return new NoPair;
    }
}
