<?php

namespace Competition\Sport;

use Competition\Rules\RulesInterface;

class Football extends AbstractSport implements SportInterface
{

    /**
     * {@inheritdoc}
     */
    public function makeDraw(array $participants, RulesInterface $rules)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function runCompetition(array $data)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function calculateCurrentState(RulesInterface $competitionRules, array $competitionState)
    {
        return $this->calculateState($competitionRules, $competitionState);
    }
}