<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing CataloguePricingUpdateLineType
 *
 * ABIE
 *  Catalogue Pricing Update Line. Details
 *  A class to define a line describing a pricing update to a catalogue line.
 *  Catalogue Pricing Update Line
 * XSD Type: CataloguePricingUpdateLineType
 */
class CataloguePricingUpdateLineType
{
    /**
     * BBIE
     *  Catalogue Pricing Update Line. Identifier
     *  An identifier for the catalogue line to be updated.
     *  1
     *  Catalogue Pricing Update Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract associated with the catalogue line being updated.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract associated with the catalogue line being updated.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  Updated properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Pricing Update Line
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
     * Gets as iD
     *
     * BBIE
     *  Catalogue Pricing Update Line. Identifier
     *  An identifier for the catalogue line to be updated.
     *  1
     *  Catalogue Pricing Update Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
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
     *  Catalogue Pricing Update Line. Identifier
     *  An identifier for the catalogue line to be updated.
     *  1
     *  Catalogue Pricing Update Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
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
     * Gets as contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract associated with the catalogue line being updated.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract associated with the catalogue line being updated.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(?\UBL21\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty = null)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract associated with the catalogue line being updated.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract associated with the catalogue line being updated.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\UBL21\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  Updated properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  Updated properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  Updated properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  Updated properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Pricing Update Line
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
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  Updated properties of the item in this catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Pricing Update Line
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
}

