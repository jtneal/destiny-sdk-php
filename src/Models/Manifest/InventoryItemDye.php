<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
/**
 * Class InventoryItemDye
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemDye
{
    use ModelTrait;

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

    /**
     * @param mixed $obj
     * @param array $val
     * @return InventoryItemDye
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('channelHash')
            ->add('dyeHash');
        return $mapper->map($val);
    }
}
