<?php

namespace Necowebs\Destiny\Models;

/**
 * Class DestinyPlayer
 * @package Necowebs\Destiny\Models
 */
class DestinyPlayer
{
    /**
     * @var string
     */
    private $iconPath;

    /**
     * @var int
     */
    private $membershipType;

    /**
     * @var string
     */
    private $membershipId;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @return string
     */
    public function getIconPath()
    {
        return $this->iconPath;
    }

    /**
     * @param string $iconPath
     * @return DestinyPlayer
     */
    public function setIconPath($iconPath)
    {
        $this->iconPath = $iconPath;
        return $this;
    }

    /**
     * @return int
     */
    public function getMembershipType()
    {
        return $this->membershipType;
    }

    /**
     * @param int $membershipType
     * @return DestinyPlayer
     */
    public function setMembershipType($membershipType)
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMembershipId()
    {
        return $this->membershipId;
    }

    /**
     * @param string $membershipId
     * @return DestinyPlayer
     */
    public function setMembershipId($membershipId)
    {
        $this->membershipId = $membershipId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return DestinyPlayer
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }
}
