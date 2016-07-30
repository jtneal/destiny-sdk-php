<?php

namespace Necowebs\Destiny\Models\Manifest;

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
}
