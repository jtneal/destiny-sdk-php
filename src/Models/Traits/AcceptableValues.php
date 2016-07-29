<?php

namespace Necowebs\Destiny\Models\Traits;

/**
 * Trait AcceptableValues
 * @package Necowebs\Destiny\Models\Traits
 */
trait AcceptableValues
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var array
     */
    private $acceptableValues = [];

    /**
     * @param string $value
     */
    public function validateValue($value)
    {
        if (in_array($value, $this->acceptableValues)) {
            $this->value = (string) $value;
        }
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param array $values
     * @return AcceptableValues
     */
    public function setAcceptableValues(array $values)
    {
        $this->acceptableValues = $values;

        return $this;
    }
}
