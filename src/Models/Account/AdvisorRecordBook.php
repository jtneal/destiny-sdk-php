<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorRecordBook
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorRecordBook
{
    use ModelTrait;

    /**
     * @var int
     */
    private $bookHash;

    /**
     * @var Collection
     */
    private $records;

    /**
     * @var SummaryCharacterLevelProgression
     */
    private $progression;

    /**
     * @var int
     */
    private $completedCount;

    /**
     * @var int
     */
    private $redeemedCount;

    /**
     * @var Collection
     */
    private $spotlights;

    /**
     * @var string
     */
    private $startDate;

    /**
     * @var string
     */
    private $expirationDate;

    /**
     * @return int
     */
    public function getBookHash()
    {
        return $this->bookHash;
    }

    /**
     * @param int $bookHash
     * @return AdvisorRecordBook
     */
    public function setBookHash($bookHash)
    {
        $this->bookHash = (int) $bookHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param Collection $records
     * @return AdvisorRecordBook
     */
    public function setRecords(Collection $records)
    {
        $this->records = $records;
        return $this;
    }

    /**
     * @return SummaryCharacterLevelProgression
     */
    public function getProgression()
    {
        return $this->progression;
    }

    /**
     * @param SummaryCharacterLevelProgression $progression
     * @return AdvisorRecordBook
     */
    public function setProgression(SummaryCharacterLevelProgression $progression)
    {
        $this->progression = $progression;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompletedCount()
    {
        return $this->completedCount;
    }

    /**
     * @param int $completedCount
     * @return AdvisorRecordBook
     */
    public function setCompletedCount($completedCount)
    {
        $this->completedCount = (int) $completedCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRedeemedCount()
    {
        return $this->redeemedCount;
    }

    /**
     * @param int $redeemedCount
     * @return AdvisorRecordBook
     */
    public function setRedeemedCount($redeemedCount)
    {
        $this->redeemedCount = (int) $redeemedCount;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSpotlights()
    {
        return $this->spotlights;
    }

    /**
     * @param Collection $spotlights
     * @return AdvisorRecordBook
     */
    public function setSpotlights(Collection $spotlights)
    {
        $this->spotlights = $spotlights;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return AdvisorRecordBook
     */
    public function setStartDate($startDate)
    {
        $this->startDate = (string) $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     * @return AdvisorRecordBook
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = (string) $expirationDate;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorRecordBook
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('bookHash')
            ->add('records', null, AdvisorRecordBookRecord::class . '::toCollection')
            ->add('progression', null, SummaryCharacterLevelProgression::class . '::toObject')
            ->add('completedCount')
            ->add('redeemedCount')
            ->add('spotlights', null, AdvisorRecordBookSpotlight::class . '::toCollection')
            ->add('startDate')
            ->add('expirationDate');
        return $mapper->map($val);
    }
}
