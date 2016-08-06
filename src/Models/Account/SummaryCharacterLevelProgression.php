<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SummaryCharacterLevelProgression
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterLevelProgression
{
    use ModelTrait;

    /**
     * @var int
     */
    private $dailyProgress;

    /**
     * @var int
     */
    private $weeklyProgress;

    /**
     * @var int
     */
    private $currentProgress;

    /**
     * @var int
     */
    private $level;

    /**
     * @var int
     */
    private $step;

    /**
     * @var int
     */
    private $progressToNextLevel;

    /**
     * @var int
     */
    private $nextLevelAt;

    /**
     * @var int
     */
    private $progressionHash;

    /**
     * @return int
     */
    public function getDailyProgress()
    {
        return $this->dailyProgress;
    }

    /**
     * @param int $dailyProgress
     * @return SummaryCharacterLevelProgression
     */
    public function setDailyProgress($dailyProgress)
    {
        $this->dailyProgress = (int) $dailyProgress;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeeklyProgress()
    {
        return $this->weeklyProgress;
    }

    /**
     * @param int $weeklyProgress
     * @return SummaryCharacterLevelProgression
     */
    public function setWeeklyProgress($weeklyProgress)
    {
        $this->weeklyProgress = (int) $weeklyProgress;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentProgress()
    {
        return $this->currentProgress;
    }

    /**
     * @param int $currentProgress
     * @return SummaryCharacterLevelProgression
     */
    public function setCurrentProgress($currentProgress)
    {
        $this->currentProgress = (int) $currentProgress;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return SummaryCharacterLevelProgression
     */
    public function setLevel($level)
    {
        $this->level = (int) $level;
        return $this;
    }

    /**
     * @return int
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param int $step
     * @return SummaryCharacterLevelProgression
     */
    public function setStep($step)
    {
        $this->step = (int) $step;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgressToNextLevel()
    {
        return $this->progressToNextLevel;
    }

    /**
     * @param int $progressToNextLevel
     * @return SummaryCharacterLevelProgression
     */
    public function setProgressToNextLevel($progressToNextLevel)
    {
        $this->progressToNextLevel = (int) $progressToNextLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getNextLevelAt()
    {
        return $this->nextLevelAt;
    }

    /**
     * @param int $nextLevelAt
     * @return SummaryCharacterLevelProgression
     */
    public function setNextLevelAt($nextLevelAt)
    {
        $this->nextLevelAt = (int) $nextLevelAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgressionHash()
    {
        return $this->progressionHash;
    }

    /**
     * @param int $progressionHash
     * @return SummaryCharacterLevelProgression
     */
    public function setProgressionHash($progressionHash)
    {
        $this->progressionHash = (int) $progressionHash;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return SummaryCharacterLevelProgression
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('dailyProgress')
            ->add('weeklyProgress')
            ->add('currentProgress')
            ->add('level')
            ->add('step')
            ->add('progressToNextLevel')
            ->add('nextLevelAt')
            ->add('progressionHash');
        return $mapper->map($val);
    }
}
