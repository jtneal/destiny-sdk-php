<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class MaterialRequirementItemTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class MaterialRequirementItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $material = (new MaterialRequirementItem())
            ->setItemHash(2254123540)
            ->setDeleteOnAction(true)
            ->setCount(5)
            ->setOmitFromRequirements(false);

        $this->assertEquals(2254123540, $material->getItemHash());
        $this->assertEquals(true, $material->getDeleteOnAction());
        $this->assertEquals(5, $material->getCount());
        $this->assertEquals(false, $material->getOmitFromRequirements());
    }
}
