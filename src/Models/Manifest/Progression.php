<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Progression
 * @package Necowebs\Destiny\Models\Manifest
 */
class Progression
{
    use ModelTrait;

    /**
     * @var int
     */
    private $progressionHash;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $scope;

    /**
     * @var bool
     */
    private $repeatLastStep;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var Collection
     */
    private $steps;

    /**
     * @var bool
     */
    private $visible;

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
    public function getProgressionHash()
    {
        return $this->progressionHash;
    }

    /**
     * @param int $progressionHash
     * @return Progression
     */
    public function setProgressionHash($progressionHash)
    {
        $this->progressionHash = (int) $progressionHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Progression
     */
    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param int $scope
     * @return Progression
     */
    public function setScope($scope)
    {
        $this->scope = (int) $scope;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepeatLastStep()
    {
        return $this->repeatLastStep;
    }

    /**
     * @param bool $repeatLastStep
     * @return Progression
     */
    public function setRepeatLastStep($repeatLastStep)
    {
        $this->repeatLastStep = (bool) $repeatLastStep;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return Progression
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = (string) $identifier;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param Collection $steps
     * @return Progression
     */
    public function setSteps(Collection $steps)
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return Progression
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
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
     * @return Progression
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
     * @return Progression
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Progression
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('progressionHash')
            ->add('name')
            ->add('scope')
            ->add('repeatLastStep')
            ->add('identifier')
            ->add('steps', null, Reward::class . '::toCollection')
            ->add('visible')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
