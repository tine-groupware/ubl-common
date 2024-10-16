<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ContractExecutionRequirementType
 *
 * ABIE
 *  Contract Execution Requirement. Details
 *  A class to describe a requirement for execution of a contract.
 *  Contract Execution Requirement
 * XSD Type: ContractExecutionRequirementType
 */
class ContractExecutionRequirementType
{
    /**
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * BBIE
     *  Contract Execution Requirement. Execution Requirement Code. Code
     *  A code signifying the type of party independent of its role.
     *  0..1
     *  Contract Execution Requirement
     *  Execution Requirement Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ExecutionRequirementCode $executionRequirementCode
     */
    private $executionRequirementCode = null;

    /**
     * BBIE
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Name $name
     */
    public function addToName(\UBL21\Common\CommonBasicComponents\Name $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Name[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Name[] $name
     * @return self
     */
    public function setName(array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as executionRequirementCode
     *
     * BBIE
     *  Contract Execution Requirement. Execution Requirement Code. Code
     *  A code signifying the type of party independent of its role.
     *  0..1
     *  Contract Execution Requirement
     *  Execution Requirement Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ExecutionRequirementCode
     */
    public function getExecutionRequirementCode()
    {
        return $this->executionRequirementCode;
    }

    /**
     * Sets a new executionRequirementCode
     *
     * BBIE
     *  Contract Execution Requirement. Execution Requirement Code. Code
     *  A code signifying the type of party independent of its role.
     *  0..1
     *  Contract Execution Requirement
     *  Execution Requirement Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ExecutionRequirementCode $executionRequirementCode
     * @return self
     */
    public function setExecutionRequirementCode(?\UBL21\Common\CommonBasicComponents\ExecutionRequirementCode $executionRequirementCode = null)
    {
        $this->executionRequirementCode = $executionRequirementCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\UBL21\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

