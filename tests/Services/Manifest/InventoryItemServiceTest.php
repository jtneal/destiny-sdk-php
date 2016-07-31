<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\InventoryBucket;
use Necowebs\Destiny\Models\Manifest\InventoryItem;

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

        $expected = (new InventoryItem())
            ->setItemHash(1274330687)
            ->setItemName('Gjallarhorn')
            ->setItemDescription('"If there is beauty in destruction, why not also in its delivery?" - Feizel Crux')
            ->setIcon('/common/destiny_content/icons/eb8377390504838c0190d8d56e70d28e.jpg')
            ->setHasIcon(true)
            ->setSecondaryIcon('/img/misc/missing_icon.png')
            ->setTierTypeName('Exotic')
            ->setTierType(6)
            ->setItemTypeName('Rocket Launcher')
            ->setBucketTypeHash(953998645);

        $this->assertEquals($expected, $item);
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
