<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ClassDefinition
 * @package Necowebs\Destiny\Models\Manifest
 */
class ClassDefinition
{
    use ModelTrait;

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
     * @return ClassDefinition
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
     * @return ClassDefinition
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
     * @return ClassDefinition
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
     * @return ClassDefinition
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
     * @return ClassDefinition
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
     * @return ClassDefinition
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
     * @return ClassDefinition
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
     * @return ClassDefinition
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
     * @return ClassDefinition
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return ClassDefinition
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('classHash')
            ->add('classType')
            ->add('className')
            ->add('classNameMale')
            ->add('classNameFemale')
            ->add('classIdentifier')
            ->add('mentorVendorIdentifier')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
