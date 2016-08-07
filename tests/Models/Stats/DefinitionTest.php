<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class DefinitionTest
 * @package Necowebs\Destiny\Models\Stats
 */
class DefinitionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $definition = (new Definition())
            ->setStatId('activitiesEntered')
            ->setGroup(1)
            ->setPeriodTypes(new Collection('int'))
            ->setModes(new Collection('int'))
            ->setCategory(8)
            ->setStatName('Activities Entered')
            ->setStatDescription('Battles fought - some lost, some won.')
            ->setUnitType(1)
            ->setUnitLabel('')
            ->setWeight(1);

        $this->assertEquals('activitiesEntered', $definition->getStatId());
        $this->assertEquals(1, $definition->getGroup());
        $this->assertEquals(new Collection('int'), $definition->getPeriodTypes());
        $this->assertEquals(new Collection('int'), $definition->getModes());
        $this->assertEquals(8, $definition->getCategory());
        $this->assertEquals('Activities Entered', $definition->getStatName());
        $this->assertEquals('Battles fought - some lost, some won.', $definition->getStatDescription());
        $this->assertEquals(1, $definition->getUnitType());
        $this->assertEquals('', $definition->getUnitLabel());
        $this->assertEquals(1, $definition->getWeight());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Definition::toObject(null, [
            'statId' => 'activitiesEntered',
            'group' => 1,
            'periodTypes' => [1, 2, 3, 4],
            'modes' => [5, 6, 7, 8],
            'category' => 8,
            'statName' => 'Activities Entered',
            'statDescription' => 'Battles fought - some lost, some won.',
            'unitType' => 1,
            'unitLabel' => '',
            'weight' => 1
        ]);

        $expected = (new Definition())
            ->setStatId('activitiesEntered')
            ->setGroup(1)
            ->setPeriodTypes(new Collection('int', [1, 2, 3, 4]))
            ->setModes(new Collection('int', [5, 6, 7, 8]))
            ->setCategory(8)
            ->setStatName('Activities Entered')
            ->setStatDescription('Battles fought - some lost, some won.')
            ->setUnitType(1)
            ->setUnitLabel('')
            ->setWeight(1);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Definition::toCollection(null, [
            [
                'statId' => 'activitiesEntered',
                'group' => 1,
                'periodTypes' => [1, 2, 3, 4],
                'modes' => [5, 6, 7, 8],
                'category' => 8,
                'statName' => 'Activities Entered',
                'statDescription' => 'Battles fought - some lost, some won.',
                'unitType' => 1,
                'unitLabel' => '',
                'weight' => 1
            ]
        ]);

        $expected = new Collection(Definition::class, [
            (new Definition())
                ->setStatId('activitiesEntered')
                ->setGroup(1)
                ->setPeriodTypes(new Collection('int', [1, 2, 3, 4]))
                ->setModes(new Collection('int', [5, 6, 7, 8]))
                ->setCategory(8)
                ->setStatName('Activities Entered')
                ->setStatDescription('Battles fought - some lost, some won.')
                ->setUnitType(1)
                ->setUnitLabel('')
                ->setWeight(1)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
