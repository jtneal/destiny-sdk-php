<?php

namespace Necowebs\Destiny\Models\Manifest;
use Collections\Collection;

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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Stat::toObject(null, [
            'statHash' => 3897883278,
            'statName' => 'Defense',
            'statDescription' => 'Reduces incoming damage from your enemies.',
            'icon' => '/img/theme/destiny/icons/icon_defense.png',
            'statIdentifier' => 'STAT_DEFENSE',
            'interpolate' => false,
            'hash' => 3897883278,
            'index' => 0
        ]);

        $expected = (new Stat())
            ->setStatHash(3897883278)
            ->setStatName('Defense')
            ->setStatDescription('Reduces incoming damage from your enemies.')
            ->setIcon('/img/theme/destiny/icons/icon_defense.png')
            ->setStatIdentifier('STAT_DEFENSE')
            ->setInterpolate(false)
            ->setHash(3897883278)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Stat::toCollection(null, [
            [
                'statHash' => 3897883278,
                'statName' => 'Defense',
                'statDescription' => 'Reduces incoming damage from your enemies.',
                'icon' => '/img/theme/destiny/icons/icon_defense.png',
                'statIdentifier' => 'STAT_DEFENSE',
                'interpolate' => false,
                'hash' => 3897883278,
                'index' => 0
            ]
        ]);

        $expected = new Collection(Stat::class, [
            (new Stat())
                ->setStatHash(3897883278)
                ->setStatName('Defense')
                ->setStatDescription('Reduces incoming damage from your enemies.')
                ->setIcon('/img/theme/destiny/icons/icon_defense.png')
                ->setStatIdentifier('STAT_DEFENSE')
                ->setInterpolate(false)
                ->setHash(3897883278)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
