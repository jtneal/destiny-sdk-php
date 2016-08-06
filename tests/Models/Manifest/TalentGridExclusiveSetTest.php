<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridExclusiveSetTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridExclusiveSetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $set = (new TalentGridExclusiveSet())
            ->setNodeIndexes(new Collection('int'));

        $this->assertEquals(new Collection('int'), $set->getNodeIndexes());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = TalentGridExclusiveSet::toObject(null, [
            'nodeIndexes' => [1, 2, 3, 4]
        ]);

        $expected = (new TalentGridExclusiveSet())
            ->setNodeIndexes(new Collection('int', [1, 2, 3, 4]));


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = TalentGridExclusiveSet::toCollection(null, [
            [
                'nodeIndexes' => [1, 2, 3, 4]
            ]
        ]);

        $expected = new Collection(TalentGridExclusiveSet::class, [
            (new TalentGridExclusiveSet())
                ->setNodeIndexes(new Collection('int', [1, 2, 3, 4]))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
