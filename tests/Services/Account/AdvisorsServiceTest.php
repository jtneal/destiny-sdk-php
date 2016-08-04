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

        $this->assertEquals('2016-08-09T09:00:00Z', $advisors->getNextWeeklyReset());
        $this->assertEquals('2016-08-04T09:00:00Z', $advisors->getNextDailyReset());
        $this->assertEquals('2016-08-02T09:00:00Z', $advisors->getPreviousWeeklyReset());
        $this->assertEquals('2016-08-03T09:00:00Z', $advisors->getPreviousDailyReset());
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
