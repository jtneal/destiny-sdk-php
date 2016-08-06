<?php

namespace Necowebs\Destiny\Exceptions;

/**
 * Class AccountNotFoundExceptionTest
 * @package Necowebs\Destiny\Exceptions
 */
class AccountNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Account Not Found Exception
     */
    public function testAccountNotFoundException()
    {
        $this->expectException(AccountNotFoundException::class);

        throw new AccountNotFoundException;
    }
}
