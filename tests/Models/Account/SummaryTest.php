<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $summary = (new Summary())
            ->setMembershipId('4611686018450406180')
            ->setMembershipType(2)
            ->setCharacters(new Collection(SummaryCharacter::class))
            ->setClanName('Char Wash')
            ->setClanTag('CHAR')
            ->setInventory(new SummaryInventory())
            ->setGrimoireScore(4620)
            ->setVersions(15)
            ->setAccountState(1);

        $this->assertEquals('4611686018450406180', $summary->getMembershipId());
        $this->assertEquals(2, $summary->getMembershipType());
        $this->assertEquals(new Collection(SummaryCharacter::class), $summary->getCharacters());
        $this->assertEquals('Char Wash', $summary->getClanName());
        $this->assertEquals('CHAR', $summary->getClanTag());
        $this->assertEquals(new SummaryInventory(), $summary->getInventory());
        $this->assertEquals(4620, $summary->getGrimoireScore());
        $this->assertEquals(15, $summary->getVersions());
        $this->assertEquals(1, $summary->getAccountState());
    }
}
