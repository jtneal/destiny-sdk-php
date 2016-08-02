<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class DirectorBookConnectionTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookConnectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $connection = (new DirectorBookConnection())
            ->setSourceNodeIndex(9)
            ->setDestinationNodeIndex(5);

        $this->assertEquals(9, $connection->getSourceNodeIndex());
        $this->assertEquals(5, $connection->getDestinationNodeIndex());
    }
}
