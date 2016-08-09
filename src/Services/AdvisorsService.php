<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\Character\Advisor;

/**
 * Class AdvisorsService
 * @package Necowebs\Destiny\Services
 */
class AdvisorsService extends BaseService
{
    /**
     * @return Advisor
     */
    public function getAdvisors()
    {
        $body = $this->get('Advisors/V2');

        return Advisor::toObject(null, $body['Response']['data']);
    }
}
