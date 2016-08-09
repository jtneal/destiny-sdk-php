<?php

namespace Necowebs\Destiny\Models\Account;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Triumph
 * @package Necowebs\Destiny\Models\Account
 */
class Triumph
{
    use ModelTrait;

    /**
     * @var bool
     */
    private $complete;

    /**
     * @var int
     */
    private $progress;

    /**
     * @var int
     */
    private $actual;

    /**
     * @var bool
     */
    private $showProgress;

    /**
     * @return bool
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * @param bool $complete
     * @return Triumph
     */
    public function setComplete($complete)
    {
        $this->complete = (bool) $complete;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @param int $progress
     * @return Triumph
     */
    public function setProgress($progress)
    {
        $this->progress = (int) $progress;
        return $this;
    }

    /**
     * @return int
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * @param int $actual
     * @return Triumph
     */
    public function setActual($actual)
    {
        $this->actual = (int) $actual;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowProgress()
    {
        return $this->showProgress;
    }

    /**
     * @param bool $showProgress
     * @return Triumph
     */
    public function setShowProgress($showProgress)
    {
        $this->showProgress = (bool) $showProgress;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Triumph
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('complete')
            ->add('progress')
            ->add('actual')
            ->add('showProcess');
        return $mapper->map($val);
    }
}
