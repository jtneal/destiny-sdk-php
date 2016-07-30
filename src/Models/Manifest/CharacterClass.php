<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class CharacterClass
 * @package Necowebs\Destiny\Models\Manifest
 */
class CharacterClass
{
    /**
     * @var int
     */
    private $classHash;

    /**
     * @var int
     */
    private $classType;

    /**
     * @var string
     */
    private $className;

    /**
     * @var string
     */
    private $classNameMale;

    /**
     * @var string
     */
    private $classNameFemale;

    /**
     * @var string
     */
    private $classIdentifier;

    /**
     * @var string
     */
    private $mentorVendorIdentifier;

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
    public function getClassHash()
    {
        return $this->classHash;
    }

    /**
     * @param int $classHash
     * @return CharacterClass
     */
    public function setClassHash($classHash)
    {
        $this->classHash = (int) $classHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getClassType()
    {
        return $this->classType;
    }

    /**
     * @param int $classType
     * @return CharacterClass
     */
    public function setClassType($classType)
    {
        $this->classType = (int) $classType;
        return $this;
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * @param string $className
     * @return CharacterClass
     */
    public function setClassName($className)
    {
        $this->className = (string) $className;
        return $this;
    }

    /**
     * @return string
     */
    public function getClassNameMale()
    {
        return $this->classNameMale;
    }

    /**
     * @param string $classNameMale
     * @return CharacterClass
     */
    public function setClassNameMale($classNameMale)
    {
        $this->classNameMale = (string) $classNameMale;
        return $this;
    }

    /**
     * @return string
     */
    public function getClassNameFemale()
    {
        return $this->classNameFemale;
    }

    /**
     * @param string $classNameFemale
     * @return CharacterClass
     */
    public function setClassNameFemale($classNameFemale)
    {
        $this->classNameFemale = (string) $classNameFemale;
        return $this;
    }

    /**
     * @return string
     */
    public function getClassIdentifier()
    {
        return $this->classIdentifier;
    }

    /**
     * @param string $classIdentifier
     * @return CharacterClass
     */
    public function setClassIdentifier($classIdentifier)
    {
        $this->classIdentifier = (string) $classIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getMentorVendorIdentifier()
    {
        return $this->mentorVendorIdentifier;
    }

    /**
     * @param string $mentorVendorIdentifier
     * @return CharacterClass
     */
    public function setMentorVendorIdentifier($mentorVendorIdentifier)
    {
        $this->mentorVendorIdentifier = (string) $mentorVendorIdentifier;
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
     * @return CharacterClass
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
     * @return CharacterClass
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }
}
