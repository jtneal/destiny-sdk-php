<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class Race
 * @package Necowebs\Destiny\Models\Manifest
 */
class Race
{
    /**
     * @var int
     */
    private $raceHash;

    /**
     * @var int
     */
    private $raceType;

    /**
     * @var string
     */
    private $raceName;

    /**
     * @var string
     */
    private $raceNameMale;

    /**
     * @var string
     */
    private $raceNameFemale;

    /**
     * @var string
     */
    private $raceDescription;

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
    public function getRaceHash()
    {
        return $this->raceHash;
    }

    /**
     * @param int $raceHash
     * @return Race
     */
    public function setRaceHash($raceHash)
    {
        $this->raceHash = (int) $raceHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getRaceType()
    {
        return $this->raceType;
    }

    /**
     * @param int $raceType
     * @return Race
     */
    public function setRaceType($raceType)
    {
        $this->raceType = (int) $raceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaceName()
    {
        return $this->raceName;
    }

    /**
     * @param string $raceName
     * @return Race
     */
    public function setRaceName($raceName)
    {
        $this->raceName = (string) $raceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaceNameMale()
    {
        return $this->raceNameMale;
    }

    /**
     * @param string $raceNameMale
     * @return Race
     */
    public function setRaceNameMale($raceNameMale)
    {
        $this->raceNameMale = (string) $raceNameMale;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaceNameFemale()
    {
        return $this->raceNameFemale;
    }

    /**
     * @param string $raceNameFemale
     * @return Race
     */
    public function setRaceNameFemale($raceNameFemale)
    {
        $this->raceNameFemale = (string) $raceNameFemale;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaceDescription()
    {
        return $this->raceDescription;
    }

    /**
     * @param string $raceDescription
     * @return Race
     */
    public function setRaceDescription($raceDescription)
    {
        $this->raceDescription = (string) $raceDescription;
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
     * @return Race
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
     * @return Race
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
