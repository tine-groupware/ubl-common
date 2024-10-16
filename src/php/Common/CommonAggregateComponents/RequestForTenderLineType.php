<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing RequestForTenderLineType
 *
 * ABIE
 *  Request For Tender Line. Details
 *  A class to define a line in a Request for Tender describing an item of goods or a service solicited in the Request for Tender.
 *  Request For Tender Line
 * XSD Type: RequestForTenderLineType
 */
class RequestForTenderLineType
{
    /**
     * BBIE
     *  Request For Tender Line. Identifier
     *  An identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Request For Tender Line. UUID. Identifier
     *  A universally unique identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Quantity
     *  The quantity of the item for which a tender is requested in this line.
     *  0..1
     *  Request For Tender Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Request For Tender Line. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Request For Tender Line. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Request For Tender Line. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Request For Tender Line
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $taxIncludedIndicator
     */
    private $taxIncludedIndicator = null;

    /**
     * BBIE
     *  Request For Tender Line. Minimum_ Amount. Amount
     *  The minimum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * BBIE
     *  Request For Tender Line. Maximum_ Amount. Amount
     *  The maximum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * BBIE
     *  Request For Tender Line. Estimated_ Amount. Amount
     *  The estimated total amount of the deliverable.
     *  0..1
     *  Request For Tender Line
     *  Estimated
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\EstimatedAmount $estimatedAmount
     */
    private $estimatedAmount = null;

    /**
     * ASBIE
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\DeliveryPeriod[] $deliveryPeriod
     */
    private $deliveryPeriod = [
        
    ];

    /**
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \UBL21\Common\CommonAggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Request For Tender Line. Warranty Validity_ Period. Period
     *  The period during which a warranty to be associated with this request for tender line must apply.
     *  0..1
     *  Request For Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Request For Tender Line. Item
     *  An item for which a tender is requested.
     *  1
     *  Request For Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @var \UBL21\Common\CommonAggregateComponents\SubRequestForTenderLine[] $subRequestForTenderLine
     */
    private $subRequestForTenderLine = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Request For Tender Line. Identifier
     *  An identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
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
     *  Request For Tender Line. Identifier
     *  An identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
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
     * Gets as uUID
     *
     * BBIE
     *  Request For Tender Line. UUID. Identifier
     *  A universally unique identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
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
     *  Request For Tender Line. UUID. Identifier
     *  A universally unique identifier for this request for tender line.
     *  0..1
     *  Request For Tender Line
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
     * Adds as note
     *
     * BBIE
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Quantity
     *  The quantity of the item for which a tender is requested in this line.
     *  0..1
     *  Request For Tender Line
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
     *  Request For Tender Line. Quantity
     *  The quantity of the item for which a tender is requested in this line.
     *  0..1
     *  Request For Tender Line
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
     * Gets as minimumQuantity
     *
     * BBIE
     *  Request For Tender Line. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Request For Tender Line. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?\UBL21\Common\CommonBasicComponents\MinimumQuantity $minimumQuantity = null)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Request For Tender Line. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Request For Tender Line. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this request for tender line.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?\UBL21\Common\CommonBasicComponents\MaximumQuantity $maximumQuantity = null)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as taxIncludedIndicator
     *
     * BBIE
     *  Request For Tender Line. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Request For Tender Line
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getTaxIncludedIndicator()
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * Sets a new taxIncludedIndicator
     *
     * BBIE
     *  Request For Tender Line. Tax Included_ Indicator. Indicator
     *  Indicates whether the amounts are taxes included (true) or not (false).
     *  0..1
     *  Request For Tender Line
     *  Tax Included
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $taxIncludedIndicator
     * @return self
     */
    public function setTaxIncludedIndicator($taxIncludedIndicator)
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;
        return $this;
    }

    /**
     * Gets as minimumAmount
     *
     * BBIE
     *  Request For Tender Line. Minimum_ Amount. Amount
     *  The minimum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MinimumAmount
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Sets a new minimumAmount
     *
     * BBIE
     *  Request For Tender Line. Minimum_ Amount. Amount
     *  The minimum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(?\UBL21\Common\CommonBasicComponents\MinimumAmount $minimumAmount = null)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * Gets as maximumAmount
     *
     * BBIE
     *  Request For Tender Line. Maximum_ Amount. Amount
     *  The maximum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MaximumAmount
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * Sets a new maximumAmount
     *
     * BBIE
     *  Request For Tender Line. Maximum_ Amount. Amount
     *  The maximum amount allowed for this deliverable.
     *  0..1
     *  Request For Tender Line
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(?\UBL21\Common\CommonBasicComponents\MaximumAmount $maximumAmount = null)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * Gets as estimatedAmount
     *
     * BBIE
     *  Request For Tender Line. Estimated_ Amount. Amount
     *  The estimated total amount of the deliverable.
     *  0..1
     *  Request For Tender Line
     *  Estimated
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\EstimatedAmount
     */
    public function getEstimatedAmount()
    {
        return $this->estimatedAmount;
    }

    /**
     * Sets a new estimatedAmount
     *
     * BBIE
     *  Request For Tender Line. Estimated_ Amount. Amount
     *  The estimated total amount of the deliverable.
     *  0..1
     *  Request For Tender Line
     *  Estimated
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\EstimatedAmount $estimatedAmount
     * @return self
     */
    public function setEstimatedAmount(?\UBL21\Common\CommonBasicComponents\EstimatedAmount $estimatedAmount = null)
    {
        $this->estimatedAmount = $estimatedAmount;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
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
     *  Request For Tender Line. Document Reference
     *  A reference to a document associated with this request for tender line.
     *  0..n
     *  Request For Tender Line
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
     * Adds as deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\DeliveryPeriod $deliveryPeriod
     */
    public function addToDeliveryPeriod(\UBL21\Common\CommonAggregateComponents\DeliveryPeriod $deliveryPeriod)
    {
        $this->deliveryPeriod[] = $deliveryPeriod;
        return $this;
    }

    /**
     * isset deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryPeriod($index)
    {
        return isset($this->deliveryPeriod[$index]);
    }

    /**
     * unset deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryPeriod($index)
    {
        unset($this->deliveryPeriod[$index]);
    }

    /**
     * Gets as deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\DeliveryPeriod[]
     */
    public function getDeliveryPeriod()
    {
        return $this->deliveryPeriod;
    }

    /**
     * Sets a new deliveryPeriod
     *
     * ASBIE
     *  Request For Tender Line. Delivery_ Period. Period
     *  An applicable period for the deliverable or set of deliverables in this tendering process.
     *  0..n
     *  Request For Tender Line
     *  Delivery
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\DeliveryPeriod[] $deliveryPeriod
     * @return self
     */
    public function setDeliveryPeriod(array $deliveryPeriod = null)
    {
        $this->deliveryPeriod = $deliveryPeriod;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantity(\UBL21\Common\CommonAggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * isset requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredItemLocationQuantity($index)
    {
        return isset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * unset requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredItemLocationQuantity($index)
    {
        unset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * Gets as requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \UBL21\Common\CommonAggregateComponents\RequiredItemLocationQuantity[]
     */
    public function getRequiredItemLocationQuantity()
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * Sets a new requiredItemLocationQuantity
     *
     * ASBIE
     *  Request For Tender Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item specified in this request for tender line that are dependent on location and quantity.
     *  0..n
     *  Request For Tender Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \UBL21\Common\CommonAggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(array $requiredItemLocationQuantity = null)
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Request For Tender Line. Warranty Validity_ Period. Period
     *  The period during which a warranty to be associated with this request for tender line must apply.
     *  0..1
     *  Request For Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Request For Tender Line. Warranty Validity_ Period. Period
     *  The period during which a warranty to be associated with this request for tender line must apply.
     *  0..1
     *  Request For Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(?\UBL21\Common\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod = null)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Request For Tender Line. Item
     *  An item for which a tender is requested.
     *  1
     *  Request For Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Request For Tender Line. Item
     *  An item for which a tender is requested.
     *  1
     *  Request For Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\Item $item
     * @return self
     */
    public function setItem(\UBL21\Common\CommonAggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\SubRequestForTenderLine $subRequestForTenderLine
     */
    public function addToSubRequestForTenderLine(\UBL21\Common\CommonAggregateComponents\SubRequestForTenderLine $subRequestForTenderLine)
    {
        $this->subRequestForTenderLine[] = $subRequestForTenderLine;
        return $this;
    }

    /**
     * isset subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubRequestForTenderLine($index)
    {
        return isset($this->subRequestForTenderLine[$index]);
    }

    /**
     * unset subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubRequestForTenderLine($index)
    {
        unset($this->subRequestForTenderLine[$index]);
    }

    /**
     * Gets as subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return \UBL21\Common\CommonAggregateComponents\SubRequestForTenderLine[]
     */
    public function getSubRequestForTenderLine()
    {
        return $this->subRequestForTenderLine;
    }

    /**
     * Sets a new subRequestForTenderLine
     *
     * ASBIE
     *  Request For Tender Line. Sub_ Request For Tender Line. Request For Tender Line
     *  A subsidiary request for tender line.
     *  0..n
     *  Request For Tender Line
     *  Sub
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param \UBL21\Common\CommonAggregateComponents\SubRequestForTenderLine[] $subRequestForTenderLine
     * @return self
     */
    public function setSubRequestForTenderLine(array $subRequestForTenderLine = null)
    {
        $this->subRequestForTenderLine = $subRequestForTenderLine;
        return $this;
    }
}

