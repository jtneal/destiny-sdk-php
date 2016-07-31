<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\MaterialRequirement;
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

        $expected = (new MaterialRequirement())
            ->setSetHash(1621628784)
            ->setMaterials(new Collection('Necowebs\Destiny\Models\Manifest\MaterialRequirementItem', [
                (new MaterialRequirementItem())
                    ->setItemHash(3159615086)
                    ->setDeleteOnAction(true)
                    ->setCount(400)
                    ->setOmitFromRequirements(true),
                (new MaterialRequirementItem())
                    ->setItemHash(1898539128)
                    ->setDeleteOnAction(true)
                    ->setCount(5)
                    ->setOmitFromRequirements(true),
                (new MaterialRequirementItem())
                    ->setItemHash(2254123540)
                    ->setDeleteOnAction(true)
                    ->setCount(5)
                    ->setOmitFromRequirements(false)
            ]))
            ->setHash(1621628784)
            ->setIndex(0);

        $this->assertEquals($expected, $set);
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
