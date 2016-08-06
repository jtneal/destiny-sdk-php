<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;

/**
 * Class ProgressionTest
 * @package Necowebs\Destiny\Models\Character
 */
class ProgressionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $progression = (new Progression())
            ->setProgressions(new Collection(SummaryCharacterLevelProgression::class))
            ->setLevelProgression(new SummaryCharacterLevelProgression())
            ->setBaseCharacterLevel(40)
            ->setIsPrestigeLevel(false)
            ->setFactionProgressionHash(1424722124)
            ->setPercentToNextLevel(0);

        $this->assertEquals(new Collection(SummaryCharacterLevelProgression::class), $progression->getProgressions());
        $this->assertEquals(new SummaryCharacterLevelProgression(), $progression->getLevelProgression());
        $this->assertEquals(40, $progression->getBaseCharacterLevel());
        $this->assertEquals(false, $progression->getIsPrestigeLevel());
        $this->assertEquals(1424722124, $progression->getFactionProgressionHash());
        $this->assertEquals(0, $progression->getPercentToNextLevel());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Progression::toObject(null, [
            'progressions' => [],
            'levelProgression' => [],
            'baseCharacterLevel' => 40,
            'isPrestigeLevel' => false,
            'factionProgressionHash' => 1424722124,
            'percentToNextLevel' => 0
        ]);

        $expected = (new Progression())
            ->setProgressions(new Collection(SummaryCharacterLevelProgression::class))
            ->setLevelProgression(new SummaryCharacterLevelProgression())
            ->setBaseCharacterLevel(40)
            ->setIsPrestigeLevel(false)
            ->setFactionProgressionHash(1424722124)
            ->setPercentToNextLevel(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Progression::toCollection(null, [
            [
                'progressions' => [],
                'levelProgression' => [],
                'baseCharacterLevel' => 40,
                'isPrestigeLevel' => false,
                'factionProgressionHash' => 1424722124,
                'percentToNextLevel' => 0
            ]
        ]);

        $expected = new Collection(Progression::class, [
            (new Progression())
                ->setProgressions(new Collection(SummaryCharacterLevelProgression::class))
                ->setLevelProgression(new SummaryCharacterLevelProgression())
                ->setBaseCharacterLevel(40)
                ->setIsPrestigeLevel(false)
                ->setFactionProgressionHash(1424722124)
                ->setPercentToNextLevel(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
