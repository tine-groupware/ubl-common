<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing PaymentMandateType
 *
 * ABIE
 *  Payment Mandate. Details
 *  A class to describe a payment mandate.
 *  Payment Mandate
 * XSD Type: PaymentMandateType
 */
class PaymentMandateType
{
    /**
     * BBIE
     *  Payment Mandate. Identifier
     *  An identifier for this payment mandate.
     *  0..1
     *  Payment Mandate
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Payment Mandate. Mandate Type Code. Code
     *  A code signifying the type of this payment mandate.
     *  0..1
     *  Payment Mandate
     *  Mandate Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MandateTypeCode $mandateTypeCode
     */
    private $mandateTypeCode = null;

    /**
     * BBIE
     *  Payment Mandate. Maximum Payment Instructions. Numeric
     *  The number of maximum payment instructions allowed within the validity period.
     *  0..1
     *  Payment Mandate
     *  Maximum Payment Instructions
     *  Numeric
     *  Numeric. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric
     */
    private $maximumPaymentInstructionsNumeric = null;

    /**
     * BBIE
     *  Payment Mandate. Maximum_ Paid Amount. Amount
     *  The maximum amount to be paid within a single instruction.
     *  0..1
     *  Payment Mandate
     *  Maximum
     *  Paid Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MaximumPaidAmount $maximumPaidAmount
     */
    private $maximumPaidAmount = null;

    /**
     * BBIE
     *  Payment Mandate. Signature Identifier. Identifier
     *  An identifier for a signature applied by a signatory party.
     *  0..1
     *  Payment Mandate
     *  Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\SignatureID $signatureID
     */
    private $signatureID = null;

    /**
     * ASBIE
     *  Payment Mandate. Payer_ Party. Party
     *  The payer party (if different from the debtor).
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\PayerParty $payerParty
     */
    private $payerParty = null;

    /**
     * ASBIE
     *  Payment Mandate. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \UBL21\Common\CommonAggregateComponents\PayerFinancialAccount $payerFinancialAccount
     */
    private $payerFinancialAccount = null;

    /**
     * ASBIE
     *  Payment Mandate. Validity_ Period. Period
     *  The period during which this mandate is valid.
     *  0..1
     *  Payment Mandate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Payment Mandate. Payment Reversal_ Period. Period
     *  The period of the reverse payment.
     *  0..1
     *  Payment Mandate
     *  Payment Reversal
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\PaymentReversalPeriod $paymentReversalPeriod
     */
    private $paymentReversalPeriod = null;

    /**
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @var \UBL21\Common\CommonAggregateComponents\Clause[] $clause
     */
    private $clause = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Payment Mandate. Identifier
     *  An identifier for this payment mandate.
     *  0..1
     *  Payment Mandate
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
     *  Payment Mandate. Identifier
     *  An identifier for this payment mandate.
     *  0..1
     *  Payment Mandate
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
     * Gets as mandateTypeCode
     *
     * BBIE
     *  Payment Mandate. Mandate Type Code. Code
     *  A code signifying the type of this payment mandate.
     *  0..1
     *  Payment Mandate
     *  Mandate Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MandateTypeCode
     */
    public function getMandateTypeCode()
    {
        return $this->mandateTypeCode;
    }

    /**
     * Sets a new mandateTypeCode
     *
     * BBIE
     *  Payment Mandate. Mandate Type Code. Code
     *  A code signifying the type of this payment mandate.
     *  0..1
     *  Payment Mandate
     *  Mandate Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MandateTypeCode $mandateTypeCode
     * @return self
     */
    public function setMandateTypeCode(?\UBL21\Common\CommonBasicComponents\MandateTypeCode $mandateTypeCode = null)
    {
        $this->mandateTypeCode = $mandateTypeCode;
        return $this;
    }

    /**
     * Gets as maximumPaymentInstructionsNumeric
     *
     * BBIE
     *  Payment Mandate. Maximum Payment Instructions. Numeric
     *  The number of maximum payment instructions allowed within the validity period.
     *  0..1
     *  Payment Mandate
     *  Maximum Payment Instructions
     *  Numeric
     *  Numeric. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MaximumPaymentInstructionsNumeric
     */
    public function getMaximumPaymentInstructionsNumeric()
    {
        return $this->maximumPaymentInstructionsNumeric;
    }

    /**
     * Sets a new maximumPaymentInstructionsNumeric
     *
     * BBIE
     *  Payment Mandate. Maximum Payment Instructions. Numeric
     *  The number of maximum payment instructions allowed within the validity period.
     *  0..1
     *  Payment Mandate
     *  Maximum Payment Instructions
     *  Numeric
     *  Numeric. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric
     * @return self
     */
    public function setMaximumPaymentInstructionsNumeric(?\UBL21\Common\CommonBasicComponents\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric = null)
    {
        $this->maximumPaymentInstructionsNumeric = $maximumPaymentInstructionsNumeric;
        return $this;
    }

    /**
     * Gets as maximumPaidAmount
     *
     * BBIE
     *  Payment Mandate. Maximum_ Paid Amount. Amount
     *  The maximum amount to be paid within a single instruction.
     *  0..1
     *  Payment Mandate
     *  Maximum
     *  Paid Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MaximumPaidAmount
     */
    public function getMaximumPaidAmount()
    {
        return $this->maximumPaidAmount;
    }

    /**
     * Sets a new maximumPaidAmount
     *
     * BBIE
     *  Payment Mandate. Maximum_ Paid Amount. Amount
     *  The maximum amount to be paid within a single instruction.
     *  0..1
     *  Payment Mandate
     *  Maximum
     *  Paid Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MaximumPaidAmount $maximumPaidAmount
     * @return self
     */
    public function setMaximumPaidAmount(?\UBL21\Common\CommonBasicComponents\MaximumPaidAmount $maximumPaidAmount = null)
    {
        $this->maximumPaidAmount = $maximumPaidAmount;
        return $this;
    }

    /**
     * Gets as signatureID
     *
     * BBIE
     *  Payment Mandate. Signature Identifier. Identifier
     *  An identifier for a signature applied by a signatory party.
     *  0..1
     *  Payment Mandate
     *  Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\SignatureID
     */
    public function getSignatureID()
    {
        return $this->signatureID;
    }

    /**
     * Sets a new signatureID
     *
     * BBIE
     *  Payment Mandate. Signature Identifier. Identifier
     *  An identifier for a signature applied by a signatory party.
     *  0..1
     *  Payment Mandate
     *  Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\SignatureID $signatureID
     * @return self
     */
    public function setSignatureID(?\UBL21\Common\CommonBasicComponents\SignatureID $signatureID = null)
    {
        $this->signatureID = $signatureID;
        return $this;
    }

    /**
     * Gets as payerParty
     *
     * ASBIE
     *  Payment Mandate. Payer_ Party. Party
     *  The payer party (if different from the debtor).
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\PayerParty
     */
    public function getPayerParty()
    {
        return $this->payerParty;
    }

    /**
     * Sets a new payerParty
     *
     * ASBIE
     *  Payment Mandate. Payer_ Party. Party
     *  The payer party (if different from the debtor).
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\PayerParty $payerParty
     * @return self
     */
    public function setPayerParty(?\UBL21\Common\CommonAggregateComponents\PayerParty $payerParty = null)
    {
        $this->payerParty = $payerParty;
        return $this;
    }

    /**
     * Gets as payerFinancialAccount
     *
     * ASBIE
     *  Payment Mandate. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \UBL21\Common\CommonAggregateComponents\PayerFinancialAccount
     */
    public function getPayerFinancialAccount()
    {
        return $this->payerFinancialAccount;
    }

    /**
     * Sets a new payerFinancialAccount
     *
     * ASBIE
     *  Payment Mandate. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \UBL21\Common\CommonAggregateComponents\PayerFinancialAccount $payerFinancialAccount
     * @return self
     */
    public function setPayerFinancialAccount(?\UBL21\Common\CommonAggregateComponents\PayerFinancialAccount $payerFinancialAccount = null)
    {
        $this->payerFinancialAccount = $payerFinancialAccount;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Payment Mandate. Validity_ Period. Period
     *  The period during which this mandate is valid.
     *  0..1
     *  Payment Mandate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Payment Mandate. Validity_ Period. Period
     *  The period during which this mandate is valid.
     *  0..1
     *  Payment Mandate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\UBL21\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as paymentReversalPeriod
     *
     * ASBIE
     *  Payment Mandate. Payment Reversal_ Period. Period
     *  The period of the reverse payment.
     *  0..1
     *  Payment Mandate
     *  Payment Reversal
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\PaymentReversalPeriod
     */
    public function getPaymentReversalPeriod()
    {
        return $this->paymentReversalPeriod;
    }

    /**
     * Sets a new paymentReversalPeriod
     *
     * ASBIE
     *  Payment Mandate. Payment Reversal_ Period. Period
     *  The period of the reverse payment.
     *  0..1
     *  Payment Mandate
     *  Payment Reversal
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\PaymentReversalPeriod $paymentReversalPeriod
     * @return self
     */
    public function setPaymentReversalPeriod(?\UBL21\Common\CommonAggregateComponents\PaymentReversalPeriod $paymentReversalPeriod = null)
    {
        $this->paymentReversalPeriod = $paymentReversalPeriod;
        return $this;
    }

    /**
     * Adds as clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Clause $clause
     */
    public function addToClause(\UBL21\Common\CommonAggregateComponents\Clause $clause)
    {
        $this->clause[] = $clause;
        return $this;
    }

    /**
     * isset clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClause($index)
    {
        return isset($this->clause[$index]);
    }

    /**
     * unset clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClause($index)
    {
        unset($this->clause[$index]);
    }

    /**
     * Gets as clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @return \UBL21\Common\CommonAggregateComponents\Clause[]
     */
    public function getClause()
    {
        return $this->clause;
    }

    /**
     * Sets a new clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @param \UBL21\Common\CommonAggregateComponents\Clause[] $clause
     * @return self
     */
    public function setClause(array $clause = null)
    {
        $this->clause = $clause;
        return $this;
    }
}

