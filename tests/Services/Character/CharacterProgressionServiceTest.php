<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;

/**
 * Class CharacterProgressionServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class CharacterProgressionServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Character Progression
     */
    public function testGetCharacterProgression()
    {
        $progression = (new CharacterProgressionService())->getCharacterProgression(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(SummaryCharacterLevelProgression::class, $progression->getProgressions());
        $this->assertInstanceOf(SummaryCharacterLevelProgression::class, $progression->getLevelProgression());
        $this->assertEquals(40, $progression->getBaseCharacterLevel());
        $this->assertEquals(false, $progression->getIsPrestigeLevel());
        $this->assertEquals(1424722124, $progression->getFactionProgressionHash());
        $this->assertEquals(0, $progression->getPercentToNextLevel());
    }

    /**
     * Test Get Character Progression Exception
     */
    public function testGetCharacterProgressionException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $progression = (new CharacterProgressionService())->getCharacterProgression(0, 'Fail', 'Fail');
    }
}
