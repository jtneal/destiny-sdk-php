<?php

namespace Necowebs\Destiny\Models\Manifest;

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
}
