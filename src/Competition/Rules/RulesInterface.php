<?php

namespace Competition\Rules;

interface RulesInterface
{
    /**
     * @param array $participants
     *
     * @return array
     */
    public function prepareParticipants(array $participants);

    /**
     * @param array $judgeList
     *
     * @return array
     */
    public function checkJudges(array $judgeList);

    /**
     * @param array $participants
     *
     * @return array
     */
    public function checkParticipants(array $participants);

    /**
     * @param \DateTime $dateFrom
     * @param \DateTime $dateFrom
     *
     * @return array
     */
    public function setPeriod($dateFrom, $dateTo);
}
