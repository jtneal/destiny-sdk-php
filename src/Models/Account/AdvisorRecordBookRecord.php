<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorRecordBookRecord
 * @package Necowebs\Destiny\Models\Account
 */
class AdvisorRecordBookRecord
{
    use ModelTrait;

    /**
     * @var int
     */
    private $recordHash;

    /**
     * @var Collection
     */
    private $objectives;

    /**
     * @var int
     */
    private $status;

    /**
     * @return int
     */
    public function getRecordHash()
    {
        return $this->recordHash;
    }

    /**
     * @param int $recordHash
     * @return AdvisorRecordBookRecord
     */
    public function setRecordHash($recordHash)
    {
        $this->recordHash = (int) $recordHash;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * @param Collection $objectives
     * @return AdvisorRecordBookRecord
     */
    public function setObjectives(Collection $objectives)
    {
        $this->objectives = $objectives;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return AdvisorRecordBookRecord
     */
    public function setStatus($status)
    {
        $this->status = (int) $status;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorRecordBookRecord
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('recordHash')
            ->add('objectives', null, AdvisorRecordBookRecordObjective::class . '::toCollection')
            ->add('status');
        return $mapper->map($val);
    }
}
