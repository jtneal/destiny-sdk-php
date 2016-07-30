<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ProgressionNotFoundException;
use Necowebs\Destiny\Models\Manifest\Progression;

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
        $progression = (new ProgressionService())->getProgression(1149018548);

        $expected = (new Progression())
            ->setProgressionHash(1149018548)
            ->setName('actual_level')
            ->setScope(4)
            ->setRepeatLastStep(false)
            ->setSteps(new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep'))
            ->setVisible(true)
            ->setHash(1149018548)
            ->setIndex(0);

        $this->assertEquals($expected, $progression);
    }

    /**
     * Test Get Progression Exception
     */
    public function testGetProgressionException()
    {
        $this->expectException(ProgressionNotFoundException::class);

        $progression = (new ProgressionService())->getProgression('Fail');
    }
}
