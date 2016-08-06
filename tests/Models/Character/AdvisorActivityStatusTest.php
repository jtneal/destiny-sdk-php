<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivityStatusTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityStatusTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $status = (new AdvisorActivityStatus())
            ->setExpirationDate('2016-08-09T09:00:00Z')
            ->setStartDate('2016-08-02T09:00:00Z')
            ->setExpirationKnown(true)
            ->setActive(true);

        $this->assertEquals('2016-08-09T09:00:00Z', $status->getExpirationDate());
        $this->assertEquals('2016-08-02T09:00:00Z', $status->getStartDate());
        $this->assertEquals(true, $status->getExpirationKnown());
        $this->assertEquals(true, $status->getActive());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivityStatus::toObject(null, [
            'expirationDate' => '2016-08-09T09:00:00Z',
            'startDate' => '2016-08-02T09:00:00Z',
            'expirationKnown' => true,
            'active' => true
        ]);

        $expected = (new AdvisorActivityStatus())
            ->setExpirationDate('2016-08-09T09:00:00Z')
            ->setStartDate('2016-08-02T09:00:00Z')
            ->setExpirationKnown(true)
            ->setActive(true);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivityStatus::toCollection(null, [
            [
                'expirationDate' => '2016-08-09T09:00:00Z',
                'startDate' => '2016-08-02T09:00:00Z',
                'expirationKnown' => true,
                'active' => true
            ]
        ]);

        $expected = new Collection(AdvisorActivityStatus::class, [
            (new AdvisorActivityStatus())
                ->setExpirationDate('2016-08-09T09:00:00Z')
                ->setStartDate('2016-08-02T09:00:00Z')
                ->setExpirationKnown(true)
                ->setActive(true)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
