<?php

namespace Necowebs\Destiny\Models\Traits;

use Collections\Collection;

/**
 * Trait ModelTrait
 * @package Necowebs\Destiny\Models\Traits
 */
trait ModelTrait
{
    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function toCollection($obj, array $val)
    {
        return new Collection(self::class, array_map(self::class . '::toObject', [], $val));
    }
}
