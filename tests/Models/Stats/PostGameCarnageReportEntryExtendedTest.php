<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;

/**
 * Class PostGameCarnageReportEntryExtendedTest
 * @package Necowebs\Destiny\Models\Stats
 */
class PostGameCarnageReportEntryExtendedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $object = (new PostGameCarnageReportEntryExtended())
            ->setWeapons(new Collection(PostGameCarnageReportEntryExtendedWeapon::class))
            ->setValues(new Collection(ActivityValue::class));

        $this->assertEquals(new Collection(PostGameCarnageReportEntryExtendedWeapon::class), $object->getWeapons());
        $this->assertEquals(new Collection(ActivityValue::class), $object->getValues());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = PostGameCarnageReportEntryExtended::toObject(null, [
            'weapons' => [],
            'values' => []
        ]);

        $expected = (new PostGameCarnageReportEntryExtended())
            ->setWeapons(new Collection(PostGameCarnageReportEntryExtendedWeapon::class))
            ->setValues(new Collection(ActivityValue::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = PostGameCarnageReportEntryExtended::toCollection(null, [
            [
                'weapons' => [],
                'values' => []
            ]
        ]);

        $expected = new Collection(PostGameCarnageReportEntryExtended::class, [
            (new PostGameCarnageReportEntryExtended())
                ->setWeapons(new Collection(PostGameCarnageReportEntryExtendedWeapon::class))
                ->setValues(new Collection(ActivityValue::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
