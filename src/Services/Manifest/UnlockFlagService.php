<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\UnlockFlag;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class UnlockFlagService
 * @package Necowebs\Destiny\Services\Manifest
 */
class UnlockFlagService extends BaseService
{
    /**
     * @param int $flagHash
     * @return UnlockFlag
     * @throws ManifestObjectNotFoundException
     */
    public function getUnlockFlag($flagHash)
    {
        $body = $this->get('Manifest/UnlockFlag/' . $flagHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        $flag = $body['Response']['data']['unlockFlag'];

        $mapper = (new ArrayObjectMapper(UnlockFlag::class))
            ->add('flagHash')
            ->add('isOffer')
            ->add('unlockType')
            ->add('hash')
            ->add('index');

        return $mapper->map($flag);
    }
}
