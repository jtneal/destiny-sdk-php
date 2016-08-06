<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DirectorBookNodeTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookNodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $node = (new DirectorBookNode())
            ->setNodeDefinitionHash(2925505302)
            ->setStyleHash(2166136261)
            ->setPositionX(821)
            ->setPositionY(722)
            ->setPositionZ(0)
            ->setActivityBundleHashes(new Collection('int'))
            ->setStates(new Collection(DirectorBookNodeState::class))
            ->setUiModifier(0);

        $this->assertEquals(2925505302, $node->getNodeDefinitionHash());
        $this->assertEquals(2166136261, $node->getStyleHash());
        $this->assertEquals(821, $node->getPositionX());
        $this->assertEquals(722, $node->getPositionY());
        $this->assertEquals(0, $node->getPositionZ());
        $this->assertEquals(new Collection('int'), $node->getActivityBundleHashes());
        $this->assertEquals(new Collection(DirectorBookNodeState::class), $node->getStates());
        $this->assertEquals(0, $node->getUiModifier());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = DirectorBookNode::toObject(null, [
            'nodeDefinitionHash' => 2925505302,
            'styleHash' => 2166136261,
            'positionX' => 821,
            'positionY' => 722,
            'positionZ' => 0,
            'activityBundleHashes' => [],
            'states' => [],
            'uiModifier' => 0
        ]);

        $expected = (new DirectorBookNode())
            ->setNodeDefinitionHash(2925505302)
            ->setStyleHash(2166136261)
            ->setPositionX(821)
            ->setPositionY(722)
            ->setPositionZ(0)
            ->setActivityBundleHashes(new Collection('int'))
            ->setStates(new Collection(DirectorBookNodeState::class))
            ->setUiModifier(0);


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = DirectorBookNode::toCollection(null, [
            [
                'nodeDefinitionHash' => 2925505302,
                'styleHash' => 2166136261,
                'positionX' => 821,
                'positionY' => 722,
                'positionZ' => 0,
                'activityBundleHashes' => [],
                'states' => [],
                'uiModifier' => 0
            ]
        ]);

        $expected = new Collection(DirectorBookNode::class, [
            (new DirectorBookNode())
                ->setNodeDefinitionHash(2925505302)
                ->setStyleHash(2166136261)
                ->setPositionX(821)
                ->setPositionY(722)
                ->setPositionZ(0)
                ->setActivityBundleHashes(new Collection('int'))
                ->setStates(new Collection(DirectorBookNodeState::class))
                ->setUiModifier(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
