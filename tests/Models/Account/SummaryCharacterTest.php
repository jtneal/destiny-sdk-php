<?php

namespace Necowebs\Destiny\Models\Account;

/**
 * Class SummaryCharacterTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $character = (new SummaryCharacter())
            ->setCharacterBase(new SummaryCharacterBase())
            ->setLevelProgression(new SummaryCharacterLevelProgression())
            ->setEmblemPath('/common/destiny_content/icons/f2c6a2edc3e5b89092a43e29695e8539.jpg')
            ->setBackgroundPath('/common/destiny_content/icons/1ee9dd7b47105a319e579b16c7520920.jpg')
            ->setEmblemHash(2596665931)
            ->setCharacterLevel(40)
            ->setBaseCharacterLevel(40)
            ->setIsPrestigeLevel(false)
            ->setPercentToNextLevel(0);

        $this->assertEquals(new SummaryCharacterBase(), $character->getCharacterBase());
        $this->assertEquals(new SummaryCharacterLevelProgression(), $character->getLevelProgression());
        $this->assertEquals('/common/destiny_content/icons/f2c6a2edc3e5b89092a43e29695e8539.jpg', $character->getEmblemPath());
        $this->assertEquals('/common/destiny_content/icons/1ee9dd7b47105a319e579b16c7520920.jpg', $character->getBackgroundPath());
        $this->assertEquals(2596665931, $character->getEmblemHash());
        $this->assertEquals(40, $character->getCharacterLevel());
        $this->assertEquals(40, $character->getBaseCharacterLevel());
        $this->assertEquals(false, $character->getIsPrestigeLevel());
        $this->assertEquals(0, $character->getPercentToNextLevel());
    }
}
