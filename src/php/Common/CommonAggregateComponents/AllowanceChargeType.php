<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing AllowanceChargeType
 *
 * ABIE
 *  Allowance Charge. Details
 *  A class to describe information about a charge or discount as applied to a price component.
 *  Allowance Charge
 * XSD Type: AllowanceChargeType
 */
class AllowanceChargeType
{
    /**
     * BBIE
     *  Allowance Charge. Identifier
     *  An identifier for this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  An indicator that this AllowanceCharge describes a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $chargeIndicator
     */
    private $chargeIndicator = null;

    /**
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  A mutually agreed code signifying the reason for this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason
     *  Allowance Charge Reason_ Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AllowanceChargeReasonCode $allowanceChargeReasonCode
     */
    private $allowanceChargeReasonCode = null;

    /**
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AllowanceChargeReason[] $allowanceChargeReason
     */
    private $allowanceChargeReason = [
        
    ];

    /**
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  A number by which the base amount is multiplied to calculate the actual amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @var \UBL21\Common\CommonBasicComponents\MultiplierFactorNumeric $multiplierFactorNumeric
     */
    private $multiplierFactorNumeric = null;

    /**
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  An indicator that this allowance or charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $prepaidIndicator
     */
    private $prepaidIndicator = null;

    /**
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  A number indicating the order of this allowance or charge in the sequence of calculations applied when there are multiple allowances or charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @var \UBL21\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * BBIE
     *  Allowance Charge. Amount
     *  The monetary amount of this allowance or charge to be applied.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
     *
     * @var \UBL21\Common\CommonBasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The monetary amount to which the multiplier factor is applied in calculating the amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\BaseAmount $baseAmount
     */
    private $baseAmount = null;

    /**
     * BBIE
     *  Allowance Charge. Accounting Cost Code. Code
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as a code.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Allowance Charge. Accounting Cost. Text
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as text.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Allowance Charge. Per Unit_ Amount. Amount
     *  The allowance or charge per item; the total allowance or charge is calculated by multiplying the per unit amount by the quantity of items, either at the level of the individual transaction line or for the total number of items in the document, depending on the context in which it appears.
     *  0..1
     *  Allowance Charge
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * ASBIE
     *  Allowance Charge. Tax Category
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \UBL21\Common\CommonAggregateComponents\TaxCategory[] $taxCategory
     */
    private $taxCategory = [
        
    ];

    /**
     * ASBIE
     *  Allowance Charge. Tax Total
     *  The total of all the taxes applicable to this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \UBL21\Common\CommonAggregateComponents\TaxTotal $taxTotal
     */
    private $taxTotal = null;

    /**
     * ASBIE
     *  Allowance Charge. Payment Means
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \UBL21\Common\CommonAggregateComponents\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Allowance Charge. Identifier
     *  An identifier for this allowance or charge.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Identifier
     *  An identifier for this allowance or charge.
     *  0..1
     *  Allowance Charge
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
     * Gets as chargeIndicator
     *
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  An indicator that this AllowanceCharge describes a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getChargeIndicator()
    {
        return $this->chargeIndicator;
    }

    /**
     * Sets a new chargeIndicator
     *
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  An indicator that this AllowanceCharge describes a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $chargeIndicator
     * @return self
     */
    public function setChargeIndicator($chargeIndicator)
    {
        $this->chargeIndicator = $chargeIndicator;
        return $this;
    }

    /**
     * Gets as allowanceChargeReasonCode
     *
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  A mutually agreed code signifying the reason for this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason
     *  Allowance Charge Reason_ Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\AllowanceChargeReasonCode
     */
    public function getAllowanceChargeReasonCode()
    {
        return $this->allowanceChargeReasonCode;
    }

    /**
     * Sets a new allowanceChargeReasonCode
     *
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  A mutually agreed code signifying the reason for this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason
     *  Allowance Charge Reason_ Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\AllowanceChargeReasonCode $allowanceChargeReasonCode
     * @return self
     */
    public function setAllowanceChargeReasonCode(?\UBL21\Common\CommonBasicComponents\AllowanceChargeReasonCode $allowanceChargeReasonCode = null)
    {
        $this->allowanceChargeReasonCode = $allowanceChargeReasonCode;
        return $this;
    }

    /**
     * Adds as allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\AllowanceChargeReason $allowanceChargeReason
     */
    public function addToAllowanceChargeReason(\UBL21\Common\CommonBasicComponents\AllowanceChargeReason $allowanceChargeReason)
    {
        $this->allowanceChargeReason[] = $allowanceChargeReason;
        return $this;
    }

    /**
     * isset allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceChargeReason($index)
    {
        return isset($this->allowanceChargeReason[$index]);
    }

    /**
     * unset allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceChargeReason($index)
    {
        unset($this->allowanceChargeReason[$index]);
    }

    /**
     * Gets as allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\AllowanceChargeReason[]
     */
    public function getAllowanceChargeReason()
    {
        return $this->allowanceChargeReason;
    }

    /**
     * Sets a new allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\AllowanceChargeReason[] $allowanceChargeReason
     * @return self
     */
    public function setAllowanceChargeReason(array $allowanceChargeReason = null)
    {
        $this->allowanceChargeReason = $allowanceChargeReason;
        return $this;
    }

    /**
     * Gets as multiplierFactorNumeric
     *
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  A number by which the base amount is multiplied to calculate the actual amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @return \UBL21\Common\CommonBasicComponents\MultiplierFactorNumeric
     */
    public function getMultiplierFactorNumeric()
    {
        return $this->multiplierFactorNumeric;
    }

    /**
     * Sets a new multiplierFactorNumeric
     *
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  A number by which the base amount is multiplied to calculate the actual amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @param \UBL21\Common\CommonBasicComponents\MultiplierFactorNumeric $multiplierFactorNumeric
     * @return self
     */
    public function setMultiplierFactorNumeric(?\UBL21\Common\CommonBasicComponents\MultiplierFactorNumeric $multiplierFactorNumeric = null)
    {
        $this->multiplierFactorNumeric = $multiplierFactorNumeric;
        return $this;
    }

    /**
     * Gets as prepaidIndicator
     *
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  An indicator that this allowance or charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPrepaidIndicator()
    {
        return $this->prepaidIndicator;
    }

    /**
     * Sets a new prepaidIndicator
     *
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  An indicator that this allowance or charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $prepaidIndicator
     * @return self
     */
    public function setPrepaidIndicator($prepaidIndicator)
    {
        $this->prepaidIndicator = $prepaidIndicator;
        return $this;
    }

    /**
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  A number indicating the order of this allowance or charge in the sequence of calculations applied when there are multiple allowances or charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @return \UBL21\Common\CommonBasicComponents\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  A number indicating the order of this allowance or charge in the sequence of calculations applied when there are multiple allowances or charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @param \UBL21\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(?\UBL21\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric = null)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Allowance Charge. Amount
     *  The monetary amount of this allowance or charge to be applied.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
     *
     * @return \UBL21\Common\CommonBasicComponents\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Allowance Charge. Amount
     *  The monetary amount of this allowance or charge to be applied.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
     *
     * @param \UBL21\Common\CommonBasicComponents\Amount $amount
     * @return self
     */
    public function setAmount(\UBL21\Common\CommonBasicComponents\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as baseAmount
     *
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The monetary amount to which the multiplier factor is applied in calculating the amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\BaseAmount
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Sets a new baseAmount
     *
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The monetary amount to which the multiplier factor is applied in calculating the amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\BaseAmount $baseAmount
     * @return self
     */
    public function setBaseAmount(?\UBL21\Common\CommonBasicComponents\BaseAmount $baseAmount = null)
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Allowance Charge. Accounting Cost Code. Code
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as a code.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Accounting Cost Code. Code
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as a code.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Accounting Cost. Text
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as text.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Accounting Cost. Text
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as text.
     *  0..1
     *  Allowance Charge
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
     * Gets as perUnitAmount
     *
     * BBIE
     *  Allowance Charge. Per Unit_ Amount. Amount
     *  The allowance or charge per item; the total allowance or charge is calculated by multiplying the per unit amount by the quantity of items, either at the level of the individual transaction line or for the total number of items in the document, depending on the context in which it appears.
     *  0..1
     *  Allowance Charge
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\PerUnitAmount
     */
    public function getPerUnitAmount()
    {
        return $this->perUnitAmount;
    }

    /**
     * Sets a new perUnitAmount
     *
     * BBIE
     *  Allowance Charge. Per Unit_ Amount. Amount
     *  The allowance or charge per item; the total allowance or charge is calculated by multiplying the per unit amount by the quantity of items, either at the level of the individual transaction line or for the total number of items in the document, depending on the context in which it appears.
     *  0..1
     *  Allowance Charge
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\PerUnitAmount $perUnitAmount
     * @return self
     */
    public function setPerUnitAmount(?\UBL21\Common\CommonBasicComponents\PerUnitAmount $perUnitAmount = null)
    {
        $this->perUnitAmount = $perUnitAmount;
        return $this;
    }

    /**
     * Adds as taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\TaxCategory $taxCategory
     */
    public function addToTaxCategory(\UBL21\Common\CommonAggregateComponents\TaxCategory $taxCategory)
    {
        $this->taxCategory[] = $taxCategory;
        return $this;
    }

    /**
     * isset taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxCategory($index)
    {
        return isset($this->taxCategory[$index]);
    }

    /**
     * unset taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxCategory($index)
    {
        unset($this->taxCategory[$index]);
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \UBL21\Common\CommonAggregateComponents\TaxCategory[]
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \UBL21\Common\CommonAggregateComponents\TaxCategory[] $taxCategory
     * @return self
     */
    public function setTaxCategory(array $taxCategory = null)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Allowance Charge. Tax Total
     *  The total of all the taxes applicable to this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \UBL21\Common\CommonAggregateComponents\TaxTotal
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Allowance Charge. Tax Total
     *  The total of all the taxes applicable to this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \UBL21\Common\CommonAggregateComponents\TaxTotal $taxTotal
     * @return self
     */
    public function setTaxTotal(?\UBL21\Common\CommonAggregateComponents\TaxTotal $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\PaymentMeans $paymentMeans
     */
    public function addToPaymentMeans(\UBL21\Common\CommonAggregateComponents\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans[] = $paymentMeans;
        return $this;
    }

    /**
     * isset paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMeans($index)
    {
        return isset($this->paymentMeans[$index]);
    }

    /**
     * unset paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMeans($index)
    {
        unset($this->paymentMeans[$index]);
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \UBL21\Common\CommonAggregateComponents\PaymentMeans[]
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \UBL21\Common\CommonAggregateComponents\PaymentMeans[] $paymentMeans
     * @return self
     */
    public function setPaymentMeans(array $paymentMeans = null)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }
}

