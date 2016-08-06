<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $grid = (new TalentGrid())
            ->setGridHash(148625784)
            ->setMaxGridLevel(0)
            ->setGridLevelPerColumn(0)
            ->setProgressionHash(3605101483)
            ->setNodes(new Collection(TalentGridNode::class))
            ->setCalcMaxGridLevel(0)
            ->setCalcProgressToMaxLevel(0)
            ->setExclusiveSets(new Collection(TalentGridExclusiveSet::class))
            ->setIndependentNodeIndexes(new Collection('int'))
            ->setHash(148625784)
            ->setIndex(0);

        $this->assertEquals(148625784, $grid->getGridHash());
        $this->assertEquals(0, $grid->getMaxGridLevel());
        $this->assertEquals(0, $grid->getGridLevelPerColumn());
        $this->assertEquals(3605101483, $grid->getProgressionHash());
        $this->assertEquals(new Collection(TalentGridNode::class), $grid->getNodes());
        $this->assertEquals(0, $grid->getCalcMaxGridLevel());
        $this->assertEquals(0, $grid->getCalcProgressToMaxLevel());
        $this->assertEquals(new Collection(TalentGridExclusiveSet::class), $grid->getExclusiveSets());
        $this->assertEquals(new Collection('int'), $grid->getIndependentNodeIndexes());
        $this->assertEquals(148625784, $grid->getHash());
        $this->assertEquals(0, $grid->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = TalentGrid::toObject(null, [
            'gridHash' => 148625784,
            'maxGridLevel' => 0,
            'gridLevelPerColumn' => 0,
            'progressionHash' => 3605101483,
            'nodes' => [],
            'calcMaxGridLevel' => 0,
            'calcProgressToMaxLevel' => 0,
            'exclusiveSets' => [],
            'independentNodeIndexes' => [],
            'hash' => 148625784,
            'index' => 0
        ]);

        $expected = (new TalentGrid())
            ->setGridHash(148625784)
            ->setMaxGridLevel(0)
            ->setGridLevelPerColumn(0)
            ->setProgressionHash(3605101483)
            ->setNodes(new Collection(TalentGridNode::class))
            ->setCalcMaxGridLevel(0)
            ->setCalcProgressToMaxLevel(0)
            ->setExclusiveSets(new Collection(TalentGridExclusiveSet::class))
            ->setIndependentNodeIndexes(new Collection('int'))
            ->setHash(148625784)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = TalentGrid::toCollection(null, [
            [
                'gridHash' => 148625784,
                'maxGridLevel' => 0,
                'gridLevelPerColumn' => 0,
                'progressionHash' => 3605101483,
                'nodes' => [],
                'calcMaxGridLevel' => 0,
                'calcProgressToMaxLevel' => 0,
                'exclusiveSets' => [],
                'independentNodeIndexes' => [],
                'hash' => 148625784,
                'index' => 0
            ]
        ]);

        $expected = new Collection(TalentGrid::class, [
            (new TalentGrid())
                ->setGridHash(148625784)
                ->setMaxGridLevel(0)
                ->setGridLevelPerColumn(0)
                ->setProgressionHash(3605101483)
                ->setNodes(new Collection(TalentGridNode::class))
                ->setCalcMaxGridLevel(0)
                ->setCalcProgressToMaxLevel(0)
                ->setExclusiveSets(new Collection(TalentGridExclusiveSet::class))
                ->setIndependentNodeIndexes(new Collection('int'))
                ->setHash(148625784)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
