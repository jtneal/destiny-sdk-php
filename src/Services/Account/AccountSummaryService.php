<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\Summary;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class AccountSummaryService
 * @package Necowebs\Destiny\Services\Account
 */
class AccountSummaryService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @return Summary
     * @throws AccountNotFoundException
     */
    public function getAccountSummary($membershipType, $membershipId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Summary');

        if (!isset($body['Response'])) {
            throw new AccountNotFoundException;
        }

        return Summary::toObject(null, $body['Response']['data']);
    }
}
