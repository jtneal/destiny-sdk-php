<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridActivationRequirementTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridActivationRequirementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $requirement = (new TalentGridActivationRequirement())
            ->setGridLevel(3)
            ->setMaterialRequirementHashes(new Collection('int'));

        $this->assertEquals(3, $requirement->getGridLevel());
        $this->assertEquals(new Collection('int'), $requirement->getMaterialRequirementHashes());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = TalentGridActivationRequirement::toObject(null, [
            'gridLevel' => 3,
            'materialRequirementHashes' => [2627491173, 2627491172, 2627491175, 2627491174]
        ]);

        $expected = (new TalentGridActivationRequirement())
            ->setGridLevel(3)
            ->setMaterialRequirementHashes(new Collection('int', [2627491173, 2627491172, 2627491175, 2627491174]));;


        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = TalentGridActivationRequirement::toCollection(null, [
            [
                'gridLevel' => 3,
                'materialRequirementHashes' => [2627491173, 2627491172, 2627491175, 2627491174]
            ]
        ]);

        $expected = new Collection(TalentGridActivationRequirement::class, [
            (new TalentGridActivationRequirement())
                ->setGridLevel(3)
                ->setMaterialRequirementHashes(new Collection('int', [2627491173, 2627491172, 2627491175, 2627491174]))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
