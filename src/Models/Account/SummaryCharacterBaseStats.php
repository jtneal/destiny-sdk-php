<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class SummaryCharacterBaseStats
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBaseStats
{
    /**
     * @var SummaryCharacterBaseStat
     */
    private $defense;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $intellect;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $discipline;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $strength;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $light;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $armor;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $agility;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $recovery;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $optics;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $attackSpeed;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $damage_reduction;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $attackEfficiency;

    /**
     * @var SummaryCharacterBaseStat
     */
    private $attackEnergy;

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param SummaryCharacterBaseStat $defense
     * @return SummaryCharacterBaseStats
     */
    public function setDefense(SummaryCharacterBaseStat $defense)
    {
        $this->defense = $defense;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getIntellect()
    {
        return $this->intellect;
    }

    /**
     * @param SummaryCharacterBaseStat $intellect
     * @return SummaryCharacterBaseStats
     */
    public function setIntellect(SummaryCharacterBaseStat $intellect)
    {
        $this->intellect = $intellect;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * @param SummaryCharacterBaseStat $discipline
     * @return SummaryCharacterBaseStats
     */
    public function setDiscipline(SummaryCharacterBaseStat $discipline)
    {
        $this->discipline = $discipline;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param SummaryCharacterBaseStat $strength
     * @return SummaryCharacterBaseStats
     */
    public function setStrength(SummaryCharacterBaseStat $strength)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getLight()
    {
        return $this->light;
    }

    /**
     * @param SummaryCharacterBaseStat $light
     * @return SummaryCharacterBaseStats
     */
    public function setLight(SummaryCharacterBaseStat $light)
    {
        $this->light = $light;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @param SummaryCharacterBaseStat $armor
     * @return SummaryCharacterBaseStats
     */
    public function setArmor(SummaryCharacterBaseStat $armor)
    {
        $this->armor = $armor;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * @param SummaryCharacterBaseStat $agility
     * @return SummaryCharacterBaseStats
     */
    public function setAgility(SummaryCharacterBaseStat $agility)
    {
        $this->agility = $agility;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getRecovery()
    {
        return $this->recovery;
    }

    /**
     * @param SummaryCharacterBaseStat $recovery
     * @return SummaryCharacterBaseStats
     */
    public function setRecovery(SummaryCharacterBaseStat $recovery)
    {
        $this->recovery = $recovery;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getOptics()
    {
        return $this->optics;
    }

    /**
     * @param SummaryCharacterBaseStat $optics
     * @return SummaryCharacterBaseStats
     */
    public function setOptics(SummaryCharacterBaseStat $optics)
    {
        $this->optics = $optics;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getAttackSpeed()
    {
        return $this->attackSpeed;
    }

    /**
     * @param SummaryCharacterBaseStat $attackSpeed
     * @return SummaryCharacterBaseStats
     */
    public function setAttackSpeed(SummaryCharacterBaseStat $attackSpeed)
    {
        $this->attackSpeed = $attackSpeed;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getDamageReduction()
    {
        return $this->damage_reduction;
    }

    /**
     * @param SummaryCharacterBaseStat $damage_reduction
     * @return SummaryCharacterBaseStats
     */
    public function setDamageReduction(SummaryCharacterBaseStat $damage_reduction)
    {
        $this->damage_reduction = $damage_reduction;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getAttackEfficiency()
    {
        return $this->attackEfficiency;
    }

    /**
     * @param SummaryCharacterBaseStat $attackEfficiency
     * @return SummaryCharacterBaseStats
     */
    public function setAttackEfficiency(SummaryCharacterBaseStat $attackEfficiency)
    {
        $this->attackEfficiency = $attackEfficiency;
        return $this;
    }

    /**
     * @return SummaryCharacterBaseStat
     */
    public function getAttackEnergy()
    {
        return $this->attackEnergy;
    }

    /**
     * @param SummaryCharacterBaseStat $attackEnergy
     * @return SummaryCharacterBaseStats
     */
    public function setAttackEnergy(SummaryCharacterBaseStat $attackEnergy)
    {
        $this->attackEnergy = $attackEnergy;
        return $this;
    }
}
