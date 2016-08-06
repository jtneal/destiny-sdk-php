<?php

namespace Necowebs\Destiny\Models\Explorer;

use Collections\Collection;

/**
 * Class ItemsQueryTest
 * @package Necowebs\Destiny\Models\Explorer
 */
class ItemsQueryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $query = (new ItemsQuery())
            ->setItemsPerPage(10)
            ->setCurrentPage(0);

        $this->assertEquals(10, $query->getItemsPerPage());
        $this->assertEquals(0, $query->getCurrentPage());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = ItemsQuery::toObject(null, [
            'itemsPerPage' => 10,
            'currentPage' => 0
        ]);

        $expected = (new ItemsQuery())
            ->setItemsPerPage(10)
            ->setCurrentPage(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ItemsQuery::toCollection(null, [
            [
                'itemsPerPage' => 10,
                'currentPage' => 0
            ]
        ]);

        $expected = new Collection(ItemsQuery::class, [
            (new ItemsQuery())
                ->setItemsPerPage(10)
                ->setCurrentPage(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
