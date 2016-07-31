<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class SandboxPerkTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class SandboxPerkTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $perk = (new SandboxPerk())
            ->setPerkHash(2425591494)
            ->setDisplayName('Grenades and Horseshoes')
            ->setDisplayDescription('Rockets from this weapon will detonate early based on proximity to targets.')
            ->setDisplayIcon('/common/destiny_content/icons/4f3239a2339ec55773ca2f0786781a04.png')
            ->setIsDisplayable(true)
            ->setPerkGroups(new SandboxPerkGroup())
            ->setHash(2425591494)
            ->setIndex(0);

        $this->assertEquals(2425591494, $perk->getPerkHash());
        $this->assertEquals('Grenades and Horseshoes', $perk->getDisplayName());
        $this->assertEquals('Rockets from this weapon will detonate early based on proximity to targets.', $perk->getDisplayDescription());
        $this->assertEquals('/common/destiny_content/icons/4f3239a2339ec55773ca2f0786781a04.png', $perk->getDisplayIcon());
        $this->assertEquals(true, $perk->getIsDisplayable());
        $this->assertEquals(new SandboxPerkGroup(), $perk->getPerkGroups());
        $this->assertEquals(2425591494, $perk->getHash());
        $this->assertEquals(0, $perk->getIndex());
    }
}
