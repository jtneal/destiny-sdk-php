<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivityExtendedRoundTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedRoundTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $round = (new AdvisorActivityExtendedRound())
            ->setEnemyRaceHash(3265589059)
            ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
            ->setBossCombatantHash(3)
            ->setBossLightLevel(310);

        $this->assertEquals(3265589059, $round->getEnemyRaceHash());
        $this->assertEquals(new Collection(AdvisorActivitySkullCategory::class), $round->getSkullCategories());
        $this->assertEquals(3, $round->getBossCombatantHash());
        $this->assertEquals(310, $round->getBossLightLevel());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityExtendedRound::toObject(null, [
            'enemyRaceHash' => 3265589059,
            'skullCategories' => [],
            'bossCombatantHash' => 3,
            'bossLightLevel' => 310
        ]);

        $expected = (new AdvisorActivityExtendedRound())
            ->setEnemyRaceHash(3265589059)
            ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
            ->setBossCombatantHash(3)
            ->setBossLightLevel(310);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityExtendedRound::toCollection(null, [
            [
                'enemyRaceHash' => 3265589059,
                'skullCategories' => [],
                'bossCombatantHash' => 3,
                'bossLightLevel' => 310
            ]
        ]);

        $expected = new Collection(AdvisorActivityExtendedRound::class, [
            (new AdvisorActivityExtendedRound())
                ->setEnemyRaceHash(3265589059)
                ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
                ->setBossCombatantHash(3)
                ->setBossLightLevel(310)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
