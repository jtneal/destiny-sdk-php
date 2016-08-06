<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\AdvisorRecordBook;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Advisor
 * @package Necowebs\Destiny\Models\Character
 */
class Advisor
{
    use ModelTrait;

    /**
     * @var AdvisorActivities
     */
    private $activities;

    /**
     * AdvisorCategory
     * @var Collection
     */
    private $activityCategories;

    /**
     * AdvisorBounty
     * @var Collection
     */
    private $bounties;

    /**
     * @var array
     */
    private $quests;

    /**
     * Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression
     * @var Collection
     */
    private $progressions;

    /**
     * Necowebs\Destiny\Models\Account\AdvisorRecordBook
     * @var Collection
     */
    private $recordBooks;

    /**
     * @return AdvisorActivities
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * @param AdvisorActivities $activities
     * @return Advisor
     */
    public function setActivities(AdvisorActivities $activities)
    {
        $this->activities = $activities;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getActivityCategories()
    {
        return $this->activityCategories;
    }

    /**
     * @param Collection $activityCategories
     * @return Advisor
     */
    public function setActivityCategories(Collection $activityCategories)
    {
        $this->activityCategories = $activityCategories;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getBounties()
    {
        return $this->bounties;
    }

    /**
     * @param Collection $bounties
     * @return Advisor
     */
    public function setBounties(Collection $bounties)
    {
        $this->bounties = $bounties;
        return $this;
    }

    /**
     * @return array
     */
    public function getQuests()
    {
        return $this->quests;
    }

    /**
     * @param array $quests
     * @return Advisor
     */
    public function setQuests(array $quests)
    {
        $this->quests = $quests;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getProgressions()
    {
        return $this->progressions;
    }

    /**
     * @param Collection $progressions
     * @return Advisor
     */
    public function setProgressions(Collection $progressions)
    {
        $this->progressions = $progressions;
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

    /**
     * @param mixed $obj
     * @param array $val
     * @return Advisor
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('activities', null, AdvisorActivities::class . '::toObject')
            ->add('activityCategories', null, AdvisorCategory::class . '::toCollection')
            ->add('bounties', null, AdvisorBounty::class . '::toCollection')
            ->add('quests')
            ->add('progressions', null, SummaryCharacterLevelProgression::class . '::toCollection')
            ->add('recordBooks', null, AdvisorRecordBook::class . '::toCollection');
        return $mapper->map($val);
    }
}
