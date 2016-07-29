<?php

namespace Necowebs\Destiny\Models\Traits;

/**
 * Class AcceptableValuesTest
 * @package Necowebs\Destiny\Models\Traits
 */
class AcceptableValuesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Validate Value Valid
     */
    public function testValidateValueValid()
    {
        $mock = $this->getMockForTrait('Necowebs\Destiny\Models\Traits\AcceptableValues');
        $mock->setAcceptableValues(['one', 'two', 'three']);
        $mock->validateValue('two');

        $this->assertEquals('two', $mock->getValue());
    }

    /**
     * Test Validate Value Invalid
     */
    public function testValidateValueInvalid()
    {
        $mock = $this->getMockForTrait('Necowebs\Destiny\Models\Traits\AcceptableValues');
        $mock->setAcceptableValues(['one', 'two', 'three']);
        $mock->validateValue('four');

        $this->assertNull($mock->getValue());
    }
}
