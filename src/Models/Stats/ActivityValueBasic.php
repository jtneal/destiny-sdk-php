<?php

namespace Necowebs\Destiny\Models\Stats;

/**
 * Class ActivityValueBasic
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValueBasic
{
    /**
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $displayValue;

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return ActivityValueBasic
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayValue()
    {
        return $this->displayValue;
    }

    /**
     * @param string $displayValue
     * @return ActivityValueBasic
     */
    public function setDisplayValue($displayValue)
    {
        $this->displayValue = (string) $displayValue;
        return $this;
    }
}
