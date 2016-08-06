<?php

namespace Necowebs\Destiny\Services\Stats;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\AggregateActivity;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class AggregateActivityStatsService
 * @package Necowebs\Destiny\Services\Stats
 */
class AggregateActivityStatsService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @return Collection
     * @throws StatsNotFoundException
     */
    public function getAggregateActivityStats(
        $membershipType,
        $membershipId,
        $characterId
    ) {
        $endpoint = 'Stats/AggregateActivityStats/%s/%s/%s';
        $body = $this->get(sprintf($endpoint, $membershipType, $membershipId, $characterId));

        if (!isset($body['Response'])) {
            throw new StatsNotFoundException;
        }

        return AggregateActivity::toCollection(null, $body['Response']['data']['activities']);
    }
}
