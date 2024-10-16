<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing PriceExtensionType
 *
 * ABIE
 *  Price Extension. Details
 *  A class to describe a price extension, calculated by multiplying the price per unit by the quantity of items.
 *  Price Extension
 * XSD Type: PriceExtensionType
 */
class PriceExtensionType
{
    /**
     * BBIE
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \UBL21\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * Gets as amount
     *
     * BBIE
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
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
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
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
     * Adds as taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
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
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
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
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
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
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
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
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
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
}

