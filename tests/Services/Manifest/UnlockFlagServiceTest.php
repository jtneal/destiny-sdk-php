<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\UnlockFlag;

/**
 * Class UnlockFlagServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class UnlockFlagServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Unlock Flag
     */
    public function testGetUnlockFlag()
    {
        $flag = (new UnlockFlagService())->getUnlockFlag(2100359368);

        $expected = (new UnlockFlag())
            ->setFlagHash(2100359368)
            ->setIsOffer(false)
            ->setUnlockType(0)
            ->setHash(2100359368)
            ->setIndex(0);

        $this->assertEquals($expected, $flag);
    }

    /**
     * Test Get Unlock Flag Exception
     */
    public function testGetUnlockFlagException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $flag = (new UnlockFlagService())->getUnlockFlag('Fail');
    }
}
