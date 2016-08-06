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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Advisor::toObject(null, [
            'nextWeeklyReset' => '2016-08-09T09:00:00Z',
            'nextDailyReset' => '2016-08-04T09:00:00Z',
            'previousWeeklyReset' => '2016-08-02T09:00:00Z',
            'previousDailyReset' => '2016-08-03T09:00:00Z',
            'recordBooks' => []
        ]);

        $expected = (new Advisor())
            ->setNextWeeklyReset('2016-08-09T09:00:00Z')
            ->setNextDailyReset('2016-08-04T09:00:00Z')
            ->setPreviousWeeklyReset('2016-08-02T09:00:00Z')
            ->setPreviousDailyReset('2016-08-03T09:00:00Z')
            ->setRecordBooks(new Collection(AdvisorRecordBook::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Advisor::toCollection(null, [
            [
                'nextWeeklyReset' => '2016-08-09T09:00:00Z',
                'nextDailyReset' => '2016-08-04T09:00:00Z',
                'previousWeeklyReset' => '2016-08-02T09:00:00Z',
                'previousDailyReset' => '2016-08-03T09:00:00Z',
                'recordBooks' => []
            ]
        ]);

        $expected = new Collection(Advisor::class, [
            (new Advisor())
                ->setNextWeeklyReset('2016-08-09T09:00:00Z')
                ->setNextDailyReset('2016-08-04T09:00:00Z')
                ->setPreviousWeeklyReset('2016-08-02T09:00:00Z')
                ->setPreviousDailyReset('2016-08-03T09:00:00Z')
                ->setRecordBooks(new Collection(AdvisorRecordBook::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
