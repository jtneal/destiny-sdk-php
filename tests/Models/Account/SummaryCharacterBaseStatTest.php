<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = SummaryCharacterBaseStat::toObject(null, [
            'statHash' => 144602215,
            'value' => 300,
            'maximumValue' => 0
        ]);

        $expected = (new SummaryCharacterBaseStat())
            ->setStatHash(144602215)
            ->setValue(300)
            ->setMaximumValue(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = SummaryCharacterBaseStat::toCollection(null, [
            [
                'statHash' => 144602215,
                'value' => 300,
                'maximumValue' => 0
            ]
        ]);

        $expected = new Collection(SummaryCharacterBaseStat::class, [
            (new SummaryCharacterBaseStat())
                ->setStatHash(144602215)
                ->setValue(300)
                ->setMaximumValue(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
