<?php

namespace Necowebs\Destiny\Services\Stats;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\PostGameCarnageReportEntryExtendedWeapon;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class UniqueWeaponsService
 * @package Necowebs\Destiny\Services\Stats
 */
class UniqueWeaponsService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @return Collection
     * @throws StatsNotFoundException
     */
    public function getUniqueWeapons(
        $membershipType,
        $membershipId,
        $characterId
    ) {
        $endpoint = 'Stats/UniqueWeapons/%s/%s/%s';
        $body = $this->get(sprintf($endpoint, $membershipType, $membershipId, $characterId));

        if (!isset($body['Response'])) {
            throw new StatsNotFoundException;
        }

        return PostGameCarnageReportEntryExtendedWeapon::toCollection(null, $body['Response']['data']['weapons']);
    }
}
