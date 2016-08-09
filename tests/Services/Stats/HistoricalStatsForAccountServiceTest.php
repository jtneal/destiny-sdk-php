<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\AccountCharacter;

/**
 * Class HistoricalStatsForAccountServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class HistoricalStatsForAccountServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Historical Stats For Account
     */
    public function testGetHistoricalStatsForAccount()
    {
        $account = (new HistoricalStatsForAccountService())->getHistoricalStatsForAccount(2, '4611686018450406180');

        $this->assertInstanceOf(AccountCharacter::class, $account->getMergedDeletedCharacters());
        $this->assertInstanceOf(AccountCharacter::class, $account->getMergedAllCharacters());
        $this->assertContainsOnlyInstancesOf(AccountCharacter::class, $account->getCharacters());
    }

    /**
     * Test Get Historical Stats For Account Exception
     */
    public function testGetHistoricalStatsForAccountException()
    {
        $this->expectException(StatsNotFoundException::class);

        $account = (new HistoricalStatsForAccountService())->getHistoricalStatsForAccount(0, 'Fail');
    }
}
