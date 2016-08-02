<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class DirectorBookExpressionStepTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookExpressionStepTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $step = (new DirectorBookExpressionStep())
            ->setStepOperator(1)
            ->setFlagHash(2748347740)
            ->setValueHash(0)
            ->setValue(3585);

        $this->assertEquals(1, $step->getStepOperator());
        $this->assertEquals(2748347740, $step->getFlagHash());
        $this->assertEquals(0, $step->getValueHash());
        $this->assertEquals(3585, $step->getValue());
    }
}
