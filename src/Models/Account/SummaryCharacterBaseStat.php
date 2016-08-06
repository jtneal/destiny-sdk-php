<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SummaryCharacterBaseStat
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBaseStat
{
    use ModelTrait;

    /**
     * @var int
     */
    private $statHash;

    /**
     * @var int
     */
    private $value;

    /**
     * @var int
     */
    private $maximumValue;

    /**
     * @return int
     */
    public function getStatHash()
    {
        return $this->statHash;
    }

    /**
     * @param int $statHash
     * @return SummaryCharacterBaseStat
     */
    public function setStatHash($statHash)
    {
        $this->statHash = (int) $statHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return SummaryCharacterBaseStat
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
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
     * @return SummaryCharacterBaseStat
     */
    public function setMaximumValue($maximumValue)
    {
        $this->maximumValue = (int) $maximumValue;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return SummaryCharacterBaseStat
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('statHash')
            ->add('value')
            ->add('maximumValue');
        return $mapper->map($val);
    }
}
