<?php

namespace Necowebs\Destiny\Models\Stats;

/**
 * Class ActivityValueTest
 * @package Necowebs\Destiny\Models\Stats
 */
class ActivityValueTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $value = (new ActivityValue())
            ->setStatId('assists')
            ->setBasic(new ActivityValueBasic());

        $this->assertEquals('assists', $value->getStatId());
        $this->assertEquals(new ActivityValueBasic(), $value->getBasic());
    }
}
