<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class ItemReferenceTest
 * @package Necowebs\Destiny\Models\Character
 */
class ItemReferenceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $reference = (new ItemReference())
            ->setItemHash(1738186005);

        $this->assertEquals(1738186005, $reference->getItemHash());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = ItemReference::toObject(null, [
            'itemHash' => 1738186005
        ]);

        $expected = (new ItemReference())
            ->setItemHash(1738186005);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ItemReference::toCollection(null, [
            [
                'itemHash' => 1738186005
            ]
        ]);

        $expected = new Collection(ItemReference::class, [
            (new ItemReference())
                ->setItemHash(1738186005)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
