<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class ActivityBundle
 * @package Necowebs\Destiny\Models\Manifest
 */
class ActivityBundle
{
    /**
     * @var int
     */
    private $bundleHash;

    /**
     * @var string
     */
    private $activityName;

    /**
     * @var string
     */
    private $activityDescription;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $releaseIcon;

    /**
     * @var int
     */
    private $releaseTime;

    /**
     * @var int
     */
    private $destinationHash;

    /**
     * @var int
     */
    private $placeHash;

    /**
     * @var int
     */
    private $activityTypeHash;

    /**
     * @var Collection
     */
    private $activityHashes;

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
    public function getBundleHash()
    {
        return $this->bundleHash;
    }

    /**
     * @param int $bundleHash
     * @return ActivityBundle
     */
    public function setBundleHash($bundleHash)
    {
        $this->bundleHash = (int) $bundleHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityName()
    {
        return $this->activityName;
    }

    /**
     * @param string $activityName
     * @return ActivityBundle
     */
    public function setActivityName($activityName)
    {
        $this->activityName = (string) $activityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityDescription()
    {
        return $this->activityDescription;
    }

    /**
     * @param string $activityDescription
     * @return ActivityBundle
     */
    public function setActivityDescription($activityDescription)
    {
        $this->activityDescription = (string) $activityDescription;
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
     * @return ActivityBundle
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseIcon()
    {
        return $this->releaseIcon;
    }

    /**
     * @param string $releaseIcon
     * @return ActivityBundle
     */
    public function setReleaseIcon($releaseIcon)
    {
        $this->releaseIcon = (string) $releaseIcon;
        return $this;
    }

    /**
     * @return int
     */
    public function getReleaseTime()
    {
        return $this->releaseTime;
    }

    /**
     * @param int $releaseTime
     * @return ActivityBundle
     */
    public function setReleaseTime($releaseTime)
    {
        $this->releaseTime = (int) $releaseTime;
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
     * @return ActivityBundle
     */
    public function setDestinationHash($destinationHash)
    {
        $this->destinationHash = (int) $destinationHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlaceHash()
    {
        return $this->placeHash;
    }

    /**
     * @param int $placeHash
     * @return ActivityBundle
     */
    public function setPlaceHash($placeHash)
    {
        $this->placeHash = (int) $placeHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityTypeHash()
    {
        return $this->activityTypeHash;
    }

    /**
     * @param int $activityTypeHash
     * @return ActivityBundle
     */
    public function setActivityTypeHash($activityTypeHash)
    {
        $this->activityTypeHash = (int) $activityTypeHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getActivityHashes()
    {
        return $this->activityHashes;
    }

    /**
     * @param Collection $activityHashes
     * @return ActivityBundle
     */
    public function setActivityHashes(Collection $activityHashes)
    {
        $this->activityHashes = $activityHashes;
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
     * @return ActivityBundle
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
     * @return ActivityBundle
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
