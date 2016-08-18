<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Reward;
use Necowebs\Destiny\Models\Manifest\Skull;

/**
 * Class ActivityServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class ActivityServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Activity
     */
    public function testGetActivity()
    {
        $activity = (new ActivityService())->getActivity(2659248068);

        $this->assertEquals(2659248068, $activity->getActivityHash());
        $this->assertEquals('Vault of Glass', $activity->getActivityName());
        $this->assertEquals('Beneath Venus, evil stirs.', $activity->getActivityDescription());
        $this->assertEquals('/common/destiny_content/icons/aeb1b1c238df607729a9ea306426b3b4.png', $activity->getIcon());
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
        $this->assertContainsOnlyInstancesOf(Reward::class, $activity->getRewards());
        $this->assertContainsOnlyInstancesOf(Skull::class, $activity->getSkulls());
        $this->assertEquals(false, $activity->getIsPlaylist());
        $this->assertEquals(false, $activity->getIsMatchmade());
        $this->assertEquals(2659248068, $activity->getHash());
        $this->assertEquals(0, $activity->getIndex());
    }

    /**
     * Test Get Activity Exception
     */
    public function testGetActivityException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $activity = (new ActivityService())->getActivity('Fail');
    }
}
