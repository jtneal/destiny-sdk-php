<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\SandboxPerk;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class SandboxPerkService
 * @package Necowebs\Destiny\Services\Manifest
 */
class SandboxPerkService extends BaseService
{
    /**
     * @param int $perkHash
     * @return SandboxPerk
     * @throws ManifestObjectNotFoundException
     */
    public function getSandboxPerk($perkHash)
    {
        $body = $this->get('Manifest/SandboxPerk/' . $perkHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        $perk = $body['Response']['data']['sandboxPerk'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\SandboxPerk'))
            ->add('perkHash')
            ->add('displayName')
            ->add('displayDescription')
            ->add('displayIcon')
            ->add('isDisplayable')
            ->add('perkGroups', null, function ($obj, $val) {
                $groupMapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\SandboxPerkGroup'))
                    ->add('weaponPerformance')
                    ->add('impactEffects')
                    ->add('guardianAttributes')
                    ->add('lightAbilities')
                    ->add('damageTypes');
                return $groupMapper->map($val);
            })
            ->add('hash')
            ->add('index');

        return $mapper->map($perk);
    }
}