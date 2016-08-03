<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\InventoryItemEquippingBlock;
use Necowebs\Destiny\Models\Manifest\InventoryItemSource;
use Necowebs\Destiny\Models\Manifest\InventoryItemStat;

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
        $this->assertEquals('Dismantle', $item->getActionName());
        $this->assertEquals(true, $item->getHasAction());
        $this->assertEquals(true, $item->getDeleteOnAction());
        $this->assertEquals('Exotic', $item->getTierTypeName());
        $this->assertEquals(6, $item->getTierType());
        $this->assertEquals('Rocket Launcher', $item->getItemTypeName());
        $this->assertEquals(953998645, $item->getBucketTypeHash());
        $this->assertEquals(368428387, $item->getPrimaryBaseStatHash());
        $this->assertContainsOnlyInstancesOf(InventoryItemStat::class, $item->getStats());
        $this->assertEquals(new Collection('int'), $item->getPerkHashes());
        $this->assertEquals(0, $item->getSpecialItemType());
        $this->assertEquals(2786088834, $item->getTalentGridHash());
        $this->assertInstanceOf(InventoryItemEquippingBlock::class, $item->getEquippingBlock());
        $this->assertEquals(true, $item->getHasGeometry());
        $this->assertEquals(660767731, $item->getStatGroupHash());
        $this->assertEquals(new Collection('int', [20]), $item->getItemLevels());
        $this->assertEquals(70, $item->getQualityLevel());
        $this->assertEquals(true, $item->getEquippable());
        $this->assertEquals(true, $item->getInstanced());
        $this->assertEquals(0, $item->getRewardItemHash());
        $this->assertEquals([], $item->getValues());
        $this->assertEquals(3, $item->getItemType());
        $this->assertEquals(10, $item->getItemSubType());
        $this->assertEquals(3, $item->getClassType());
        $this->assertContainsOnlyInstancesOf(InventoryItemSource::class, $item->getSources());
        $this->assertEquals(new Collection('int', [1, 4, 13]), $item->getItemCategoryHashes());
        $this->assertEquals(new Collection('int', [113998144, 36493462, 1882189853, 686593720, 3107502809, 3870113141, 541934873, 941581325]), $item->getSourceHashes());
        $this->assertEquals(false, $item->getNonTransferrable());
        $this->assertEquals(0, $item->getExclusive());
        $this->assertEquals(1, $item->getMaxStackSize());
        $this->assertEquals(0, $item->getItemIndex());
        $this->assertEquals(new Collection('int'), $item->getSetItemHashes());
        $this->assertEquals('', $item->getTooltipStyle());
        $this->assertEquals(0, $item->getQuestlineItemHash());
        $this->assertEquals(false, $item->getNeedsFullCompletion());
        $this->assertEquals(new Collection('int'), $item->getObjectiveHashes());
        $this->assertEquals(true, $item->getAllowActions());
        $this->assertEquals(0, $item->getQuestTrackingUnlockValueHash());
        $this->assertEquals(0, $item->getBountyResetUnlockHash());
        $this->assertEquals(3671135542, $item->getUniquenessHash());
        $this->assertEquals(false, $item->getShowActiveNodesInTooltip());
        $this->assertEquals(new Collection('int', [3]), $item->getDamageTypes());
        $this->assertEquals(1274330687, $item->getHash());
        $this->assertEquals(0, $item->getIndex());
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
