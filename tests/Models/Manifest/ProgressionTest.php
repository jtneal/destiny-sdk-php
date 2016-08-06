<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class ProgressionTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class ProgressionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $progression = (new Progression())
            ->setProgressionHash(1716568313)
            ->setName('character_level')
            ->setScope(1)
            ->setRepeatLastStep(false)
            ->setIdentifier('PROGRESSION_CHARACTER_LEVEL')
            ->setSteps(new Collection(Reward::class))
            ->setVisible(true)
            ->setHash(1716568313)
            ->setIndex(0);

        $this->assertEquals(1716568313, $progression->getProgressionHash());
        $this->assertEquals('character_level', $progression->getName());
        $this->assertEquals(1, $progression->getScope());
        $this->assertEquals(false, $progression->getRepeatLastStep());
        $this->assertEquals('PROGRESSION_CHARACTER_LEVEL', $progression->getIdentifier());
        $this->assertEquals(new Collection(Reward::class), $progression->getSteps());
        $this->assertEquals(true, $progression->getVisible());
        $this->assertEquals(1716568313, $progression->getHash());
        $this->assertEquals(0, $progression->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Progression::toObject(null, [
            'progressionHash' => 1716568313,
            'name' => 'character_level',
            'scope' => 1,
            'repeatLastStep' => false,
            'identifier' => 'PROGRESSION_CHARACTER_LEVEL',
            'steps' => [],
            'visible' => true,
            'hash' => 1716568313,
            'index' => 0
        ]);

        $expected = (new Progression())
            ->setProgressionHash(1716568313)
            ->setName('character_level')
            ->setScope(1)
            ->setRepeatLastStep(false)
            ->setIdentifier('PROGRESSION_CHARACTER_LEVEL')
            ->setSteps(new Collection(Reward::class))
            ->setVisible(true)
            ->setHash(1716568313)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Progression::toCollection(null, [
            [
                'progressionHash' => 1716568313,
                'name' => 'character_level',
                'scope' => 1,
                'repeatLastStep' => false,
                'identifier' => 'PROGRESSION_CHARACTER_LEVEL',
                'steps' => [],
                'visible' => true,
                'hash' => 1716568313,
                'index' => 0
            ]
        ]);

        $expected = new Collection(Progression::class, [
            (new Progression())
                ->setProgressionHash(1716568313)
                ->setName('character_level')
                ->setScope(1)
                ->setRepeatLastStep(false)
                ->setIdentifier('PROGRESSION_CHARACTER_LEVEL')
                ->setSteps(new Collection(Reward::class))
                ->setVisible(true)
                ->setHash(1716568313)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
