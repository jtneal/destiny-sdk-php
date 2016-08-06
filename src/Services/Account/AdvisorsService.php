<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\Advisor;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class AdvisorsService
 * @package Necowebs\Destiny\Services\Account
 */
class AdvisorsService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @return Advisor
     * @throws AccountNotFoundException
     */
    public function getAdvisors($membershipType, $membershipId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Advisors');

        if (!isset($body['Response'])) {
            throw new AccountNotFoundException;
        }

        return Advisor::toObject(null, $body['Response']['data']);
    }
}
