<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Reward;

/**
 * Class ProgressionServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class ProgressionServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Progression
     */
    public function testGetProgression()
    {
        $progression = (new ProgressionService())->getProgression(45089664);

        $this->assertEquals(45089664, $progression->getProgressionHash());
        $this->assertEquals('terminals', $progression->getName());
        $this->assertEquals(1, $progression->getScope());
        $this->assertEquals(true, $progression->getRepeatLastStep());
        $this->assertContainsOnlyInstancesOf(Reward::class, $progression->getSteps());
        $this->assertEquals(true, $progression->getVisible());
        $this->assertEquals(45089664, $progression->getHash());
        $this->assertEquals(0, $progression->getIndex());
    }

    /**
     * Test Get Progression Exception
     */
    public function testGetProgressionException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $progression = (new ProgressionService())->getProgression('Fail');
    }
}
