<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Account\AdvisorRecordBookRecordObjective;

/**
 * Class AdvisorActivityExtendedTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityExtendedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $extended = (new AdvisorActivityExtended())
            ->setScoreCard(new AdvisorActivityExtendedScoreCard())
            ->setWinRewardDetails([])
            ->setHighestWinRank(0)
            ->setOrders(new Collection(AdvisorActivityExtendedOrder::class))
            ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
            ->setObjectives(new Collection(AdvisorRecordBookRecordObjective::class))
            ->setRounds(new Collection(AdvisorActivityExtendedRound::class));

        $this->assertEquals(new AdvisorActivityExtendedScoreCard(), $extended->getScoreCard());
        $this->assertEquals([], $extended->getWinRewardDetails());
        $this->assertEquals(0, $extended->getHighestWinRank());
        $this->assertEquals(new Collection(AdvisorActivityExtendedOrder::class), $extended->getOrders());
        $this->assertEquals(new Collection(AdvisorActivitySkullCategory::class), $extended->getSkullCategories());
        $this->assertEquals(new Collection(AdvisorRecordBookRecordObjective::class), $extended->getObjectives());
        $this->assertEquals(new Collection(AdvisorActivityExtendedRound::class), $extended->getRounds());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityExtended::toObject(null, [
            'scoreCard' => [],
            'winRewardDetails' => [],
            'highestWinRank' => 0,
            'orders' => [],
            'skullCategories' => [],
            'objectives' => [],
            'rounds' => []
        ]);

        $expected = (new AdvisorActivityExtended())
            ->setScoreCard(new AdvisorActivityExtendedScoreCard())
            ->setWinRewardDetails([])
            ->setHighestWinRank(0)
            ->setOrders(new Collection(AdvisorActivityExtendedOrder::class))
            ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
            ->setObjectives(new Collection(AdvisorRecordBookRecordObjective::class))
            ->setRounds(new Collection(AdvisorActivityExtendedRound::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityExtended::toCollection(null, [
            [
                'scoreCard' => [],
                'winRewardDetails' => [],
                'highestWinRank' => 0,
                'orders' => [],
                'skullCategories' => [],
                'objectives' => [],
                'rounds' => []
            ]
        ]);

        $expected = new Collection(AdvisorActivityExtended::class, [
            (new AdvisorActivityExtended())
                ->setScoreCard(new AdvisorActivityExtendedScoreCard())
                ->setWinRewardDetails([])
                ->setHighestWinRank(0)
                ->setOrders(new Collection(AdvisorActivityExtendedOrder::class))
                ->setSkullCategories(new Collection(AdvisorActivitySkullCategory::class))
                ->setObjectives(new Collection(AdvisorRecordBookRecordObjective::class))
                ->setRounds(new Collection(AdvisorActivityExtendedRound::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
