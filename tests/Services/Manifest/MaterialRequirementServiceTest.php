<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\MaterialRequirementItem;

/**
 * Class MaterialRequirementServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class MaterialRequirementServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Material Requirement
     */
    public function testGetMaterialRequirement()
    {
        $set = (new MaterialRequirementService())->getMaterialRequirement(1621628784);

        $this->assertEquals(1621628784, $set->getSetHash());
        $this->assertContainsOnlyInstancesOf(MaterialRequirementItem::class, $set->getMaterials());
        $this->assertEquals(1621628784, $set->getHash());
        $this->assertEquals(0, $set->getIndex());
    }

    /**
     * Test Get Material Requirement Exception
     */
    public function testGetMaterialRequirementException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $set = (new MaterialRequirementService())->getMaterialRequirement('Fail');
    }
}
