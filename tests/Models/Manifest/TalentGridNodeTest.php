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
            ->setSteps(new Collection('Necowebs\Destiny\Models\Manifest\TalentGridStep'))
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
        $this->assertEquals(new Collection('Necowebs\Destiny\Models\Manifest\TalentGridStep'), $node->getSteps());
        $this->assertEquals(new Collection('int'), $node->getExlusiveWithNodes());
        $this->assertEquals(0, $node->getRandomStartProgressionBarAtProgression());
        $this->assertEquals(0, $node->getOriginalNodeHash());
    }
}
