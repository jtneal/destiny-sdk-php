<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\Reward;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityTier
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityTier
{
    use ModelTrait;

    /**
     * @var int
     */
    private $activityHash;

    /**
     * @var string
     */
    private $tierDisplayName;

    /**
     * @var AdvisorActivityCompletion
     */
    private $completion;

    /**
     * @var Collection
     */
    private $steps;

    /**
     * @var Collection
     */
    private $skullCategories;

    /**
     * @var Collection
     */
    private $rewards;

    /**
     * @var AdvisorActivityData
     */
    private $activityData;

    /**
     * @var AdvisorActivityExtended
     */
    private $extended;

    /**
     * @return int
     */
    public function getActivityHash()
    {
        return $this->activityHash;
    }

    /**
     * @param int $activityHash
     * @return AdvisorActivityTier
     */
    public function setActivityHash($activityHash)
    {
        $this->activityHash = (int) $activityHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getTierDisplayName()
    {
        return $this->tierDisplayName;
    }

    /**
     * @param string $tierDisplayName
     * @return AdvisorActivityTier
     */
    public function setTierDisplayName($tierDisplayName)
    {
        $this->tierDisplayName = (string) $tierDisplayName;
        return $this;
    }

    /**
     * @return AdvisorActivityCompletion
     */
    public function getCompletion()
    {
        return $this->completion;
    }

    /**
     * @param AdvisorActivityCompletion $completion
     * @return AdvisorActivityTier
     */
    public function setCompletion(AdvisorActivityCompletion $completion)
    {
        $this->completion = $completion;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param Collection $steps
     * @return AdvisorActivityTier
     */
    public function setSteps(Collection $steps)
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSkullCategories()
    {
        return $this->skullCategories;
    }

    /**
     * @param Collection $skullCategories
     * @return AdvisorActivityTier
     */
    public function setSkullCategories(Collection $skullCategories)
    {
        $this->skullCategories = $skullCategories;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * @param Collection $rewards
     * @return AdvisorActivityTier
     */
    public function setRewards(Collection $rewards)
    {
        $this->rewards = $rewards;
        return $this;
    }

    /**
     * @return AdvisorActivityData
     */
    public function getActivityData()
    {
        return $this->activityData;
    }

    /**
     * @param AdvisorActivityData $activityData
     * @return AdvisorActivityTier
     */
    public function setActivityData(AdvisorActivityData $activityData)
    {
        $this->activityData = $activityData;
        return $this;
    }

    /**
     * @return AdvisorActivityExtended
     */
    public function getExtended()
    {
        return $this->extended;
    }

    /**
     * @param AdvisorActivityExtended $extended
     * @return AdvisorActivityTier
     */
    public function setExtended(AdvisorActivityExtended $extended)
    {
        $this->extended = $extended;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityTier
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('activityHash')
            ->add('tierDisplayName')
            ->add('completion', null, AdvisorActivityCompletion::class . '::toObject')
            ->add('steps', null, AdvisorActivityTierStep::class . '::toCollection')
            ->add('skullCategories', null, AdvisorActivitySkullCategory::class . '::toCollection')
            ->add('rewards', null, Reward::class . '::toCollection')
            ->add('activityData', null, AdvisorActivityData::class . '::toObject')
            ->add('extended', null, AdvisorActivityExtended::class . '::toObject');
        return $mapper->map($val);
    }
}
