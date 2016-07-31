<?php

namespace Necowebs\Destiny\Utils;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\ProgressionStep;
use Necowebs\Destiny\Models\Manifest\Reward;
use Necowebs\Destiny\Models\Manifest\RewardItem;
use Necowebs\Destiny\Models\Manifest\Skull;

/**
 * Class MapperHelperTest
 * @package Necowebs\Destiny\Utils
 */
class MapperHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Map Array To Progression Steps
     */
    public function testMapArrayToProgressionSteps()
    {
        $steps = MapperHelper::mapArrayToProgressionSteps(null, [
            [
                'progressTotal' => 0,
                'rewardItems' => []
            ],
            [
                'progressTotal' => 9000,
                'rewardItems' => []
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep', [
            (new ProgressionStep())
                ->setProgressTotal(0)
                ->setRewardItems(new Collection('Necowebs\Destiny\Models\Manifest\RewardItem')),
            (new ProgressionStep())
                ->setProgressTotal(9000)
                ->setRewardItems(new Collection('Necowebs\Destiny\Models\Manifest\RewardItem'))
        ]);

        $this->assertEquals($expected, $steps);
    }

    /**
     * Test Map Empty Array To Progression Steps
     */
    public function testMapEmptyArrayToProgressionSteps()
    {
        $steps = MapperHelper::mapArrayToProgressionSteps(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep', []);

        $this->assertEquals($expected, $steps);
    }

    /**
     * Test Map Array To Rewards
     */
    public function testMapArrayToRewards()
    {
        $rewards = MapperHelper::mapArrayToRewards(null, [
            [
                'rewardItems' => [
                    [
                        'itemHash' => 1772473720,
                        'value' => 0
                    ],
                    [
                        'itemHash' => 1743040968,
                        'value' => 0
                    ]
                ]
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\Reward', [
            (new Reward())
                ->setRewardItems((new Collection('Necowebs\Destiny\Models\Manifest\RewardItem'))
                    ->add((new RewardItem())->setItemHash(1772473720)->setValue(0))
                    ->add((new RewardItem())->setItemHash(1743040968)->setValue(0))
                )
        ]);

        $this->assertEquals($expected, $rewards);
    }

    /**
     * Test Map Empty Array To Rewards
     */
    public function testMapEmptyArrayToRewards()
    {
        $rewards = MapperHelper::mapArrayToRewards(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\Reward', []);

        $this->assertEquals($expected, $rewards);
    }

    /**
     * Test Map Array To Reward Items
     */
    public function testMapArrayToRewardItems()
    {
        $items = MapperHelper::mapArrayToRewardItems(null, [
            [
                'itemHash' => 1772473720,
                'value' => 0
            ],
            [
                'itemHash' => 1743040968,
                'value' => 0
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\RewardItem', [
            (new RewardItem())
                ->setItemHash(1772473720)->setValue(0),
            (new RewardItem())
                ->setItemHash(1743040968)->setValue(0)
        ]);

        $this->assertEquals($expected, $items);
    }

    /**
     * Test Map Empty Array To Reward Items
     */
    public function testMapEmptyArrayToRewardItems()
    {
        $items = MapperHelper::mapArrayToRewardItems(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\RewardItem', []);

        $this->assertEquals($expected, $items);
    }

    /**
     * Test Map Array To Skulls
     */
    public function testMapArrayToSkulls()
    {
        $skulls = MapperHelper::mapArrayToSkulls(null, [
            [
                'displayName' => 'Heroic',
                'description' => 'Enemies appear in greater numbers and are more aggressive.',
                'icon' => '/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png'
            ]
        ]);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\Skull', [
            (new Skull())
                ->setDisplayName('Heroic')
                ->setDescription('Enemies appear in greater numbers and are more aggressive.')
                ->setIcon('/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png')
        ]);

        $this->assertEquals($expected, $skulls);
    }

    /**
     * Test Map Empty Array To Skulls
     */
    public function testMapEmptyArrayToSkulls()
    {
        $skulls = MapperHelper::mapArrayToSkulls(null, []);

        $expected = new Collection('Necowebs\Destiny\Models\Manifest\Skull', []);

        $this->assertEquals($expected, $skulls);
    }

    /**
     * Test Map Array To Ints
     */
    public function testMapArrayToInts()
    {
        $ints = MapperHelper::mapArrayToInts(null, [1, 2, 3, 4]);

        $expected = new Collection('int', [1, 2, 3, 4]);

        $this->assertEquals($expected, $ints);
    }

    /**
     * Test Map Empty Array To Ints
     */
    public function testMapEmptyArrayToInts()
    {
        $ints = MapperHelper::mapArrayToInts(null, []);

        $expected = new Collection('int', []);

        $this->assertEquals($expected, $ints);
    }
}
