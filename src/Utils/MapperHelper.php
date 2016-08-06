<?php

namespace Necowebs\Destiny\Utils;

use Collections\Collection;

/**
 * Class MapperHelper
 * @package Necowebs\Destiny\Utils
 */
class MapperHelper
{
    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToCollectionInt($obj, array $val)
    {
        return new Collection('int', $val);
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Collection
     */
    public static function mapArrayToCollectionString($obj, array $val)
    {
        return new Collection('string', $val);
    }
}
