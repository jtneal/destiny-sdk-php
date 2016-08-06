<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorRecordBookRecordObjective
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorRecordBookRecordObjective
{
    use ModelTrait;

    /**
     * @var int
     */
    private $objectiveHash;

    /**
     * @var int
     */
    private $destinationHash;

    /**
     * @var int
     */
    private $activityHash;

    /**
     * @var int
     */
    private $progress;

    /**
     * @var bool
     */
    private $hasProgress;

    /**
     * @var bool
     */
    private $isComplete;

    /**
     * @var string
     */
    private $displayValue;

    /**
     * @return int
     */
    public function getObjectiveHash()
    {
        return $this->objectiveHash;
    }

    /**
     * @param int $objectiveHash
     * @return AdvisorRecordBookRecordObjective
     */
    public function setObjectiveHash($objectiveHash)
    {
        $this->objectiveHash = (int) $objectiveHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getDestinationHash()
    {
        return $this->destinationHash;
    }

    /**
     * @param int $destinationHash
     * @return AdvisorRecordBookRecordObjective
     */
    public function setDestinationHash($destinationHash)
    {
        $this->destinationHash = (int) $destinationHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityHash()
    {
        return $this->activityHash;
    }

    /**
     * @param int $activityHash
     * @return AdvisorRecordBookRecordObjective
     */
    public function setActivityHash($activityHash)
    {
        $this->activityHash = (int) $activityHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @param int $progress
     * @return AdvisorRecordBookRecordObjective
     */
    public function setProgress($progress)
    {
        $this->progress = (int) $progress;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasProgress()
    {
        return $this->hasProgress;
    }

    /**
     * @param bool $hasProgress
     * @return AdvisorRecordBookRecordObjective
     */
    public function setHasProgress($hasProgress)
    {
        $this->hasProgress = (bool) $hasProgress;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * @param bool $isComplete
     * @return AdvisorRecordBookRecordObjective
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = (bool) $isComplete;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayValue()
    {
        return $this->displayValue;
    }

    /**
     * @param string $displayValue
     * @return AdvisorRecordBookRecordObjective
     */
    public function setDisplayValue($displayValue)
    {
        $this->displayValue = (string) $displayValue;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorRecordBookRecordObjective
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('objectiveHash')
            ->add('destinationHash')
            ->add('activityHash')
            ->add('progress')
            ->add('hasProgress')
            ->add('isComplete')
            ->add('displayValue');
        return $mapper->map($val);
    }
}
