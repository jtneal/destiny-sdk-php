<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class StatGroupScaledStatInterpolation
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupScaledStatInterpolation
{
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

}
