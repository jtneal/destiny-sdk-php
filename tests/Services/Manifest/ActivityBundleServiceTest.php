<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

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

        $this->assertEquals(2659248071, $bundle->getBundleHash());
        $this->assertEquals('Vault of Glass', $bundle->getActivityName());
        $this->assertEquals('Beneath Venus, evil stirs.', $bundle->getActivityDescription());
        $this->assertEquals('/img/misc/missing_icon.png', $bundle->getIcon());
        $this->assertEquals('/img/misc/missing_icon.png', $bundle->getReleaseIcon());
        $this->assertEquals(0, $bundle->getReleaseTime());
        $this->assertEquals(518553403, $bundle->getDestinationHash());
        $this->assertEquals(3871070152, $bundle->getPlaceHash());
        $this->assertEquals(2043403989, $bundle->getActivityTypeHash());
        $this->assertEquals(new Collection('int', [2659248071, 2659248068]), $bundle->getActivityHashes());
        $this->assertEquals(2659248071, $bundle->getHash());
        $this->assertEquals(0, $bundle->getIndex());
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
