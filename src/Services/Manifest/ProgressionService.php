<?php

namespace Necowebs\Destiny\Services\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Exceptions\ProgressionNotFoundException;
use Necowebs\Destiny\Models\Manifest\Progression;
use Necowebs\Destiny\Models\Manifest\ProgressionStep;
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
     * @throws ProgressionNotFoundException
     */
    public function getProgression($progressionHash)
    {
        $body = $this->get('Manifest/Progression/' . $progressionHash);

        if (!isset($body['Response'])) {
            throw new ProgressionNotFoundException;
        }

        $progression = $body['Response']['data']['progression'];

        $mapper = (new ArrayObjectMapper('Necowebs\Destiny\Models\Manifest\Progression'))
            ->add('progressionHash')
            ->add('name')
            ->add('scope')
            ->add('repeatLastStep')
            ->add('identifier')
            ->add('steps', null, function ($obj, $val) {
                $steps = new Collection('Necowebs\Destiny\Models\Manifest\ProgressionStep');
                foreach ($val as $step) {
                    $steps->add((new ProgressionStep())
                        ->setProgressTotal($step['progressTotal'])
                        ->setRewardItems($step['rewardItems'])
                    );
                }
                return $steps;
            })
            ->add('visible')
            ->add('hash')
            ->add('index');

        return $mapper->map($progression);
    }
}
