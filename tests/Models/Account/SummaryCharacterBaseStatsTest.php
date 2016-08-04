<?php

namespace Necowebs\Destiny\Models\Account;

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
}
