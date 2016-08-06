<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DirectorBookExpressionTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookExpressionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $expression = (new DirectorBookExpression())
            ->setSteps(new Collection(DirectorBookExpression::class));

        $this->assertEquals(new Collection(DirectorBookExpression::class), $expression->getSteps());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = DirectorBookExpression::toObject(null, [
            'steps' => []
        ]);

        $expected = (new DirectorBookExpression())
            ->setSteps(new Collection(DirectorBookExpressionStep::class, []));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = DirectorBookExpression::toCollection(null, [
            [
                'steps' => []
            ]
        ]);

        $expected = new Collection(DirectorBookExpression::class, [
            (new DirectorBookExpression())
                ->setSteps(new Collection(DirectorBookExpressionStep::class, []))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
