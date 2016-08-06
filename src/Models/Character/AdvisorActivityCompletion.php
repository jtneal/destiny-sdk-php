<?php

namespace Necowebs\Destiny\Models\Character;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivityCompletion
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityCompletion
{
    use ModelTrait;

    /**
     * @var bool
     */
    private $complete;

    /**
     * @var bool
     */
    private $success;

    /**
     * @var int
     */
    private $completionCount;

    /**
     * @var int
     */
    private $maxCompletions;

    /**
     * @return bool
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * @param bool $complete
     * @return AdvisorActivityCompletion
     */
    public function setComplete($complete)
    {
        $this->complete = (bool) $complete;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return AdvisorActivityCompletion
     */
    public function setSuccess($success)
    {
        $this->success = (bool) $success;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompletionCount()
    {
        return $this->completionCount;
    }

    /**
     * @param int $completionCount
     * @return AdvisorActivityCompletion
     */
    public function setCompletionCount($completionCount)
    {
        $this->completionCount = (int) $completionCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxCompletions()
    {
        return $this->maxCompletions;
    }

    /**
     * @param int $maxCompletions
     * @return AdvisorActivityCompletion
     */
    public function setMaxCompletions($maxCompletions)
    {
        $this->maxCompletions = (int) $maxCompletions;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityCompletion
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('complete')
            ->add('success')
            ->add('completionCount')
            ->add('maxCompletions');
        return $mapper->map($val);
    }
}
