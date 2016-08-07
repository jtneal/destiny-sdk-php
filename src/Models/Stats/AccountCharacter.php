<?php

namespace Necowebs\Destiny\Models\Stats;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AccountCharacter
 * @package Necowebs\Destiny\Models\Stats
 */
class AccountCharacter
{
    use ModelTrait;

    /**
     * @var string
     */
    private $characterId;

    /**
     * @var bool
     */
    private $deleted;

    /**
     * @var Historical
     */
    private $results;

    /**
     * @var HistoricalActivity
     */
    private $merged;

    /**
     * @return string
     */
    public function getCharacterId()
    {
        return $this->characterId;
    }

    /**
     * @param string $characterId
     * @return AccountCharacter
     */
    public function setCharacterId($characterId)
    {
        $this->characterId = (string) $characterId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     * @return AccountCharacter
     */
    public function setDeleted($deleted)
    {
        $this->deleted = (bool) $deleted;
        return $this;
    }

    /**
     * @return Historical
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param Historical $results
     * @return AccountCharacter
     */
    public function setResults(Historical $results)
    {
        $this->results = $results;
        return $this;
    }

    /**
     * @return HistoricalActivity
     */
    public function getMerged()
    {
        return $this->merged;
    }

    /**
     * @param HistoricalActivity $merged
     * @return AccountCharacter
     */
    public function setMerged(HistoricalActivity $merged)
    {
        $this->merged = $merged;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AccountCharacter
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('characterId')
            ->add('deleted')
            ->add('results', null, Historical::class . '::toObject')
            ->add('merged', null, HistoricalActivity::class . '::toObject');
        return $mapper->map($val);
    }
}
