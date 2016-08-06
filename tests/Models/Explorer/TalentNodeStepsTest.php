<?php

namespace Necowebs\Destiny\Models\Explorer;

use Collections\Collection;

/**
 * Class TalentNodeStepsTest
 * @package Necowebs\Destiny\Models\Explorer
 */
class TalentNodeStepsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $steps = (new TalentNodeSteps())
            ->setStepHashes(new Collection('int', [159230103]))
            ->setTotalResults(1)
            ->setHasMore(false)
            ->setQuery(new ItemsQuery())
            ->setUseTotalResults(true);

        $this->assertEquals(new Collection('int', [159230103]), $steps->getStepHashes());
        $this->assertEquals(1, $steps->getTotalResults());
        $this->assertEquals(false, $steps->getHasMore());
        $this->assertEquals(new ItemsQuery(), $steps->getQuery());
        $this->assertEquals(true, $steps->getUseTotalResults());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = TalentNodeSteps::toObject(null, [
            'stepHashes' => [159230103],
            'totalResults' => 1,
            'hasMore' => false,
            'query' => [],
            'useTotalResults' => true
        ]);

        $expected = (new TalentNodeSteps())
            ->setStepHashes(new Collection('int', [159230103]))
            ->setTotalResults(1)
            ->setHasMore(false)
            ->setQuery(new ItemsQuery())
            ->setUseTotalResults(true);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = TalentNodeSteps::toCollection(null, [
            [
                'stepHashes' => [159230103],
                'totalResults' => 1,
                'hasMore' => false,
                'query' => [],
                'useTotalResults' => true
            ]
        ]);

        $expected = new Collection(TalentNodeSteps::class, [
            (new TalentNodeSteps())
                ->setStepHashes(new Collection('int', [159230103]))
                ->setTotalResults(1)
                ->setHasMore(false)
                ->setQuery(new ItemsQuery())
                ->setUseTotalResults(true)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
