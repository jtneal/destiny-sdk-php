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
}
