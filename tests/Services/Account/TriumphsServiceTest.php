<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\TriumphSet;

/**
 * Class TriumphsServiceTest
 * @package Necowebs\Destiny\Services\Account
 */
class TriumphsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Triumphs
     */
    public function testGetTriumphs()
    {
        $triumphs = (new TriumphsService())->getTriumphs(2, '4611686018450406180');

        $this->assertContainsOnlyInstancesOf(TriumphSet::class, $triumphs);
    }

    /**
     * Test Get Triumphs Exception
     */
    public function testGetTriumphsException()
    {
        $this->expectException(AccountNotFoundException::class);

        $triumphs = (new TriumphsService())->getTriumphs(0, 'Fail');
    }
}
