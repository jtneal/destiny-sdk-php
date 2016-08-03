<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class StatGroupOverrideTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatGroupOverrideTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $override = (new StatGroupOverride())
            ->setStatHash(144602215)
            ->setDisplayName('')
            ->setDisplayDescription('')
            ->setDisplayIcon('/img/misc/missing_icon.png');

        $this->assertEquals(144602215, $override->getStatHash());
        $this->assertEquals('', $override->getDisplayName());
        $this->assertEquals('', $override->getDisplayDescription());
        $this->assertEquals('/img/misc/missing_icon.png', $override->getDisplayIcon());
    }
}
