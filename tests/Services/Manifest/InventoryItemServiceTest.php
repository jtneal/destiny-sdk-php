<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

/**
 * Class InventoryItemServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class InventoryItemServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Item
     */
    public function testGetItem()
    {
        $item = (new InventoryItemService())->getItem(1274330687);

        $this->assertEquals(1274330687, $item->getItemHash());
        $this->assertEquals('Gjallarhorn', $item->getItemName());
        $this->assertEquals('"If there is beauty in destruction, why not also in its delivery?" - Feizel Crux', $item->getItemDescription());
        $this->assertEquals('/common/destiny_content/icons/eb8377390504838c0190d8d56e70d28e.jpg', $item->getIcon());
        $this->assertEquals(true, $item->getHasIcon());
        $this->assertEquals('/img/misc/missing_icon.png', $item->getSecondaryIcon());
        $this->assertEquals('Exotic', $item->getTierTypeName());
        $this->assertEquals(6, $item->getTierType());
        $this->assertEquals('Rocket Launcher', $item->getItemTypeName());
        $this->assertEquals(953998645, $item->getBucketTypeHash());
    }

    /**
     * Test Get Item Exception
     */
    public function testGetItemException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $item = (new InventoryItemService())->getItem('Fail');
    }
}
