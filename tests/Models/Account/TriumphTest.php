<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class TriumphTest
 * @package Necowebs\Destiny\Models\Account
 */
class TriumphTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $triumph = (new Triumph())
            ->setComplete(true)
            ->setProgress(0)
            ->setActual(0)
            ->setShowProgress(false);

        $this->assertEquals(true, $triumph->getComplete());
        $this->assertEquals(0, $triumph->getProgress());
        $this->assertEquals(0, $triumph->getActual());
        $this->assertEquals(false, $triumph->getShowProgress());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Triumph::toObject(null, [
            'complete' => true,
            'progress' => 0,
            'actual' => 0,
            'showProgress' => false
        ]);

        $expected = (new Triumph())
            ->setComplete(true)
            ->setProgress(0)
            ->setActual(0)
            ->setShowProgress(false);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Triumph::toCollection(null, [
            [
                'complete' => true,
                'progress' => 0,
                'actual' => 0,
                'showProgress' => false
            ]
        ]);

        $expected = new Collection(Triumph::class, [
            (new Triumph())
                ->setComplete(true)
                ->setProgress(0)
                ->setActual(0)
                ->setShowProgress(false)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
