<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;

/**
 * Class AdvisorActivityExtendedOrderItemTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedOrderItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $item = (new AdvisorActivityExtendedOrderItem())
            ->setItemHash(1860443748)
            ->setBindStatus(0)
            ->setIsEquipped(false)
            ->setItemInstanceId('0')
            ->setItemLevel(0)
            ->setStackSize(1)
            ->setQualityLevel(0)
            ->setStats([])
            ->setPrimaryStat(new SummaryCharacterBaseStat())
            ->setCanEquip(false)
            ->setEquipRequiredLevel(0)
            ->setUnlockFlagHashRequiredToEquip(0)
            ->setCannotEquipReason(0)
            ->setDamageType(0)
            ->setDamageTypeHash(0)
            ->setDamageTypeNodeIndex(-1)
            ->setDamageTypeStepIndex(-1)
            ->setProgression(new SummaryCharacterLevelProgression())
            ->setTalentGridHash(0)
            ->setNodes([])
            ->setUseCustomDyes(false)
            ->setArtRegions([])
            ->setIsEquipment(false)
            ->setIsGridComplete(false)
            ->setPerks([])
            ->setLocation(3)
            ->setTransferStatus(2)
            ->setLocked(false)
            ->setLockable(false)
            ->setObjectives([])
            ->setState(0);

        $this->assertEquals(1860443748, $item->getItemHash());
        $this->assertEquals(0, $item->getBindStatus());
        $this->assertEquals(false, $item->getIsEquipped());
        $this->assertEquals('0', $item->getItemInstanceId());
        $this->assertEquals(0, $item->getItemLevel());
        $this->assertEquals(1, $item->getStackSize());
        $this->assertEquals(0, $item->getQualityLevel());
        $this->assertEquals([], $item->getStats());
        $this->assertEquals(new SummaryCharacterBaseStat(), $item->getPrimaryStat());
        $this->assertEquals(false, $item->getCanEquip());
        $this->assertEquals(0, $item->getEquipRequiredLevel());
        $this->assertEquals(0, $item->getUnlockFlagHashRequiredToEquip());
        $this->assertEquals(0, $item->getCannotEquipReason());
        $this->assertEquals(0, $item->getDamageType());
        $this->assertEquals(0, $item->getDamageTypeHash());
        $this->assertEquals(-1, $item->getDamageTypeNodeIndex());
        $this->assertEquals(-1, $item->getDamageTypeStepIndex());
        $this->assertEquals(new SummaryCharacterLevelProgression(), $item->getProgression());
        $this->assertEquals(0, $item->getTalentGridHash());
        $this->assertEquals([], $item->getNodes());
        $this->assertEquals(false, $item->getUseCustomDyes());
        $this->assertEquals([], $item->getArtRegions());
        $this->assertEquals(false, $item->getIsEquipment());
        $this->assertEquals(false, $item->getIsGridComplete());
        $this->assertEquals([], $item->getPerks());
        $this->assertEquals(3, $item->getLocation());
        $this->assertEquals(2, $item->getTransferStatus());
        $this->assertEquals(false, $item->getLocked());
        $this->assertEquals(false, $item->getLockable());
        $this->assertEquals([], $item->getObjectives());
        $this->assertEquals(0, $item->getState());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityExtendedOrderItem::toObject(null, [
            'itemHash' => 1860443748,
            'bindStatus' => 0,
            'isEquipped' => false,
            'itemInstanceId' => '0',
            'itemLevel' => 0,
            'stackSize' => 1,
            'qualityLevel' => 0,
            'stats' => [],
            'primaryStat' => [],
            'canEquip' => false,
            'equipRequiredLevel' => 0,
            'unlockFlagHashRequiredToEquip' => 0,
            'cannotEquipReason' => 0,
            'damageType' => 0,
            'damageTypeHash' => 0,
            'damageTypeNodeIndex' => -1,
            'damageTypeStepIndex' => -1,
            'progression' => [],
            'talentGridHash' => 0,
            'nodes' => [],
            'useCustomDyes' => false,
            'artRegions' => [],
            'isEquipment' => false,
            'isGridComplete' => false,
            'perks' => [],
            'location' => 3,
            'transferStatus' => 2,
            'locked' => false,
            'lockable' => false,
            'objectives' => [],
            'state' => 0
        ]);

        $expected = (new AdvisorActivityExtendedOrderItem())
            ->setItemHash(1860443748)
            ->setBindStatus(0)
            ->setIsEquipped(false)
            ->setItemInstanceId('0')
            ->setItemLevel(0)
            ->setStackSize(1)
            ->setQualityLevel(0)
            ->setStats([])
            ->setPrimaryStat(new SummaryCharacterBaseStat())
            ->setCanEquip(false)
            ->setEquipRequiredLevel(0)
            ->setUnlockFlagHashRequiredToEquip(0)
            ->setCannotEquipReason(0)
            ->setDamageType(0)
            ->setDamageTypeHash(0)
            ->setDamageTypeNodeIndex(-1)
            ->setDamageTypeStepIndex(-1)
            ->setProgression(new SummaryCharacterLevelProgression())
            ->setTalentGridHash(0)
            ->setNodes([])
            ->setUseCustomDyes(false)
            ->setArtRegions([])
            ->setIsEquipment(false)
            ->setIsGridComplete(false)
            ->setPerks([])
            ->setLocation(3)
            ->setTransferStatus(2)
            ->setLocked(false)
            ->setLockable(false)
            ->setObjectives([])
            ->setState(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityExtendedOrderItem::toCollection(null, [
            [
                'itemHash' => 1860443748,
                'bindStatus' => 0,
                'isEquipped' => false,
                'itemInstanceId' => '0',
                'itemLevel' => 0,
                'stackSize' => 1,
                'qualityLevel' => 0,
                'stats' => [],
                'primaryStat' => [],
                'canEquip' => false,
                'equipRequiredLevel' => 0,
                'unlockFlagHashRequiredToEquip' => 0,
                'cannotEquipReason' => 0,
                'damageType' => 0,
                'damageTypeHash' => 0,
                'damageTypeNodeIndex' => -1,
                'damageTypeStepIndex' => -1,
                'progression' => [],
                'talentGridHash' => 0,
                'nodes' => [],
                'useCustomDyes' => false,
                'artRegions' => [],
                'isEquipment' => false,
                'isGridComplete' => false,
                'perks' => [],
                'location' => 3,
                'transferStatus' => 2,
                'locked' => false,
                'lockable' => false,
                'objectives' => [],
                'state' => 0
            ]
        ]);

        $expected = new Collection(AdvisorActivityExtendedOrderItem::class, [
            (new AdvisorActivityExtendedOrderItem())
                ->setItemHash(1860443748)
                ->setBindStatus(0)
                ->setIsEquipped(false)
                ->setItemInstanceId('0')
                ->setItemLevel(0)
                ->setStackSize(1)
                ->setQualityLevel(0)
                ->setStats([])
                ->setPrimaryStat(new SummaryCharacterBaseStat())
                ->setCanEquip(false)
                ->setEquipRequiredLevel(0)
                ->setUnlockFlagHashRequiredToEquip(0)
                ->setCannotEquipReason(0)
                ->setDamageType(0)
                ->setDamageTypeHash(0)
                ->setDamageTypeNodeIndex(-1)
                ->setDamageTypeStepIndex(-1)
                ->setProgression(new SummaryCharacterLevelProgression())
                ->setTalentGridHash(0)
                ->setNodes([])
                ->setUseCustomDyes(false)
                ->setArtRegions([])
                ->setIsEquipment(false)
                ->setIsGridComplete(false)
                ->setPerks([])
                ->setLocation(3)
                ->setTransferStatus(2)
                ->setLocked(false)
                ->setLockable(false)
                ->setObjectives([])
                ->setState(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
