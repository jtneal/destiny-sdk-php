<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\AdvisorRecordBook;

/**
 * Class AdvisorsForAccountServiceTest
 * @package Necowebs\Destiny\Services\Account
 */
class AdvisorsForAccountServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Advisors For Account
     */
    public function testGetAdvisorsForAccount()
    {
        $advisors = (new AdvisorsForAccountService())->getAdvisorsForAccount(2, '4611686018450406180');

        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $advisors->getNextWeeklyReset());
        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $advisors->getNextDailyReset());
        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $advisors->getPreviousWeeklyReset());
        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $advisors->getPreviousDailyReset());
        $this->assertContainsOnlyInstancesOf(AdvisorRecordBook::class, $advisors->getRecordBooks());
    }

    /**
     * Test Get Advisors For Account Exception
     */
    public function testGetAdvisorsForAccountException()
    {
        $this->expectException(AccountNotFoundException::class);

        $advisors = (new AdvisorsForAccountService())->getAdvisorsForAccount(0, 'Fail');
    }
}
