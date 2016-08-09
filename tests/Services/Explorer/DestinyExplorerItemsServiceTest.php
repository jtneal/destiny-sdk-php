<?php

namespace Necowebs\Destiny\Services\Explorer;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ExplorerNotFoundException;
use Necowebs\Destiny\Models\Explorer\ItemsQuery;

/**
 * Class DestinyExplorerItemsServiceTest
 * @package Necowebs\Destiny\Services\Explorer
 */
class DestinyExplorerItemsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Destiny Explorer Items
     */
    public function testGetDestinyExplorerItems()
    {
        $items = (new DestinyExplorerItemsService())->getDestinyExplorerItems(['name' => 'Gjallarhorn']);

        $this->assertEquals(new Collection('int', [1274330687]), $items->getItemHashes());
        $this->assertEquals(1, $items->getTotalResults());
        $this->assertEquals(false, $items->getHasMore());
        $this->assertInstanceOf(ItemsQuery::class, $items->getQuery());
        $this->assertEquals(true, $items->getUseTotalResults());
    }

    /**
     * Test Get Destiny Explorer Items Exception
     */
    public function testGetDestinyExplorerItemsException()
    {
        $this->expectException(ExplorerNotFoundException::class);

        $items = (new DestinyExplorerItemsService())->getDestinyExplorerItems(['definitions' => 'Fail']);
    }
}

