<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Activity;
use Necowebs\Destiny\Models\Manifest\Reward;
use Necowebs\Destiny\Models\Manifest\RewardItem;
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

        $rewardItems = new Collection('Necowebs\Destiny\Models\Manifest\RewardItem', [
            (new RewardItem())->setItemHash(1772473720)->setValue(0),
            (new RewardItem())->setItemHash(1743040968)->setValue(0),
            (new RewardItem())->setItemHash(3747303650)->setValue(0),
        ]);

        $rewards = new Collection('Necowebs\Destiny\Models\Manifest\Reward', [
            (new Reward())->setRewardItems($rewardItems),
        ]);

        $skulls = new Collection('Necowebs\Destiny\Models\Manifest\Skull', [
            (new Skull())
                ->setDisplayName('Heroic')
                ->setDescription('Enemies appear in greater numbers and are more aggressive.')
                ->setIcon('/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png'),
        ]);

        $expected = (new Activity())
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
            ->setRewards($rewards)
            ->setSkulls($skulls)
            ->setIsPlaylist(false)
            ->setIsMatchmade(false)
            ->setHash(2659248068)
            ->setIndex(0);

        $this->assertEquals($expected, $activity);
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
