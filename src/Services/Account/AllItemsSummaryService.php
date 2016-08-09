<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\Items;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class AllItemsSummaryService
 * @package Necowebs\Destiny\Services\Account
 */
class AllItemsSummaryService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @return Items
     * @throws AccountNotFoundException
     */
    public function getAllItemsSummary($membershipType, $membershipId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Items');

        if (!isset($body['Response'])) {
            throw new AccountNotFoundException;
        }

        return Items::toObject(null, $body['Response']['data']);
    }
}
