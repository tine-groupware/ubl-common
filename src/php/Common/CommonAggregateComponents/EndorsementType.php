<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing EndorsementType
 *
 * ABIE
 *  Endorsement. Details
 *  A class to describe an endorsement of a document.
 *  Endorsement
 * XSD Type: EndorsementType
 */
class EndorsementType
{
    /**
     * BBIE
     *  Endorsement. Document. Identifier
     *  An identifier for this endorsement.
     *  1
     *  Endorsement
     *  Document
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\DocumentID $documentID
     */
    private $documentID = null;

    /**
     * BBIE
     *  Endorsement. Approval Status. Text
     *  The status of this endorsement.
     *  1
     *  Endorsement
     *  Approval Status
     *  Text
     *  Text. Type
     *  Authentication Code
     *
     * @var \UBL21\Common\CommonBasicComponents\ApprovalStatus $approvalStatus
     */
    private $approvalStatus = null;

    /**
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks provided by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Endorsement. Endorser Party
     *  The type of party providing this endorsement.
     *  1
     *  Endorsement
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\EndorserParty $endorserParty
     */
    private $endorserParty = null;

    /**
     * ASBIE
     *  Endorsement. Signature
     *  A signature applied to this endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \UBL21\Common\CommonAggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as documentID
     *
     * BBIE
     *  Endorsement. Document. Identifier
     *  An identifier for this endorsement.
     *  1
     *  Endorsement
     *  Document
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\DocumentID
     */
    public function getDocumentID()
    {
        return $this->documentID;
    }

    /**
     * Sets a new documentID
     *
     * BBIE
     *  Endorsement. Document. Identifier
     *  An identifier for this endorsement.
     *  1
     *  Endorsement
     *  Document
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\DocumentID $documentID
     * @return self
     */
    public function setDocumentID(\UBL21\Common\CommonBasicComponents\DocumentID $documentID)
    {
        $this->documentID = $documentID;
        return $this;
    }

    /**
     * Gets as approvalStatus
     *
     * BBIE
     *  Endorsement. Approval Status. Text
     *  The status of this endorsement.
     *  1
     *  Endorsement
     *  Approval Status
     *  Text
     *  Text. Type
     *  Authentication Code
     *
     * @return \UBL21\Common\CommonBasicComponents\ApprovalStatus
     */
    public function getApprovalStatus()
    {
        return $this->approvalStatus;
    }

    /**
     * Sets a new approvalStatus
     *
     * BBIE
     *  Endorsement. Approval Status. Text
     *  The status of this endorsement.
     *  1
     *  Endorsement
     *  Approval Status
     *  Text
     *  Text. Type
     *  Authentication Code
     *
     * @param \UBL21\Common\CommonBasicComponents\ApprovalStatus $approvalStatus
     * @return self
     */
    public function setApprovalStatus(\UBL21\Common\CommonBasicComponents\ApprovalStatus $approvalStatus)
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks provided by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Remarks $remarks
     */
    public function addToRemarks(\UBL21\Common\CommonBasicComponents\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks provided by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks provided by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks provided by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Endorsement. Remarks. Text
     *  Remarks provided by the endorsing party.
     *  0..n
     *  Endorsement
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as endorserParty
     *
     * ASBIE
     *  Endorsement. Endorser Party
     *  The type of party providing this endorsement.
     *  1
     *  Endorsement
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\EndorserParty
     */
    public function getEndorserParty()
    {
        return $this->endorserParty;
    }

    /**
     * Sets a new endorserParty
     *
     * ASBIE
     *  Endorsement. Endorser Party
     *  The type of party providing this endorsement.
     *  1
     *  Endorsement
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\EndorserParty $endorserParty
     * @return self
     */
    public function setEndorserParty(\UBL21\Common\CommonAggregateComponents\EndorserParty $endorserParty)
    {
        $this->endorserParty = $endorserParty;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  A signature applied to this endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Signature $signature
     */
    public function addToSignature(\UBL21\Common\CommonAggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  A signature applied to this endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  A signature applied to this endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  A signature applied to this endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \UBL21\Common\CommonAggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Endorsement. Signature
     *  A signature applied to this endorsement.
     *  0..n
     *  Endorsement
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \UBL21\Common\CommonAggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}

