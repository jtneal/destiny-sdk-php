<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class AdvisorRecordBookSpotlightTest
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorRecordBookSpotlightTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $spotlight = (new AdvisorRecordBookSpotlight())
            ->setRewardItemHash(139252900)
            ->setRewardedAtLevel(2)
            ->setQuantity(1)
            ->setStatus(2);

        $this->assertEquals(139252900, $spotlight->getRewardItemHash());
        $this->assertEquals(2, $spotlight->getRewardedAtLevel());
        $this->assertEquals(1, $spotlight->getQuantity());
        $this->assertEquals(2, $spotlight->getStatus());
    }
}
