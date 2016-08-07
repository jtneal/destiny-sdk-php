<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class PostGameCarnageReportEntryExtendedWeaponTest
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportEntryExtendedWeaponTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $object = (new PostGameCarnageReportEntryExtendedWeapon())
            ->setReferenceId(486279087)
            ->setValues(new Collection(ActivityValue::class));

        $this->assertEquals(486279087, $object->getReferenceId());
        $this->assertEquals(new Collection(ActivityValue::class), $object->getValues());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = PostGameCarnageReportEntryExtendedWeapon::toObject(null, [
            'referenceId' => 486279087,
            'values' => []
        ]);

        $expected = (new PostGameCarnageReportEntryExtendedWeapon())
            ->setReferenceId(486279087)
            ->setValues(new Collection(ActivityValue::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = PostGameCarnageReportEntryExtendedWeapon::toCollection(null, [
            [
                'referenceId' => 486279087,
                'values' => []
            ]
        ]);

        $expected = new Collection(PostGameCarnageReportEntryExtendedWeapon::class, [
            (new PostGameCarnageReportEntryExtendedWeapon())
                ->setReferenceId(486279087)
                ->setValues(new Collection(ActivityValue::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
