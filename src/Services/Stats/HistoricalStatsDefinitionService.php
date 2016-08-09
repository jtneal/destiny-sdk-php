<?php

namespace Necowebs\Destiny\Services\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Stats\Definition;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class HistoricalStatsDefinitionService
 * @package Necowebs\Destiny\Services\Stats
 */
class HistoricalStatsDefinitionService extends BaseService
{
    /**
     * @return Collection
     */
    public function getHistoricalStatsDefinition()
    {
        $body = $this->get('Stats/Definition');

        return Definition::toCollection(null, $body['Response']);
    }
}
