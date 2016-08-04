<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class AdvisorTest
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $advisor = (new Advisor())
            ->setNextWeeklyReset('2016-08-09T09:00:00Z')
            ->setNextDailyReset('2016-08-04T09:00:00Z')
            ->setPreviousWeeklyReset('2016-08-02T09:00:00Z')
            ->setPreviousDailyReset('2016-08-03T09:00:00Z')
            ->setRecordBooks(new Collection(AdvisorRecordBook::class));

        $this->assertEquals('2016-08-09T09:00:00Z', $advisor->getNextWeeklyReset());
        $this->assertEquals('2016-08-04T09:00:00Z', $advisor->getNextDailyReset());
        $this->assertEquals('2016-08-02T09:00:00Z', $advisor->getPreviousWeeklyReset());
        $this->assertEquals('2016-08-03T09:00:00Z', $advisor->getPreviousDailyReset());
        $this->assertEquals(new Collection(AdvisorRecordBook::class), $advisor->getRecordBooks());
    }
}
