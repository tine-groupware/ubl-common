<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ProjectReferenceType
 *
 * ABIE
 *  Project Reference. Details
 *  A class to define a reference to a procurement project.
 *  Project Reference
 * XSD Type: ProjectReferenceType
 */
class ProjectReferenceType
{
    /**
     * BBIE
     *  Project Reference. Identifier
     *  An identifier for the referenced project.
     *  1
     *  Project Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Project Reference. UUID. Identifier
     *  A universally unique identifier for the referenced project.
     *  0..1
     *  Project Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Project Reference. Issue Date. Date
     *  The date on which the referenced project was issued.
     *  0..1
     *  Project Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * ASBIE
     *  Project Reference. Work Phase Reference
     *  A specific phase of work in the referenced project.
     *  0..n
     *  Project Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\WorkPhaseReference[] $workPhaseReference
     */
    private $workPhaseReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Project Reference. Identifier
     *  An identifier for the referenced project.
     *  1
     *  Project Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Project Reference. Identifier
     *  An identifier for the referenced project.
     *  1
     *  Project Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\UBL21\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Project Reference. UUID. Identifier
     *  A universally unique identifier for the referenced project.
     *  0..1
     *  Project Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Project Reference. UUID. Identifier
     *  A universally unique identifier for the referenced project.
     *  0..1
     *  Project Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(?\UBL21\Common\CommonBasicComponents\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Project Reference. Issue Date. Date
     *  The date on which the referenced project was issued.
     *  0..1
     *  Project Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Project Reference. Issue Date. Date
     *  The date on which the referenced project was issued.
     *  0..1
     *  Project Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate = null)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Adds as workPhaseReference
     *
     * ASBIE
     *  Project Reference. Work Phase Reference
     *  A specific phase of work in the referenced project.
     *  0..n
     *  Project Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\WorkPhaseReference $workPhaseReference
     */
    public function addToWorkPhaseReference(\UBL21\Common\CommonAggregateComponents\WorkPhaseReference $workPhaseReference)
    {
        $this->workPhaseReference[] = $workPhaseReference;
        return $this;
    }

    /**
     * isset workPhaseReference
     *
     * ASBIE
     *  Project Reference. Work Phase Reference
     *  A specific phase of work in the referenced project.
     *  0..n
     *  Project Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkPhaseReference($index)
    {
        return isset($this->workPhaseReference[$index]);
    }

    /**
     * unset workPhaseReference
     *
     * ASBIE
     *  Project Reference. Work Phase Reference
     *  A specific phase of work in the referenced project.
     *  0..n
     *  Project Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkPhaseReference($index)
    {
        unset($this->workPhaseReference[$index]);
    }

    /**
     * Gets as workPhaseReference
     *
     * ASBIE
     *  Project Reference. Work Phase Reference
     *  A specific phase of work in the referenced project.
     *  0..n
     *  Project Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\WorkPhaseReference[]
     */
    public function getWorkPhaseReference()
    {
        return $this->workPhaseReference;
    }

    /**
     * Sets a new workPhaseReference
     *
     * ASBIE
     *  Project Reference. Work Phase Reference
     *  A specific phase of work in the referenced project.
     *  0..n
     *  Project Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *  Work Phase Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\WorkPhaseReference[] $workPhaseReference
     * @return self
     */
    public function setWorkPhaseReference(array $workPhaseReference = null)
    {
        $this->workPhaseReference = $workPhaseReference;
        return $this;
    }
}

