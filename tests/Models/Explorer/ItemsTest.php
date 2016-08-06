<?php

namespace Necowebs\Destiny\Models\Explorer;

use Collections\Collection;

/**
 * Class ItemsTest
 * @package Necowebs\Destiny\Models\Explorer
 */
class ItemsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $items = (new Items())
            ->setItemHashes(new Collection('int', [1274330687]))
            ->setTotalResults(1)
            ->setHasMore(false)
            ->setQuery(new ItemsQuery())
            ->setUseTotalResults(true);

        $this->assertEquals(new Collection('int', [1274330687]), $items->getItemHashes());
        $this->assertEquals(1, $items->getTotalResults());
        $this->assertEquals(false, $items->getHasMore());
        $this->assertEquals(new ItemsQuery(), $items->getQuery());
        $this->assertEquals(true, $items->getUseTotalResults());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Items::toObject(null, [
            'itemHashes' => [1274330687],
            'totalResults' => 1,
            'hasMore' => false,
            'query' => [],
            'useTotalResults' => true
        ]);

        $expected = (new Items())
            ->setItemHashes(new Collection('int', [1274330687]))
            ->setTotalResults(1)
            ->setHasMore(false)
            ->setQuery(new ItemsQuery())
            ->setUseTotalResults(true);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Items::toCollection(null, [
            [
                'itemHashes' => [1274330687],
                'totalResults' => 1,
                'hasMore' => false,
                'query' => [],
                'useTotalResults' => true
            ]
        ]);

        $expected = new Collection(Items::class, [
            (new Items())
                ->setItemHashes(new Collection('int', [1274330687]))
                ->setTotalResults(1)
                ->setHasMore(false)
                ->setQuery(new ItemsQuery())
                ->setUseTotalResults(true)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
