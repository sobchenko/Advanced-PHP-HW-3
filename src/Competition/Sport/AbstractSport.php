<?php

namespace Competition\Sport;


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

}