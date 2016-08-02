<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class VendorSummaryTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class VendorSummaryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $summary = (new VendorSummary())
            ->setVendorHash(1575820975)
            ->setVendorName('Warlock Vanguard')
            ->setVendorDescription('Respected among all Orders, Ikora Rey tutors new Warlocks with a lifetime of hard-earned knowledge.')
            ->setVendorIcon('/common/destiny_content/icons/627c0986dd67898d292e9da6414d6d2e.png')
            ->setVendorOrder(90)
            ->setFactionName('Vanguard Reputation')
            ->setFactionIcon('/common/destiny_content/icons/be454db6edaa4900c9f154909a2fd174.png')
            ->setFactionHash(468098704)
            ->setFactionDescription('Complete Vanguard Bounties to unlock powerful gear for purchase.\n\nAchieve high Rank to earn rewards.')
            ->setResetIntervalMinutes(180)
            ->setResetOffsetMinutes(32640)
            ->setVendorIdentifier('VENDOR_WARLOCK_MENTOR')
            ->setPositionX(1116)
            ->setPositionY(367)
            ->setTransitionNodeIdentifier('TOWER_NODE')
            ->setVisible(true)
            ->setProgressionHash(3233510749)
            ->setSellString('Acquire')
            ->setBuyString('Acquire')
            ->setVendorPortrait('/img/destiny_content/vendor/bbffb19be8ea4c18b2d5e68a4ba305bc.png')
            ->setVendorBanner('/img/destiny_content/vendor/VendorBanner.png')
            ->setUnlockFlagHashes(new Collection('int'))
            ->setEnabledUnlockFlagHashes(new Collection('int', [2678892537]))
            ->setMapSectionIdentifier('VANGUARD')
            ->setMapSectionName('Vanguard')
            ->setMapSectionOrder(2)
            ->setShowOnMap(true)
            ->setEventHash(0)
            ->setVendorCategoryHash(2)
            ->setVendorCategoryHashes(new Collection('int', [2]))
            ->setVendorSubcategoryHash(300)
            ->setInhibitBuying(false);

        $this->assertEquals(1575820975, $summary->getVendorHash());
        $this->assertEquals('Warlock Vanguard', $summary->getVendorName());
        $this->assertEquals('Respected among all Orders, Ikora Rey tutors new Warlocks with a lifetime of hard-earned knowledge.', $summary->getVendorDescription());
        $this->assertEquals('/common/destiny_content/icons/627c0986dd67898d292e9da6414d6d2e.png', $summary->getVendorIcon());
        $this->assertEquals(90, $summary->getVendorOrder());
        $this->assertEquals('Vanguard Reputation', $summary->getFactionName());
        $this->assertEquals('/common/destiny_content/icons/be454db6edaa4900c9f154909a2fd174.png', $summary->getFactionIcon());
        $this->assertEquals(468098704, $summary->getFactionHash());
        $this->assertEquals('Complete Vanguard Bounties to unlock powerful gear for purchase.\n\nAchieve high Rank to earn rewards.', $summary->getFactionDescription());
        $this->assertEquals(180, $summary->getResetIntervalMinutes());
        $this->assertEquals(32640, $summary->getResetOffsetMinutes());
        $this->assertEquals('VENDOR_WARLOCK_MENTOR', $summary->getVendorIdentifier());
        $this->assertEquals(1116, $summary->getPositionX());
        $this->assertEquals(367, $summary->getPositionY());
        $this->assertEquals('TOWER_NODE', $summary->getTransitionNodeIdentifier());
        $this->assertEquals(true, $summary->getVisible());
        $this->assertEquals(3233510749, $summary->getProgressionHash());
        $this->assertEquals('Acquire', $summary->getSellString());
        $this->assertEquals('Acquire', $summary->getBuyString());
        $this->assertEquals('/img/destiny_content/vendor/bbffb19be8ea4c18b2d5e68a4ba305bc.png', $summary->getVendorPortrait());
        $this->assertEquals('/img/destiny_content/vendor/VendorBanner.png', $summary->getVendorBanner());
        $this->assertEquals(new Collection('int'), $summary->getUnlockFlagHashes());
        $this->assertEquals(new Collection('int', [2678892537]), $summary->getEnabledUnlockFlagHashes());
        $this->assertEquals('VANGUARD', $summary->getMapSectionIdentifier());
        $this->assertEquals('Vanguard', $summary->getMapSectionName());
        $this->assertEquals(2, $summary->getMapSectionOrder());
        $this->assertEquals(true, $summary->getShowOnMap());
        $this->assertEquals(0, $summary->getEventHash());
        $this->assertEquals(2, $summary->getVendorCategoryHash());
        $this->assertEquals(new Collection('int', [2]), $summary->getVendorCategoryHashes());
        $this->assertEquals(300, $summary->getVendorSubcategoryHash());
        $this->assertEquals(false, $summary->getInhibitBuying());
    }
}
