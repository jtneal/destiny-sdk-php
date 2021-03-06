<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class ActivityTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class ActivityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activity = (new Activity())
            ->setActivityHash(2659248068)
            ->setActivityName('Vault of Glass')
            ->setActivityDescription('Beneath Venus, evil stirs.')
            ->setIcon('/common/destiny_content/icons/29dfa933d660fd67aa9981e0836a57a5.png')
            ->setReleaseIcon('/img/misc/missing_icon.png')
            ->setReleaseTime(0)
            ->setActivityLevel(30)
            ->setCompletionFlagHash(2100359368)
            ->setActivityPower(0)
            ->setMinParty(1)
            ->setMaxParty(6)
            ->setMaxPlayers(6)
            ->setDestinationHash(518553403)
            ->setPlaceHash(3871070152)
            ->setActivityTypeHash(2043403989)
            ->setTier(2)
            ->setPgcrImage('/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg')
            ->setRewards(new Collection(Reward::class))
            ->setSkulls(new Collection(Skull::class))
            ->setIsPlaylist(false)
            ->setIsMatchmade(false)
            ->setHash(2659248068)
            ->setIndex(0);

        $this->assertEquals(2659248068, $activity->getActivityHash());
        $this->assertEquals('Vault of Glass', $activity->getActivityName());
        $this->assertEquals('Beneath Venus, evil stirs.', $activity->getActivityDescription());
        $this->assertEquals('/common/destiny_content/icons/29dfa933d660fd67aa9981e0836a57a5.png', $activity->getIcon());
        $this->assertEquals('/img/misc/missing_icon.png', $activity->getReleaseIcon());
        $this->assertEquals(0, $activity->getReleaseTime());
        $this->assertEquals(30, $activity->getActivityLevel());
        $this->assertEquals(2100359368, $activity->getCompletionFlagHash());
        $this->assertEquals(0, $activity->getActivityPower());
        $this->assertEquals(1, $activity->getMinParty());
        $this->assertEquals(6, $activity->getMaxParty());
        $this->assertEquals(6, $activity->getMaxPlayers());
        $this->assertEquals(518553403, $activity->getDestinationHash());
        $this->assertEquals(3871070152, $activity->getPlaceHash());
        $this->assertEquals(2043403989, $activity->getActivityTypeHash());
        $this->assertEquals(2, $activity->getTier());
        $this->assertEquals('/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg', $activity->getPgcrImage());
        $this->assertEquals(new Collection(Reward::class), $activity->getRewards());
        $this->assertEquals(new Collection(Skull::class), $activity->getSkulls());
        $this->assertEquals(false, $activity->getIsPlaylist());
        $this->assertEquals(false, $activity->getIsMatchmade());
        $this->assertEquals(2659248068, $activity->getHash());
        $this->assertEquals(0, $activity->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Activity::toObject(null, [
            'activityHash' => 2659248068,
            'activityName' => 'Vault of Glass',
            'activityDescription' => 'Beneath Venus, evil stirs.',
            'icon' => '/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png',
            'releaseIcon' => '/img/misc/missing_icon.png',
            'releaseTime' => 0,
            'activityLevel' => 30,
            'completionFlagHash' => 2100359368,
            'activityPower' => 0,
            'minParty' => 1,
            'maxParty' => 6,
            'maxPlayers' => 6,
            'destinationHash' => 518553403,
            'placeHash' => 3871070152,
            'activityTypeHash' => 2043403989,
            'tier' => 2,
            'pgcrImage' => '/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg',
            'rewards' => [],
            'skulls' => [],
            'isPlaylist' => false,
            'isMatchmade' => false,
            'hash' => 2659248068,
            'index' => 0
        ]);

        $expected = (new Activity())
            ->setActivityHash(2659248068)
            ->setActivityName('Vault of Glass')
            ->setActivityDescription('Beneath Venus, evil stirs.')
            ->setIcon('/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png')
            ->setReleaseIcon('/img/misc/missing_icon.png')
            ->setReleaseTime(0)
            ->setActivityLevel(30)
            ->setCompletionFlagHash(2100359368)
            ->setActivityPower(0)
            ->setMinParty(1)
            ->setMaxParty(6)
            ->setMaxPlayers(6)
            ->setDestinationHash(518553403)
            ->setPlaceHash(3871070152)
            ->setActivityTypeHash(2043403989)
            ->setTier(2)
            ->setPgcrImage('/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg')
            ->setRewards(new Collection(Reward::class))
            ->setSkulls(new Collection(Skull::class))
            ->setIsPlaylist(false)
            ->setIsMatchmade(false)
            ->setHash(2659248068)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Activity::toCollection(null, [
            [
                'activityHash' => 2659248068,
                'activityName' => 'Vault of Glass',
                'activityDescription' => 'Beneath Venus, evil stirs.',
                'icon' => '/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png',
                'releaseIcon' => '/img/misc/missing_icon.png',
                'releaseTime' => 0,
                'activityLevel' => 30,
                'completionFlagHash' => 2100359368,
                'activityPower' => 0,
                'minParty' => 1,
                'maxParty' => 6,
                'maxPlayers' => 6,
                'destinationHash' => 518553403,
                'placeHash' => 3871070152,
                'activityTypeHash' => 2043403989,
                'tier' => 2,
                'pgcrImage' => '/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg',
                'rewards' => [],
                'skulls' => [],
                'isPlaylist' => false,
                'isMatchmade' => false,
                'hash' => 2659248068,
                'index' => 0
            ]
        ]);

        $expected = new Collection(Activity::class, [
            (new Activity())
                ->setActivityHash(2659248068)
                ->setActivityName('Vault of Glass')
                ->setActivityDescription('Beneath Venus, evil stirs.')
                ->setIcon('/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png')
                ->setReleaseIcon('/img/misc/missing_icon.png')
                ->setReleaseTime(0)
                ->setActivityLevel(30)
                ->setCompletionFlagHash(2100359368)
                ->setActivityPower(0)
                ->setMinParty(1)
                ->setMaxParty(6)
                ->setMaxPlayers(6)
                ->setDestinationHash(518553403)
                ->setPlaceHash(3871070152)
                ->setActivityTypeHash(2043403989)
                ->setTier(2)
                ->setPgcrImage('/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg')
                ->setRewards(new Collection(Reward::class))
                ->setSkulls(new Collection(Skull::class))
                ->setIsPlaylist(false)
                ->setIsMatchmade(false)
                ->setHash(2659248068)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
