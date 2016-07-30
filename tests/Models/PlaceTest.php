<?php

namespace Necowebs\Destiny\Models;

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

        $this->assetEquals(4088006058, $place->getPlaceHash());
        $this->assetEquals('The Crucible', $place->getPlaceName());
        $this->assetEquals('Hone your skills and win glory in battle against other Guardians.', $place->getPlaceDescription());
        $this->assetEquals('/img/misc/missing_icon.png', $place->getIcon());
        $this->assetEquals(4088006058, $place->getHash());
        $this->assetEquals(0, $place->getIndex());
    }
}
