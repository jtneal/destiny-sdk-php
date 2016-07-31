<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\ActivityBundle;

/**
 * Class ActivityBundleServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class ActivityBundleServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Activity Bundle
     */
    public function testGetActivityBundle()
    {
        $bundle = (new ActivityBundleService())->getActivityBundle(2659248071);

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

        $this->assertEquals($expected, $bundle);
    }

    /**
     * Test Get Activity Bundle Exception
     */
    public function testGetActivityBundleException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $bundle = (new ActivityBundleService())->getActivityBundle('Fail');
    }
}
