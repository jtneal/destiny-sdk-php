<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class Advisor
 * @package Necowebs\Destiny\Models\Account
 */
class Advisor
{
    /**
     * @var string
     */
    private $nextWeeklyReset;

    /**
     * @var string
     */
    private $nextDailyReset;

    /**
     * @var string
     */
    private $previousWeeklyReset;

    /**
     * @var string
     */
    private $previousDailyReset;

    /**
     * @var Collection
     */
    private $recordBooks;

    /**
     * @return string
     */
    public function getNextWeeklyReset()
    {
        return $this->nextWeeklyReset;
    }

    /**
     * @param string $nextWeeklyReset
     * @return Advisor
     */
    public function setNextWeeklyReset($nextWeeklyReset)
    {
        $this->nextWeeklyReset = (string) $nextWeeklyReset;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextDailyReset()
    {
        return $this->nextDailyReset;
    }

    /**
     * @param string $nextDailyReset
     * @return Advisor
     */
    public function setNextDailyReset($nextDailyReset)
    {
        $this->nextDailyReset = (string) $nextDailyReset;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousWeeklyReset()
    {
        return $this->previousWeeklyReset;
    }

    /**
     * @param string $previousWeeklyReset
     * @return Advisor
     */
    public function setPreviousWeeklyReset($previousWeeklyReset)
    {
        $this->previousWeeklyReset = (string) $previousWeeklyReset;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousDailyReset()
    {
        return $this->previousDailyReset;
    }

    /**
     * @param string $previousDailyReset
     * @return Advisor
     */
    public function setPreviousDailyReset($previousDailyReset)
    {
        $this->previousDailyReset = (string) $previousDailyReset;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getRecordBooks()
    {
        return $this->recordBooks;
    }

    /**
     * @param Collection $recordBooks
     * @return Advisor
     */
    public function setRecordBooks(Collection $recordBooks)
    {
        $this->recordBooks = $recordBooks;
        return $this;
    }
}
