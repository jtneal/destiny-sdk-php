<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ActivityValueBasic
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValueBasic
{
    use ModelTrait;

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

    /**
     * @param mixed $obj
     * @param array $val
     * @return ActivityValueBasic
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('value')
            ->add('displayValue');
        return $mapper->map($val);
    }
}
