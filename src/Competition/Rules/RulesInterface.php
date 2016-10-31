<?php

namespace Competition\Rules;


interface RulesInterface
{
    /**
     * @param array $participants
     * @return array
     */
    public function prepareParticipant(array $participants);
}