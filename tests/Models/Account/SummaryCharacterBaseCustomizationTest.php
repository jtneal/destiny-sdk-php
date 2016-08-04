<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class SummaryCharacterBaseCustomizationTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBaseCustomizationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $customization = (new SummaryCharacterBaseCustomization())
            ->setPersonality(2166136261)
            ->setFace(2132087816)
            ->setSkinColor(3045033360)
            ->setLipColor(404671486)
            ->setEyeColor(1194006496)
            ->setHairColor(1063498229)
            ->setFeatureColor(2166136261)
            ->setDecalColor(552943744)
            ->setWearHelmet(false)
            ->setHairIndex(2)
            ->setFeatureIndex(0)
            ->setDecalIndex(0);

        $this->assertEquals(2166136261, $customization->getPersonality());
        $this->assertEquals(2132087816, $customization->getFace());
        $this->assertEquals(3045033360, $customization->getSkinColor());
        $this->assertEquals(404671486, $customization->getLipColor());
        $this->assertEquals(1194006496, $customization->getEyeColor());
        $this->assertEquals(1063498229, $customization->getHairColor());
        $this->assertEquals(2166136261, $customization->getFeatureColor());
        $this->assertEquals(552943744, $customization->getDecalColor());
        $this->assertEquals(false, $customization->getWearHelmet());
        $this->assertEquals(2, $customization->getHairIndex());
        $this->assertEquals(0, $customization->getFeatureIndex());
        $this->assertEquals(0, $customization->getDecalIndex());
    }
}
