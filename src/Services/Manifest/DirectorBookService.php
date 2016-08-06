<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\DirectorBook;
use Necowebs\Destiny\Services\BaseService;

/**
 * Class DirectorBookService
 * @package Necowebs\Destiny\Services\Manifest
 */
class DirectorBookService extends BaseService
{
    /**
     * @param int $bookHash
     * @return DirectorBook
     * @throws ManifestObjectNotFoundException
     */
    public function getDirectorBook($bookHash)
    {
        $body = $this->get('Manifest/DirectorBook/' . $bookHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        return DirectorBook::toObject(null, $body['Response']['data']['directorBook']);
    }
}
