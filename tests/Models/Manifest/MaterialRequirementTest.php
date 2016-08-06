<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class MaterialRequirementTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class MaterialRequirementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $set = (new MaterialRequirement())
            ->setSetHash(1621628784)
            ->setMaterials(new Collection(MaterialRequirementItem::class))
            ->setHash(1621628784)
            ->setIndex(0);

        $this->assertEquals(1621628784, $set->getSetHash());
        $this->assertEquals(new Collection(MaterialRequirementItem::class), $set->getMaterials());
        $this->assertEquals(1621628784, $set->getHash());
        $this->assertEquals(0, $set->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = MaterialRequirement::toObject(null, [
            'setHash' => 1621628784,
            'materials' => [],
            'hash' => 1621628784,
            'index' => 0
        ]);

        $expected = (new MaterialRequirement())
            ->setSetHash(1621628784)
            ->setMaterials(new Collection(MaterialRequirementItem::class))
            ->setHash(1621628784)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = MaterialRequirement::toCollection(null, [
            [
                'setHash' => 1621628784,
                'materials' => [],
                'hash' => 1621628784,
                'index' => 0
            ]
        ]);

        $expected = new Collection(MaterialRequirement::class, [
            (new MaterialRequirement())
                ->setSetHash(1621628784)
                ->setMaterials(new Collection(MaterialRequirementItem::class))
                ->setHash(1621628784)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
