<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class StatGroupScaledStatInterpolation
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupScaledStatInterpolation
{
    use ModelTrait;

    /**
     * @var int
     */
    private $value;

    /**
     * @var int
     */
    private $weight;

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return StatGroupScaledStatInterpolation
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return StatGroupScaledStatInterpolation
     */
    public function setWeight($weight)
    {
        $this->weight = (int) $weight;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return StatGroupScaledStatInterpolation
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('value')
            ->add('weight');
        return $mapper->map($val);
    }
}
