<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing EnergyTaxReportType
 *
 * ABIE
 *  Energy Tax Report. Details
 *  A class to describe energy taxes.
 *  Energy Tax Report
 * XSD Type: EnergyTaxReportType
 */
class EnergyTaxReportType
{
    /**
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @var \UBL21\Common\CommonBasicComponents\TaxEnergyAmount $taxEnergyAmount
     */
    private $taxEnergyAmount = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @var \UBL21\Common\CommonBasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     */
    private $taxEnergyOnAccountAmount = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @var \UBL21\Common\CommonBasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     */
    private $taxEnergyBalanceAmount = null;

    /**
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \UBL21\Common\CommonAggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as taxEnergyAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @return \UBL21\Common\CommonBasicComponents\TaxEnergyAmount
     */
    public function getTaxEnergyAmount()
    {
        return $this->taxEnergyAmount;
    }

    /**
     * Sets a new taxEnergyAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @param \UBL21\Common\CommonBasicComponents\TaxEnergyAmount $taxEnergyAmount
     * @return self
     */
    public function setTaxEnergyAmount(?\UBL21\Common\CommonBasicComponents\TaxEnergyAmount $taxEnergyAmount = null)
    {
        $this->taxEnergyAmount = $taxEnergyAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyOnAccountAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @return \UBL21\Common\CommonBasicComponents\TaxEnergyOnAccountAmount
     */
    public function getTaxEnergyOnAccountAmount()
    {
        return $this->taxEnergyOnAccountAmount;
    }

    /**
     * Sets a new taxEnergyOnAccountAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @param \UBL21\Common\CommonBasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     * @return self
     */
    public function setTaxEnergyOnAccountAmount(?\UBL21\Common\CommonBasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount = null)
    {
        $this->taxEnergyOnAccountAmount = $taxEnergyOnAccountAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyBalanceAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @return \UBL21\Common\CommonBasicComponents\TaxEnergyBalanceAmount
     */
    public function getTaxEnergyBalanceAmount()
    {
        return $this->taxEnergyBalanceAmount;
    }

    /**
     * Sets a new taxEnergyBalanceAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @param \UBL21\Common\CommonBasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     * @return self
     */
    public function setTaxEnergyBalanceAmount(?\UBL21\Common\CommonBasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount = null)
    {
        $this->taxEnergyBalanceAmount = $taxEnergyBalanceAmount;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \UBL21\Common\CommonAggregateComponents\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \UBL21\Common\CommonAggregateComponents\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\UBL21\Common\CommonAggregateComponents\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }
}

