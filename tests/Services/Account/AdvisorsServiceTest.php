<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\AdvisorRecordBook;

/**
 * Class AdvisorsServiceTest
 * @package Necowebs\Destiny\Services\Account
 */
class AdvisorsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Advisors
     */
    public function testGetAdvisors()
    {
        $advisors = (new AdvisorsService())->getAdvisors(2, '4611686018450406180');

        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $advisors->getNextWeeklyReset());
        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $advisors->getNextDailyReset());
        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $advisors->getPreviousWeeklyReset());
        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $advisors->getPreviousDailyReset());
        $this->assertContainsOnlyInstancesOf(AdvisorRecordBook::class, $advisors->getRecordBooks());
    }

    /**
     * Test Get Summary Exception
     */
    public function testGetSummaryException()
    {
        $this->expectException(AccountNotFoundException::class);

        $advisors = (new AdvisorsService())->getAdvisors(0, 'Fail');
    }
}
