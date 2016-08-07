<?php

namespace Necowebs\Destiny\Models\Stats;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class Account
 * @package Necowebs\Destiny\Models\Stats
 */
class Account
{
    use ModelTrait;

    /**
     * @var AccountCharacter
     */
    private $mergedDeletedCharacters;

    /**
     * @var AccountCharacter
     */
    private $mergedAllCharacters;

    /**
     * @var Collection
     */
    private $characters;

    /**
     * @return AccountCharacter
     */
    public function getMergedDeletedCharacters()
    {
        return $this->mergedDeletedCharacters;
    }

    /**
     * @param AccountCharacter $mergedDeletedCharacters
     * @return Account
     */
    public function setMergedDeletedCharacters(AccountCharacter $mergedDeletedCharacters)
    {
        $this->mergedDeletedCharacters = $mergedDeletedCharacters;
        return $this;
    }

    /**
     * @return AccountCharacter
     */
    public function getMergedAllCharacters()
    {
        return $this->mergedAllCharacters;
    }

    /**
     * @param AccountCharacter $mergedAllCharacters
     * @return Account
     */
    public function setMergedAllCharacters(AccountCharacter $mergedAllCharacters)
    {
        $this->mergedAllCharacters = $mergedAllCharacters;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @param Collection $characters
     * @return Account
     */
    public function setCharacters(Collection $characters)
    {
        $this->characters = $characters;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return Account
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('mergedDeletedCharacters', null, AccountCharacter::class . '::toObject')
            ->add('mergedAllCharacters', null, AccountCharacter::class . '::toObject')
            ->add('characters', null, AccountCharacter::class . '::toCollection');
        return $mapper->map($val);
    }
}
