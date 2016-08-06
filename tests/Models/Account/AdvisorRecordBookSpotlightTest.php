<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorRecordBookSpotlight::toObject(null, [
            'rewardItemHash' => 139252900,
            'rewardedAtLevel' => 2,
            'quantity' => 1,
            'status' => 2
        ]);

        $expected = (new AdvisorRecordBookSpotlight())
            ->setRewardItemHash(139252900)
            ->setRewardedAtLevel(2)
            ->setQuantity(1)
            ->setStatus(2);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorRecordBookSpotlight::toCollection(null, [
            [
                'rewardItemHash' => 139252900,
                'rewardedAtLevel' => 2,
                'quantity' => 1,
                'status' => 2
            ]
        ]);

        $expected = new Collection(AdvisorRecordBookSpotlight::class, [
            (new AdvisorRecordBookSpotlight())
                ->setRewardItemHash(139252900)
                ->setRewardedAtLevel(2)
                ->setQuantity(1)
                ->setStatus(2)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
