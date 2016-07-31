<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class RewardItemTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class RewardItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $rewardItem = (new RewardItem())
            ->setItemHash(1772473720)
            ->setValue(0);

        $this->assertEquals(1772473720, $rewardItem->getItemHash());
        $this->assertEquals(0, $rewardItem->getValue());
    }
}
