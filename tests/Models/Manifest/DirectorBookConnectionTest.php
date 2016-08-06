<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DirectorBookConnectionTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookConnectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $connection = (new DirectorBookConnection())
            ->setSourceNodeIndex(9)
            ->setDestinationNodeIndex(5);

        $this->assertEquals(9, $connection->getSourceNodeIndex());
        $this->assertEquals(5, $connection->getDestinationNodeIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = DirectorBookConnection::toObject(null, [
            'sourceNodeIndex' => 9,
            'destinationNodeIndex' => 5
        ]);

        $expected = (new DirectorBookConnection())
            ->setSourceNodeIndex(9)
            ->setDestinationNodeIndex(5);


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = DirectorBookConnection::toCollection(null, [
            [
                'sourceNodeIndex' => 9,
                'destinationNodeIndex' => 5
            ]
        ]);

        $expected = new Collection(DirectorBookConnection::class, [
            (new DirectorBookConnection())
                ->setSourceNodeIndex(9)
                ->setDestinationNodeIndex(5)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
