<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivityDataTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityDataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $data = (new AdvisorActivityData())
            ->setActivityHash(1733556769)
            ->setIsNew(false)
            ->setCanLead(true)
            ->setCanJoin(true)
            ->setIsCompleted(true)
            ->setIsVisible(true)
            ->setDisplayLevel(42)
            ->setRecommendedLight(290)
            ->setDifficultyTier(2);

        $this->assertEquals(1733556769, $data->getActivityHash());
        $this->assertEquals(false, $data->getIsNew());
        $this->assertEquals(true, $data->getCanLead());
        $this->assertEquals(true, $data->getCanJoin());
        $this->assertEquals(true, $data->getIsCompleted());
        $this->assertEquals(true, $data->getIsVisible());
        $this->assertEquals(42, $data->getDisplayLevel());
        $this->assertEquals(290, $data->getRecommendedLight());
        $this->assertEquals(2, $data->getDifficultyTier());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityData::toObject(null, [
            'activityHash' => 1733556769,
            'isNew' => false,
            'canLead' => true,
            'canJoin' => true,
            'isCompleted' => true,
            'isVisible' => true,
            'displayLevel' => 42,
            'recommendedLight' => 290,
            'difficultyTier' => 2
        ]);

        $expected = (new AdvisorActivityData())
            ->setActivityHash(1733556769)
            ->setIsNew(false)
            ->setCanLead(true)
            ->setCanJoin(true)
            ->setIsCompleted(true)
            ->setIsVisible(true)
            ->setDisplayLevel(42)
            ->setRecommendedLight(290)
            ->setDifficultyTier(2);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityData::toCollection(null, [
            [
                'activityHash' => 1733556769,
                'isNew' => false,
                'canLead' => true,
                'canJoin' => true,
                'isCompleted' => true,
                'isVisible' => true,
                'displayLevel' => 42,
                'recommendedLight' => 290,
                'difficultyTier' => 2
            ]
        ]);

        $expected = new Collection(AdvisorActivityData::class, [
            (new AdvisorActivityData())
                ->setActivityHash(1733556769)
                ->setIsNew(false)
                ->setCanLead(true)
                ->setCanJoin(true)
                ->setIsCompleted(true)
                ->setIsVisible(true)
                ->setDisplayLevel(42)
                ->setRecommendedLight(290)
                ->setDifficultyTier(2)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
