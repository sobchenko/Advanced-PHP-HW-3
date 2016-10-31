<?php

namespace Competition\Rules;


class FootballRules implements RulesInterface
{

    /**
     * @var array $rulesList
     */
    private $rulesList;

    /**
     * @var BaseRules
     */
    private $baseRules;

    /**
     * @param string $directory
     */
    public function __construct($judgesList)
    {
        $this->baseRules = new BaseRules($judgesList);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareParticipants(array $participants)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function setPeriod($dateFrom, $dateTo)
    {
        $this->baseRules->setDateOfSeason($dateFrom, $dateTo);
    }

    /**
     * {@inheritdoc}
     */
    public function checkJudges(array $judgeList)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function checkParticipants(array $participants)
    {

    }

}