<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class MaterialRequirementTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class MaterialRequirementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $set = (new MaterialRequirement())
            ->setSetHash(1621628784)
            ->setMaterials(new Collection('Necowebs\Destiny\Models\Manifest\MaterialRequirementItem'))
            ->setHash(1621628784)
            ->setIndex(0);

        $this->assertEquals(1621628784, $set->getSetHash());
        $this->assertEquals(new Collection('Necowebs\Destiny\Models\Manifest\MaterialRequirementItem'), $set->getMaterials());
        $this->assertEquals(1621628784, $set->getHash());
        $this->assertEquals(0, $set->getIndex());
    }
}
