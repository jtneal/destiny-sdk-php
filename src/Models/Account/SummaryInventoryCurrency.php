<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class SummaryInventoryCurrency
 * @package Necowebs\Destiny\Models\Manifest
 */
class SummaryInventoryCurrency
{
    /**
     * @var int
     */
    private $itemHash;

    /**
     * @var int
     */
    private $value;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return SummaryInventoryCurrency
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
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
     * @return SummaryInventoryCurrency
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
        return $this;
    }
}
