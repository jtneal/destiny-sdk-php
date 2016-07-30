<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class ClassDefinitionNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class ClassDefinitionNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Class Definition Not Found Exception
     */
    public function testClassDefinitionNotFoundException()
    {
        $this->expectException(ClassDefinitionNotFoundException::class);

        throw new ClassDefinitionNotFoundException;
    }
}
