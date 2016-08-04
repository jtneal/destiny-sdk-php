<?php

namespace Necowebs\Destiny\Services\Stats;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\Activity;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class ActivityHistoryService
 * @package Necowebs\Destiny\Services\Stats
 */
class ActivityHistoryService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @param string $characterId
     * @param string $mode
     * @param int $page
     * @param int $count
     * @return Collection
     * @throws StatsNotFoundException
     */
    public function getActivityHistory(
        $membershipType,
        $membershipId,
        $characterId,
        $mode = 'None',
        $page = 0,
        $count = 25
    ) {
        $endpoint = 'Stats/ActivityHistory/%s/%s/%s?mode=%s&page=%s&count=%s';
        $body = $this->get(sprintf($endpoint, $membershipType, $membershipId, $characterId, $mode, $page, $count));

        if (!isset($body['Response'])) {
            throw new StatsNotFoundException;
        }

        $activities = $body['Response']['data']['activities'];
        $collection = [];

        foreach ($activities as $activity) {
            $mapper = (new ArrayObjectMapper(Activity::class))
                ->add('period')
                ->add('activityDetails', null, MapperHelper::class . '::mapArrayToActivityDetails')
                ->add('values', null, MapperHelper::class . '::mapArrayToActivityValues');
            $collection[] = $mapper->map($activity);
        }

        return new Collection(Activity::class, $collection);
    }
}
