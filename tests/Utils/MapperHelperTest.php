<?php

namespace Necowebs\Destiny\Utils;

use Collections\Collection;

/**
 * Class MapperHelperTest
 * @package Necowebs\Destiny\Utils
 */
class MapperHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Map Array To Collection Int
     */
    public function testMapArrayToCollectionInt()
    {
        $ints = MapperHelper::mapArrayToCollectionInt(null, [1, 2, 3, 4]);

        $expected = new Collection('int', [1, 2, 3, 4]);

        $this->assertEquals($expected, $ints);
    }

    /**
     * Test Map Array To Collection String
     */
    public function testMapArrayToCollectionString()
    {
        $strings = MapperHelper::mapArrayToCollectionString(null, ['one', 'two', 'three', 'four']);

        $expected = new Collection('string', ['one', 'two', 'three', 'four']);

        $this->assertEquals($expected, $strings);
    }
}
