<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing EconomicOperatorRoleType
 *
 * ABIE
 *  Economic Operator Role. Details
 *  A class to describe the tenderer contracting role.
 *  Economic Operator Role
 * XSD Type: EconomicOperatorRoleType
 */
class EconomicOperatorRoleType
{
    /**
     * BBIE
     *  Economic Operator Role. Role Code. Code
     *  A code specifying the role of the party.
     *  0..1
     *  Economic Operator Role
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\RoleCode $roleCode
     */
    private $roleCode = null;

    /**
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\RoleDescription[] $roleDescription
     */
    private $roleDescription = [
        
    ];

    /**
     * Gets as roleCode
     *
     * BBIE
     *  Economic Operator Role. Role Code. Code
     *  A code specifying the role of the party.
     *  0..1
     *  Economic Operator Role
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\RoleCode
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * Sets a new roleCode
     *
     * BBIE
     *  Economic Operator Role. Role Code. Code
     *  A code specifying the role of the party.
     *  0..1
     *  Economic Operator Role
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\RoleCode $roleCode
     * @return self
     */
    public function setRoleCode(?\UBL21\Common\CommonBasicComponents\RoleCode $roleCode = null)
    {
        $this->roleCode = $roleCode;
        return $this;
    }

    /**
     * Adds as roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\RoleDescription $roleDescription
     */
    public function addToRoleDescription(\UBL21\Common\CommonBasicComponents\RoleDescription $roleDescription)
    {
        $this->roleDescription[] = $roleDescription;
        return $this;
    }

    /**
     * isset roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoleDescription($index)
    {
        return isset($this->roleDescription[$index]);
    }

    /**
     * unset roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoleDescription($index)
    {
        unset($this->roleDescription[$index]);
    }

    /**
     * Gets as roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\RoleDescription[]
     */
    public function getRoleDescription()
    {
        return $this->roleDescription;
    }

    /**
     * Sets a new roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\RoleDescription[] $roleDescription
     * @return self
     */
    public function setRoleDescription(array $roleDescription = null)
    {
        $this->roleDescription = $roleDescription;
        return $this;
    }
}

