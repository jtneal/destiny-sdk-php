<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\InventoryBucket;

/**
 * Class InventoryBucketService
 * @package Necowebs\Destiny\Services
 */
class InventoryBucketService extends BaseService
{
    /**
     * @param int $bucketHash
     * @return InventoryBucket
     * @throws \Exception
     */
    public function getBucket($bucketHash)
    {
        $body = $this->get('Manifest/InventoryBucket/' . $bucketHash);

        if (!isset($body['Response'])) {
            throw new \Exception('Bucket not found.');
        }

        $bucket = $body['Response']['data']['inventoryBucket'];

        return (new InventoryBucket())
            ->setBucketHash($bucket['bucketHash'])
            ->setBucketName($bucket['bucketName'])
            ->setBucketDescription($bucket['bucketDescription'])
            ->setScope($bucket['scope'])
            ->setCategory($bucket['category'])
            ->setBucketOrder($bucket['bucketOrder'])
            ->setBucketIdentifier($bucket['bucketIdentifier'])
            ->setItemCount($bucket['itemCount'])
            ->setLocation($bucket['location'])
            ->setHasTransferDestination($bucket['hasTransferDestination'])
            ->setEnabled($bucket['enabled'])
            ->setHash($bucket['hash'])
            ->setIndex($bucket['index']);
    }
}
