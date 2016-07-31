<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class UnlockFlagTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class UnlockFlagTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $flag = (new UnlockFlag())
            ->setFlagHash(2100359368)
            ->setIsOffer(false)
            ->setUnlockType(0)
            ->setHash(2100359368)
            ->setIndex(0);

        $this->assertEquals(2100359368, $flag->getFlagHash());
        $this->assertEquals(false, $flag->getIsOffer());
        $this->assertEquals(0, $flag->getUnlockType());
        $this->assertEquals(2100359368, $flag->getHash());
        $this->assertEquals(0, $flag->getIndex());
    }
}
