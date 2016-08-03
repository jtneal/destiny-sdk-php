<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class InventoryItemDye
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemDye
{
    /**
     * @var int
     */
    private $channelHash;

    /**
     * @var int
     */
    private $dyeHash;

    /**
     * @return int
     */
    public function getChannelHash()
    {
        return $this->channelHash;
    }

    /**
     * @param int $channelHash
     * @return InventoryItemDye
     */
    public function setChannelHash($channelHash)
    {
        $this->channelHash = (int) $channelHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyeHash()
    {
        return $this->dyeHash;
    }

    /**
     * @param int $dyeHash
     * @return InventoryItemDye
     */
    public function setDyeHash($dyeHash)
    {
        $this->dyeHash = (int) $dyeHash;
        return $this;
    }
}
