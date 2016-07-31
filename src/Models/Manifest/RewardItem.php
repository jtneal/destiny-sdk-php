<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class RewardItem
 * @package Necowebs\Destiny\Models\Manifest
 */
class RewardItem
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
     * @return RewardItem
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = $itemHash;
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
     * @return RewardItem
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
