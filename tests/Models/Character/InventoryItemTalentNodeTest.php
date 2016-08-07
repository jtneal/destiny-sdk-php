<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class InventoryItemTalentNodeTest
 * @package Necowebs\Destiny\Models\Character
 */
class InventoryItemTalentNodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $node = (new InventoryItemTalentNode())
            ->setNodeIndex(27)
            ->setNodeHash(27)
            ->setState(10)
            ->setStateId('Complete')
            ->setIsActivated(true)
            ->setStepIndex(0)
            ->setMaterialsToUpgrade([])
            ->setActivationGridLevel(0)
            ->setProgressPercent(100)
            ->setHidden(false);

        $this->assertEquals(27, $node->getNodeIndex());
        $this->assertEquals(27, $node->getNodeHash());
        $this->assertEquals(10, $node->getState());
        $this->assertEquals('Complete', $node->getStateId());
        $this->assertEquals(true, $node->getIsActivated());
        $this->assertEquals(0, $node->getStepIndex());
        $this->assertEquals([], $node->getMaterialsToUpgrade());
        $this->assertEquals(0, $node->getActivationGridLevel());
        $this->assertEquals(100, $node->getProgressPercent());
        $this->assertEquals(false, $node->getHidden());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = InventoryItemTalentNode::toObject(null, [
            'nodeIndex' => 27,
            'nodeHash' => 27,
            'state' => 10,
            'stateId' => 'Complete',
            'isActivated' => true,
            'stepIndex' => 0,
            'materialsToUpgrade' => [],
            'activationGridLevel' => 0,
            'progressPercent' => 100,
            'hidden' => false
        ]);

        $expected = (new InventoryItemTalentNode())
            ->setNodeIndex(27)
            ->setNodeHash(27)
            ->setState(10)
            ->setStateId('Complete')
            ->setIsActivated(true)
            ->setStepIndex(0)
            ->setMaterialsToUpgrade([])
            ->setActivationGridLevel(0)
            ->setProgressPercent(100)
            ->setHidden(false);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = InventoryItemTalentNode::toCollection(null, [
            [
                'nodeIndex' => 27,
                'nodeHash' => 27,
                'state' => 10,
                'stateId' => 'Complete',
                'isActivated' => true,
                'stepIndex' => 0,
                'materialsToUpgrade' => [],
                'activationGridLevel' => 0,
                'progressPercent' => 100,
                'hidden' => false
            ]
        ]);

        $expected = new Collection(InventoryItemTalentNode::class, [
            (new InventoryItemTalentNode())
                ->setNodeIndex(27)
                ->setNodeHash(27)
                ->setState(10)
                ->setStateId('Complete')
                ->setIsActivated(true)
                ->setStepIndex(0)
                ->setMaterialsToUpgrade([])
                ->setActivationGridLevel(0)
                ->setProgressPercent(100)
                ->setHidden(false)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
