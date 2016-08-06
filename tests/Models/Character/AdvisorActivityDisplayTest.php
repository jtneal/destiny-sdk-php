<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivityDisplayTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityDisplayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $display = (new AdvisorActivityDisplay())
            ->setCategoryHash(1025694749)
            ->setIcon('/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png')
            ->setImage('/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg')
            ->setFlavor('LIMITED TIME EVENT')
            ->setAdvisorTypeCategory('Vault of Glass')
            ->setActivityHash(2659248071)
            ->setEventHash(2)
            ->setPlaylistHash(86749741)
            ->setDestinationHash(518553403)
            ->setFactionHash(2161005788)
            ->setPlaceHash(3871070152)
            ->setAbout('The Vault of Glass is a Year 1 raid activity which offers Year 1 rewards. These rewards may be earned once, per week, per difficulty, per character. Once unlocked, this activitiy can be found in the Director, on Venus.')
            ->setStatus('Test')
            ->setTips(new Collection('string', [
                'Progress in the Vault of Glass raid is saved, and can be resumed later. Checkpoints are wiped with every Weekly Reset.',
                'Completing Vault of Glass on Hard Mode offers players the chance to receive the Vex Mythoclast Year 1 Fusion Rifle.'
            ]))
            ->setRecruitmentIds(new Collection('string', ['VaultOfGlass', 'VaultOfGlassHeroic']));

        $this->assertEquals(1025694749, $display->getCategoryHash());
        $this->assertEquals('/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png', $display->getIcon());
        $this->assertEquals('/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg', $display->getImage());
        $this->assertEquals('LIMITED TIME EVENT', $display->getFlavor());
        $this->assertEquals('Vault of Glass', $display->getAdvisorTypeCategory());
        $this->assertEquals(2659248071, $display->getActivityHash());
        $this->assertEquals(2, $display->getEventHash());
        $this->assertEquals(86749741, $display->getPlaylistHash());
        $this->assertEquals(518553403, $display->getDestinationHash());
        $this->assertEquals(2161005788, $display->getFactionHash());
        $this->assertEquals(3871070152, $display->getPlaceHash());
        $this->assertEquals('The Vault of Glass is a Year 1 raid activity which offers Year 1 rewards. These rewards may be earned once, per week, per difficulty, per character. Once unlocked, this activitiy can be found in the Director, on Venus.', $display->getAbout());
        $this->assertEquals('Test', $display->getStatus());
        $this->assertEquals(new Collection('string', [
            'Progress in the Vault of Glass raid is saved, and can be resumed later. Checkpoints are wiped with every Weekly Reset.',
            'Completing Vault of Glass on Hard Mode offers players the chance to receive the Vex Mythoclast Year 1 Fusion Rifle.'
        ]), $display->getTips());
        $this->assertEquals(new Collection('string', ['VaultOfGlass', 'VaultOfGlassHeroic']), $display->getRecruitmentIds());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityDisplay::toObject(null, [
            'categoryHash' => 1025694749,
            'icon' => '/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png',
            'image' => '/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg',
            'flavor' => 'LIMITED TIME EVENT',
            'advisorTypeCategory' => 'Vault of Glass',
            'activityHash' => 2659248071,
            'eventHash' => 2,
            'playlistHash' => 86749741,
            'destinationHash' => 518553403,
            'factionHash' => 2161005788,
            'placeHash' => 3871070152,
            'about' => 'The Vault of Glass is a Year 1 raid activity which offers Year 1 rewards. These rewards may be earned once, per week, per difficulty, per character. Once unlocked, this activitiy can be found in the Director, on Venus.',
            'status' => 'Test',
            'tips' => [
                'Progress in the Vault of Glass raid is saved, and can be resumed later. Checkpoints are wiped with every Weekly Reset.',
                'Completing Vault of Glass on Hard Mode offers players the chance to receive the Vex Mythoclast Year 1 Fusion Rifle.'
            ],
            'recruitmentIds' => ['VaultOfGlass', 'VaultOfGlassHeroic']
        ]);

        $expected = (new AdvisorActivityDisplay())
            ->setCategoryHash(1025694749)
            ->setIcon('/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png')
            ->setImage('/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg')
            ->setFlavor('LIMITED TIME EVENT')
            ->setAdvisorTypeCategory('Vault of Glass')
            ->setActivityHash(2659248071)
            ->setEventHash(2)
            ->setPlaylistHash(86749741)
            ->setDestinationHash(518553403)
            ->setFactionHash(2161005788)
            ->setPlaceHash(3871070152)
            ->setAbout('The Vault of Glass is a Year 1 raid activity which offers Year 1 rewards. These rewards may be earned once, per week, per difficulty, per character. Once unlocked, this activitiy can be found in the Director, on Venus.')
            ->setStatus('Test')
            ->setTips(new Collection('string', [
                'Progress in the Vault of Glass raid is saved, and can be resumed later. Checkpoints are wiped with every Weekly Reset.',
                'Completing Vault of Glass on Hard Mode offers players the chance to receive the Vex Mythoclast Year 1 Fusion Rifle.'
            ]))
            ->setRecruitmentIds(new Collection('string', ['VaultOfGlass', 'VaultOfGlassHeroic']));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityDisplay::toCollection(null, [
            [
                'categoryHash' => 1025694749,
                'icon' => '/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png',
                'image' => '/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg',
                'flavor' => 'LIMITED TIME EVENT',
                'advisorTypeCategory' => 'Vault of Glass',
                'activityHash' => 2659248071,
                'eventHash' => 2,
                'playlistHash' => 86749741,
                'destinationHash' => 518553403,
                'factionHash' => 2161005788,
                'placeHash' => 3871070152,
                'about' => 'The Vault of Glass is a Year 1 raid activity which offers Year 1 rewards. These rewards may be earned once, per week, per difficulty, per character. Once unlocked, this activitiy can be found in the Director, on Venus.',
                'status' => 'Test',
                'tips' => [
                    'Progress in the Vault of Glass raid is saved, and can be resumed later. Checkpoints are wiped with every Weekly Reset.',
                    'Completing Vault of Glass on Hard Mode offers players the chance to receive the Vex Mythoclast Year 1 Fusion Rifle.'
                ],
                'recruitmentIds' => ['VaultOfGlass', 'VaultOfGlassHeroic']
            ]
        ]);

        $expected = new Collection(AdvisorActivityDisplay::class, [
            (new AdvisorActivityDisplay())
                ->setCategoryHash(1025694749)
                ->setIcon('/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png')
                ->setImage('/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg')
                ->setFlavor('LIMITED TIME EVENT')
                ->setAdvisorTypeCategory('Vault of Glass')
                ->setActivityHash(2659248071)
                ->setEventHash(2)
                ->setPlaylistHash(86749741)
                ->setDestinationHash(518553403)
                ->setFactionHash(2161005788)
                ->setPlaceHash(3871070152)
                ->setAbout('The Vault of Glass is a Year 1 raid activity which offers Year 1 rewards. These rewards may be earned once, per week, per difficulty, per character. Once unlocked, this activitiy can be found in the Director, on Venus.')
                ->setStatus('Test')
                ->setTips(new Collection('string', [
                    'Progress in the Vault of Glass raid is saved, and can be resumed later. Checkpoints are wiped with every Weekly Reset.',
                    'Completing Vault of Glass on Hard Mode offers players the chance to receive the Vex Mythoclast Year 1 Fusion Rifle.'
                ]))
                ->setRecruitmentIds(new Collection('string', ['VaultOfGlass', 'VaultOfGlassHeroic']))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
