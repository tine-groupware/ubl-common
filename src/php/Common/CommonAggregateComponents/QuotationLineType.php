<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing QuotationLineType
 *
 * ABIE
 *  Quotation Line. Details
 *  A class to define a line in a Quotation.
 *  Quotation Line
 * XSD Type: QuotationLineType
 */
class QuotationLineType
{
    /**
     * BBIE
     *  Quotation Line. Identifier
     *  An identifier for this quotation line.
     *  0..1
     *  Quotation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for this quotation line, including allowance charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for this quotation line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * BBIE
     *  Quotation Line. Request For Quotation Line Identifier. Identifier
     *  An identifier for the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request For Quotation Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\RequestForQuotationLineID $requestForQuotationLineID
     */
    private $requestForQuotationLineID = null;

    /**
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Quotation Line. Line Item
     *  The item that is the subject of this quotation line.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\LineItem $lineItem
     */
    private $lineItem = null;

    /**
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     */
    private $sellerProposedSubstituteLineItem = [
        
    ];

    /**
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\AlternativeLineItem[] $alternativeLineItem
     */
    private $alternativeLineItem = [
        
    ];

    /**
     * ASBIE
     *  Quotation Line. Request_ Line Reference. Line Reference
     *  A reference to the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\RequestLineReference $requestLineReference
     */
    private $requestLineReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Quotation Line. Identifier
     *  An identifier for this quotation line.
     *  0..1
     *  Quotation Line
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
     *  Quotation Line. Identifier
     *  An identifier for this quotation line.
     *  0..1
     *  Quotation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\UBL21\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\UBL21\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\UBL21\Common\CommonBasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for this quotation line, including allowance charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for this quotation line, including allowance charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(?\UBL21\Common\CommonBasicComponents\LineExtensionAmount $lineExtensionAmount = null)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for this quotation line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TotalTaxAmount
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for this quotation line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(?\UBL21\Common\CommonBasicComponents\TotalTaxAmount $totalTaxAmount = null)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Gets as requestForQuotationLineID
     *
     * BBIE
     *  Quotation Line. Request For Quotation Line Identifier. Identifier
     *  An identifier for the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request For Quotation Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\RequestForQuotationLineID
     */
    public function getRequestForQuotationLineID()
    {
        return $this->requestForQuotationLineID;
    }

    /**
     * Sets a new requestForQuotationLineID
     *
     * BBIE
     *  Quotation Line. Request For Quotation Line Identifier. Identifier
     *  An identifier for the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request For Quotation Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\RequestForQuotationLineID $requestForQuotationLineID
     * @return self
     */
    public function setRequestForQuotationLineID(?\UBL21\Common\CommonBasicComponents\RequestForQuotationLineID $requestForQuotationLineID = null)
    {
        $this->requestForQuotationLineID = $requestForQuotationLineID;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\UBL21\Common\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as lineItem
     *
     * ASBIE
     *  Quotation Line. Line Item
     *  The item that is the subject of this quotation line.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Sets a new lineItem
     *
     * ASBIE
     *  Quotation Line. Line Item
     *  The item that is the subject of this quotation line.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\LineItem $lineItem
     * @return self
     */
    public function setLineItem(\UBL21\Common\CommonAggregateComponents\LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }

    /**
     * Adds as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem
     */
    public function addToSellerProposedSubstituteLineItem(\UBL21\Common\CommonAggregateComponents\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem)
    {
        $this->sellerProposedSubstituteLineItem[] = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * isset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerProposedSubstituteLineItem($index)
    {
        return isset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * unset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerProposedSubstituteLineItem($index)
    {
        unset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * Gets as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\SellerProposedSubstituteLineItem[]
     */
    public function getSellerProposedSubstituteLineItem()
    {
        return $this->sellerProposedSubstituteLineItem;
    }

    /**
     * Sets a new sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     * @return self
     */
    public function setSellerProposedSubstituteLineItem(array $sellerProposedSubstituteLineItem = null)
    {
        $this->sellerProposedSubstituteLineItem = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * Adds as alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\AlternativeLineItem $alternativeLineItem
     */
    public function addToAlternativeLineItem(\UBL21\Common\CommonAggregateComponents\AlternativeLineItem $alternativeLineItem)
    {
        $this->alternativeLineItem[] = $alternativeLineItem;
        return $this;
    }

    /**
     * isset alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternativeLineItem($index)
    {
        return isset($this->alternativeLineItem[$index]);
    }

    /**
     * unset alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternativeLineItem($index)
    {
        unset($this->alternativeLineItem[$index]);
    }

    /**
     * Gets as alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\AlternativeLineItem[]
     */
    public function getAlternativeLineItem()
    {
        return $this->alternativeLineItem;
    }

    /**
     * Sets a new alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\AlternativeLineItem[] $alternativeLineItem
     * @return self
     */
    public function setAlternativeLineItem(array $alternativeLineItem = null)
    {
        $this->alternativeLineItem = $alternativeLineItem;
        return $this;
    }

    /**
     * Gets as requestLineReference
     *
     * ASBIE
     *  Quotation Line. Request_ Line Reference. Line Reference
     *  A reference to the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\RequestLineReference
     */
    public function getRequestLineReference()
    {
        return $this->requestLineReference;
    }

    /**
     * Sets a new requestLineReference
     *
     * ASBIE
     *  Quotation Line. Request_ Line Reference. Line Reference
     *  A reference to the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\RequestLineReference $requestLineReference
     * @return self
     */
    public function setRequestLineReference(?\UBL21\Common\CommonAggregateComponents\RequestLineReference $requestLineReference = null)
    {
        $this->requestLineReference = $requestLineReference;
        return $this;
    }
}

