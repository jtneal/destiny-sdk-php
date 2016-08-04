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
}
