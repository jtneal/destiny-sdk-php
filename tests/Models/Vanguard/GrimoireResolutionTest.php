<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;

/**
 * Class GrimoireResolutionTest
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireResolutionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $resolution = (new GrimoireResolution())
            ->setImage(new GrimoireImage())
            ->setSmallImage(new GrimoireImage());

        $this->assertEquals(new GrimoireImage(), $resolution->getImage());
        $this->assertEquals(new GrimoireImage(), $resolution->getSmallImage());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = GrimoireResolution::toObject(null, [
            'image' => [],
            'smallImage' => []
        ]);

        $expected = (new GrimoireResolution())
            ->setImage(new GrimoireImage())
            ->setSmallImage(new GrimoireImage());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = GrimoireResolution::toCollection(null, [
            [
                'image' => [],
                'smallImage' => []
            ]
        ]);

        $expected = new Collection(GrimoireResolution::class, [
            (new GrimoireResolution())
                ->setImage(new GrimoireImage())
                ->setSmallImage(new GrimoireImage())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
