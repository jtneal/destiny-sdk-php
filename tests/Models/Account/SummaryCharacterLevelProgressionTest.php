<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = SummaryCharacterLevelProgression::toObject(null, [
            'dailyProgress' => 0,
            'weeklyProgress' => 0,
            'currentProgress' => 346000,
            'level' => 40,
            'step' => 0,
            'progressToNextLevel' => 0,
            'nextLevelAt' => 0,
            'progressionHash' => 1716568313
        ]);

        $expected = (new SummaryCharacterLevelProgression())
            ->setDailyProgress(0)
            ->setWeeklyProgress(0)
            ->setCurrentProgress(346000)
            ->setLevel(40)
            ->setStep(0)
            ->setProgressToNextLevel(0)
            ->setNextLevelAt(0)
            ->setProgressionHash(1716568313);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = SummaryCharacterLevelProgression::toCollection(null, [
            [
                'dailyProgress' => 0,
                'weeklyProgress' => 0,
                'currentProgress' => 346000,
                'level' => 40,
                'step' => 0,
                'progressToNextLevel' => 0,
                'nextLevelAt' => 0,
                'progressionHash' => 1716568313
            ]
        ]);

        $expected = new Collection(SummaryCharacterLevelProgression::class, [
            (new SummaryCharacterLevelProgression())
                ->setDailyProgress(0)
                ->setWeeklyProgress(0)
                ->setCurrentProgress(346000)
                ->setLevel(40)
                ->setStep(0)
                ->setProgressToNextLevel(0)
                ->setNextLevelAt(0)
                ->setProgressionHash(1716568313)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
