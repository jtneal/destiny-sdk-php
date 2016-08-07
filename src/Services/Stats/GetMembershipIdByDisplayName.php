<?php

namespace Necowebs\Destiny\Services\Stats;

use Collections\Collection;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class GetMembershipIdByDisplayNameService
 * @package Necowebs\Destiny\Services\Stats
 */
class GetMembershipIdByDisplayNameService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $displayName
     * @return Collection
     */
    public function getGetMembershipIdByDisplayName($membershipType, $displayName)
    {
        $body = $this->get($membershipType . '/Stats/GetMembershipIdByDisplayName/' . $displayName);

        return $body['Response'];
    }
}
