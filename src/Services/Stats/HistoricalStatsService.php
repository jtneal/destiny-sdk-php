<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\Historical;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class HistoricalStatsService
 * @package Necowebs\Destiny\Services\Stats
 */
class HistoricalStatsService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @return Historical
     * @throws StatsNotFoundException
     */
    public function getHistoricalStats($membershipType, $membershipId, $characterId)
    {
        $endpoint = 'Stats/%s/%s/%s';
        $body = $this->get(sprintf($endpoint, $membershipType, $membershipId, $characterId));

        if (!isset($body['Response'])) {
            throw new StatsNotFoundException;
        }

        return Historical::toObject(null, $body['Response']);
    }
}
