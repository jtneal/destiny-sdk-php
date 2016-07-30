<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class Stat
 * @package Necowebs\Destiny\Models\Manifest
 */
class Stat
{
    /**
     * @var int
     */
    private $statHash;

    /**
     * @var string
     */
    private $statName;

    /**
     * @var string
     */
    private $statDescription;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $statIdentifier;

    /**
     * @var bool
     */
    private $interpolate;

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
    public function getStatHash()
    {
        return $this->statHash;
    }

    /**
     * @param int $statHash
     * @return Stat
     */
    public function setStatHash($statHash)
    {
        $this->statHash = (int) $statHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatName()
    {
        return $this->statName;
    }

    /**
     * @param string $statName
     * @return Stat
     */
    public function setStatName($statName)
    {
        $this->statName = (string) $statName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatDescription()
    {
        return $this->statDescription;
    }

    /**
     * @param string $statDescription
     * @return Stat
     */
    public function setStatDescription($statDescription)
    {
        $this->statDescription = (string) $statDescription;
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
     * @return Stat
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatIdentifier()
    {
        return $this->statIdentifier;
    }

    /**
     * @param string $statIdentifier
     * @return Stat
     */
    public function setStatIdentifier($statIdentifier)
    {
        $this->statIdentifier = (string) $statIdentifier;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInterpolate()
    {
        return $this->interpolate;
    }

    /**
     * @param bool $interpolate
     * @return Stat
     */
    public function setInterpolate($interpolate)
    {
        $this->interpolate = (bool) $interpolate;
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
     * @return Stat
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
     * @return Stat
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
