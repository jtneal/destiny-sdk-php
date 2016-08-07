<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\AccountCharacter;

/**
 * Class AccountServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class AccountServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Account
     */
    public function testGetAccount()
    {
        $account = (new AccountService())->getAccount(2, '4611686018450406180');

        $this->assertInstanceOf(AccountCharacter::class, $account->getMergedDeletedCharacters());
        $this->assertInstanceOf(AccountCharacter::class, $account->getMergedAllCharacters());
        $this->assertContainsOnlyInstancesOf(AccountCharacter::class, $account->getCharacters());
    }

    /**
     * Test Get Account Exception
     */
    public function testGetAccountException()
    {
        $this->expectException(StatsNotFoundException::class);

        $account = (new AccountService())->getAccount(0, 'Fail');
    }
}
