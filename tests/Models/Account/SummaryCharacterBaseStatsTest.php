<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryCharacterBaseStatsTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBaseStatsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $stats = (new SummaryCharacterBaseStats())
            ->setDefense(new SummaryCharacterBaseStat())
            ->setIntellect(new SummaryCharacterBaseStat())
            ->setDiscipline(new SummaryCharacterBaseStat())
            ->setStrength(new SummaryCharacterBaseStat())
            ->setLight(new SummaryCharacterBaseStat())
            ->setArmor(new SummaryCharacterBaseStat())
            ->setAgility(new SummaryCharacterBaseStat())
            ->setRecovery(new SummaryCharacterBaseStat())
            ->setOptics(new SummaryCharacterBaseStat())
            ->setAttackSpeed(new SummaryCharacterBaseStat())
            ->setDamageReduction(new SummaryCharacterBaseStat())
            ->setAttackEfficiency(new SummaryCharacterBaseStat())
            ->setAttackEnergy(new SummaryCharacterBaseStat());

        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getDefense());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getIntellect());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getDiscipline());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getStrength());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getLight());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getArmor());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getAgility());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getRecovery());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getOptics());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getAttackSpeed());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getDamageReduction());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getAttackEfficiency());
        $this->assertEquals(new SummaryCharacterBaseStat(), $stats->getAttackEnergy());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = SummaryCharacterBaseStats::toObject(null, [
            'STAT_DEFENSE' => [],
            'STAT_INTELLECT' => [],
            'STAT_DISCIPLINE' => [],
            'STAT_STRENGTH' => [],
            'STAT_LIGHT' => [],
            'STAT_ARMOR' => [],
            'STAT_AGILITY' => [],
            'STAT_RECOVERY' => [],
            'STAT_OPTICS' => [],
            'STAT_ATTACK_SPEED' => [],
            'STAT_DAMAGE_REDUCTION' => [],
            'STAT_ATTACK_EFFICIENCY' => [],
            'STAT_ATTACK_ENERGY' => []
        ]);

        $expected = (new SummaryCharacterBaseStats())
            ->setDefense(new SummaryCharacterBaseStat())
            ->setIntellect(new SummaryCharacterBaseStat())
            ->setDiscipline(new SummaryCharacterBaseStat())
            ->setStrength(new SummaryCharacterBaseStat())
            ->setLight(new SummaryCharacterBaseStat())
            ->setArmor(new SummaryCharacterBaseStat())
            ->setAgility(new SummaryCharacterBaseStat())
            ->setRecovery(new SummaryCharacterBaseStat())
            ->setOptics(new SummaryCharacterBaseStat())
            ->setAttackSpeed(new SummaryCharacterBaseStat())
            ->setDamageReduction(new SummaryCharacterBaseStat())
            ->setAttackEfficiency(new SummaryCharacterBaseStat())
            ->setAttackEnergy(new SummaryCharacterBaseStat());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = SummaryCharacterBaseStats::toCollection(null, [
            [
                'STAT_DEFENSE' => [],
                'STAT_INTELLECT' => [],
                'STAT_DISCIPLINE' => [],
                'STAT_STRENGTH' => [],
                'STAT_LIGHT' => [],
                'STAT_ARMOR' => [],
                'STAT_AGILITY' => [],
                'STAT_RECOVERY' => [],
                'STAT_OPTICS' => [],
                'STAT_ATTACK_SPEED' => [],
                'STAT_DAMAGE_REDUCTION' => [],
                'STAT_ATTACK_EFFICIENCY' => [],
                'STAT_ATTACK_ENERGY' => []
            ]
        ]);

        $expected = new Collection(SummaryCharacterBaseStats::class, [
            (new SummaryCharacterBaseStats())
                ->setDefense(new SummaryCharacterBaseStat())
                ->setIntellect(new SummaryCharacterBaseStat())
                ->setDiscipline(new SummaryCharacterBaseStat())
                ->setStrength(new SummaryCharacterBaseStat())
                ->setLight(new SummaryCharacterBaseStat())
                ->setArmor(new SummaryCharacterBaseStat())
                ->setAgility(new SummaryCharacterBaseStat())
                ->setRecovery(new SummaryCharacterBaseStat())
                ->setOptics(new SummaryCharacterBaseStat())
                ->setAttackSpeed(new SummaryCharacterBaseStat())
                ->setDamageReduction(new SummaryCharacterBaseStat())
                ->setAttackEfficiency(new SummaryCharacterBaseStat())
                ->setAttackEnergy(new SummaryCharacterBaseStat())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
