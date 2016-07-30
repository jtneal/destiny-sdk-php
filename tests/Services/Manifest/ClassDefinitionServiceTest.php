<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ClassDefinitionNotFoundException;
use Necowebs\Destiny\Models\Manifest\ClassDefinition;

/**
 * Class ClassDefinitionServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class ClassDefinitionServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Class Definition
     */
    public function testGetClassDefinition()
    {
        $class = (new ClassDefinitionService())->getClassDefinition(2271682572);

        $expected = (new ClassDefinition())
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
     * Test Get Class Definition Exception
     */
    public function testGetClassException()
    {
        $this->expectException(ClassDefinitionNotFoundException::class);

        $class = (new ClassDefinitionService())->getClassDefinition('Fail');
    }
}
