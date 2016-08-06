<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class SandboxPerkGroupTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class SandboxPerkGroupTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $group = (new SandboxPerkGroup())
            ->setWeaponPerformance(1024)
            ->setImpactEffects(0)
            ->setGuardianAttributes(0)
            ->setLightAbilities(0)
            ->setDamageTypes(0);

        $this->assertEquals(1024, $group->getWeaponPerformance());
        $this->assertEquals(0, $group->getImpactEffects());
        $this->assertEquals(0, $group->getGuardianAttributes());
        $this->assertEquals(0, $group->getLightAbilities());
        $this->assertEquals(0, $group->getDamageTypes());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = SandboxPerkGroup::toObject(null, [
            'weaponPerformance' => 1,
            'impactEffects' => 2,
            'guardianAttributes' => 3,
            'lightAbilities' => 4,
            'damageTypes' => 5
        ]);

        $expected = (new SandboxPerkGroup())
            ->setWeaponPerformance(1)
            ->setImpactEffects(2)
            ->setGuardianAttributes(3)
            ->setLightAbilities(4)
            ->setDamageTypes(5);


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = SandboxPerkGroup::toCollection(null, [
            [
                'weaponPerformance' => 1,
                'impactEffects' => 2,
                'guardianAttributes' => 3,
                'lightAbilities' => 4,
                'damageTypes' => 5
            ]
        ]);

        $expected = new Collection(SandboxPerkGroup::class, [
            (new SandboxPerkGroup())
                ->setWeaponPerformance(1)
                ->setImpactEffects(2)
                ->setGuardianAttributes(3)
                ->setLightAbilities(4)
                ->setDamageTypes(5)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
