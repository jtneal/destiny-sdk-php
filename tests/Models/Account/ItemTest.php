<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class ItemTest
 * @package Necowebs\Destiny\Models\Account
 */
class ItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $item = (new Item())
            ->setItemHash(2918358303)
            ->setItemId('6917529076155570409')
            ->setQuantity(1)
            ->setDamageType(1)
            ->setDamageTypeHash(3373582085)
            ->setPrimaryStat(new SummaryCharacterBaseStat())
            ->setIsGridComplete(true)
            ->setTransferStatus(1)
            ->setState(1)
            ->setCharacterIndex(0)
            ->setBucketHash(1498876634);

        $this->assertEquals(2918358303, $item->getItemHash());
        $this->assertEquals('6917529076155570409', $item->getItemId());
        $this->assertEquals(1, $item->getQuantity());
        $this->assertEquals(1, $item->getDamageType());
        $this->assertEquals(3373582085, $item->getDamageTypeHash());
        $this->assertEquals(new SummaryCharacterBaseStat(), $item->getPrimaryStat());
        $this->assertEquals(true, $item->getIsGridComplete());
        $this->assertEquals(1, $item->getTransferStatus());
        $this->assertEquals(1, $item->getState());
        $this->assertEquals(0, $item->getCharacterIndex());
        $this->assertEquals(1498876634, $item->getBucketHash());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Item::toObject(null, [
            'itemHash' => 2918358303,
            'itemId' => "6917529076155570409",
            'quantity' => 1,
            'damageType' => 1,
            'damageTypeHash' => 3373582085,
            'primaryStat' => [],
            'isGridComplete' => true,
            'transferStatus' => 1,
            'state' => 1,
            'characterIndex' => 0,
            'bucketHash' => 1498876634
        ]);

        $expected = (new Item())
            ->setItemHash(2918358303)
            ->setItemId('6917529076155570409')
            ->setQuantity(1)
            ->setDamageType(1)
            ->setDamageTypeHash(3373582085)
            ->setPrimaryStat(new SummaryCharacterBaseStat())
            ->setIsGridComplete(true)
            ->setTransferStatus(1)
            ->setState(1)
            ->setCharacterIndex(0)
            ->setBucketHash(1498876634);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Item::toCollection(null, [
            [
                'itemHash' => 2918358303,
                'itemId' => "6917529076155570409",
                'quantity' => 1,
                'damageType' => 1,
                'damageTypeHash' => 3373582085,
                'primaryStat' => [],
                'isGridComplete' => true,
                'transferStatus' => 1,
                'state' => 1,
                'characterIndex' => 0,
                'bucketHash' => 1498876634
            ]
        ]);

        $expected = new Collection(Item::class, [
            (new Item())
                ->setItemHash(2918358303)
                ->setItemId('6917529076155570409')
                ->setQuantity(1)
                ->setDamageType(1)
                ->setDamageTypeHash(3373582085)
                ->setPrimaryStat(new SummaryCharacterBaseStat())
                ->setIsGridComplete(true)
                ->setTransferStatus(1)
                ->setState(1)
                ->setCharacterIndex(0)
                ->setBucketHash(1498876634)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
