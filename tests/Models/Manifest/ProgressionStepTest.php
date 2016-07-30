<?php

namespace Necowebs\Destiny\Models\Manifest;

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
        $step = (new ProgressionStep())
            ->setProgressTotal(9000)
            ->setRewardItems(['test']);

        $this->assertEquals(9000, $step->getProgressTotal());
        $this->assertEquals(['test'], $step->getRewardItems());
    }
}
