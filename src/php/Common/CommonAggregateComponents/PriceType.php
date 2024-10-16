<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing PriceType
 *
 * ABIE
 *  Price. Details
 *  A class to describe a price, expressed in a data structure containing multiple properties (compare with UnstructuredPrice).
 *  Price
 * XSD Type: PriceType
 */
class PriceType
{
    /**
     * BBIE
     *  Price. Price Amount. Amount
     *  The amount of the price.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
     *  23.45
     *
     * @var \UBL21\Common\CommonBasicComponents\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The quantity at which this price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\BaseQuantity $baseQuantity
     */
    private $baseQuantity = null;

    /**
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @var \UBL21\Common\CommonBasicComponents\PriceChangeReason[] $priceChangeReason
     */
    private $priceChangeReason = [
        
    ];

    /**
     * BBIE
     *  Price. Price Type Code. Code
     *  The type of price, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\PriceTypeCode $priceTypeCode
     */
    private $priceTypeCode = null;

    /**
     * BBIE
     *  Price. Price Type. Text
     *  The type of price, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @var \UBL21\Common\CommonBasicComponents\PriceType $priceType
     */
    private $priceType = null;

    /**
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @var \UBL21\Common\CommonBasicComponents\OrderableUnitFactorRate $orderableUnitFactorRate
     */
    private $orderableUnitFactorRate = null;

    /**
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Price. Price List
     *  Information about a price list applicable to this price.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *  Price List
     *
     * @var \UBL21\Common\CommonAggregateComponents\PriceList $priceList
     */
    private $priceList = null;

    /**
     * ASBIE
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
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
     *  Price. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate applicable to this price, if it differs from the exchange rate applicable to the document as a whole.
     *  0..1
     *  Price
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \UBL21\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate
     */
    private $pricingExchangeRate = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Price. Price Amount. Amount
     *  The amount of the price.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
     *  23.45
     *
     * @return \UBL21\Common\CommonBasicComponents\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * BBIE
     *  Price. Price Amount. Amount
     *  The amount of the price.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
     *  23.45
     *
     * @param \UBL21\Common\CommonBasicComponents\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(\UBL21\Common\CommonBasicComponents\PriceAmount $priceAmount)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * Gets as baseQuantity
     *
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The quantity at which this price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\BaseQuantity
     */
    public function getBaseQuantity()
    {
        return $this->baseQuantity;
    }

    /**
     * Sets a new baseQuantity
     *
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The quantity at which this price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\BaseQuantity $baseQuantity
     * @return self
     */
    public function setBaseQuantity(?\UBL21\Common\CommonBasicComponents\BaseQuantity $baseQuantity = null)
    {
        $this->baseQuantity = $baseQuantity;
        return $this;
    }

    /**
     * Adds as priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\PriceChangeReason $priceChangeReason
     */
    public function addToPriceChangeReason(\UBL21\Common\CommonBasicComponents\PriceChangeReason $priceChangeReason)
    {
        $this->priceChangeReason[] = $priceChangeReason;
        return $this;
    }

    /**
     * isset priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceChangeReason($index)
    {
        return isset($this->priceChangeReason[$index]);
    }

    /**
     * unset priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceChangeReason($index)
    {
        unset($this->priceChangeReason[$index]);
    }

    /**
     * Gets as priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @return \UBL21\Common\CommonBasicComponents\PriceChangeReason[]
     */
    public function getPriceChangeReason()
    {
        return $this->priceChangeReason;
    }

    /**
     * Sets a new priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @param \UBL21\Common\CommonBasicComponents\PriceChangeReason[] $priceChangeReason
     * @return self
     */
    public function setPriceChangeReason(array $priceChangeReason = null)
    {
        $this->priceChangeReason = $priceChangeReason;
        return $this;
    }

    /**
     * Gets as priceTypeCode
     *
     * BBIE
     *  Price. Price Type Code. Code
     *  The type of price, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\PriceTypeCode
     */
    public function getPriceTypeCode()
    {
        return $this->priceTypeCode;
    }

    /**
     * Sets a new priceTypeCode
     *
     * BBIE
     *  Price. Price Type Code. Code
     *  The type of price, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\PriceTypeCode $priceTypeCode
     * @return self
     */
    public function setPriceTypeCode(?\UBL21\Common\CommonBasicComponents\PriceTypeCode $priceTypeCode = null)
    {
        $this->priceTypeCode = $priceTypeCode;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * BBIE
     *  Price. Price Type. Text
     *  The type of price, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @return \UBL21\Common\CommonBasicComponents\PriceType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * BBIE
     *  Price. Price Type. Text
     *  The type of price, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @param \UBL21\Common\CommonBasicComponents\PriceType $priceType
     * @return self
     */
    public function setPriceType(?\UBL21\Common\CommonBasicComponents\PriceType $priceType = null)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as orderableUnitFactorRate
     *
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @return \UBL21\Common\CommonBasicComponents\OrderableUnitFactorRate
     */
    public function getOrderableUnitFactorRate()
    {
        return $this->orderableUnitFactorRate;
    }

    /**
     * Sets a new orderableUnitFactorRate
     *
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @param \UBL21\Common\CommonBasicComponents\OrderableUnitFactorRate $orderableUnitFactorRate
     * @return self
     */
    public function setOrderableUnitFactorRate(?\UBL21\Common\CommonBasicComponents\OrderableUnitFactorRate $orderableUnitFactorRate = null)
    {
        $this->orderableUnitFactorRate = $orderableUnitFactorRate;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\UBL21\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as priceList
     *
     * ASBIE
     *  Price. Price List
     *  Information about a price list applicable to this price.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *  Price List
     *
     * @return \UBL21\Common\CommonAggregateComponents\PriceList
     */
    public function getPriceList()
    {
        return $this->priceList;
    }

    /**
     * Sets a new priceList
     *
     * ASBIE
     *  Price. Price List
     *  Information about a price list applicable to this price.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *  Price List
     *
     * @param \UBL21\Common\CommonAggregateComponents\PriceList $priceList
     * @return self
     */
    public function setPriceList(?\UBL21\Common\CommonAggregateComponents\PriceList $priceList = null)
    {
        $this->priceList = $priceList;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
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
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
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
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
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
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
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
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
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
     * Gets as pricingExchangeRate
     *
     * ASBIE
     *  Price. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate applicable to this price, if it differs from the exchange rate applicable to the document as a whole.
     *  0..1
     *  Price
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \UBL21\Common\CommonAggregateComponents\PricingExchangeRate
     */
    public function getPricingExchangeRate()
    {
        return $this->pricingExchangeRate;
    }

    /**
     * Sets a new pricingExchangeRate
     *
     * ASBIE
     *  Price. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate applicable to this price, if it differs from the exchange rate applicable to the document as a whole.
     *  0..1
     *  Price
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \UBL21\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate
     * @return self
     */
    public function setPricingExchangeRate(?\UBL21\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate = null)
    {
        $this->pricingExchangeRate = $pricingExchangeRate;
        return $this;
    }
}

