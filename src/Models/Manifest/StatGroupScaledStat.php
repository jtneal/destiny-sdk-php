<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class StatGroupScaledStat
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupScaledStat
{
    use ModelTrait;

    /**
     * @var int
     */
    private $statHash;

    /**
     * @var int
     */
    private $maximumValue;

    /**
     * @var bool
     */
    private $displayAsNumeric;

    /**
     * @var Collection
     */
    private $displayInterpolation;

    /**
     * @return int
     */
    public function getStatHash()
    {
        return $this->statHash;
    }

    /**
     * @param int $statHash
     * @return StatGroupScaledStat
     */
    public function setStatHash($statHash)
    {
        $this->statHash = (int) $statHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumValue()
    {
        return $this->maximumValue;
    }

    /**
     * @param int $maximumValue
     * @return StatGroupScaledStat
     */
    public function setMaximumValue($maximumValue)
    {
        $this->maximumValue = (int) $maximumValue;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayAsNumeric()
    {
        return $this->displayAsNumeric;
    }

    /**
     * @param bool $displayAsNumeric
     * @return StatGroupScaledStat
     */
    public function setDisplayAsNumeric($displayAsNumeric)
    {
        $this->displayAsNumeric = (bool) $displayAsNumeric;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getDisplayInterpolation()
    {
        return $this->displayInterpolation;
    }

    /**
     * @param Collection $displayInterpolation
     * @return StatGroupScaledStat
     */
    public function setDisplayInterpolation(Collection $displayInterpolation)
    {
        $this->displayInterpolation = $displayInterpolation;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return StatGroupScaledStat
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statHash')
            ->add('maximumValue')
            ->add('displayAsNumeric')
            ->add('displayInterpolation', null, StatGroupScaledStatInterpolation::class . '::toCollection');
        return $mapper->map($val);
    }
}
