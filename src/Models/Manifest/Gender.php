<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class Gender
 * @package Necowebs\Destiny\Models\Manifest
 */
class Gender
{
    /**
     * @var int
     */
    private $genderHash;

    /**
     * @var int
     */
    private $genderType;

    /**
     * @var string
     */
    private $genderName;

    /**
     * @var string
     */
    private $genderDescription;

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
    public function getGenderHash()
    {
        return $this->genderHash;
    }

    /**
     * @param int $genderHash
     * @return Gender
     */
    public function setGenderHash($genderHash)
    {
        $this->genderHash = (int) $genderHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getGenderType()
    {
        return $this->genderType;
    }

    /**
     * @param int $genderType
     * @return Gender
     */
    public function setGenderType($genderType)
    {
        $this->genderType = (int) $genderType;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenderName()
    {
        return $this->genderName;
    }

    /**
     * @param string $genderName
     * @return Gender
     */
    public function setGenderName($genderName)
    {
        $this->genderName = (string) $genderName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenderDescription()
    {
        return $this->genderDescription;
    }

    /**
     * @param string $genderDescription
     * @return Gender
     */
    public function setGenderDescription($genderDescription)
    {
        $this->genderDescription = (string) $genderDescription;
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
     * @return Gender
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
     * @return Gender
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
