<?php

namespace Competition\Rules;


abstract class AbstractRules
{
    private $judgesList;

    /**
     * @param array $judgesList
     */
    public function __construct($judgesList)
    {
        $this->judgesList = $judgesList;
    }
}