<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridNodeTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridNodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $node = (new TalentGridNode())
            ->setNodeIndex(0)
            ->setNodeHash(0)
            ->setRow(0)
            ->setColumn(0)
            ->setPrerequisiteNodeIndexes(new Collection('int'))
            ->setBinaryPairNodeIndex(-1)
            ->setAutoUnlocks(true)
            ->setLastStepRepeats(false)
            ->setIsRandom(false)
            ->setRandomActivationRequirement(new TalentGridActivationRequirement())
            ->setIsRandomRepurchasable(false)
            ->setSteps(new Collection(TalentGridStep::class))
            ->setExlusiveWithNodes(new Collection('int'))
            ->setRandomStartProgressionBarAtProgression(0)
            ->setOriginalNodeHash(0);

        $this->assertEquals(0, $node->getNodeIndex());
        $this->assertEquals(0, $node->getNodeHash());
        $this->assertEquals(0, $node->getRow());
        $this->assertEquals(0, $node->getColumn());
        $this->assertEquals(new Collection('int'), $node->getPrerequisiteNodeIndexes());
        $this->assertEquals(-1, $node->getBinaryPairNodeIndex());
        $this->assertEquals(true, $node->getAutoUnlocks());
        $this->assertEquals(false, $node->getLastStepRepeats());
        $this->assertEquals(false, $node->getIsRandom());
        $this->assertEquals(new TalentGridActivationRequirement(), $node->getRandomActivationRequirement());
        $this->assertEquals(false, $node->getIsRandomRepurchasable());
        $this->assertEquals(new Collection(TalentGridStep::class), $node->getSteps());
        $this->assertEquals(new Collection('int'), $node->getExlusiveWithNodes());
        $this->assertEquals(0, $node->getRandomStartProgressionBarAtProgression());
        $this->assertEquals(0, $node->getOriginalNodeHash());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = TalentGridNode::toObject(null, [
            'nodeIndex' => 0,
            'nodeHash' => 0,
            'row' => 0,
            'column' => 0,
            'prerequisiteNodeIndexes' => [1, 2, 3, 4],
            'binaryPairNodeIndex' => -1,
            'autoUnlocks' => true,
            'lastStepRepeats' => false,
            'isRandom' => false,
            'isRandomRepurchasable' => false,
            'steps' => [],
            'exlusiveWithNodes' => [5, 6, 7, 8],
            'randomStartProgressionBarAtProgression' => 0,
            'originalNodeHash' => 0
        ]);

        $expected = (new TalentGridNode())
            ->setNodeIndex(0)
            ->setNodeHash(0)
            ->setRow(0)
            ->setColumn(0)
            ->setPrerequisiteNodeIndexes(new Collection('int', [1, 2, 3, 4]))
            ->setBinaryPairNodeIndex(-1)
            ->setAutoUnlocks(true)
            ->setLastStepRepeats(false)
            ->setIsRandom(false)
            ->setIsRandomRepurchasable(false)
            ->setSteps(new Collection(TalentGridStep::class))
            ->setExlusiveWithNodes(new Collection('int', [5, 6, 7, 8]))
            ->setRandomStartProgressionBarAtProgression(0)
            ->setOriginalNodeHash(0);


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = TalentGridNode::toCollection(null, [
            [
                'nodeIndex' => 0,
                'nodeHash' => 0,
                'row' => 0,
                'column' => 0,
                'prerequisiteNodeIndexes' => [1, 2, 3, 4],
                'binaryPairNodeIndex' => -1,
                'autoUnlocks' => true,
                'lastStepRepeats' => false,
                'isRandom' => false,
                'isRandomRepurchasable' => false,
                'steps' => [],
                'exlusiveWithNodes' => [5, 6, 7, 8],
                'randomStartProgressionBarAtProgression' => 0,
                'originalNodeHash' => 0
            ]
        ]);

        $expected = new Collection(TalentGridNode::class, [
            (new TalentGridNode())
                ->setNodeIndex(0)
                ->setNodeHash(0)
                ->setRow(0)
                ->setColumn(0)
                ->setPrerequisiteNodeIndexes(new Collection('int', [1, 2, 3, 4]))
                ->setBinaryPairNodeIndex(-1)
                ->setAutoUnlocks(true)
                ->setLastStepRepeats(false)
                ->setIsRandom(false)
                ->setIsRandomRepurchasable(false)
                ->setSteps(new Collection(TalentGridStep::class))
                ->setExlusiveWithNodes(new Collection('int', [5, 6, 7, 8]))
                ->setRandomStartProgressionBarAtProgression(0)
                ->setOriginalNodeHash(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
