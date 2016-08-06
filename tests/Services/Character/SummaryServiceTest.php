<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\SummaryCharacterBase;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;

/**
 * Class SummaryServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class SummaryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Summary
     */
    public function testGetSummary()
    {
        $summary = (new SummaryService())->getSummary(2, '4611686018450406180', '2305843009310128298');

        $this->assertInstanceOf(SummaryCharacterBase::class, $summary->getCharacterBase());
        $this->assertInstanceOf(SummaryCharacterLevelProgression::class, $summary->getLevelProgression());
        $this->assertEquals('/common/destiny_content/icons/f2c6a2edc3e5b89092a43e29695e8539.jpg', $summary->getEmblemPath());
        $this->assertEquals('/common/destiny_content/icons/1ee9dd7b47105a319e579b16c7520920.jpg', $summary->getBackgroundPath());
        $this->assertEquals(2596665931, $summary->getEmblemHash());
        $this->assertEquals(40, $summary->getCharacterLevel());
        $this->assertEquals(40, $summary->getBaseCharacterLevel());
        $this->assertEquals(false, $summary->getIsPrestigeLevel());
        $this->assertEquals(0, $summary->getPercentToNextLevel());
    }

    /**
     * Test Get Summary Exception
     */
    public function testGetSummaryException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $summary = (new SummaryService())->getSummary(0, 'Fail', 'Fail');
    }
}
