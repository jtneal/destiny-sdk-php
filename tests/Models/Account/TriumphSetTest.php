<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class TriumphSetTest
 * @package Necowebs\Destiny\Models\Account
 */
class TriumphSetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $set = (new TriumphSet())
            ->setTriumphSetHash(1)
            ->setTriumphs(new Collection(Triumph::class));

        $this->assertEquals(1, $set->getTriumphSetHash());
        $this->assertEquals(new Collection(Triumph::class), $set->getTriumphs());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = TriumphSet::toObject(null, [
            'triumphSetHash' => 1,
            'triumphs' => []
        ]);

        $expected = (new TriumphSet())
            ->setTriumphSetHash(1)
            ->setTriumphs(new Collection(Triumph::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = TriumphSet::toCollection(null, [
            [
                'triumphSetHash' => 1,
                'triumphs' => []
            ]
        ]);

        $expected = new Collection(TriumphSet::class, [
            (new TriumphSet())
                ->setTriumphSetHash(1)
                ->setTriumphs(new Collection(Triumph::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
