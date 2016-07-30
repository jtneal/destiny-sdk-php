<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\InventoryBucketNotFoundException;
use Necowebs\Destiny\Models\Manifest\InventoryBucket;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class InventoryBucketService
 * @package Necowebs\Destiny\Services\Manifest
 */
class InventoryBucketService extends BaseService
{
    /**
     * @param int $bucketHash
     * @return InventoryBucket
     * @throws InventoryBucketNotFoundException
     */
    public function getBucket($bucketHash)
    {
        $body = $this->get('Manifest/InventoryBucket/' . $bucketHash);

        if (!isset($body['Response'])) {
            throw new InventoryBucketNotFoundException;
        }

        $bucket = $body['Response']['data']['inventoryBucket'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\InventoryBucket'))
            ->add('bucketHash')
            ->add('bucketName')
            ->add('bucketDescription')
            ->add('scope')
            ->add('category')
            ->add('bucketOrder')
            ->add('bucketIdentifier')
            ->add('itemCount')
            ->add('location')
            ->add('hasTransferDestination')
            ->add('enabled')
            ->add('hash')
            ->add('index');

        return $mapper->map($bucket);
    }
}
