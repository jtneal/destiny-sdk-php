<?php

namespace Necowebs\Destiny\Models\Manifest;
use Collections\Collection;

/**
 * Class RewardItemTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class RewardItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $rewardItem = (new RewardItem())
            ->setItemHash(1772473720)
            ->setValue(0);

        $this->assertEquals(1772473720, $rewardItem->getItemHash());
        $this->assertEquals(0, $rewardItem->getValue());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = RewardItem::toObject(null, [
            'itemHash' => 1772473720,
            'value' => 0
        ]);

        $expected = (new RewardItem())
            ->setItemHash(1772473720)
            ->setValue(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = RewardItem::toCollection(null, [
            [
                'itemHash' => 1772473720,
                'value' => 0
            ]
        ]);

        $expected = new Collection(RewardItem::class, [
            (new RewardItem())
                ->setItemHash(1772473720)
                ->setValue(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
