<?php

namespace Necowebs\Destiny\Models\Account;

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
}
