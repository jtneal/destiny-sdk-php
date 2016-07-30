<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class PlaceTest
 * @package Necowebs\Destiny\Models
 */
class PlaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $place = (new Place())
            ->setPlaceHash(4088006058)
            ->setPlaceName('The Crucible')
            ->setPlaceDescription('Hone your skills and win glory in battle against other Guardians.')
            ->setIcon('/img/misc/missing_icon.png')
            ->setHash(4088006058)
            ->setIndex(0);

        $this->assertEquals(4088006058, $place->getPlaceHash());
        $this->assertEquals('The Crucible', $place->getPlaceName());
        $this->assertEquals('Hone your skills and win glory in battle against other Guardians.', $place->getPlaceDescription());
        $this->assertEquals('/img/misc/missing_icon.png', $place->getIcon());
        $this->assertEquals(4088006058, $place->getHash());
        $this->assertEquals(0, $place->getIndex());
    }
}
