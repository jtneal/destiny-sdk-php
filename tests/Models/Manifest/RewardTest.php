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
            ->setRewardItems(new Collection('Necowebs\Destiny\Models\Manifest\RewardItem'));

        $this->assertEquals(new Collection('Necowebs\Destiny\Models\Manifest\RewardItem'), $reward->getRewardItems());
    }
}
