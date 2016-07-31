<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Gender;

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

        $expected = (new Gender())
            ->setGenderHash(2204441813)
            ->setGenderType(1)
            ->setGenderName('Female')
            ->setGenderDescription('')
            ->setHash(2204441813)
            ->setIndex(0);

        $this->assertEquals($expected, $gender);
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
