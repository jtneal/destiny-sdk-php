<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\SandboxPerk;
use Necowebs\Destiny\Models\Manifest\SandboxPerkGroup;

/**
 * Class SandboxPerkServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class SandboxPerkServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Sandbox Perk
     */
    public function testGetSandboxPerk()
    {
        $perk = (new SandboxPerkService())->getSandboxPerk(2425591494);

        $expected = (new SandboxPerk())
            ->setPerkHash(2425591494)
            ->setDisplayName('Grenades and Horseshoes')
            ->setDisplayDescription('Rockets from this weapon will detonate early based on proximity to targets.')
            ->setDisplayIcon('/common/destiny_content/icons/4f3239a2339ec55773ca2f0786781a04.png')
            ->setIsDisplayable(true)
            ->setPerkGroups((new SandboxPerkGroup())
                ->setWeaponPerformance(1024)
                ->setImpactEffects(0)
                ->setGuardianAttributes(0)
                ->setLightAbilities(0)
                ->setDamageTypes(0)
            )
            ->setHash(2425591494)
            ->setIndex(0);

        $this->assertEquals($expected, $perk);
    }

    /**
     * Test Get Sandbox Perk Exception
     */
    public function testGetSandboxPerkException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $perk = (new SandboxPerkService())->getSandboxPerk('Fail');
    }
}
