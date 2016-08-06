<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class UnlockFlagTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class UnlockFlagTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $flag = (new UnlockFlag())
            ->setFlagHash(2100359368)
            ->setIsOffer(false)
            ->setUnlockType(0)
            ->setHash(2100359368)
            ->setIndex(0);

        $this->assertEquals(2100359368, $flag->getFlagHash());
        $this->assertEquals(false, $flag->getIsOffer());
        $this->assertEquals(0, $flag->getUnlockType());
        $this->assertEquals(2100359368, $flag->getHash());
        $this->assertEquals(0, $flag->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = UnlockFlag::toObject(null, [
            'flagHash' => 2100359368,
            'isOffer' => false,
            'unlockType' => 0,
            'hash' => 2100359368,
            'index' => 0
        ]);

        $expected = (new UnlockFlag())
            ->setFlagHash(2100359368)
            ->setIsOffer(false)
            ->setUnlockType(0)
            ->setHash(2100359368)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = UnlockFlag::toCollection(null, [
            [
                'flagHash' => 2100359368,
                'isOffer' => false,
                'unlockType' => 0,
                'hash' => 2100359368,
                'index' => 0
            ]
        ]);

        $expected = new Collection(UnlockFlag::class, [
            (new UnlockFlag())
                ->setFlagHash(2100359368)
                ->setIsOffer(false)
                ->setUnlockType(0)
                ->setHash(2100359368)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
