<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DirectorBookNodeStateTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookNodeStateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $state = (new DirectorBookNodeState())
            ->setState(4);

        $this->assertEquals(4, $state->getState());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = DirectorBookNodeState::toObject(null, [
            'state' => 4
        ]);

        $expected = (new DirectorBookNodeState())
            ->setState(4);


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = DirectorBookNodeState::toCollection(null, [
            [
                'state' => 4
            ]
        ]);

        $expected = new Collection(DirectorBookNodeState::class, [
            (new DirectorBookNodeState())
                ->setState(4)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
