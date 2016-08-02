<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class TalentGridExclusiveSetTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class TalentGridExclusiveSetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $set = (new TalentGridExclusiveSet())
            ->setNodeIndexes(new Collection('int'));

        $this->assertEquals(new Collection('int'), $set->getNodeIndexes());
    }
}
