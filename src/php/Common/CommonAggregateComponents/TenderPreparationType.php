<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing TenderPreparationType
 *
 * ABIE
 *  Tender Preparation. Details
 *  A class to describe directions for preparing a tender.
 *  Tender Preparation
 * XSD Type: TenderPreparationType
 */
class TenderPreparationType
{
    /**
     * BBIE
     *  Tender Preparation. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope to be used with the tender.
     *  1
     *  Tender Preparation
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TenderEnvelopeID $tenderEnvelopeID
     */
    private $tenderEnvelopeID = null;

    /**
     * BBIE
     *  Tender Preparation. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope (economical or objective criteria versus technical or subjective criteria).
     *  0..1
     *  Tender Preparation
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     */
    private $tenderEnvelopeTypeCode = null;

    /**
     * BBIE
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Tender Preparation. Open Tender Identifier. Identifier
     *  An identifier for the open tender associated with this tender preparation.
     *  0..1
     *  Tender Preparation
     *  Open Tender Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\OpenTenderID $openTenderID
     */
    private $openTenderID = null;

    /**
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \UBL21\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     */
    private $procurementProjectLot = [
        
    ];

    /**
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @var \UBL21\Common\CommonAggregateComponents\DocumentTenderRequirement[] $documentTenderRequirement
     */
    private $documentTenderRequirement = [
        
    ];

    /**
     * Gets as tenderEnvelopeID
     *
     * BBIE
     *  Tender Preparation. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope to be used with the tender.
     *  1
     *  Tender Preparation
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TenderEnvelopeID
     */
    public function getTenderEnvelopeID()
    {
        return $this->tenderEnvelopeID;
    }

    /**
     * Sets a new tenderEnvelopeID
     *
     * BBIE
     *  Tender Preparation. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope to be used with the tender.
     *  1
     *  Tender Preparation
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TenderEnvelopeID $tenderEnvelopeID
     * @return self
     */
    public function setTenderEnvelopeID(\UBL21\Common\CommonBasicComponents\TenderEnvelopeID $tenderEnvelopeID)
    {
        $this->tenderEnvelopeID = $tenderEnvelopeID;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tender Preparation. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope (economical or objective criteria versus technical or subjective criteria).
     *  0..1
     *  Tender Preparation
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TenderEnvelopeTypeCode
     */
    public function getTenderEnvelopeTypeCode()
    {
        return $this->tenderEnvelopeTypeCode;
    }

    /**
     * Sets a new tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tender Preparation. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope (economical or objective criteria versus technical or subjective criteria).
     *  0..1
     *  Tender Preparation
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     * @return self
     */
    public function setTenderEnvelopeTypeCode(?\UBL21\Common\CommonBasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode = null)
    {
        $this->tenderEnvelopeTypeCode = $tenderEnvelopeTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
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
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
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
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
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
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
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
     *  Tender Preparation. Description. Text
     *  Text describing the tender envelope.
     *  0..n
     *  Tender Preparation
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

    /**
     * Gets as openTenderID
     *
     * BBIE
     *  Tender Preparation. Open Tender Identifier. Identifier
     *  An identifier for the open tender associated with this tender preparation.
     *  0..1
     *  Tender Preparation
     *  Open Tender Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\OpenTenderID
     */
    public function getOpenTenderID()
    {
        return $this->openTenderID;
    }

    /**
     * Sets a new openTenderID
     *
     * BBIE
     *  Tender Preparation. Open Tender Identifier. Identifier
     *  An identifier for the open tender associated with this tender preparation.
     *  0..1
     *  Tender Preparation
     *  Open Tender Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\OpenTenderID $openTenderID
     * @return self
     */
    public function setOpenTenderID(?\UBL21\Common\CommonBasicComponents\OpenTenderID $openTenderID = null)
    {
        $this->openTenderID = $openTenderID;
        return $this;
    }

    /**
     * Adds as procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot
     */
    public function addToProcurementProjectLot(\UBL21\Common\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot)
    {
        $this->procurementProjectLot[] = $procurementProjectLot;
        return $this;
    }

    /**
     * isset procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementProjectLot($index)
    {
        return isset($this->procurementProjectLot[$index]);
    }

    /**
     * unset procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementProjectLot($index)
    {
        unset($this->procurementProjectLot[$index]);
    }

    /**
     * Gets as procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \UBL21\Common\CommonAggregateComponents\ProcurementProjectLot[]
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * ASBIE
     *  Tender Preparation. Procurement Project Lot
     *  The procurement project lot associated with a particular tenderer.
     *  0..n
     *  Tender Preparation
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \UBL21\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(array $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\DocumentTenderRequirement $documentTenderRequirement
     */
    public function addToDocumentTenderRequirement(\UBL21\Common\CommonAggregateComponents\DocumentTenderRequirement $documentTenderRequirement)
    {
        $this->documentTenderRequirement[] = $documentTenderRequirement;
        return $this;
    }

    /**
     * isset documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentTenderRequirement($index)
    {
        return isset($this->documentTenderRequirement[$index]);
    }

    /**
     * unset documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentTenderRequirement($index)
    {
        unset($this->documentTenderRequirement[$index]);
    }

    /**
     * Gets as documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @return \UBL21\Common\CommonAggregateComponents\DocumentTenderRequirement[]
     */
    public function getDocumentTenderRequirement()
    {
        return $this->documentTenderRequirement;
    }

    /**
     * Sets a new documentTenderRequirement
     *
     * ASBIE
     *  Tender Preparation. Document_ Tender Requirement. Tender Requirement
     *  A reference to the template for a required document in a tendering process.
     *  0..n
     *  Tender Preparation
     *  Document
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required, Experience required, ....
     *
     * @param \UBL21\Common\CommonAggregateComponents\DocumentTenderRequirement[] $documentTenderRequirement
     * @return self
     */
    public function setDocumentTenderRequirement(array $documentTenderRequirement = null)
    {
        $this->documentTenderRequirement = $documentTenderRequirement;
        return $this;
    }
}

