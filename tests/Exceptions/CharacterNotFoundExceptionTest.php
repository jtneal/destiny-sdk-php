<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class CharacterNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class CharacterNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Character Not Found Exception
     */
    public function testCharacterNotFoundException()
    {
        $this->expectException(CharacterNotFoundException::class);

        throw new CharacterNotFoundException;
    }
}
