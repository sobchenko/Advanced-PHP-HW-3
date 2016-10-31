<?php

namespace Competition;

use Competition\Rules\RulesInterface;
use Competition\Sport\SportInterface;

class Competition
{
    /**
     * @var SportInterface
     */
    private  $sports;

    /**
     * @var array
     */
    private  $competitionState;

    /**
     * @var array
     */
    private  $participants;

    /**
     * @param SportInterface $sports
     * @param RulesInterface $rules
     */
    public function __construct($participants, SportInterface $sports)
    {
        $this->sports = $sports;
        $this->participants = $participants;
    }

    /**
     * @param RulesInterface $rules
     * @return array
     */
    public function createDraw(RulesInterface $rules)
    {
        $preparedParticipants = $rules->prepareParticipant($this->participants);
        $drawData = $this->sports->makeDraw($preparedParticipants, $rules);
        $preparedDrawData = $this->initiateCompetition($drawData);
        return $this->sports->runCompetition($preparedDrawData);
    }

    private function getCompetitionState()
    {
        return $this->competitionState;
    }


    /**
     * @param array $data
     * @return array
     */
    protected function initiateCompetition(array $data)
    {
        return $data;
    }

    /**
     * @param array $data
     * @return array
     */
    protected function changeCompetitionState(array $data)
    {
        $this->$this->competitionState = $data;
    }

}