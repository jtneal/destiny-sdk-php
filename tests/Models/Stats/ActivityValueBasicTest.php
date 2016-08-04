<?php

namespace Necowebs\Destiny\Models\Stats;

/**
 * Class ActivityValueBasicTest
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValueBasicTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $basic = (new ActivityValueBasic())
            ->setValue(128)
            ->setDisplayValue('128');

        $this->assertEquals(128, $basic->getValue());
        $this->assertEquals('128', $basic->getDisplayValue());
    }
}
