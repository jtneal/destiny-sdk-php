<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class SummaryCharacterBaseStat
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBaseStat
{
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
}
