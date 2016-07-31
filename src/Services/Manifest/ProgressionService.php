<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\Progression;
use Necowebs\Destiny\Services\BaseService;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class ProgressionService
 * @package Necowebs\Destiny\Services\Manifest
 */
class ProgressionService extends BaseService
{
    /**
     * @param int $progressionHash
     * @return Progression
     * @throws ManifestObjectNotFoundException
     */
    public function getProgression($progressionHash)
    {
        $body = $this->get('Manifest/Progression/' . $progressionHash);

        if (!isset($body['Response'])) {
            throw new ManifestObjectNotFoundException;
        }

        $progression = $body['Response']['data']['progression'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Progression'))
            ->add('progressionHash')
            ->add('name')
            ->add('scope')
            ->add('repeatLastStep')
            ->add('identifier')
            ->add('steps', 'setSteps', function ($obj, $val) {
                $steps = new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep');
                foreach ($val as $step) {
                    $stepMapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\ProgressionStep'))
                        ->add('progressTotal')
                        ->add('rewardItems');
                    $steps = $steps->add($stepMapper->map($step));
                }
                return $steps;
            })
            ->add('visible')
            ->add('hash')
            ->add('index');

        return $mapper->map($progression);
    }
}
