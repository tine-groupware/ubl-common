<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing TenderLineType
 *
 * ABIE
 *  Tender Line. Details
 *  A class to define a line in a Tender.
 *  Tender Line
 * XSD Type: TenderLineType
 */
class TenderLineType
{
    /**
     * BBIE
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\OrderableUnit $orderableUnit
     */
    private $orderableUnit = null;

    /**
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @var \UBL21\Common\CommonBasicComponents\ContentUnitQuantity $contentUnitQuantity
     */
    private $contentUnitQuantity = null;

    /**
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     */
    private $orderQuantityIncrementNumeric = null;

    /**
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @var \UBL21\Common\CommonBasicComponents\MinimumOrderQuantity $minimumOrderQuantity
     */
    private $minimumOrderQuantity = null;

    /**
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @var \UBL21\Common\CommonBasicComponents\MaximumOrderQuantity $maximumOrderQuantity
     */
    private $maximumOrderQuantity = null;

    /**
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @var \UBL21\Common\CommonBasicComponents\WarrantyInformation[] $warrantyInformation
     */
    private $warrantyInformation = [
        
    ];

    /**
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @var \UBL21\Common\CommonBasicComponents\PackLevelCode $packLevelCode
     */
    private $packLevelCode = null;

    /**
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \UBL21\Common\CommonAggregateComponents\OfferedItemLocationQuantity[] $offeredItemLocationQuantity
     */
    private $offeredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     */
    private $replacementRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * ASBIE
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @var \UBL21\Common\CommonAggregateComponents\SubTenderLine[] $subTenderLine
     */
    private $subTenderLine = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\CallForTendersLineReference $callForTendersLineReference
     */
    private $callForTendersLineReference = null;

    /**
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
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
     * Gets as orderableUnit
     *
     * BBIE
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\OrderableUnit
     */
    public function getOrderableUnit()
    {
        return $this->orderableUnit;
    }

    /**
     * Sets a new orderableUnit
     *
     * BBIE
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\OrderableUnit $orderableUnit
     * @return self
     */
    public function setOrderableUnit(?\UBL21\Common\CommonBasicComponents\OrderableUnit $orderableUnit = null)
    {
        $this->orderableUnit = $orderableUnit;
        return $this;
    }

    /**
     * Gets as contentUnitQuantity
     *
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @return \UBL21\Common\CommonBasicComponents\ContentUnitQuantity
     */
    public function getContentUnitQuantity()
    {
        return $this->contentUnitQuantity;
    }

    /**
     * Sets a new contentUnitQuantity
     *
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @param \UBL21\Common\CommonBasicComponents\ContentUnitQuantity $contentUnitQuantity
     * @return self
     */
    public function setContentUnitQuantity(?\UBL21\Common\CommonBasicComponents\ContentUnitQuantity $contentUnitQuantity = null)
    {
        $this->contentUnitQuantity = $contentUnitQuantity;
        return $this;
    }

    /**
     * Gets as orderQuantityIncrementNumeric
     *
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\OrderQuantityIncrementNumeric
     */
    public function getOrderQuantityIncrementNumeric()
    {
        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * Sets a new orderQuantityIncrementNumeric
     *
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     * @return self
     */
    public function setOrderQuantityIncrementNumeric(?\UBL21\Common\CommonBasicComponents\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric = null)
    {
        $this->orderQuantityIncrementNumeric = $orderQuantityIncrementNumeric;
        return $this;
    }

    /**
     * Gets as minimumOrderQuantity
     *
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @return \UBL21\Common\CommonBasicComponents\MinimumOrderQuantity
     */
    public function getMinimumOrderQuantity()
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * Sets a new minimumOrderQuantity
     *
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @param \UBL21\Common\CommonBasicComponents\MinimumOrderQuantity $minimumOrderQuantity
     * @return self
     */
    public function setMinimumOrderQuantity(?\UBL21\Common\CommonBasicComponents\MinimumOrderQuantity $minimumOrderQuantity = null)
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;
        return $this;
    }

    /**
     * Gets as maximumOrderQuantity
     *
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @return \UBL21\Common\CommonBasicComponents\MaximumOrderQuantity
     */
    public function getMaximumOrderQuantity()
    {
        return $this->maximumOrderQuantity;
    }

    /**
     * Sets a new maximumOrderQuantity
     *
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @param \UBL21\Common\CommonBasicComponents\MaximumOrderQuantity $maximumOrderQuantity
     * @return self
     */
    public function setMaximumOrderQuantity(?\UBL21\Common\CommonBasicComponents\MaximumOrderQuantity $maximumOrderQuantity = null)
    {
        $this->maximumOrderQuantity = $maximumOrderQuantity;
        return $this;
    }

    /**
     * Adds as warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\WarrantyInformation $warrantyInformation
     */
    public function addToWarrantyInformation(\UBL21\Common\CommonBasicComponents\WarrantyInformation $warrantyInformation)
    {
        $this->warrantyInformation[] = $warrantyInformation;
        return $this;
    }

    /**
     * isset warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarrantyInformation($index)
    {
        return isset($this->warrantyInformation[$index]);
    }

    /**
     * unset warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarrantyInformation($index)
    {
        unset($this->warrantyInformation[$index]);
    }

    /**
     * Gets as warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return \UBL21\Common\CommonBasicComponents\WarrantyInformation[]
     */
    public function getWarrantyInformation()
    {
        return $this->warrantyInformation;
    }

    /**
     * Sets a new warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param \UBL21\Common\CommonBasicComponents\WarrantyInformation[] $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(array $warrantyInformation = null)
    {
        $this->warrantyInformation = $warrantyInformation;
        return $this;
    }

    /**
     * Gets as packLevelCode
     *
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @return \UBL21\Common\CommonBasicComponents\PackLevelCode
     */
    public function getPackLevelCode()
    {
        return $this->packLevelCode;
    }

    /**
     * Sets a new packLevelCode
     *
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @param \UBL21\Common\CommonBasicComponents\PackLevelCode $packLevelCode
     * @return self
     */
    public function setPackLevelCode(?\UBL21\Common\CommonBasicComponents\PackLevelCode $packLevelCode = null)
    {
        $this->packLevelCode = $packLevelCode;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
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
     * Gets as item
     *
     * ASBIE
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\Item $item
     * @return self
     */
    public function setItem(?\UBL21\Common\CommonAggregateComponents\Item $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\OfferedItemLocationQuantity $offeredItemLocationQuantity
     */
    public function addToOfferedItemLocationQuantity(\UBL21\Common\CommonAggregateComponents\OfferedItemLocationQuantity $offeredItemLocationQuantity)
    {
        $this->offeredItemLocationQuantity[] = $offeredItemLocationQuantity;
        return $this;
    }

    /**
     * isset offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfferedItemLocationQuantity($index)
    {
        return isset($this->offeredItemLocationQuantity[$index]);
    }

    /**
     * unset offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfferedItemLocationQuantity($index)
    {
        unset($this->offeredItemLocationQuantity[$index]);
    }

    /**
     * Gets as offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \UBL21\Common\CommonAggregateComponents\OfferedItemLocationQuantity[]
     */
    public function getOfferedItemLocationQuantity()
    {
        return $this->offeredItemLocationQuantity;
    }

    /**
     * Sets a new offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \UBL21\Common\CommonAggregateComponents\OfferedItemLocationQuantity[] $offeredItemLocationQuantity
     * @return self
     */
    public function setOfferedItemLocationQuantity(array $offeredItemLocationQuantity = null)
    {
        $this->offeredItemLocationQuantity = $offeredItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ReplacementRelatedItem $replacementRelatedItem
     */
    public function addToReplacementRelatedItem(\UBL21\Common\CommonAggregateComponents\ReplacementRelatedItem $replacementRelatedItem)
    {
        $this->replacementRelatedItem[] = $replacementRelatedItem;
        return $this;
    }

    /**
     * isset replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacementRelatedItem($index)
    {
        return isset($this->replacementRelatedItem[$index]);
    }

    /**
     * unset replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacementRelatedItem($index)
    {
        unset($this->replacementRelatedItem[$index]);
    }

    /**
     * Gets as replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\ReplacementRelatedItem[]
     */
    public function getReplacementRelatedItem()
    {
        return $this->replacementRelatedItem;
    }

    /**
     * Sets a new replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     * @return self
     */
    public function setReplacementRelatedItem(array $replacementRelatedItem = null)
    {
        $this->replacementRelatedItem = $replacementRelatedItem;
        return $this;
    }

    /**
     * Gets as warrantyParty
     *
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\WarrantyParty
     */
    public function getWarrantyParty()
    {
        return $this->warrantyParty;
    }

    /**
     * Sets a new warrantyParty
     *
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\WarrantyParty $warrantyParty
     * @return self
     */
    public function setWarrantyParty(?\UBL21\Common\CommonAggregateComponents\WarrantyParty $warrantyParty = null)
    {
        $this->warrantyParty = $warrantyParty;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
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
     * Adds as subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\SubTenderLine $subTenderLine
     */
    public function addToSubTenderLine(\UBL21\Common\CommonAggregateComponents\SubTenderLine $subTenderLine)
    {
        $this->subTenderLine[] = $subTenderLine;
        return $this;
    }

    /**
     * isset subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTenderLine($index)
    {
        return isset($this->subTenderLine[$index]);
    }

    /**
     * unset subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTenderLine($index)
    {
        unset($this->subTenderLine[$index]);
    }

    /**
     * Gets as subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return \UBL21\Common\CommonAggregateComponents\SubTenderLine[]
     */
    public function getSubTenderLine()
    {
        return $this->subTenderLine;
    }

    /**
     * Sets a new subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param \UBL21\Common\CommonAggregateComponents\SubTenderLine[] $subTenderLine
     * @return self
     */
    public function setSubTenderLine(array $subTenderLine = null)
    {
        $this->subTenderLine = $subTenderLine;
        return $this;
    }

    /**
     * Gets as callForTendersLineReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\CallForTendersLineReference
     */
    public function getCallForTendersLineReference()
    {
        return $this->callForTendersLineReference;
    }

    /**
     * Sets a new callForTendersLineReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\CallForTendersLineReference $callForTendersLineReference
     * @return self
     */
    public function setCallForTendersLineReference(?\UBL21\Common\CommonAggregateComponents\CallForTendersLineReference $callForTendersLineReference = null)
    {
        $this->callForTendersLineReference = $callForTendersLineReference;
        return $this;
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(?\UBL21\Common\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference = null)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }
}

