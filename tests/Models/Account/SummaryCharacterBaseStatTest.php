<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class SummaryCharacterBaseStatTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBaseStatTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $stat = (new SummaryCharacterBaseStat())
            ->setStatHash(144602215)
            ->setValue(300)
            ->setMaximumValue(0);

        $this->assertEquals(144602215, $stat->getStatHash());
        $this->assertEquals(300, $stat->getValue());
        $this->assertEquals(0, $stat->getMaximumValue());
    }
}
