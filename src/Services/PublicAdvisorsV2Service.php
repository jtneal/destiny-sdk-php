<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\Character\Advisor;

/**
 * Class PublicAdvisorsV2Service
 * @package Necowebs\Destiny\Services
 */
class PublicAdvisorsV2Service extends BaseService
{
    /**
     * @return Advisor
     */
    public function getPublicAdvisorsV2()
    {
        $body = $this->get('Advisors/V2');

        return Advisor::toObject(null, $body['Response']['data']);
    }
}
