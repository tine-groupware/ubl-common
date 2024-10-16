<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing CatalogueItemSpecificationUpdateLineType
 *
 * ABIE
 *  Catalogue Item Specification Update Line. Details
 *  A class to define a line describing the transaction that updates the specification of an item in a catalogue.
 *  Catalogue Item Specification Update Line
 * XSD Type: CatalogueItemSpecificationUpdateLineType
 */
class CatalogueItemSpecificationUpdateLineType
{
    /**
     * BBIE
     *  Catalogue Item Specification Update Line. Identifier
     *  An identifier for the line to be updated in a catalogue.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract associated with the catalogue item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract associated with the catalogue item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Item
     *  The catalogue item to be updated.
     *  1
     *  Catalogue Item Specification Update Line
     *  Item
     *  Item
     *  Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Catalogue Item Specification Update Line. Identifier
     *  An identifier for the line to be updated in a catalogue.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Identifier
     *  An identifier for the line to be updated in a catalogue.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract associated with the catalogue item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The customer responsible for the contract associated with the catalogue item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract associated with the catalogue item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier responsible for the contract associated with the catalogue item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     * Gets as item
     *
     * ASBIE
     *  Catalogue Item Specification Update Line. Item
     *  The catalogue item to be updated.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Item
     *  The catalogue item to be updated.
     *  1
     *  Catalogue Item Specification Update Line
     *  Item
     *  Item
     *  Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\Item $item
     * @return self
     */
    public function setItem(\UBL21\Common\CommonAggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }
}

