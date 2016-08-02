<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

/**
 * Class StatServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class StatServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Stat
     */
    public function testGetStat()
    {
        $stat = (new StatService())->getStat(3897883278);

        $this->assertEquals(3897883278, $stat->getStatHash());
        $this->assertEquals('Defense', $stat->getStatName());
        $this->assertEquals('Reduces incoming damage from your enemies.', $stat->getStatDescription());
        $this->assertEquals('/img/theme/destiny/icons/icon_defense.png', $stat->getIcon());
        $this->assertEquals('STAT_DEFENSE', $stat->getStatIdentifier());
        $this->assertEquals(false, $stat->getInterpolate());
        $this->assertEquals(3897883278, $stat->getHash());
        $this->assertEquals(0, $stat->getIndex());
    }

    /**
     * Test Get Stat Exception
     */
    public function testGetStatException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $stat = (new StatService())->getStat('Fail');
    }
}
