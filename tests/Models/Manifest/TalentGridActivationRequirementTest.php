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
}
