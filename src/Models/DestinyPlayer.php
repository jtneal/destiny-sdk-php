<?php

namespace Necowebs\Destiny\Models;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class DestinyPlayer
 * @package Necowebs\Destiny\Models
 */
class DestinyPlayer
{
    use ModelTrait;

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
        $this->iconPath = (string) $iconPath;
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
        $this->membershipType = (int) $membershipType;
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
        $this->membershipId = (string) $membershipId;
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
        $this->displayName = (string) $displayName;
        return $this;
    }


    /**
     * @param mixed $obj
     * @param array $val
     * @return DestinyPlayer
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('iconPath')
            ->add('membershipType')
            ->add('membershipId')
            ->add('displayName');
        return $mapper->map($val);
    }
}
