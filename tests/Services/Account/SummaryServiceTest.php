<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\SummaryCharacter;
use Necowebs\Destiny\Models\Account\SummaryInventory;

/**
 * Class SummaryServiceTest
 * @package Necowebs\Destiny\Services\Account
 */
class SummaryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Summary
     */
    public function testGetSummary()
    {
        $summary = (new SummaryService())->getSummary(2, '4611686018450406180');

        $this->assertEquals('4611686018450406180', $summary->getMembershipId());
        $this->assertEquals(2, $summary->getMembershipType());
        $this->assertContainsOnlyInstancesOf(SummaryCharacter::class, $summary->getCharacters());
        $this->assertEquals('Char Wash', $summary->getClanName());
        $this->assertEquals('CHAR', $summary->getClanTag());
        $this->assertInstanceOf(SummaryInventory::class, $summary->getInventory());
        $this->assertEquals(4620, $summary->getGrimoireScore());
        $this->assertEquals(15, $summary->getVersions());
        $this->assertEquals(1, $summary->getAccountState());
    }

    /**
     * Test Get Summary Exception
     */
    public function testGetSummaryException()
    {
        $this->expectException(AccountNotFoundException::class);

        $summary = (new SummaryService())->getSummary(0, 'Fail');
    }
}
