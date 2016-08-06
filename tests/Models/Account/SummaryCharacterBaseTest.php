<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryCharacterBaseTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBaseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $base = (new SummaryCharacterBase())
            ->setMembershipId('4611686018450406180')
            ->setMembershipType(2)
            ->setCharacterId('2305843009310128298')
            ->setDateLastPlayed('2016-07-26T02:17:08Z')
            ->setMinutesPlayedThisSession('22')
            ->setMinutesPlayedTotal('32256')
            ->setPowerLevel(335)
            ->setRaceHash(3887404748)
            ->setGenderHash(2204441813)
            ->setClassHash(2271682572)
            ->setCurrentActivityHash(0)
            ->setLastCompletedStoryHash(0)
            ->setStats(new SummaryCharacterBaseStats())
            ->setCustomization(new SummaryCharacterBaseCustomization())
            ->setGrimoireScore(4620)
            ->setPeerView(new SummaryCharacterBasePeerView())
            ->setGenderType(1)
            ->setClassType(2)
            ->setBuildStatGroupHash(1997970403);

        $this->assertEquals('4611686018450406180', $base->getMembershipId());
        $this->assertEquals(2, $base->getMembershipType());
        $this->assertEquals('2305843009310128298', $base->getCharacterId());
        $this->assertEquals('2016-07-26T02:17:08Z', $base->getDateLastPlayed());
        $this->assertEquals('22', $base->getMinutesPlayedThisSession());
        $this->assertEquals('32256', $base->getMinutesPlayedTotal());
        $this->assertEquals(335, $base->getPowerLevel());
        $this->assertEquals(3887404748, $base->getRaceHash());
        $this->assertEquals(2204441813, $base->getGenderHash());
        $this->assertEquals(2271682572, $base->getClassHash());
        $this->assertEquals(0, $base->getCurrentActivityHash());
        $this->assertEquals(0, $base->getLastCompletedStoryHash());
        $this->assertEquals(new SummaryCharacterBaseStats(), $base->getStats());
        $this->assertEquals(new SummaryCharacterBaseCustomization(), $base->getCustomization());
        $this->assertEquals(4620, $base->getGrimoireScore());
        $this->assertEquals(new SummaryCharacterBasePeerView(), $base->getPeerView());
        $this->assertEquals(1, $base->getGenderType());
        $this->assertEquals(2, $base->getClassType());
        $this->assertEquals(1997970403, $base->getBuildStatGroupHash());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = SummaryCharacterBase::toObject(null, [
            'membershipId' => '4611686018450406180',
            'membershipType' => 2,
            'characterId' => '2305843009310128298',
            'dateLastPlayed' => '2016-07-26T02:17:08Z',
            'minutesPlayedThisSession' => '22',
            'minutesPlayedTotal' => '32256',
            'powerLevel' => 335,
            'raceHash' => 3887404748,
            'genderHash' => 2204441813,
            'classHash' => 2271682572,
            'currentActivityHash' => 0,
            'lastCompletedStoryHash' => 0,
            'stats' => [],
            'customization' => [],
            'grimoireScore' => 4620,
            'peerView' => [],
            'genderType' => 1,
            'classType' => 2,
            'buildStatGroupHash' => 1997970403
        ]);

        $expected = (new SummaryCharacterBase())
            ->setMembershipId('4611686018450406180')
            ->setMembershipType(2)
            ->setCharacterId('2305843009310128298')
            ->setDateLastPlayed('2016-07-26T02:17:08Z')
            ->setMinutesPlayedThisSession('22')
            ->setMinutesPlayedTotal('32256')
            ->setPowerLevel(335)
            ->setRaceHash(3887404748)
            ->setGenderHash(2204441813)
            ->setClassHash(2271682572)
            ->setCurrentActivityHash(0)
            ->setLastCompletedStoryHash(0)
            ->setStats(new SummaryCharacterBaseStats())
            ->setCustomization(new SummaryCharacterBaseCustomization())
            ->setGrimoireScore(4620)
            ->setPeerView(new SummaryCharacterBasePeerView())
            ->setGenderType(1)
            ->setClassType(2)
            ->setBuildStatGroupHash(1997970403);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = SummaryCharacterBase::toCollection(null, [
            [
                'membershipId' => '4611686018450406180',
                'membershipType' => 2,
                'characterId' => '2305843009310128298',
                'dateLastPlayed' => '2016-07-26T02:17:08Z',
                'minutesPlayedThisSession' => '22',
                'minutesPlayedTotal' => '32256',
                'powerLevel' => 335,
                'raceHash' => 3887404748,
                'genderHash' => 2204441813,
                'classHash' => 2271682572,
                'currentActivityHash' => 0,
                'lastCompletedStoryHash' => 0,
                'stats' => [],
                'customization' => [],
                'grimoireScore' => 4620,
                'peerView' => [],
                'genderType' => 1,
                'classType' => 2,
                'buildStatGroupHash' => 1997970403
            ]
        ]);

        $expected = new Collection(SummaryCharacterBase::class, [
            (new SummaryCharacterBase())
                ->setMembershipId('4611686018450406180')
                ->setMembershipType(2)
                ->setCharacterId('2305843009310128298')
                ->setDateLastPlayed('2016-07-26T02:17:08Z')
                ->setMinutesPlayedThisSession('22')
                ->setMinutesPlayedTotal('32256')
                ->setPowerLevel(335)
                ->setRaceHash(3887404748)
                ->setGenderHash(2204441813)
                ->setClassHash(2271682572)
                ->setCurrentActivityHash(0)
                ->setLastCompletedStoryHash(0)
                ->setStats(new SummaryCharacterBaseStats())
                ->setCustomization(new SummaryCharacterBaseCustomization())
                ->setGrimoireScore(4620)
                ->setPeerView(new SummaryCharacterBasePeerView())
                ->setGenderType(1)
                ->setClassType(2)
                ->setBuildStatGroupHash(1997970403)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
