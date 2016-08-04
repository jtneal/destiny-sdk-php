<?php

namespace Necowebs\Destiny\Models\Account;

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
}
