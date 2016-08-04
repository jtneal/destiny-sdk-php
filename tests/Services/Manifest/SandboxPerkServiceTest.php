<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
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

        $this->assertEquals(2425591494, $perk->getPerkHash());
        $this->assertEquals('Grenades and Horseshoes', $perk->getDisplayName());
        $this->assertEquals('Rockets from this weapon will detonate early based on proximity to targets.', $perk->getDisplayDescription());
        $this->assertEquals('/common/destiny_content/icons/6902d5c9cd4d297bab898130de2eb7b5.png', $perk->getDisplayIcon());
        $this->assertEquals(true, $perk->getIsDisplayable());
        $this->assertInstanceOf(SandboxPerkGroup::class, $perk->getPerkGroups());
        $this->assertEquals(2425591494, $perk->getHash());
        $this->assertEquals(0, $perk->getIndex());
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
