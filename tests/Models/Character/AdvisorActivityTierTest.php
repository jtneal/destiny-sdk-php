<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\Reward;

/**
 * Class AdvisorActivityTierTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityTierTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $tier = (new AdvisorActivityTier())
            ->setActivityHash(1836893119)
            ->setTierDisplayName('Hard')
            ->setCompletion(new AdvisorActivityCompletion())
            ->setSteps(new Collection(AdvisorActivityTierStep::class))
            ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
            ->setRewards(new Collection(Reward::class))
            ->setActivityData(new AdvisorActivityData())
            ->setExtended(new AdvisorActivityExtended());

        $this->assertEquals(1836893119, $tier->getActivityHash());
        $this->assertEquals('Hard', $tier->getTierDisplayName());
        $this->assertEquals(new AdvisorActivityCompletion(), $tier->getCompletion());
        $this->assertEquals(new Collection(AdvisorActivityTierStep::class), $tier->getSteps());
        $this->assertEquals(new Collection(AdvisorActivitySkullCategory::class), $tier->getSkullCategories());
        $this->assertEquals(new Collection(Reward::class), $tier->getRewards());
        $this->assertEquals(new AdvisorActivityData(), $tier->getActivityData());
        $this->assertEquals(new AdvisorActivityExtended(), $tier->getExtended());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityTier::toObject(null, [
            'activityHash' => 1836893119,
            'tierDisplayName' => 'Hard',
            'completion' => [],
            'steps' => [],
            'skullCategories' => [],
            'rewards' => [],
            'activityData' => [],
            'extended' => []
        ]);

        $expected = (new AdvisorActivityTier())
            ->setActivityHash(1836893119)
            ->setTierDisplayName('Hard')
            ->setCompletion(new AdvisorActivityCompletion())
            ->setSteps(new Collection(AdvisorActivityTierStep::class))
            ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
            ->setRewards(new Collection(Reward::class))
            ->setActivityData(new AdvisorActivityData())
            ->setExtended(new AdvisorActivityExtended());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityTier::toCollection(null, [
            [
                'activityHash' => 1836893119,
                'tierDisplayName' => 'Hard',
                'completion' => [],
                'steps' => [],
                'skullCategories' => [],
                'rewards' => [],
                'activityData' => [],
                'extended' => []
            ]
        ]);

        $expected = new Collection(AdvisorActivityTier::class, [
            (new AdvisorActivityTier())
                ->setActivityHash(1836893119)
                ->setTierDisplayName('Hard')
                ->setCompletion(new AdvisorActivityCompletion())
                ->setSteps(new Collection(AdvisorActivityTierStep::class))
                ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
                ->setRewards(new Collection(Reward::class))
                ->setActivityData(new AdvisorActivityData())
                ->setExtended(new AdvisorActivityExtended())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
