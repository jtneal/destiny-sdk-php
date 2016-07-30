<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\InventoryItemNotFoundException;
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
            ->setBucket((new InventoryBucket())
                ->setBucketHash(953998645)
                ->setBucketName('Heavy Weapons')
                ->setBucketDescription('Machine guns and rocket launchers.')
                ->setScope(0)
                ->setCategory(3)
                ->setBucketOrder(40)
                ->setBucketIdentifier('BUCKET_HEAVY_WEAPON')
                ->setItemCount(10)
                ->setLocation(1)
                ->setHasTransferDestination(true)
                ->setEnabled(true)
                ->setHash(953998645)
                ->setIndex(0)
            );

        $this->assertEquals($expected, $item);
    }

    /**
     * Test Get Item Exception
     */
    public function testGetItemException()
    {
        $this->expectException(InventoryItemNotFoundException::class);

        $item = (new InventoryItemService())->getItem('Fail');
    }
}
