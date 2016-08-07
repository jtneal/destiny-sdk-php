<?php

namespace Necowebs\Destiny\Services\Stats;

/**
 * Class MembershipIdByDisplayNameServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class MembershipIdByDisplayNameServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Membership Id By Display Name
     */
    public function testMembershipIdByDisplayName()
    {
        $membershipId = (new MembershipIdByDisplayNameService())->getMembershipIdByDisplayName(2, 'Hochi_oD');

        $this->assertEquals('4611686018450406180', $membershipId);
    }
}
