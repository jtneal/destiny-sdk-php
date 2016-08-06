<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class ItemsTest
 * @package Necowebs\Destiny\Models\Account
 */
class ItemsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $items = (new Items())
            ->setItems(new Collection(Item::class))
            ->setCharacters(new Collection(SummaryCharacter::class));

        $this->assertEquals(new Collection(Item::class), $items->getItems());
        $this->assertEquals(new Collection(SummaryCharacter::class), $items->getCharacters());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Items::toObject(null, [
            'items' => [],
            'characters' => []
        ]);

        $expected = (new Items())
            ->setItems(new Collection(Item::class))
            ->setCharacters(new Collection(SummaryCharacter::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Items::toCollection(null, [
            [
                'items' => [],
                'characters' => []
            ]
        ]);

        $expected = new Collection(Items::class, [
            (new Items())
                ->setItems(new Collection(Item::class))
                ->setCharacters(new Collection(SummaryCharacter::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
