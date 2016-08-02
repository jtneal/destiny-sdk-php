<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

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

        $this->assertEquals(2100359368, $flag->getFlagHash());
        $this->assertEquals(false, $flag->getIsOffer());
        $this->assertEquals(0, $flag->getUnlockType());
        $this->assertEquals(2100359368, $flag->getHash());
        $this->assertEquals(0, $flag->getIndex());
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
