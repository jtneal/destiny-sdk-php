<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Progression;
use Necowebs\Destiny\Models\Manifest\ProgressionStep;

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

        $expected = (new Progression())
            ->setProgressionHash(45089664)
            ->setName('terminals')
            ->setScope(1)
            ->setRepeatLastStep(true)
            ->setSteps((new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep'))
                ->add((new ProgressionStep())
                    ->setProgressTotal(1)
                    ->setRewardItems([])
                )
            )
            ->setVisible(true)
            ->setHash(45089664)
            ->setIndex(0);

        $this->assertEquals($expected, $progression);
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
