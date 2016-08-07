<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ItemReference
 * @package Necowebs\Destiny\Models\Character
 * @todo: Identify additional fields that rarely show
 */
class ItemReference
{
    use ModelTrait;

    /**
     * @var int
     */
    private $itemHash;

    /**
     * @return int
     */
    public function getItemHash()
    {
        return $this->itemHash;
    }

    /**
     * @param int $itemHash
     * @return ItemReference
     */
    public function setItemHash($itemHash)
    {
        $this->itemHash = (int) $itemHash;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return ItemReference
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('itemHash');
        return $mapper->map($val);
    }
}
