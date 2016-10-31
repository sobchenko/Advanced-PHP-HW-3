<?php

namespace Competition\Sport;

use Competition\Rules\RulesInterface;


abstract class AbstractSport
{
    /**
     * @var array
     */
    private $participants;

    /**
     * @param array $participants
     */
    public function __construct($participants)
    {
        $this->participants = $participants;
    }

    /**
     * @param RulesInterface $competitionRules
     * @param RulesInterface $competitionRules
     * @return array of current competition state
     */
    protected function calculateState(RulesInterface $competitionRules, $competitionState)
    {
        $data = $this->participants;
        // do something with $competitionState depending on $competitionRules
        return $data;
    }

}