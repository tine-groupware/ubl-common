<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing ClaimedRolesListType
 *
 *
 * XSD Type: ClaimedRolesListType
 */
class ClaimedRolesListType
{
    /**
     * @var \UBL21\Common\UriEtsi\V132\AnyType[] $claimedRole
     */
    private $claimedRole = [
        
    ];

    /**
     * Adds as claimedRole
     *
     * @return self
     * @param \UBL21\Common\UriEtsi\V132\AnyType $claimedRole
     */
    public function addToClaimedRole(\UBL21\Common\UriEtsi\V132\AnyType $claimedRole)
    {
        $this->claimedRole[] = $claimedRole;
        return $this;
    }

    /**
     * isset claimedRole
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClaimedRole($index)
    {
        return isset($this->claimedRole[$index]);
    }

    /**
     * unset claimedRole
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClaimedRole($index)
    {
        unset($this->claimedRole[$index]);
    }

    /**
     * Gets as claimedRole
     *
     * @return \UBL21\Common\UriEtsi\V132\AnyType[]
     */
    public function getClaimedRole()
    {
        return $this->claimedRole;
    }

    /**
     * Sets a new claimedRole
     *
     * @param \UBL21\Common\UriEtsi\V132\AnyType[] $claimedRole
     * @return self
     */
    public function setClaimedRole(array $claimedRole)
    {
        $this->claimedRole = $claimedRole;
        return $this;
    }
}

