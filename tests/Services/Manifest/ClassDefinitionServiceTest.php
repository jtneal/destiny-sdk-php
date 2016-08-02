<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

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

    /**
     * Test Get Class Definition Exception
     */
    public function testGetClassException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $class = (new ClassDefinitionService())->getClassDefinition('Fail');
    }
}
