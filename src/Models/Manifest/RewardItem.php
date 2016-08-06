<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class RewardItem
 * @package Necowebs\Destiny\Models\Manifest
 */
class RewardItem
{
    use ModelTrait;

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

    /**
     * @param mixed $obj
     * @param array $val
     * @return RewardItem
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('itemHash')
            ->add('value');
        return $mapper->map($val);
    }
}
