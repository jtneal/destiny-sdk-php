<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\StatNotFoundException;
use Necowebs\Destiny\Models\Manifest\Stat;

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

        $expected = (new Stat())
            ->setStatHash(3897883278)
            ->setStatName('Defense')
            ->setStatDescription('Reduces incoming damage from your enemies.')
            ->setIcon('/img/theme/destiny/icons/icon_defense.png')
            ->setStatIdentifier('STAT_DEFENSE')
            ->setInterpolate(false)
            ->setHash(3897883278)
            ->setIndex(0);

        $this->assertEquals($expected, $stat);
    }

    /**
     * Test Get Stat Exception
     */
    public function testGetStatException()
    {
        $this->expectException(StatNotFoundException::class);

        $stat = (new StatService())->getStat('Fail');
    }
}
