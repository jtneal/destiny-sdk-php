<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\TalentGridExclusiveSet;
use Necowebs\Destiny\Models\Manifest\TalentGridNode;

/**
 * Class TalentGridServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class TalentGridServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Talent Grid
     */
    public function testGetTalentGrid()
    {
        $grid = (new TalentGridService())->getTalentGrid(148625784);

        $this->assertEquals(148625784, $grid->getGridHash());
        $this->assertEquals(0, $grid->getMaxGridLevel());
        $this->assertEquals(0, $grid->getGridLevelPerColumn());
        $this->assertEquals(3605101483, $grid->getProgressionHash());
        $this->assertContainsOnlyInstancesOf(TalentGridNode::class, $grid->getNodes());
        $this->assertEquals(0, $grid->getCalcMaxGridLevel());
        $this->assertEquals(0, $grid->getCalcProgressToMaxLevel());
        $this->assertContainsOnlyInstancesOf(TalentGridExclusiveSet::class, $grid->getExclusiveSets());
        $this->assertEquals(new Collection('int', [1, 2]), $grid->getIndependentNodeIndexes());
        $this->assertEquals(148625784, $grid->getHash());
        $this->assertEquals(0, $grid->getIndex());
    }

    /**
     * Test Get Talent Grid Exception
     */
    public function testGetTalentGridException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $grid = (new TalentGridService())->getTalentGrid('Fail');
    }
}
