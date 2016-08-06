<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ActivityType
 * @package Necowebs\Destiny\Models\Manifest
 */
class ActivityType
{
    use ModelTrait;

    /**
     * @var int
     */
    private $activityTypeHash;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $activityTypeName;

    /**
     * @var string
     */
    private $activityTypeDescription;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $activeBackgroundVirtualPath;

    /**
     * @var string
     */
    private $completedBackgroundVirtualPath;

    /**
     * @var string
     */
    private $hiddenOverrideVirtualPath;

    /**
     * @var string
     */
    private $tooltipBackgroundVirtualPath;

    /**
     * @var string
     */
    private $enlargedActiveBackgroundVirtualPath;

    /**
     * @var string
     */
    private $enlargedCompletedBackgroundVirtualPath;

    /**
     * @var string
     */
    private $enlargedHiddenOverrideVirtualPath;

    /**
     * @var string
     */
    private $enlargedTooltipBackgroundVirtualPath;

    /**
     * @var int
     */
    private $order;

    /**
     * @var string
     */
    private $statGroup;

    /**
     * @var string
     */
    private $friendlyUrlId;

    /**
     * @var int
     */
    private $hash;

    /**
     * @var int
     */
    private $index;

    /**
     * @return int
     */
    public function getActivityTypeHash()
    {
        return $this->activityTypeHash;
    }

    /**
     * @param int $activityTypeHash
     * @return ActivityType
     */
    public function setActivityTypeHash($activityTypeHash)
    {
        $this->activityTypeHash = (int) $activityTypeHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return ActivityType
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = (string) $identifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityTypeName()
    {
        return $this->activityTypeName;
    }

    /**
     * @param string $activityTypeName
     * @return ActivityType
     */
    public function setActivityTypeName($activityTypeName)
    {
        $this->activityTypeName = (string) $activityTypeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityTypeDescription()
    {
        return $this->activityTypeDescription;
    }

    /**
     * @param string $activityTypeDescription
     * @return ActivityType
     */
    public function setActivityTypeDescription($activityTypeDescription)
    {
        $this->activityTypeDescription = (string) $activityTypeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return ActivityType
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }

    /**
     * @return string
     */
    public function getActiveBackgroundVirtualPath()
    {
        return $this->activeBackgroundVirtualPath;
    }

    /**
     * @param string $activeBackgroundVirtualPath
     * @return ActivityType
     */
    public function setActiveBackgroundVirtualPath($activeBackgroundVirtualPath)
    {
        $this->activeBackgroundVirtualPath = (string) $activeBackgroundVirtualPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompletedBackgroundVirtualPath()
    {
        return $this->completedBackgroundVirtualPath;
    }

    /**
     * @param string $completedBackgroundVirtualPath
     * @return ActivityType
     */
    public function setCompletedBackgroundVirtualPath($completedBackgroundVirtualPath)
    {
        $this->completedBackgroundVirtualPath = (string) $completedBackgroundVirtualPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getHiddenOverrideVirtualPath()
    {
        return $this->hiddenOverrideVirtualPath;
    }

    /**
     * @param string $hiddenOverrideVirtualPath
     * @return ActivityType
     */
    public function setHiddenOverrideVirtualPath($hiddenOverrideVirtualPath)
    {
        $this->hiddenOverrideVirtualPath = (string) $hiddenOverrideVirtualPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getTooltipBackgroundVirtualPath()
    {
        return $this->tooltipBackgroundVirtualPath;
    }

    /**
     * @param string $tooltipBackgroundVirtualPath
     * @return ActivityType
     */
    public function setTooltipBackgroundVirtualPath($tooltipBackgroundVirtualPath)
    {
        $this->tooltipBackgroundVirtualPath = (string) $tooltipBackgroundVirtualPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnlargedActiveBackgroundVirtualPath()
    {
        return $this->enlargedActiveBackgroundVirtualPath;
    }

    /**
     * @param string $enlargedActiveBackgroundVirtualPath
     * @return ActivityType
     */
    public function setEnlargedActiveBackgroundVirtualPath($enlargedActiveBackgroundVirtualPath)
    {
        $this->enlargedActiveBackgroundVirtualPath = (string) $enlargedActiveBackgroundVirtualPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnlargedCompletedBackgroundVirtualPath()
    {
        return $this->enlargedCompletedBackgroundVirtualPath;
    }

    /**
     * @param string $enlargedCompletedBackgroundVirtualPath
     * @return ActivityType
     */
    public function setEnlargedCompletedBackgroundVirtualPath($enlargedCompletedBackgroundVirtualPath)
    {
        $this->enlargedCompletedBackgroundVirtualPath = (string) $enlargedCompletedBackgroundVirtualPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnlargedHiddenOverrideVirtualPath()
    {
        return $this->enlargedHiddenOverrideVirtualPath;
    }

    /**
     * @param string $enlargedHiddenOverrideVirtualPath
     * @return ActivityType
     */
    public function setEnlargedHiddenOverrideVirtualPath($enlargedHiddenOverrideVirtualPath)
    {
        $this->enlargedHiddenOverrideVirtualPath = (string) $enlargedHiddenOverrideVirtualPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnlargedTooltipBackgroundVirtualPath()
    {
        return $this->enlargedTooltipBackgroundVirtualPath;
    }

    /**
     * @param string $enlargedTooltipBackgroundVirtualPath
     * @return ActivityType
     */
    public function setEnlargedTooltipBackgroundVirtualPath($enlargedTooltipBackgroundVirtualPath)
    {
        $this->enlargedTooltipBackgroundVirtualPath = (string) $enlargedTooltipBackgroundVirtualPath;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     * @return ActivityType
     */
    public function setOrder($order)
    {
        $this->order = (int) $order;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatGroup()
    {
        return $this->statGroup;
    }

    /**
     * @param string $statGroup
     * @return ActivityType
     */
    public function setStatGroup($statGroup)
    {
        $this->statGroup = (string) $statGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyUrlId()
    {
        return $this->friendlyUrlId;
    }

    /**
     * @param string $friendlyUrlId
     * @return ActivityType
     */
    public function setFriendlyUrlId($friendlyUrlId)
    {
        $this->friendlyUrlId = (string) $friendlyUrlId;
        return $this;
    }

    /**
     * @return int
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param int $hash
     * @return ActivityType
     */
    public function setHash($hash)
    {
        $this->hash = (int) $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return ActivityType
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return ActivityType
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('activityTypeHash')
            ->add('identifier')
            ->add('activityTypeName')
            ->add('activityTypeDescription')
            ->add('icon')
            ->add('activeBackgroundVirtualPath')
            ->add('completedBackgroundVirtualPath')
            ->add('hiddenOverrideVirtualPath')
            ->add('tooltipBackgroundVirtualPath')
            ->add('enlargedActiveBackgroundVirtualPath')
            ->add('enlargedCompletedBackgroundVirtualPath')
            ->add('enlargedHiddenOverrideVirtualPath')
            ->add('enlargedTooltipBackgroundVirtualPath')
            ->add('order')
            ->add('statGroup')
            ->add('friendlyUrlId')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
