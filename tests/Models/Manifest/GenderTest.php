<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class GenderTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class GenderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $gender = (new Gender())
            ->setGenderHash(2204441813)
            ->setGenderType(1)
            ->setGenderName('Female')
            ->setGenderDescription('')
            ->setHash(2204441813)
            ->setIndex(0);

        $this->assertEquals(2204441813, $gender->getGenderHash());
        $this->assertEquals(1, $gender->getGenderType());
        $this->assertEquals('Female', $gender->getGenderName());
        $this->assertEquals('', $gender->getGenderDescription());
        $this->assertEquals(2204441813, $gender->getHash());
        $this->assertEquals(0, $gender->getIndex());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Gender::toObject(null, [
            'genderHash' => 2204441813,
            'genderType' => 1,
            'genderName' => 'Female',
            'genderDescription' => '',
            'hash' => 2204441813,
            'index' => 0
        ]);

        $expected = (new Gender())
            ->setGenderHash(2204441813)
            ->setGenderType(1)
            ->setGenderName('Female')
            ->setGenderDescription('')
            ->setHash(2204441813)
            ->setIndex(0);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Gender::toCollection(null, [
            [
                'genderHash' => 2204441813,
                'genderType' => 1,
                'genderName' => 'Female',
                'genderDescription' => '',
                'hash' => 2204441813,
                'index' => 0
            ]
        ]);

        $expected = new Collection(Gender::class, [
            (new Gender())
                ->setGenderHash(2204441813)
                ->setGenderType(1)
                ->setGenderName('Female')
                ->setGenderDescription('')
                ->setHash(2204441813)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
