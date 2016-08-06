<?php

namespace Necowebs\Destiny\Services\Explorer;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ExplorerNotFoundException;
use Necowebs\Destiny\Models\Explorer\ItemsQuery;

/**
 * Class ItemsServiceTest
 * @package Necowebs\Destiny\Services\Explorer
 */
class ItemsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Items
     */
    public function testGetItems()
    {
        $items = (new ItemsService())->getItems(['name' => 'Gjallarhorn']);

        $this->assertEquals(new Collection('int', [1274330687]), $items->getItemHashes());
        $this->assertEquals(1, $items->getTotalResults());
        $this->assertEquals(false, $items->getHasMore());
        $this->assertInstanceOf(ItemsQuery::class, $items->getQuery());
        $this->assertEquals(true, $items->getUseTotalResults());
    }

    /**
     * Test Get Items Exception
     */
    public function testGetItemsException()
    {
        $this->expectException(ExplorerNotFoundException::class);

        $items = (new ItemsService())->getItems(['definitions' => 'Fail']);
    }
}

