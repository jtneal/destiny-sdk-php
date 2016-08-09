<?php

namespace Necowebs\Destiny\Services\Account;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\TriumphSet;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class TriumphsService
 * @package Necowebs\Destiny\Services\Account
 */
class TriumphsService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @return Collection
     * @throws AccountNotFoundException
     */
    public function getTriumphs($membershipType, $membershipId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Triumphs');

        if (!isset($body['Response'])) {
            throw new AccountNotFoundException;
        }

        return TriumphSet::toCollection(null, $body['Response']['data']['triumphSets']);
    }
}
