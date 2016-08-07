<?php

namespace Necowebs\Destiny\Services\Stats;

use Collections\Collection;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class MembershipIdByDisplayNameService
 * @package Necowebs\Destiny\Services\Stats
 */
class MembershipIdByDisplayNameService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $displayName
     * @return Collection
     */
    public function getMembershipIdByDisplayName($membershipType, $displayName)
    {
        $body = $this->get($membershipType . '/Stats/GetMembershipIdByDisplayName/' . $displayName);

        return $body['Response'];
    }
}
