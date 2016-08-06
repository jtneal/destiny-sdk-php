<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;

/**
 * Class ProgressionServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class ProgressionServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Progression
     */
    public function testGetProgression()
    {
        $progression = (new ProgressionService())->getProgression(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(SummaryCharacterLevelProgression::class, $progression->getProgressions());
        $this->assertInstanceOf(SummaryCharacterLevelProgression::class, $progression->getLevelProgression());
        $this->assertEquals(40, $progression->getBaseCharacterLevel());
        $this->assertEquals(false, $progression->getIsPrestigeLevel());
        $this->assertEquals(1424722124, $progression->getFactionProgressionHash());
        $this->assertEquals(0, $progression->getPercentToNextLevel());
    }

    /**
     * Test Get Progression Exception
     */
    public function testGetProgressionException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $progression = (new ProgressionService())->getProgression(0, 'Fail', 'Fail');
    }
}
