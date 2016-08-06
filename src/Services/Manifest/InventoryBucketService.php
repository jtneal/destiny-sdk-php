<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\InventoryBucket;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class InventoryBucketService
 * @package Necowebs\Destiny\Services\Manifest
 */
class InventoryBucketService extends BaseService
{
    /**
     * @param int $bucketHash
     * @return InventoryBucket
     * @throws ManifestObjectNotFoundException
     */
    public function getBucket($bucketHash)
    {
        $body = $this->get('Manifest/InventoryBucket/' . $bucketHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return InventoryBucket::toObject(null, $body['Response']['data']['inventoryBucket']);
    }
}
