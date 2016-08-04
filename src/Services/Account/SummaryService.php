<?php

namespace Necowebs\Destiny\Services\Account;

use Necowebs\Destiny\Exceptions\AccountNotFoundException;
use Necowebs\Destiny\Models\Account\Summary;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class SummaryService
 * @package Necowebs\Destiny\Services\Account
 */
class SummaryService extends BaseService
{
    /**
     * @param int $membershipType
     * @param string $membershipId
     * @return Summary
     * @throws AccountNotFoundException
     */
    public function getSummary($membershipType, $membershipId)
    {
        $body = $this->get($membershipType . '/Account/' . $membershipId . '/Summary');

        if (!isset($body['Response'])) {
            throw new AccountNotFoundException;
        }

        $summary = $body['Response']['data'];

        $mapper = (new ArrayObjectMapper(Summary::class))
            ->add('membershipId')
            ->add('membershipType')
            ->add('characters', null, MapperHelper::class . '::mapArrayToSummaryCharacters')
            ->add('clanName')
            ->add('clanTag')
            ->add('inventory', null, MapperHelper::class . '::mapArrayToSummaryInventory')
            ->add('grimoireScore')
            ->add('versions')
            ->add('accountState');

        return $mapper->map($summary);
    }
}
