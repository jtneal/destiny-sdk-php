<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class InventoryItemEquippingBlockTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class InventoryItemEquippingBlockTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $block = (new InventoryItemEquippingBlock())
            ->setWeaponSandboxPatternIndex(39)
            ->setGearArtArrangementIndex(1229)
            ->setDefaultDyes(new Collection(InventoryItemDye::class))
            ->setLockedDyes(new Collection(InventoryItemDye::class))
            ->setCustomDyes(new Collection(InventoryItemDye::class))
            ->setCustomDyeExpression(new DirectorBookExpression())
            ->setWeaponPatternHash(2786088834)
            ->setArrangements(new Collection(InventoryItemEquippingBlockArrangement::class));

        $this->assertEquals(39, $block->getWeaponSandboxPatternIndex());
        $this->assertEquals(1229, $block->getGearArtArrangementIndex());
        $this->assertEquals(new Collection(InventoryItemDye::class), $block->getDefaultDyes());
        $this->assertEquals(new Collection(InventoryItemDye::class), $block->getLockedDyes());
        $this->assertEquals(new Collection(InventoryItemDye::class), $block->getCustomDyes());
        $this->assertEquals(new DirectorBookExpression(), $block->getCustomDyeExpression());
        $this->assertEquals(2786088834, $block->getWeaponPatternHash());
        $this->assertEquals(new Collection(InventoryItemEquippingBlockArrangement::class), $block->getArrangements());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventoryItemEquippingBlock::toObject(null, [
            'weaponSandboxPatternIndex' => 39,
            'gearArtArrangementIndex' => 1229,
            'defaultDyes' => [],
            'lockedDyes' => [],
            'customDyes' => [],
            'customDyeExpression' => [],
            'weaponPatternHash' => 2786088834,
            'arrangements' => []
        ]);

        $expected = (new InventoryItemEquippingBlock())
            ->setWeaponSandboxPatternIndex(39)
            ->setGearArtArrangementIndex(1229)
            ->setDefaultDyes(new Collection(InventoryItemDye::class))
            ->setLockedDyes(new Collection(InventoryItemDye::class))
            ->setCustomDyes(new Collection(InventoryItemDye::class))
            ->setCustomDyeExpression((new DirectorBookExpression()))
            ->setWeaponPatternHash(2786088834)
            ->setArrangements(new Collection(InventoryItemEquippingBlockArrangement::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventoryItemEquippingBlock::toCollection(null, [
            [
                'weaponSandboxPatternIndex' => 39,
                'gearArtArrangementIndex' => 1229,
                'defaultDyes' => [],
                'lockedDyes' => [],
                'customDyes' => [],
                'customDyeExpression' => [],
                'weaponPatternHash' => 2786088834,
                'arrangements' => []
            ]
        ]);

        $expected = new Collection(InventoryItemEquippingBlock::class, [
            (new InventoryItemEquippingBlock())
                ->setWeaponSandboxPatternIndex(39)
                ->setGearArtArrangementIndex(1229)
                ->setDefaultDyes(new Collection(InventoryItemDye::class))
                ->setLockedDyes(new Collection(InventoryItemDye::class))
                ->setCustomDyes(new Collection(InventoryItemDye::class))
                ->setCustomDyeExpression((new DirectorBookExpression()))
                ->setWeaponPatternHash(2786088834)
                ->setArrangements(new Collection(InventoryItemEquippingBlockArrangement::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
