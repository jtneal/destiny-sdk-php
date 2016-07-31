<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class Activity
 * @package Necowebs\Destiny\Models\Manifest
 */
class Activity
{
    /**
     * @var int
     */
    private $activityHash;

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
    private $activityLevel;

    /**
     * @var int
     */
    private $completionFlagHash;

    /**
     * @var int
     */
    private $activityPower;

    /**
     * @var int
     */
    private $minParty;

    /**
     * @var int
     */
    private $maxParty;

    /**
     * @var int
     */
    private $maxPlayers;

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
     * @var int
     */
    private $tier;

    /**
     * @var string
     */
    private $pgcrImage;

    /**
     * @var Collection
     */
    private $rewards;

    /**
     * @var Collection
     */
    private $skulls;

    /**
     * @var bool
     */
    private $isPlaylist;

    /**
     * @var bool
     */
    private $isMatchmade;

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
    public function getActivityHash()
    {
        return $this->activityHash;
    }

    /**
     * @param int $activityHash
     * @return Activity
     */
    public function setActivityHash($activityHash)
    {
        $this->activityHash = (int) $activityHash;
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
     * @return Activity
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
     * @return Activity
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
     * @return Activity
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
     * @return Activity
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
     * @return Activity
     */
    public function setReleaseTime($releaseTime)
    {
        $this->releaseTime = (int) $releaseTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityLevel()
    {
        return $this->activityLevel;
    }

    /**
     * @param int $activityLevel
     * @return Activity
     */
    public function setActivityLevel($activityLevel)
    {
        $this->activityLevel = (int) $activityLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompletionFlagHash()
    {
        return $this->completionFlagHash;
    }

    /**
     * @param int $completionFlagHash
     * @return Activity
     */
    public function setCompletionFlagHash($completionFlagHash)
    {
        $this->completionFlagHash = (int) $completionFlagHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityPower()
    {
        return $this->activityPower;
    }

    /**
     * @param int $activityPower
     * @return Activity
     */
    public function setActivityPower($activityPower)
    {
        $this->activityPower = (int) $activityPower;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinParty()
    {
        return $this->minParty;
    }

    /**
     * @param int $minParty
     * @return Activity
     */
    public function setMinParty($minParty)
    {
        $this->minParty = (int) $minParty;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxParty()
    {
        return $this->maxParty;
    }

    /**
     * @param int $maxParty
     * @return Activity
     */
    public function setMaxParty($maxParty)
    {
        $this->maxParty = (int) $maxParty;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPlayers()
    {
        return $this->maxPlayers;
    }

    /**
     * @param int $maxPlayers
     * @return Activity
     */
    public function setMaxPlayers($maxPlayers)
    {
        $this->maxPlayers = (int) $maxPlayers;
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
     * @return Activity
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
     * @return Activity
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
     * @return Activity
     */
    public function setActivityTypeHash($activityTypeHash)
    {
        $this->activityTypeHash = (int) $activityTypeHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * @param int $tier
     * @return Activity
     */
    public function setTier($tier)
    {
        $this->tier = (int) $tier;
        return $this;
    }

    /**
     * @return string
     */
    public function getPgcrImage()
    {
        return $this->pgcrImage;
    }

    /**
     * @param string $pgcrImage
     * @return Activity
     */
    public function setPgcrImage($pgcrImage)
    {
        $this->pgcrImage = (string) $pgcrImage;
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
     * @return Activity
     */
    public function setRewards(Collection $rewards)
    {
        $this->rewards = $rewards;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSkulls()
    {
        return $this->skulls;
    }

    /**
     * @param Collection $skulls
     * @return Activity
     */
    public function setSkulls(Collection $skulls)
    {
        $this->skulls = $skulls;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPlaylist()
    {
        return $this->isPlaylist;
    }

    /**
     * @param bool $isPlaylist
     * @return Activity
     */
    public function setIsPlaylist($isPlaylist)
    {
        $this->isPlaylist = (bool) $isPlaylist;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMatchmade()
    {
        return $this->isMatchmade;
    }

    /**
     * @param bool $isMatchmade
     * @return Activity
     */
    public function setIsMatchmade($isMatchmade)
    {
        $this->isMatchmade = (bool) $isMatchmade;
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
     * @return Activity
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
     * @return Activity
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
