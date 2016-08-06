<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class AdvisorRecordBookTest
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorRecordBookTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $book = (new AdvisorRecordBook())
            ->setBookHash(2175864601)
            ->setRecords(new Collection(AdvisorRecordBookRecord::class))
            ->setProgression(new SummaryCharacterLevelProgression())
            ->setCompletedCount(8)
            ->setRedeemedCount(8)
            ->setSpotlights(new Collection(AdvisorRecordBookSpotlight::class))
            ->setStartDate('2016-08-02T01:48:56.779Z')
            ->setExpirationDate('2016-09-20T00:00:00Z');

        $this->assertEquals(2175864601, $book->getBookHash());
        $this->assertEquals(new Collection(AdvisorRecordBookRecord::class), $book->getRecords());
        $this->assertEquals(new SummaryCharacterLevelProgression(), $book->getProgression());
        $this->assertEquals(8, $book->getCompletedCount());
        $this->assertEquals(8, $book->getRedeemedCount());
        $this->assertEquals(new Collection(AdvisorRecordBookSpotlight::class), $book->getSpotlights());
        $this->assertEquals('2016-08-02T01:48:56.779Z', $book->getStartDate());
        $this->assertEquals('2016-09-20T00:00:00Z', $book->getExpirationDate());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorRecordBook::toObject(null, [
            'bookHash' => 2175864601,
            'records' => [],
            'progression' => [],
            'completedCount' => 8,
            'redeemedCount' => 8,
            'spotlights' => [],
            'startDate' => '2016-08-02T01:48:56.779Z',
            'expirationDate' => '2016-09-20T00:00:00Z'
        ]);

        $expected = (new AdvisorRecordBook())
            ->setBookHash(2175864601)
            ->setRecords(new Collection(AdvisorRecordBookRecord::class))
            ->setProgression(new SummaryCharacterLevelProgression())
            ->setCompletedCount(8)
            ->setRedeemedCount(8)
            ->setSpotlights(new Collection(AdvisorRecordBookSpotlight::class))
            ->setStartDate('2016-08-02T01:48:56.779Z')
            ->setExpirationDate('2016-09-20T00:00:00Z');

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorRecordBook::toCollection(null, [
            [
                'bookHash' => 2175864601,
                'records' => [],
                'progression' => [],
                'completedCount' => 8,
                'redeemedCount' => 8,
                'spotlights' => [],
                'startDate' => '2016-08-02T01:48:56.779Z',
                'expirationDate' => '2016-09-20T00:00:00Z'
            ]
        ]);

        $expected = new Collection(AdvisorRecordBook::class, [
            (new AdvisorRecordBook())
                ->setBookHash(2175864601)
                ->setRecords(new Collection(AdvisorRecordBookRecord::class))
                ->setProgression(new SummaryCharacterLevelProgression())
                ->setCompletedCount(8)
                ->setRedeemedCount(8)
                ->setSpotlights(new Collection(AdvisorRecordBookSpotlight::class))
                ->setStartDate('2016-08-02T01:48:56.779Z')
                ->setExpirationDate('2016-09-20T00:00:00Z')
        ]);

        $this->assertEquals($expected, $collection);
    }
}
