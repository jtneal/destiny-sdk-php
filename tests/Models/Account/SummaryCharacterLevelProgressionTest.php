<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class SummaryCharacterLevelProgressionTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterLevelProgressionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $progression = (new SummaryCharacterLevelProgression())
            ->setDailyProgress(0)
            ->setWeeklyProgress(0)
            ->setCurrentProgress(346000)
            ->setLevel(40)
            ->setStep(0)
            ->setProgressToNextLevel(0)
            ->setNextLevelAt(0)
            ->setProgressionHash(1716568313);

        $this->assertEquals(0, $progression->getDailyProgress());
        $this->assertEquals(0, $progression->getWeeklyProgress());
        $this->assertEquals(346000, $progression->getCurrentProgress());
        $this->assertEquals(40, $progression->getLevel());
        $this->assertEquals(0, $progression->getStep());
        $this->assertEquals(0, $progression->getProgressToNextLevel());
        $this->assertEquals(0, $progression->getNextLevelAt());
        $this->assertEquals(1716568313, $progression->getProgressionHash());
    }
}
