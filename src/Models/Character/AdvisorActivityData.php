<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityData
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityData
{
    use ModelTrait;

    /**
     * @var int
     */
    private $activityHash;

    /**
     * @var bool
     */
    private $isNew;

    /**
     * @var bool
     */
    private $canLead;

    /**
     * @var bool
     */
    private $canJoin;

    /**
     * @var bool
     */
    private $isCompleted;

    /**
     * @var bool
     */
    private $isVisible;

    /**
     * @var int
     */
    private $displayLevel;

    /**
     * @var int
     */
    private $recommendedLight;

    /**
     * @var int
     */
    private $difficultyTier;

    /**
     * @return int
     */
    public function getActivityHash()
    {
        return $this->activityHash;
    }

    /**
     * @param int $activityHash
     * @return AdvisorActivityData
     */
    public function setActivityHash($activityHash)
    {
        $this->activityHash = (int) $activityHash;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * @param bool $isNew
     * @return AdvisorActivityData
     */
    public function setIsNew($isNew)
    {
        $this->isNew = (bool) $isNew;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanLead()
    {
        return $this->canLead;
    }

    /**
     * @param bool $canLead
     * @return AdvisorActivityData
     */
    public function setCanLead($canLead)
    {
        $this->canLead = (bool) $canLead;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanJoin()
    {
        return $this->canJoin;
    }

    /**
     * @param bool $canJoin
     * @return AdvisorActivityData
     */
    public function setCanJoin($canJoin)
    {
        $this->canJoin = (bool) $canJoin;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsCompleted()
    {
        return $this->isCompleted;
    }

    /**
     * @param bool $isCompleted
     * @return AdvisorActivityData
     */
    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = (bool) $isCompleted;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * @param bool $isVisible
     * @return AdvisorActivityData
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = (bool) $isVisible;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayLevel()
    {
        return $this->displayLevel;
    }

    /**
     * @param int $displayLevel
     * @return AdvisorActivityData
     */
    public function setDisplayLevel($displayLevel)
    {
        $this->displayLevel = (int) $displayLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecommendedLight()
    {
        return $this->recommendedLight;
    }

    /**
     * @param int $recommendedLight
     * @return AdvisorActivityData
     */
    public function setRecommendedLight($recommendedLight)
    {
        $this->recommendedLight = (int) $recommendedLight;
        return $this;
    }

    /**
     * @return int
     */
    public function getDifficultyTier()
    {
        return $this->difficultyTier;
    }

    /**
     * @param int $difficultyTier
     * @return AdvisorActivityData
     */
    public function setDifficultyTier($difficultyTier)
    {
        $this->difficultyTier = (int) $difficultyTier;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityData
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('activityHash')
            ->add('isNew')
            ->add('canLead')
            ->add('canJoin')
            ->add('isCompleted')
            ->add('isVisible')
            ->add('displayLevel')
            ->add('recommendedLight')
            ->add('difficultyTier');
        return $mapper->map($val);
    }
}
