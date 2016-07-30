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
            ->setSteps(new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep'))
            ->setVisible(true)
            ->setHash(1716568313)
            ->setIndex(0);

        $this->assertEquals(1716568313, $progression->getProgressionHash());
        $this->assertEquals('character_level', $progression->getName());
        $this->assertEquals(1, $progression->getScope());
        $this->assertEquals(false, $progression->getRepeatLastStep());
        $this->assertEquals('PROGRESSION_CHARACTER_LEVEL', $progression->getIdentifier());
        $this->assertEquals(new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep'), $progression->getSteps());
        $this->assertEquals(true, $progression->getVisible());
        $this->assertEquals(1716568313, $progression->getHash());
        $this->assertEquals(0, $progression->getIndex());
    }
}
