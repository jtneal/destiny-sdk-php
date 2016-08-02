<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class DirectorBookNodeStateTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookNodeStateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $state = (new DirectorBookNodeState())
            ->setState(4);

        $this->assertEquals(4, $state->getState());
    }
}
