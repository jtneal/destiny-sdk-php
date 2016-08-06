<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class ActivityBundleTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class ActivityBundleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $bundle = (new ActivityBundle())
            ->setBundleHash(2659248068)
            ->setActivityName('Vault of Glass')
            ->setActivityDescription('Beneath Venus, evil stirs.')
            ->setIcon('/common/destiny_content/icons/29dfa933d660fd67aa9981e0836a57a5.png')
            ->setReleaseIcon('/img/misc/missing_icon.png')
            ->setReleaseTime(0)
            ->setDestinationHash(518553403)
            ->setPlaceHash(3871070152)
            ->setActivityTypeHash(2043403989)
            ->setActivityHashes(new Collection('int'))
            ->setHash(2659248068)
            ->setIndex(0);

        $this->assertEquals(2659248068, $bundle->getBundleHash());
        $this->assertEquals('Vault of Glass', $bundle->getActivityName());
        $this->assertEquals('Beneath Venus, evil stirs.', $bundle->getActivityDescription());
        $this->assertEquals('/common/destiny_content/icons/29dfa933d660fd67aa9981e0836a57a5.png', $bundle->getIcon());
        $this->assertEquals('/img/misc/missing_icon.png', $bundle->getReleaseIcon());
        $this->assertEquals(0, $bundle->getReleaseTime());
        $this->assertEquals(518553403, $bundle->getDestinationHash());
        $this->assertEquals(3871070152, $bundle->getPlaceHash());
        $this->assertEquals(2043403989, $bundle->getActivityTypeHash());
        $this->assertEquals(new Collection('int'), $bundle->getActivityHashes());
        $this->assertEquals(2659248068, $bundle->getHash());
        $this->assertEquals(0, $bundle->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = ActivityBundle::toObject(null, [
            'bundleHash' => 2659248071,
            'activityName' => 'Vault of Glass',
            'activityDescription' => 'Beneath Venus, evil stirs.',
            'icon' => '/img/misc/missing_icon.png',
            'releaseIcon' => '/img/misc/missing_icon.png',
            'releaseTime' => 0,
            'destinationHash' => 518553403,
            'placeHash' => 3871070152,
            'activityTypeHash' => 2043403989,
            'activityHashes' => [2659248071, 2659248068],
            'hash' => 2659248071,
            'index' => 0
        ]);

        $expected = (new ActivityBundle())
            ->setBundleHash(2659248071)
            ->setActivityName('Vault of Glass')
            ->setActivityDescription('Beneath Venus, evil stirs.')
            ->setIcon('/img/misc/missing_icon.png')
            ->setReleaseIcon('/img/misc/missing_icon.png')
            ->setReleaseTime(0)
            ->setDestinationHash(518553403)
            ->setPlaceHash(3871070152)
            ->setActivityTypeHash(2043403989)
            ->setActivityHashes(new Collection('int', [2659248071, 2659248068]))
            ->setHash(2659248071)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ActivityBundle::toCollection(null, [
            [
                'bundleHash' => 2659248071,
                'activityName' => 'Vault of Glass',
                'activityDescription' => 'Beneath Venus, evil stirs.',
                'icon' => '/img/misc/missing_icon.png',
                'releaseIcon' => '/img/misc/missing_icon.png',
                'releaseTime' => 0,
                'destinationHash' => 518553403,
                'placeHash' => 3871070152,
                'activityTypeHash' => 2043403989,
                'activityHashes' => [2659248071, 2659248068],
                'hash' => 2659248071,
                'index' => 0
            ]
        ]);

        $expected = new Collection(ActivityBundle::class, [
            (new ActivityBundle())
                ->setBundleHash(2659248071)
                ->setActivityName('Vault of Glass')
                ->setActivityDescription('Beneath Venus, evil stirs.')
                ->setIcon('/img/misc/missing_icon.png')
                ->setReleaseIcon('/img/misc/missing_icon.png')
                ->setReleaseTime(0)
                ->setDestinationHash(518553403)
                ->setPlaceHash(3871070152)
                ->setActivityTypeHash(2043403989)
                ->setActivityHashes(new Collection('int', [2659248071, 2659248068]))
                ->setHash(2659248071)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
