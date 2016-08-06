<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class RewardTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class RewardTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $reward = (new Reward())
            ->setProgressTotal(9000)
            ->setRewardItems(new Collection(RewardItem::class));

        $this->assertEquals(new Collection(RewardItem::class), $reward->getRewardItems());
        $this->assertEquals(9000, $reward->getProgressTotal());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Reward::toObject(null, [
            'progressTotal' => 9000,
            'rewardItems' => []
        ]);

        $expected = (new Reward())
            ->setProgressTotal(9000)
            ->setRewardItems(new Collection(RewardItem::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Reward::toCollection(null, [
            [
                'progressTotal' => 9000,
                'rewardItems' => []
            ]
        ]);

        $expected = new Collection(Reward::class, [
            (new Reward())
                ->setProgressTotal(9000)
                ->setRewardItems(new Collection(RewardItem::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
