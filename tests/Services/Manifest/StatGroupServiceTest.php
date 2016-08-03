<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\StatGroupOverride;
use Necowebs\Destiny\Models\Manifest\StatGroupScaledStat;

/**
 * Class StatGroupServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class StatGroupServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Stat Group
     */
    public function testGetStatGroup()
    {
        $group = (new StatGroupService())->getStatGroup(1997970403);

        $this->assertEquals(1997970403, $group->getStatGroupHash());
        $this->assertEquals(11, $group->getMaximumValue());
        $this->assertEquals(0, $group->getUiPosition());
        $this->assertContainsOnlyInstancesOf(StatGroupScaledStat::class, $group->getScaledStats());
        $this->assertContainsOnlyInstancesOf(StatGroupOverride::class, $group->getOverrides());
        $this->assertEquals(1997970403, $group->getHash());
        $this->assertEquals(0, $group->getIndex());
    }

    /**
     * Test Get Stat Group Exception
     */
    public function testGetStatGroupException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $group = (new StatGroupService())->getStatGroup('Fail');
    }
}
