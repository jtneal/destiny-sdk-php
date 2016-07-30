<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\CharacterClassNotFoundException;
use Necowebs\Destiny\Models\Manifest\CharacterClass;

/**
 * Class CharacterClassServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class CharacterClassServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Class
     */
    public function testGetClass()
    {
        $class = (new CharacterClassService())->getClass(2271682572);

        $expected = (new CharacterClass())
            ->setClassHash(2271682572)
            ->setClassType(2)
            ->setClassName('Warlock')
            ->setClassNameMale('Warlock')
            ->setClassNameFemale('Warlock')
            ->setClassIdentifier('CLASS_WARLOCK')
            ->setMentorVendorIdentifier('VENDOR_WARLOCK_MENTOR')
            ->setHash(2271682572)
            ->setIndex(0);

        $this->assertEquals($expected, $class);
    }

    /**
     * Test Get Class Exception
     */
    public function testGetClassException()
    {
        $this->expectException(CharacterClassNotFoundException::class);

        $class = (new CharacterClassService())->getClass('Fail');
    }
}
