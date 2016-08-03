<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

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
            ->setItemHash(10673376)
            ->setItemName('Winged Sun Gauntlets')
            ->setItemDescription('"Those who fly beneath the Sun do not come back unscathed." —Parables of the Allspring')
            ->setIcon('/common/destiny_content/icons/76d389cb45924ab25e8fdf245d20e1f5.jpg')
            ->setHasIcon(true)
            ->setSecondaryIcon('/img/misc/missing_icon.png')
            ->setActionName('Dismantle')
            ->setHasAction(true)
            ->setDeleteOnAction(true)
            ->setTierTypeName('Legendary')
            ->setTierType(5)
            ->setItemTypeName('Gauntlets')
            ->setBucketTypeHash(3551918588)
            ->setPrimaryBaseStatHash(3897883278)
            ->setStats(new Collection(InventoryItemStat::class))
            ->setPerkHashes(new Collection('int'))
            ->setSpecialItemType(0)
            ->setTalentGridHash(1227905893)
            ->setEquippingBlock(new InventoryItemEquippingBlock())
            ->setHasGeometry(true)
            ->setStatGroupHash(548191128)
            ->setItemLevels(new Collection('int', [0]))
            ->setQualityLevel(0)
            ->setEquippable(true)
            ->setInstanced(true)
            ->setRewardItemHash(0)
            ->setValues([])
            ->setItemType(2)
            ->setItemSubType(0)
            ->setClassType(0)
            ->setSources(new Collection(InventoryItemSource::class))
            ->setItemCategoryHashes(new Collection('int', [22, 46, 20]))
            ->setSourceHashes(new Collection('int', [1882189853, 460228854]))
            ->setNonTransferrable(false)
            ->setExclusive(0)
            ->setMaxStackSize(1)
            ->setItemIndex(0)
            ->setSetItemHashes(new Collection('int'))
            ->setTooltipStyle('')
            ->setQuestlineItemHash(0)
            ->setNeedsFullCompletion(false)
            ->setObjectiveHashes(new Collection('int'))
            ->setAllowActions(true)
            ->setQuestTrackingUnlockValueHash(0)
            ->setBountyResetUnlockHash(0)
            ->setUniquenessHash(2166136261)
            ->setShowActiveNodesInTooltip(false)
            ->setDamageTypes(new Collection('int', [3]))
            ->setHash(10673376)
            ->setIndex(0);

        $this->assertEquals(10673376, $item->getItemHash());
        $this->assertEquals('Winged Sun Gauntlets', $item->getItemName());
        $this->assertEquals('"Those who fly beneath the Sun do not come back unscathed." —Parables of the Allspring', $item->getItemDescription());
        $this->assertEquals('/common/destiny_content/icons/76d389cb45924ab25e8fdf245d20e1f5.jpg', $item->getIcon());
        $this->assertEquals(true, $item->getHasIcon());
        $this->assertEquals('/img/misc/missing_icon.png', $item->getSecondaryIcon());
        $this->assertEquals('Dismantle', $item->getActionName());
        $this->assertEquals(true, $item->getHasAction());
        $this->assertEquals(true, $item->getDeleteOnAction());
        $this->assertEquals('Legendary', $item->getTierTypeName());
        $this->assertEquals(5, $item->getTierType());
        $this->assertEquals('Gauntlets', $item->getItemTypeName());
        $this->assertEquals(3551918588, $item->getBucketTypeHash());
        $this->assertEquals(3897883278, $item->getPrimaryBaseStatHash());
        $this->assertEquals(new Collection(InventoryItemStat::class), $item->getStats());
        $this->assertEquals(new Collection('int'), $item->getPerkHashes());
        $this->assertEquals(0, $item->getSpecialItemType());
        $this->assertEquals(1227905893, $item->getTalentGridHash());
        $this->assertEquals(new InventoryItemEquippingBlock(), $item->getEquippingBlock());
        $this->assertEquals(true, $item->getHasGeometry());
        $this->assertEquals(548191128, $item->getStatGroupHash());
        $this->assertEquals(new Collection('int', [0]), $item->getItemLevels());
        $this->assertEquals(0, $item->getQualityLevel());
        $this->assertEquals(true, $item->getEquippable());
        $this->assertEquals(true, $item->getInstanced());
        $this->assertEquals(0, $item->getRewardItemHash());
        $this->assertEquals([], $item->getValues());
        $this->assertEquals(2, $item->getItemType());
        $this->assertEquals(0, $item->getItemSubType());
        $this->assertEquals(0, $item->getClassType());
        $this->assertEquals(new Collection(InventoryItemSource::class), $item->getSources());
        $this->assertEquals(new Collection('int', [22, 46, 20]), $item->getItemCategoryHashes());
        $this->assertEquals(new Collection('int', [1882189853, 460228854]), $item->getSourceHashes());
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
        $this->assertEquals(2166136261, $item->getUniquenessHash());
        $this->assertEquals(false, $item->getShowActiveNodesInTooltip());
        $this->assertEquals(new Collection('int', [3]), $item->getDamageTypes());
        $this->assertEquals(10673376, $item->getHash());
        $this->assertEquals(0, $item->getIndex());
    }
}
