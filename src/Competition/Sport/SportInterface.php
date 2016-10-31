<?php

namespace Competition\Sport;

use Competition\Rules\RulesInterface;

interface SportInterface
{

    /**
     * @param array $participants
     * @return array
     */
    public function makeDraw(array $participants, RulesInterface $rules);

    /**
     * @param array $participants
     * @return array
     */
    public function runCompetition(array $data);
}