<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\SummaryCharacter;
use Necowebs\Destiny\Models\Account\SummaryInventory;

/**
 * Class AccountSummaryServiceTest
 * @package Necowebs\Destiny\Services\Account
 */
class AccountSummaryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Account Summary
     */
    public function testGetAccountSummary()
    {
        $summary = (new AccountSummaryService())->getAccountSummary(2, '4611686018450406180');

        $this->assertEquals('4611686018450406180', $summary->getMembershipId());
        $this->assertEquals(2, $summary->getMembershipType());
        $this->assertContainsOnlyInstancesOf(SummaryCharacter::class, $summary->getCharacters());
        $this->assertEquals('Char Wash', $summary->getClanName());
        $this->assertEquals('CHAR', $summary->getClanTag());
        $this->assertInstanceOf(SummaryInventory::class, $summary->getInventory());
        $this->assertEquals(4620, $summary->getGrimoireScore());
        $this->assertEquals(15, $summary->getVersions());
        $this->assertEquals(4, $summary->getAccountState());
    }

    /**
     * Test Get Account Summary Exception
     */
    public function testGetAccountSummaryException()
    {
        $this->expectException(AccountNotFoundException::class);

        $summary = (new AccountSummaryService())->getAccountSummary(0, 'Fail');
    }
}
