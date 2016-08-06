<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivityCompletionTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityCompletionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $completion = (new AdvisorActivityCompletion())
            ->setComplete(false)
            ->setSuccess(false)
            ->setCompletionCount(0)
            ->setMaxCompletions(3);

        $this->assertEquals(false, $completion->getComplete());
        $this->assertEquals(false, $completion->getSuccess());
        $this->assertEquals(0, $completion->getCompletionCount());
        $this->assertEquals(3, $completion->getMaxCompletions());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityCompletion::toObject(null, [
            'complete' => false,
            'success' => false,
            'completionCount' => 0,
            'maxCompletions' => 3
        ]);

        $expected = (new AdvisorActivityCompletion())
            ->setComplete(false)
            ->setSuccess(false)
            ->setCompletionCount(0)
            ->setMaxCompletions(3);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityCompletion::toCollection(null, [
            [
                'complete' => false,
                'success' => false,
                'completionCount' => 0,
                'maxCompletions' => 3
            ]
        ]);

        $expected = new Collection(AdvisorActivityCompletion::class, [
            (new AdvisorActivityCompletion())
                ->setComplete(false)
                ->setSuccess(false)
                ->setCompletionCount(0)
                ->setMaxCompletions(3)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
