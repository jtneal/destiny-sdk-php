<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class InventoryItemTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $item = (new InventoryItem())
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
}
