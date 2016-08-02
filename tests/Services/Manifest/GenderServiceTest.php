<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

/**
 * Class GenderServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class GenderServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Gender
     */
    public function testGetGender()
    {
        $gender = (new GenderService())->getGender(2204441813);

        $this->assertEquals(2204441813, $gender->getGenderHash());
        $this->assertEquals(1, $gender->getGenderType());
        $this->assertEquals('Female', $gender->getGenderName());
        $this->assertEquals('', $gender->getGenderDescription());
        $this->assertEquals(2204441813, $gender->getHash());
        $this->assertEquals(0, $gender->getIndex());
    }

    /**
     * Test Get Gender Exception
     */
    public function testGetGenderException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $gender = (new GenderService())->getGender('Fail');
    }
}
