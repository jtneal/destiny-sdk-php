<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class StatGroupOverride
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupOverride
{
    use ModelTrait;

    /**
     * @var int
     */
    private $statHash;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $displayDescription;

    /**
     * @var string
     */
    private $displayIcon;

    /**
     * @return int
     */
    public function getStatHash()
    {
        return $this->statHash;
    }

    /**
     * @param int $statHash
     * @return StatGroupOverride
     */
    public function setStatHash($statHash)
    {
        $this->statHash = (int) $statHash;
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
     * @return StatGroupOverride
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = (string) $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayDescription()
    {
        return $this->displayDescription;
    }

    /**
     * @param string $displayDescription
     * @return StatGroupOverride
     */
    public function setDisplayDescription($displayDescription)
    {
        $this->displayDescription = (string) $displayDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayIcon()
    {
        return $this->displayIcon;
    }

    /**
     * @param string $displayIcon
     * @return StatGroupOverride
     */
    public function setDisplayIcon($displayIcon)
    {
        $this->displayIcon = (string) $displayIcon;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return StatGroupOverride
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statHash')
            ->add('displayName')
            ->add('displayDescription')
            ->add('displayIcon');
        return $mapper->map($val);
    }
}
