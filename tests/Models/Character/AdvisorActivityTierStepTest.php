<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivityTierStepTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityTierStepTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $step = (new AdvisorActivityTierStep())
            ->setComplete(true);

        $this->assertEquals(true, $step->getComplete());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityTierStep::toObject(null, [
            'complete' => true
        ]);

        $expected = (new AdvisorActivityTierStep())
            ->setComplete(true);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityTierStep::toCollection(null, [
            [
                'complete' => true
            ]
        ]);

        $expected = new Collection(AdvisorActivityTierStep::class, [
            (new AdvisorActivityTierStep())
                ->setComplete(true)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
