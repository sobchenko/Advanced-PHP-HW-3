<?php

namespace Competition\Rules;


class BaseRules extends AbstractRules
{
    /**
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     * @return array
     */
    public function setDateOfSeason($dateFrom, $dateTo)
    {
        $period = [$dateFrom, $dateTo];
        return $period;
    }
}