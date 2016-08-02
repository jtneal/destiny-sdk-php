<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\DirectorBook;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

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

        $book = $body['Response']['data']['directorBook'];

        $mapper = (new ArrayObjectMapper(DirectorBook::class))
            ->add('bookHash')
            ->add('bookName')
            ->add('bookDescription')
            ->add('bookNumber')
            ->add('nodes', null, MapperHelper::class . '::mapArrayToDirectorBookNodes')
            ->add('connections', null, MapperHelper::class . '::mapArrayToDirectorBookConnections')
            ->add('visible')
            ->add('isOverview')
            ->add('isDefaultExpression', null, MapperHelper::class . '::mapArrayToDirectorBookExpression')
            ->add('isVisibleExpression', null, MapperHelper::class . '::mapArrayToDirectorBookExpression')
            ->add('destinationHash')
            ->add('hash')
            ->add('index');

        return $mapper->map($book);
    }
}
