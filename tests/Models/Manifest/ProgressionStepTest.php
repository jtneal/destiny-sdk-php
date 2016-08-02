<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class ProgressionStepTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class ProgressionStepTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $rewardItem = (new RewardItem())->setItemHash(1772473720)->setValue(0);

        $step = (new ProgressionStep())
            ->setProgressTotal(9000)
            ->setRewardItems(new Collection(RewardItem::class, [$rewardItem]));

        $this->assertEquals(9000, $step->getProgressTotal());
        $this->assertEquals(new Collection(RewardItem::class, [$rewardItem]), $step->getRewardItems());
    }
}
