<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DirectorBookExpressionStepTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookExpressionStepTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $step = (new DirectorBookExpressionStep())
            ->setStepOperator(1)
            ->setFlagHash(2748347740)
            ->setValueHash(0)
            ->setValue(3585);

        $this->assertEquals(1, $step->getStepOperator());
        $this->assertEquals(2748347740, $step->getFlagHash());
        $this->assertEquals(0, $step->getValueHash());
        $this->assertEquals(3585, $step->getValue());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = DirectorBookExpressionStep::toObject(null, [
            'stepOperator' => 1,
            'flagHash' => 2748347740,
            'valueHash' => 0,
            'value' => 3585
        ]);

        $expected = (new DirectorBookExpressionStep())
            ->setStepOperator(1)
            ->setFlagHash(2748347740)
            ->setValueHash(0)
            ->setValue(3585);


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = DirectorBookExpressionStep::toCollection(null, [
            [
                'stepOperator' => 1,
                'flagHash' => 2748347740,
                'valueHash' => 0,
                'value' => 3585
            ]
        ]);

        $expected = new Collection(DirectorBookExpressionStep::class, [
            (new DirectorBookExpressionStep())
                ->setStepOperator(1)
                ->setFlagHash(2748347740)
                ->setValueHash(0)
                ->setValue(3585)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
