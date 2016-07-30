<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class CharacterClassNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class CharacterClassNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Character Class Not Found Exception
     */
    public function testCharacterClassNotFoundException()
    {
        $this->expectException(CharacterClassNotFoundException::class);

        throw new CharacterClassNotFoundException;
    }
}
