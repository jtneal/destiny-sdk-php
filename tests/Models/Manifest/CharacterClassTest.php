<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class CharacterClassTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class CharacterClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $class = (new CharacterClass())
            ->setClassHash(2271682572)
            ->setClassType(2)
            ->setClassName('Warlock')
            ->setClassNameMale('Warlock')
            ->setClassNameFemale('Warlock')
            ->setClassIdentifier('CLASS_WARLOCK')
            ->setMentorVendorIdentifier('VENDOR_WARLOCK_MENTOR')
            ->setHash(2271682572)
            ->setIndex(0);

        $this->assertEquals(2271682572, $class->getClassHash());
        $this->assertEquals(2, $class->getClassType());
        $this->assertEquals('Warlock', $class->getClassName());
        $this->assertEquals('Warlock', $class->getClassNameMale());
        $this->assertEquals('Warlock', $class->getClassNameFemale());
        $this->assertEquals('CLASS_WARLOCK', $class->getClassIdentifier());
        $this->assertEquals('VENDOR_WARLOCK_MENTOR', $class->getMentorVendorIdentifier());
        $this->assertEquals(2271682572, $class->getHash());
        $this->assertEquals(0, $class->getIndex());
    }
}
