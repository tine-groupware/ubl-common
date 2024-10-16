<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing CreditNoteLineType
 *
 * ABIE
 *  Credit Note Line. Details
 *  A class to define a line in a Credit Note or Self Billed Credit Note.
 *  Credit Note Line
 * XSD Type: CreditNoteLineType
 */
class CreditNoteLineType
{
    /**
     * BBIE
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\CreditedQuantity $creditedQuantity
     */
    private $creditedQuantity = null;

    /**
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $freeOfChargeIndicator
     */
    private $freeOfChargeIndicator = null;

    /**
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\OrderLineReference[] $orderLineReference
     */
    private $orderLineReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @var \UBL21\Common\CommonAggregateComponents\DiscrepancyResponse[] $discrepancyResponse
     */
    private $discrepancyResponse = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\DespatchLineReference[] $despatchLineReference
     */
    private $despatchLineReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\ReceiptLineReference[] $receiptLineReference
     */
    private $receiptLineReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\OriginatorParty $originatorParty
     */
    private $originatorParty = null;

    /**
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \UBL21\Common\CommonAggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \UBL21\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \UBL21\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \UBL21\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Item
     *  Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @var \UBL21\Common\CommonAggregateComponents\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \UBL21\Common\CommonAggregateComponents\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @var \UBL21\Common\CommonAggregateComponents\SubCreditNoteLine[] $subCreditNoteLine
     */
    private $subCreditNoteLine = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @var \UBL21\Common\CommonAggregateComponents\ItemPriceExtension $itemPriceExtension
     */
    private $itemPriceExtension = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
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
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
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
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     * Gets as creditedQuantity
     *
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\CreditedQuantity
     */
    public function getCreditedQuantity()
    {
        return $this->creditedQuantity;
    }

    /**
     * Sets a new creditedQuantity
     *
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\CreditedQuantity $creditedQuantity
     * @return self
     */
    public function setCreditedQuantity(?\UBL21\Common\CommonBasicComponents\CreditedQuantity $creditedQuantity = null)
    {
        $this->creditedQuantity = $creditedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
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
     * Gets as taxPointDate
     *
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTaxPointDate()
    {
        return $this->taxPointDate;
    }

    /**
     * Sets a new taxPointDate
     *
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(\DateTime $taxPointDate = null)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?\UBL21\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode = null)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(?\UBL21\Common\CommonBasicComponents\AccountingCost $accountingCost = null)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\PaymentPurposeCode
     */
    public function getPaymentPurposeCode()
    {
        return $this->paymentPurposeCode;
    }

    /**
     * Sets a new paymentPurposeCode
     *
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(?\UBL21\Common\CommonBasicComponents\PaymentPurposeCode $paymentPurposeCode = null)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Gets as freeOfChargeIndicator
     *
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFreeOfChargeIndicator()
    {
        return $this->freeOfChargeIndicator;
    }

    /**
     * Sets a new freeOfChargeIndicator
     *
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $freeOfChargeIndicator
     * @return self
     */
    public function setFreeOfChargeIndicator($freeOfChargeIndicator)
    {
        $this->freeOfChargeIndicator = $freeOfChargeIndicator;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\UBL21\Common\CommonAggregateComponents\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(array $invoicePeriod = null)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\OrderLineReference $orderLineReference
     */
    public function addToOrderLineReference(\UBL21\Common\CommonAggregateComponents\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference[] = $orderLineReference;
        return $this;
    }

    /**
     * isset orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLineReference($index)
    {
        return isset($this->orderLineReference[$index]);
    }

    /**
     * unset orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLineReference($index)
    {
        unset($this->orderLineReference[$index]);
    }

    /**
     * Gets as orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\OrderLineReference[]
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\OrderLineReference[] $orderLineReference
     * @return self
     */
    public function setOrderLineReference(array $orderLineReference = null)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Adds as discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\DiscrepancyResponse $discrepancyResponse
     */
    public function addToDiscrepancyResponse(\UBL21\Common\CommonAggregateComponents\DiscrepancyResponse $discrepancyResponse)
    {
        $this->discrepancyResponse[] = $discrepancyResponse;
        return $this;
    }

    /**
     * isset discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscrepancyResponse($index)
    {
        return isset($this->discrepancyResponse[$index]);
    }

    /**
     * unset discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscrepancyResponse($index)
    {
        unset($this->discrepancyResponse[$index]);
    }

    /**
     * Gets as discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return \UBL21\Common\CommonAggregateComponents\DiscrepancyResponse[]
     */
    public function getDiscrepancyResponse()
    {
        return $this->discrepancyResponse;
    }

    /**
     * Sets a new discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param \UBL21\Common\CommonAggregateComponents\DiscrepancyResponse[] $discrepancyResponse
     * @return self
     */
    public function setDiscrepancyResponse(array $discrepancyResponse = null)
    {
        $this->discrepancyResponse = $discrepancyResponse;
        return $this;
    }

    /**
     * Adds as despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\DespatchLineReference $despatchLineReference
     */
    public function addToDespatchLineReference(\UBL21\Common\CommonAggregateComponents\DespatchLineReference $despatchLineReference)
    {
        $this->despatchLineReference[] = $despatchLineReference;
        return $this;
    }

    /**
     * isset despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchLineReference($index)
    {
        return isset($this->despatchLineReference[$index]);
    }

    /**
     * unset despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchLineReference($index)
    {
        unset($this->despatchLineReference[$index]);
    }

    /**
     * Gets as despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\DespatchLineReference[]
     */
    public function getDespatchLineReference()
    {
        return $this->despatchLineReference;
    }

    /**
     * Sets a new despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\DespatchLineReference[] $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(array $despatchLineReference = null)
    {
        $this->despatchLineReference = $despatchLineReference;
        return $this;
    }

    /**
     * Adds as receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ReceiptLineReference $receiptLineReference
     */
    public function addToReceiptLineReference(\UBL21\Common\CommonAggregateComponents\ReceiptLineReference $receiptLineReference)
    {
        $this->receiptLineReference[] = $receiptLineReference;
        return $this;
    }

    /**
     * isset receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptLineReference($index)
    {
        return isset($this->receiptLineReference[$index]);
    }

    /**
     * unset receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptLineReference($index)
    {
        unset($this->receiptLineReference[$index]);
    }

    /**
     * Gets as receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\ReceiptLineReference[]
     */
    public function getReceiptLineReference()
    {
        return $this->receiptLineReference;
    }

    /**
     * Sets a new receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\ReceiptLineReference[] $receiptLineReference
     * @return self
     */
    public function setReceiptLineReference(array $receiptLineReference = null)
    {
        $this->receiptLineReference = $receiptLineReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\BillingReference $billingReference
     */
    public function addToBillingReference(\UBL21\Common\CommonAggregateComponents\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(array $billingReference = null)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     * Gets as pricingReference
     *
     * ASBIE
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\PricingReference
     */
    public function getPricingReference()
    {
        return $this->pricingReference;
    }

    /**
     * Sets a new pricingReference
     *
     * ASBIE
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(?\UBL21\Common\CommonAggregateComponents\PricingReference $pricingReference = null)
    {
        $this->pricingReference = $pricingReference;
        return $this;
    }

    /**
     * Gets as originatorParty
     *
     * ASBIE
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\OriginatorParty
     */
    public function getOriginatorParty()
    {
        return $this->originatorParty;
    }

    /**
     * Sets a new originatorParty
     *
     * ASBIE
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\OriginatorParty $originatorParty
     * @return self
     */
    public function setOriginatorParty(?\UBL21\Common\CommonAggregateComponents\OriginatorParty $originatorParty = null)
    {
        $this->originatorParty = $originatorParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Delivery $delivery
     */
    public function addToDelivery(\UBL21\Common\CommonAggregateComponents\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \UBL21\Common\CommonAggregateComponents\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \UBL21\Common\CommonAggregateComponents\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(array $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\UBL21\Common\CommonAggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \UBL21\Common\CommonAggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \UBL21\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\UBL21\Common\CommonAggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \UBL21\Common\CommonAggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \UBL21\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\UBL21\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \UBL21\Common\CommonAggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \UBL21\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
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
     * Gets as price
     *
     * ASBIE
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @return \UBL21\Common\CommonAggregateComponents\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @param \UBL21\Common\CommonAggregateComponents\Price $price
     * @return self
     */
    public function setPrice(?\UBL21\Common\CommonAggregateComponents\Price $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Adds as deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\UBL21\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \UBL21\Common\CommonAggregateComponents\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \UBL21\Common\CommonAggregateComponents\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(array $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Adds as subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\SubCreditNoteLine $subCreditNoteLine
     */
    public function addToSubCreditNoteLine(\UBL21\Common\CommonAggregateComponents\SubCreditNoteLine $subCreditNoteLine)
    {
        $this->subCreditNoteLine[] = $subCreditNoteLine;
        return $this;
    }

    /**
     * isset subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubCreditNoteLine($index)
    {
        return isset($this->subCreditNoteLine[$index]);
    }

    /**
     * unset subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubCreditNoteLine($index)
    {
        unset($this->subCreditNoteLine[$index]);
    }

    /**
     * Gets as subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @return \UBL21\Common\CommonAggregateComponents\SubCreditNoteLine[]
     */
    public function getSubCreditNoteLine()
    {
        return $this->subCreditNoteLine;
    }

    /**
     * Sets a new subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param \UBL21\Common\CommonAggregateComponents\SubCreditNoteLine[] $subCreditNoteLine
     * @return self
     */
    public function setSubCreditNoteLine(array $subCreditNoteLine = null)
    {
        $this->subCreditNoteLine = $subCreditNoteLine;
        return $this;
    }

    /**
     * Gets as itemPriceExtension
     *
     * ASBIE
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @return \UBL21\Common\CommonAggregateComponents\ItemPriceExtension
     */
    public function getItemPriceExtension()
    {
        return $this->itemPriceExtension;
    }

    /**
     * Sets a new itemPriceExtension
     *
     * ASBIE
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @param \UBL21\Common\CommonAggregateComponents\ItemPriceExtension $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(?\UBL21\Common\CommonAggregateComponents\ItemPriceExtension $itemPriceExtension = null)
    {
        $this->itemPriceExtension = $itemPriceExtension;
        return $this;
    }
}

