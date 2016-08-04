<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class Summary
 * @package Necowebs\Destiny\Models\Manifest
 */
class Summary
{
    /**
     * @var string
     */
    private $membershipId;

    /**
     * @var int
     */
    private $membershipType;

    /**
     * @var Collection
     */
    private $characters;

    /**
     * @var string
     */
    private $clanName;

    /**
     * @var string
     */
    private $clanTag;

    /**
     * @var SummaryInventory
     */
    private $inventory;

    /**
     * @var int
     */
    private $grimoireScore;

    /**
     * @var int
     */
    private $versions;

    /**
     * @var int
     */
    private $accountState;

    /**
     * @return string
     */
    public function getMembershipId()
    {
        return $this->membershipId;
    }

    /**
     * @param string $membershipId
     * @return Summary
     */
    public function setMembershipId($membershipId)
    {
        $this->membershipId = (string) $membershipId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMembershipType()
    {
        return $this->membershipType;
    }

    /**
     * @param int $membershipType
     * @return Summary
     */
    public function setMembershipType($membershipType)
    {
        $this->membershipType = (int) $membershipType;
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
     * @return Summary
     */
    public function setCharacters(Collection $characters)
    {
        $this->characters = $characters;
        return $this;
    }

    /**
     * @return string
     */
    public function getClanName()
    {
        return $this->clanName;
    }

    /**
     * @param string $clanName
     * @return Summary
     */
    public function setClanName($clanName)
    {
        $this->clanName = (string) $clanName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClanTag()
    {
        return $this->clanTag;
    }

    /**
     * @param string $clanTag
     * @return Summary
     */
    public function setClanTag($clanTag)
    {
        $this->clanTag = (string) $clanTag;
        return $this;
    }

    /**
     * @return SummaryInventory
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * @param SummaryInventory $inventory
     * @return Summary
     */
    public function setInventory(SummaryInventory $inventory)
    {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrimoireScore()
    {
        return $this->grimoireScore;
    }

    /**
     * @param int $grimoireScore
     * @return Summary
     */
    public function setGrimoireScore($grimoireScore)
    {
        $this->grimoireScore = (int) $grimoireScore;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersions()
    {
        return $this->versions;
    }

    /**
     * @param int $versions
     * @return Summary
     */
    public function setVersions($versions)
    {
        $this->versions = (int) $versions;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountState()
    {
        return $this->accountState;
    }

    /**
     * @param int $accountState
     * @return Summary
     */
    public function setAccountState($accountState)
    {
        $this->accountState = (int) $accountState;
        return $this;
    }
}
