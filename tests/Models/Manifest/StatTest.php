<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class StatTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class StatTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $stat = (new Stat())
            ->setStatHash(3897883278)
            ->setStatName('Defense')
            ->setStatDescription('Reduces incoming damage from your enemies.')
            ->setIcon('/img/theme/destiny/icons/icon_defense.png')
            ->setStatIdentifier('STAT_DEFENSE')
            ->setInterpolate(false)
            ->setHash(3897883278)
            ->setIndex(0);

        $this->assertEquals(3897883278, $stat->getStatHash());
        $this->assertEquals('Defense', $stat->getStatName());
        $this->assertEquals('Reduces incoming damage from your enemies.', $stat->getStatDescription());
        $this->assertEquals('/img/theme/destiny/icons/icon_defense.png', $stat->getIcon());
        $this->assertEquals('STAT_DEFENSE', $stat->getStatIdentifier());
        $this->assertEquals(false, $stat->getInterpolate());
        $this->assertEquals(3897883278, $stat->getHash());
        $this->assertEquals(0, $stat->getIndex());
    }
}
