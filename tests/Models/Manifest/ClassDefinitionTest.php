<?php

namespace Necowebs\Destiny\Models\Manifest;
use Collections\Collection;

/**
 * Class ClassDefinitionTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class ClassDefinitionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $class = (new ClassDefinition())
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

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = ClassDefinition::toObject(null, [
            'classHash' => 2271682572,
            'classType' => 2,
            'className' => 'Warlock',
            'classNameMale' => 'Warlock',
            'classNameFemale' => 'Warlock',
            'classIdentifier' => 'CLASS_WARLOCK',
            'mentorVendorIdentifier' => 'VENDOR_WARLOCK_MENTOR',
            'hash' => 2271682572,
            'index' => 0
        ]);

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

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ClassDefinition::toCollection(null, [
            [
                'classHash' => 2271682572,
                'classType' => 2,
                'className' => 'Warlock',
                'classNameMale' => 'Warlock',
                'classNameFemale' => 'Warlock',
                'classIdentifier' => 'CLASS_WARLOCK',
                'mentorVendorIdentifier' => 'VENDOR_WARLOCK_MENTOR',
                'hash' => 2271682572,
                'index' => 0
            ]
        ]);

        $expected = new Collection(ClassDefinition::class, [
            (new ClassDefinition())
                ->setClassHash(2271682572)
                ->setClassType(2)
                ->setClassName('Warlock')
                ->setClassNameMale('Warlock')
                ->setClassNameFemale('Warlock')
                ->setClassIdentifier('CLASS_WARLOCK')
                ->setMentorVendorIdentifier('VENDOR_WARLOCK_MENTOR')
                ->setHash(2271682572)
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
