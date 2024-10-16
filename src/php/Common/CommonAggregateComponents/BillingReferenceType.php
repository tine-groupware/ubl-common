<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing BillingReferenceType
 *
 * ABIE
 *  Billing Reference. Details
 *  A class to define a reference to a billing document.
 *  Billing Reference
 * XSD Type: BillingReferenceType
 */
class BillingReferenceType
{
    /**
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\InvoiceDocumentReference $invoiceDocumentReference
     */
    private $invoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     */
    private $selfBilledInvoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference
     */
    private $creditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     */
    private $selfBilledCreditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference
     */
    private $debitNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\ReminderDocumentReference $reminderDocumentReference
     */
    private $reminderDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    private $additionalDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @var \UBL21\Common\CommonAggregateComponents\BillingReferenceLine[] $billingReferenceLine
     */
    private $billingReferenceLine = [
        
    ];

    /**
     * Gets as invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\InvoiceDocumentReference
     */
    public function getInvoiceDocumentReference()
    {
        return $this->invoiceDocumentReference;
    }

    /**
     * Sets a new invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\InvoiceDocumentReference $invoiceDocumentReference
     * @return self
     */
    public function setInvoiceDocumentReference(?\UBL21\Common\CommonAggregateComponents\InvoiceDocumentReference $invoiceDocumentReference = null)
    {
        $this->invoiceDocumentReference = $invoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\SelfBilledInvoiceDocumentReference
     */
    public function getSelfBilledInvoiceDocumentReference()
    {
        return $this->selfBilledInvoiceDocumentReference;
    }

    /**
     * Sets a new selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     * @return self
     */
    public function setSelfBilledInvoiceDocumentReference(?\UBL21\Common\CommonAggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference = null)
    {
        $this->selfBilledInvoiceDocumentReference = $selfBilledInvoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\CreditNoteDocumentReference
     */
    public function getCreditNoteDocumentReference()
    {
        return $this->creditNoteDocumentReference;
    }

    /**
     * Sets a new creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference
     * @return self
     */
    public function setCreditNoteDocumentReference(?\UBL21\Common\CommonAggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference = null)
    {
        $this->creditNoteDocumentReference = $creditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\SelfBilledCreditNoteDocumentReference
     */
    public function getSelfBilledCreditNoteDocumentReference()
    {
        return $this->selfBilledCreditNoteDocumentReference;
    }

    /**
     * Sets a new selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     * @return self
     */
    public function setSelfBilledCreditNoteDocumentReference(?\UBL21\Common\CommonAggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference = null)
    {
        $this->selfBilledCreditNoteDocumentReference = $selfBilledCreditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\DebitNoteDocumentReference
     */
    public function getDebitNoteDocumentReference()
    {
        return $this->debitNoteDocumentReference;
    }

    /**
     * Sets a new debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference
     * @return self
     */
    public function setDebitNoteDocumentReference(?\UBL21\Common\CommonAggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference = null)
    {
        $this->debitNoteDocumentReference = $debitNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\ReminderDocumentReference
     */
    public function getReminderDocumentReference()
    {
        return $this->reminderDocumentReference;
    }

    /**
     * Sets a new reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\ReminderDocumentReference $reminderDocumentReference
     * @return self
     */
    public function setReminderDocumentReference(?\UBL21\Common\CommonAggregateComponents\ReminderDocumentReference $reminderDocumentReference = null)
    {
        $this->reminderDocumentReference = $reminderDocumentReference;
        return $this;
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(?\UBL21\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\BillingReferenceLine $billingReferenceLine
     */
    public function addToBillingReferenceLine(\UBL21\Common\CommonAggregateComponents\BillingReferenceLine $billingReferenceLine)
    {
        $this->billingReferenceLine[] = $billingReferenceLine;
        return $this;
    }

    /**
     * isset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReferenceLine($index)
    {
        return isset($this->billingReferenceLine[$index]);
    }

    /**
     * unset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReferenceLine($index)
    {
        unset($this->billingReferenceLine[$index]);
    }

    /**
     * Gets as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return \UBL21\Common\CommonAggregateComponents\BillingReferenceLine[]
     */
    public function getBillingReferenceLine()
    {
        return $this->billingReferenceLine;
    }

    /**
     * Sets a new billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param \UBL21\Common\CommonAggregateComponents\BillingReferenceLine[] $billingReferenceLine
     * @return self
     */
    public function setBillingReferenceLine(array $billingReferenceLine = null)
    {
        $this->billingReferenceLine = $billingReferenceLine;
        return $this;
    }
}

