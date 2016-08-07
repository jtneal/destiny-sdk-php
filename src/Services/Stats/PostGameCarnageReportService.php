<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\PostGameCarnageReport;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class PostGameCarnageReportService
 * @package Necowebs\Destiny\Services\Stats
 */
class PostGameCarnageReportService extends BaseService
{
    /**
     * @param string $activityId
     * @return PostGameCarnageReport
     * @throws StatsNotFoundException
     */
    public function getPostGameCarnageReport($activityId)
    {
        $body = $this->get('Stats/PostGameCarnageReport/' . $activityId);

        if (!isset($body['Response'])) {
            throw new StatsNotFoundException;
        }

        return PostGameCarnageReport::toObject(null, $body['Response']['data']);
    }
}
