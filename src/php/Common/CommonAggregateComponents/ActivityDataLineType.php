<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ActivityDataLineType
 *
 * ABIE
 *  Activity Data Line. Details
 *  A class to associate a time period and locations (activity data) with an item for inventory planning purposes.
 *  Activity Data Line
 * XSD Type: ActivityDataLineType
 */
class ActivityDataLineType
{
    /**
     * BBIE
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
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
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod
     */
    private $activityPeriod = null;

    /**
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL21\Common\CommonAggregateComponents\ActivityOriginLocation $activityOriginLocation
     */
    private $activityOriginLocation = null;

    /**
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL21\Common\CommonAggregateComponents\ActivityFinalLocation $activityFinalLocation
     */
    private $activityFinalLocation = null;

    /**
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\SalesItem[] $salesItem
     */
    private $salesItem = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
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
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
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
     * Gets as supplyChainActivityTypeCode
     *
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCode()
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * Sets a new supplyChainActivityTypeCode
     *
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(\UBL21\Common\CommonBasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\UBL21\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
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
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
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
     * Gets as activityPeriod
     *
     * ASBIE
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\ActivityPeriod
     */
    public function getActivityPeriod()
    {
        return $this->activityPeriod;
    }

    /**
     * Sets a new activityPeriod
     *
     * ASBIE
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod
     * @return self
     */
    public function setActivityPeriod(?\UBL21\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod = null)
    {
        $this->activityPeriod = $activityPeriod;
        return $this;
    }

    /**
     * Gets as activityOriginLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL21\Common\CommonAggregateComponents\ActivityOriginLocation
     */
    public function getActivityOriginLocation()
    {
        return $this->activityOriginLocation;
    }

    /**
     * Sets a new activityOriginLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL21\Common\CommonAggregateComponents\ActivityOriginLocation $activityOriginLocation
     * @return self
     */
    public function setActivityOriginLocation(\UBL21\Common\CommonAggregateComponents\ActivityOriginLocation $activityOriginLocation)
    {
        $this->activityOriginLocation = $activityOriginLocation;
        return $this;
    }

    /**
     * Gets as activityFinalLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL21\Common\CommonAggregateComponents\ActivityFinalLocation
     */
    public function getActivityFinalLocation()
    {
        return $this->activityFinalLocation;
    }

    /**
     * Sets a new activityFinalLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL21\Common\CommonAggregateComponents\ActivityFinalLocation $activityFinalLocation
     * @return self
     */
    public function setActivityFinalLocation(?\UBL21\Common\CommonAggregateComponents\ActivityFinalLocation $activityFinalLocation = null)
    {
        $this->activityFinalLocation = $activityFinalLocation;
        return $this;
    }

    /**
     * Adds as salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\SalesItem $salesItem
     */
    public function addToSalesItem(\UBL21\Common\CommonAggregateComponents\SalesItem $salesItem)
    {
        $this->salesItem[] = $salesItem;
        return $this;
    }

    /**
     * isset salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesItem($index)
    {
        return isset($this->salesItem[$index]);
    }

    /**
     * unset salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesItem($index)
    {
        unset($this->salesItem[$index]);
    }

    /**
     * Gets as salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\SalesItem[]
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\SalesItem[] $salesItem
     * @return self
     */
    public function setSalesItem(array $salesItem)
    {
        $this->salesItem = $salesItem;
        return $this;
    }
}

