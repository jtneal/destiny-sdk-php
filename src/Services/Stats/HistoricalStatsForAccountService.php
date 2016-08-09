<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\Account;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class HistoricalStatsForAccountService
 * @package Necowebs\Destiny\Services\Stats
 */
class HistoricalStatsForAccountService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @return Account
     * @throws StatsNotFoundException
     */
    public function getHistoricalStatsForAccount($membershipType, $membershipId)
    {
        $endpoint = 'Stats/Account/%s/%s';
        $body = $this->get(sprintf($endpoint, $membershipType, $membershipId));

        if (!isset($body['Response'])) {
            throw new StatsNotFoundException;
        }

        return Account::toObject(null, $body['Response']);
    }
}
