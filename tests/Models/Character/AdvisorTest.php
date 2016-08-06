<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\AdvisorRecordBook;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;

/**
 * Class AdvisorTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $advisor = (new Advisor())
            ->setActivities(new AdvisorActivities())
            ->setActivityCategories(new Collection(AdvisorCategory::class))
            ->setBounties(new Collection(AdvisorBounty::class))
            ->setQuests([])
            ->setProgressions(new Collection(SummaryCharacterLevelProgression::class))
            ->setRecordBooks(new Collection(AdvisorRecordBook::class));

        $this->assertEquals(new AdvisorActivities(), $advisor->getActivities());
        $this->assertEquals(new Collection(AdvisorCategory::class), $advisor->getActivityCategories());
        $this->assertEquals(new Collection(AdvisorBounty::class), $advisor->getBounties());
        $this->assertEquals([], $advisor->getQuests());
        $this->assertEquals(new Collection(SummaryCharacterLevelProgression::class), $advisor->getProgressions());
        $this->assertEquals(new Collection(AdvisorRecordBook::class), $advisor->getRecordBooks());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Advisor::toObject(null, [
            'activities' => [],
            'activityCategories' => [],
            'bounties' => [],
            'quests' => [],
            'progressions' => [],
            'recordBooks' => []
        ]);

        $expected = (new Advisor())
            ->setActivities(new AdvisorActivities())
            ->setActivityCategories(new Collection(AdvisorCategory::class))
            ->setBounties(new Collection(AdvisorBounty::class))
            ->setQuests([])
            ->setProgressions(new Collection(SummaryCharacterLevelProgression::class))
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
                'activities' => [],
                'activityCategories' => [],
                'bounties' => [],
                'quests' => [],
                'progressions' => [],
                'recordBooks' => []
            ]
        ]);

        $expected = new Collection(Advisor::class, [
            (new Advisor())
                ->setActivities(new AdvisorActivities())
                ->setActivityCategories(new Collection(AdvisorCategory::class))
                ->setBounties(new Collection(AdvisorBounty::class))
                ->setQuests([])
                ->setProgressions(new Collection(SummaryCharacterLevelProgression::class))
                ->setRecordBooks(new Collection(AdvisorRecordBook::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
