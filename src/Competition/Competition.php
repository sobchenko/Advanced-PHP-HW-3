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
     * @param array $participants
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

    /**
     * @param RulesInterface $rules
     * @return array
     */
    private function getCurrentCompetitionState(RulesInterface $rules)
    {
        return $this->sports->calculateCurrentState($rules, $this->competitionState);
    }


    /**
     * @param array $data
     * @return array
     */
    protected function initiateCompetition(array $data)
    {
        return $this->changeCompetitionState($data);
    }

    /**
     * @param array $data
     * @return array
     */
    protected function changeCompetitionState(array $data)
    {
        return $this->competitionState = $data;
    }

}