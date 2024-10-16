<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing TaxSubtotalType
 *
 * ABIE
 *  Tax Subtotal. Details
 *  A class to define the subtotal for a particular tax category within a particular taxation scheme, such as standard rate within VAT.
 *  Tax Subtotal
 * XSD Type: TaxSubtotalType
 */
class TaxSubtotalType
{
    /**
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TaxableAmount $taxableAmount
     */
    private $taxableAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of this tax subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TaxAmount $taxAmount
     */
    private $taxAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  The number of this tax subtotal in the sequence of subtotals corresponding to the order in which multiple taxes are applied. If all taxes are applied to the same taxable amount (i.e., their order of application is inconsequential), then CalculationSequenceNumeric is 1 for all tax subtotals applied to a given amount.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\CalculationSequenceNumeric $calculationSequenceNumeric
     */
    private $calculationSequenceNumeric = null;

    /**
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The amount of this tax subtotal, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount
     */
    private $transactionCurrencyTaxAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate of the tax category applied to this tax subtotal, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Percent $percent
     */
    private $percent = null;

    /**
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  The unit of measure on which the tax calculation is based
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\BaseUnitMeasure $baseUnitMeasure
     */
    private $baseUnitMeasure = null;

    /**
     * BBIE
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TierRange $tierRange
     */
    private $tierRange = null;

    /**
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within a specified range of taxable amounts for this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TierRatePercent $tierRatePercent
     */
    private $tierRatePercent = null;

    /**
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  The tax category applicable to this subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \UBL21\Common\CommonAggregateComponents\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * Gets as taxableAmount
     *
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TaxableAmount
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * Sets a new taxableAmount
     *
     * BBIE
     *  Tax Subtotal. Taxable_ Amount. Amount
     *  The net amount to which the tax percent (rate) is applied to calculate the tax amount.
     *  0..1
     *  Tax Subtotal
     *  Taxable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TaxableAmount $taxableAmount
     * @return self
     */
    public function setTaxableAmount(?\UBL21\Common\CommonBasicComponents\TaxableAmount $taxableAmount = null)
    {
        $this->taxableAmount = $taxableAmount;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of this tax subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TaxAmount
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * BBIE
     *  Tax Subtotal. Tax Amount. Amount
     *  The amount of this tax subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TaxAmount $taxAmount
     * @return self
     */
    public function setTaxAmount(\UBL21\Common\CommonBasicComponents\TaxAmount $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as calculationSequenceNumeric
     *
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  The number of this tax subtotal in the sequence of subtotals corresponding to the order in which multiple taxes are applied. If all taxes are applied to the same taxable amount (i.e., their order of application is inconsequential), then CalculationSequenceNumeric is 1 for all tax subtotals applied to a given amount.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\CalculationSequenceNumeric
     */
    public function getCalculationSequenceNumeric()
    {
        return $this->calculationSequenceNumeric;
    }

    /**
     * Sets a new calculationSequenceNumeric
     *
     * BBIE
     *  Tax Subtotal. Calculation Sequence. Numeric
     *  The number of this tax subtotal in the sequence of subtotals corresponding to the order in which multiple taxes are applied. If all taxes are applied to the same taxable amount (i.e., their order of application is inconsequential), then CalculationSequenceNumeric is 1 for all tax subtotals applied to a given amount.
     *  0..1
     *  Tax Subtotal
     *  Calculation Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\CalculationSequenceNumeric $calculationSequenceNumeric
     * @return self
     */
    public function setCalculationSequenceNumeric(?\UBL21\Common\CommonBasicComponents\CalculationSequenceNumeric $calculationSequenceNumeric = null)
    {
        $this->calculationSequenceNumeric = $calculationSequenceNumeric;
        return $this;
    }

    /**
     * Gets as transactionCurrencyTaxAmount
     *
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The amount of this tax subtotal, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TransactionCurrencyTaxAmount
     */
    public function getTransactionCurrencyTaxAmount()
    {
        return $this->transactionCurrencyTaxAmount;
    }

    /**
     * Sets a new transactionCurrencyTaxAmount
     *
     * BBIE
     *  Tax Subtotal. Transaction Currency_ Tax Amount. Amount
     *  The amount of this tax subtotal, expressed in the currency used for invoicing.
     *  0..1
     *  Tax Subtotal
     *  Transaction Currency
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount
     * @return self
     */
    public function setTransactionCurrencyTaxAmount(?\UBL21\Common\CommonBasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount = null)
    {
        $this->transactionCurrencyTaxAmount = $transactionCurrencyTaxAmount;
        return $this;
    }

    /**
     * Gets as percent
     *
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate of the tax category applied to this tax subtotal, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Tax Subtotal. Percent
     *  The tax rate of the tax category applied to this tax subtotal, expressed as a percentage.
     *  0..1
     *  Tax Subtotal
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Percent $percent
     * @return self
     */
    public function setPercent(?\UBL21\Common\CommonBasicComponents\Percent $percent = null)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as baseUnitMeasure
     *
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  The unit of measure on which the tax calculation is based
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\BaseUnitMeasure
     */
    public function getBaseUnitMeasure()
    {
        return $this->baseUnitMeasure;
    }

    /**
     * Sets a new baseUnitMeasure
     *
     * BBIE
     *  Tax Subtotal. Base Unit Measure. Measure
     *  The unit of measure on which the tax calculation is based
     *  0..1
     *  Tax Subtotal
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\BaseUnitMeasure $baseUnitMeasure
     * @return self
     */
    public function setBaseUnitMeasure(?\UBL21\Common\CommonBasicComponents\BaseUnitMeasure $baseUnitMeasure = null)
    {
        $this->baseUnitMeasure = $baseUnitMeasure;
        return $this;
    }

    /**
     * Gets as perUnitAmount
     *
     * BBIE
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
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
     *  Tax Subtotal. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Subtotal
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
     * Gets as tierRange
     *
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TierRange
     */
    public function getTierRange()
    {
        return $this->tierRange;
    }

    /**
     * Sets a new tierRange
     *
     * BBIE
     *  Tax Subtotal. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TierRange $tierRange
     * @return self
     */
    public function setTierRange(?\UBL21\Common\CommonBasicComponents\TierRange $tierRange = null)
    {
        $this->tierRange = $tierRange;
        return $this;
    }

    /**
     * Gets as tierRatePercent
     *
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within a specified range of taxable amounts for this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TierRatePercent
     */
    public function getTierRatePercent()
    {
        return $this->tierRatePercent;
    }

    /**
     * Sets a new tierRatePercent
     *
     * BBIE
     *  Tax Subtotal. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within a specified range of taxable amounts for this tax subtotal.
     *  0..1
     *  Tax Subtotal
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TierRatePercent $tierRatePercent
     * @return self
     */
    public function setTierRatePercent(?\UBL21\Common\CommonBasicComponents\TierRatePercent $tierRatePercent = null)
    {
        $this->tierRatePercent = $tierRatePercent;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  The tax category applicable to this subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \UBL21\Common\CommonAggregateComponents\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Tax Subtotal. Tax Category
     *  The tax category applicable to this subtotal.
     *  1
     *  Tax Subtotal
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \UBL21\Common\CommonAggregateComponents\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(\UBL21\Common\CommonAggregateComponents\TaxCategory $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }
}

