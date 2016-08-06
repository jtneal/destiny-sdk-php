<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryInventoryCurrencyTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryInventoryCurrencyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $currency = (new SummaryInventoryCurrency())
            ->setItemHash(3159615086)
            ->setValue(0);

        $this->assertEquals(3159615086, $currency->getItemHash());
        $this->assertEquals(0, $currency->getValue());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = SummaryInventoryCurrency::toObject(null, [
            'itemHash' => 3159615086,
            'value' => 0
        ]);

        $expected = (new SummaryInventoryCurrency())
            ->setItemHash(3159615086)
            ->setValue(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = SummaryInventoryCurrency::toCollection(null, [
            [
                'itemHash' => 3159615086,
                'value' => 0
            ]
        ]);

        $expected = new Collection(SummaryInventoryCurrency::class, [
            (new SummaryInventoryCurrency())
                ->setItemHash(3159615086)
                ->setValue(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
