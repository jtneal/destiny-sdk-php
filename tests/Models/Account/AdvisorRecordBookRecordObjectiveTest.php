<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class AdvisorRecordBookRecordObjectiveTest
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorRecordBookRecordObjectiveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $objective = (new AdvisorRecordBookRecordObjective())
            ->setObjectiveHash(1872531696)
            ->setDestinationHash(0)
            ->setActivityHash(0)
            ->setProgress(1)
            ->setHasProgress(true)
            ->setIsComplete(true)
            ->setDisplayValue('1');

        $this->assertEquals(1872531696, $objective->getObjectiveHash());
        $this->assertEquals(0, $objective->getDestinationHash());
        $this->assertEquals(0, $objective->getActivityHash());
        $this->assertEquals(1, $objective->getProgress());
        $this->assertEquals(true, $objective->getHasProgress());
        $this->assertEquals(true, $objective->getIsComplete());
        $this->assertEquals('1', $objective->getDisplayValue());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorRecordBookRecordObjective::toObject(null, [
            'objectiveHash' => 1872531696,
            'destinationHash' => 0,
            'activityHash' => 0,
            'progress' => 1,
            'hasProgress' => true,
            'isComplete' => true,
            'displayValue' => '1'
        ]);

        $expected = (new AdvisorRecordBookRecordObjective())
            ->setObjectiveHash(1872531696)
            ->setDestinationHash(0)
            ->setActivityHash(0)
            ->setProgress(1)
            ->setHasProgress(true)
            ->setIsComplete(true)
            ->setDisplayValue('1');

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorRecordBookRecordObjective::toCollection(null, [
            [
                'objectiveHash' => 1872531696,
                'destinationHash' => 0,
                'activityHash' => 0,
                'progress' => 1,
                'hasProgress' => true,
                'isComplete' => true,
                'displayValue' => '1'
            ]
        ]);

        $expected = new Collection(AdvisorRecordBookRecordObjective::class, [
            (new AdvisorRecordBookRecordObjective())
                ->setObjectiveHash(1872531696)
                ->setDestinationHash(0)
                ->setActivityHash(0)
                ->setProgress(1)
                ->setHasProgress(true)
                ->setIsComplete(true)
                ->setDisplayValue('1')
        ]);

        $this->assertEquals($expected, $collection);
    }
}
