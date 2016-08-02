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
            ->setRewardItems(new Collection(RewardItem::class));

        $this->assertEquals(new Collection(RewardItem::class), $reward->getRewardItems());
    }
}
