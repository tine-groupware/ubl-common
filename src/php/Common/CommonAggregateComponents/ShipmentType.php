<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ShipmentType
 *
 * ABIE
 *  Shipment. Details
 *  A class defining an identifiable collection of one or more goods items to be transported between the seller party and the buyer party. This information may be defined within a commercial contract. A shipment can be transported in different consignments (e.g., split for logistical purposes).
 *  Shipment
 * XSD Type: ShipmentType
 */
class ShipmentType
{
    /**
     * BBIE
     *  Shipment. Identifier
     *  An identifier for this shipment.
     *  1
     *  Shipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Waybill Number
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Shipment. Shipping Priority Level Code. Code
     *  A code signifying the priority or level of service required for this shipment.
     *  0..1
     *  Shipment
     *  Shipping Priority Level Code
     *  Code
     *  Code. Type
     *  Service Level, Service Priority
     *
     * @var \UBL21\Common\CommonBasicComponents\ShippingPriorityLevelCode $shippingPriorityLevelCode
     */
    private $shippingPriorityLevelCode = null;

    /**
     * BBIE
     *  Shipment. Handling Code. Code
     *  The handling required for this shipment, expressed as a code.
     *  0..1
     *  Shipment
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @var \UBL21\Common\CommonBasicComponents\HandlingCode $handlingCode
     */
    private $handlingCode = null;

    /**
     * BBIE
     *  Shipment. Handling_ Instructions. Text
     *  The handling required for this shipment, expressed as text.
     *  0..n
     *  Shipment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\HandlingInstructions[] $handlingInstructions
     */
    private $handlingInstructions = [
        
    ];

    /**
     * BBIE
     *  Shipment. Information. Text
     *  Free-form text pertinent to this shipment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Information[] $information
     */
    private $information = [
        
    ];

    /**
     * BBIE
     *  Shipment. Gross_ Weight. Measure
     *  The total gross weight of a shipment; the weight of the goods plus packaging plus transport equipment.
     *  0..1
     *  Shipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Shipment. Net_ Weight. Measure
     *  The net weight of this shipment, excluding packaging.
     *  0..1
     *  Shipment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Shipment. Net Net_ Weight. Measure
     *  The total net weight of this shipment, excluding packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     */
    private $netNetWeightMeasure = null;

    /**
     * BBIE
     *  Shipment. Gross_ Volume. Measure
     *  The total volume of the goods in this shipment, including packaging.
     *  0..1
     *  Shipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Shipment. Net_ Volume. Measure
     *  The total volume of the goods in this shipment, excluding packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Shipment. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this shipment.
     *  0..1
     *  Shipment
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity
     */
    private $totalGoodsItemQuantity = null;

    /**
     * BBIE
     *  Shipment. Total_ Transport Handling Unit Quantity. Quantity
     *  The number of pieces of transport handling equipment (pallets, boxes, cases, etc.) in this shipment.
     *  0..1
     *  Shipment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @var \UBL21\Common\CommonBasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     */
    private $totalTransportHandlingUnitQuantity = null;

    /**
     * BBIE
     *  Shipment. Insurance_ Value. Amount
     *  The amount covered by insurance for this shipment.
     *  0..1
     *  Shipment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @var \UBL21\Common\CommonBasicComponents\InsuranceValueAmount $insuranceValueAmount
     */
    private $insuranceValueAmount = null;

    /**
     * BBIE
     *  Shipment. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of those goods in this shipment that are subject to the same customs procedure and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Shipment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     */
    private $declaredCustomsValueAmount = null;

    /**
     * BBIE
     *  Shipment. Declared For Carriage_ Value. Amount
     *  The value of this shipment, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Shipment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @var \UBL21\Common\CommonBasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     */
    private $declaredForCarriageValueAmount = null;

    /**
     * BBIE
     *  Shipment. Declared Statistics_ Value. Amount
     *  The value, declared for statistical purposes, of those goods in this shipment that have the same statistical heading.
     *  0..1
     *  Shipment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @var \UBL21\Common\CommonBasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     */
    private $declaredStatisticsValueAmount = null;

    /**
     * BBIE
     *  Shipment. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Shipment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @var \UBL21\Common\CommonBasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount
     */
    private $freeOnBoardValueAmount = null;

    /**
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\SpecialInstructions[] $specialInstructions
     */
    private $specialInstructions = [
        
    ];

    /**
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\DeliveryInstructions[] $deliveryInstructions
     */
    private $deliveryInstructions = [
        
    ];

    /**
     * BBIE
     *  Shipment. Split Consignment_ Indicator. Indicator
     *  An indicator that the consignment has been split in transit (true) or not (false).
     *  0..1
     *  Shipment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $splitConsignmentIndicator
     */
    private $splitConsignmentIndicator = null;

    /**
     * BBIE
     *  Shipment. Consignment_ Quantity. Quantity
     *  The total number of consignments within this shipment.
     *  0..1
     *  Shipment
     *  Consignment
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ConsignmentQuantity $consignmentQuantity
     */
    private $consignmentQuantity = null;

    /**
     * ASBIE
     *  Shipment. Consignment
     *  A consignment covering this shipment.
     *  0..n
     *  Shipment
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @var \UBL21\Common\CommonAggregateComponents\Consignment[] $consignment
     */
    private $consignment = [
        
    ];

    /**
     * ASBIE
     *  Shipment. Goods Item
     *  A goods item included in this shipment.
     *  0..n
     *  Shipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\GoodsItem[] $goodsItem
     */
    private $goodsItem = [
        
    ];

    /**
     * ASBIE
     *  Shipment. Shipment Stage
     *  A stage in the transport movement of this shipment.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @var \UBL21\Common\CommonAggregateComponents\ShipmentStage[] $shipmentStage
     */
    private $shipmentStage = [
        
    ];

    /**
     * ASBIE
     *  Shipment. Delivery
     *  The delivery of this shipment.
     *  0..1
     *  Shipment
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \UBL21\Common\CommonAggregateComponents\Delivery $delivery
     */
    private $delivery = null;

    /**
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  A transport handling unit associated with this shipment.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @var \UBL21\Common\CommonAggregateComponents\TransportHandlingUnit[] $transportHandlingUnit
     */
    private $transportHandlingUnit = [
        
    ];

    /**
     * ASBIE
     *  Shipment. Return_ Address. Address
     *  The address to which a shipment should be returned.
     *  0..1
     *  Shipment
     *  Return
     *  Address
     *  Address
     *  Address
     *
     * @var \UBL21\Common\CommonAggregateComponents\ReturnAddress $returnAddress
     */
    private $returnAddress = null;

    /**
     * ASBIE
     *  Shipment. Origin_ Address. Address
     *  The region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the customs tariff, or of quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Shipment
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @var \UBL21\Common\CommonAggregateComponents\OriginAddress $originAddress
     */
    private $originAddress = null;

    /**
     * ASBIE
     *  Shipment. First Arrival Port_ Location. Location
     *  The first arrival location of a shipment. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Shipment
     *  First Arrival Port
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL21\Common\CommonAggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation
     */
    private $firstArrivalPortLocation = null;

    /**
     * ASBIE
     *  Shipment. Last Exit Port_ Location. Location
     *  The final exporting location for a shipment. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Shipment
     *  Last Exit Port
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL21\Common\CommonAggregateComponents\LastExitPortLocation $lastExitPortLocation
     */
    private $lastExitPortLocation = null;

    /**
     * ASBIE
     *  Shipment. Export_ Country. Country
     *  The country from which the goods were originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Shipment
     *  Export
     *  Country
     *  Country
     *  Country
     *  Country of exportation (WCO ID 062)
     *
     * @var \UBL21\Common\CommonAggregateComponents\ExportCountry $exportCountry
     */
    private $exportCountry = null;

    /**
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @var \UBL21\Common\CommonAggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Shipment. Identifier
     *  An identifier for this shipment.
     *  1
     *  Shipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Waybill Number
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
     *  Shipment. Identifier
     *  An identifier for this shipment.
     *  1
     *  Shipment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Waybill Number
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
     * Gets as shippingPriorityLevelCode
     *
     * BBIE
     *  Shipment. Shipping Priority Level Code. Code
     *  A code signifying the priority or level of service required for this shipment.
     *  0..1
     *  Shipment
     *  Shipping Priority Level Code
     *  Code
     *  Code. Type
     *  Service Level, Service Priority
     *
     * @return \UBL21\Common\CommonBasicComponents\ShippingPriorityLevelCode
     */
    public function getShippingPriorityLevelCode()
    {
        return $this->shippingPriorityLevelCode;
    }

    /**
     * Sets a new shippingPriorityLevelCode
     *
     * BBIE
     *  Shipment. Shipping Priority Level Code. Code
     *  A code signifying the priority or level of service required for this shipment.
     *  0..1
     *  Shipment
     *  Shipping Priority Level Code
     *  Code
     *  Code. Type
     *  Service Level, Service Priority
     *
     * @param \UBL21\Common\CommonBasicComponents\ShippingPriorityLevelCode $shippingPriorityLevelCode
     * @return self
     */
    public function setShippingPriorityLevelCode(?\UBL21\Common\CommonBasicComponents\ShippingPriorityLevelCode $shippingPriorityLevelCode = null)
    {
        $this->shippingPriorityLevelCode = $shippingPriorityLevelCode;
        return $this;
    }

    /**
     * Gets as handlingCode
     *
     * BBIE
     *  Shipment. Handling Code. Code
     *  The handling required for this shipment, expressed as a code.
     *  0..1
     *  Shipment
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @return \UBL21\Common\CommonBasicComponents\HandlingCode
     */
    public function getHandlingCode()
    {
        return $this->handlingCode;
    }

    /**
     * Sets a new handlingCode
     *
     * BBIE
     *  Shipment. Handling Code. Code
     *  The handling required for this shipment, expressed as a code.
     *  0..1
     *  Shipment
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @param \UBL21\Common\CommonBasicComponents\HandlingCode $handlingCode
     * @return self
     */
    public function setHandlingCode(?\UBL21\Common\CommonBasicComponents\HandlingCode $handlingCode = null)
    {
        $this->handlingCode = $handlingCode;
        return $this;
    }

    /**
     * Adds as handlingInstructions
     *
     * BBIE
     *  Shipment. Handling_ Instructions. Text
     *  The handling required for this shipment, expressed as text.
     *  0..n
     *  Shipment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\HandlingInstructions $handlingInstructions
     */
    public function addToHandlingInstructions(\UBL21\Common\CommonBasicComponents\HandlingInstructions $handlingInstructions)
    {
        $this->handlingInstructions[] = $handlingInstructions;
        return $this;
    }

    /**
     * isset handlingInstructions
     *
     * BBIE
     *  Shipment. Handling_ Instructions. Text
     *  The handling required for this shipment, expressed as text.
     *  0..n
     *  Shipment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandlingInstructions($index)
    {
        return isset($this->handlingInstructions[$index]);
    }

    /**
     * unset handlingInstructions
     *
     * BBIE
     *  Shipment. Handling_ Instructions. Text
     *  The handling required for this shipment, expressed as text.
     *  0..n
     *  Shipment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandlingInstructions($index)
    {
        unset($this->handlingInstructions[$index]);
    }

    /**
     * Gets as handlingInstructions
     *
     * BBIE
     *  Shipment. Handling_ Instructions. Text
     *  The handling required for this shipment, expressed as text.
     *  0..n
     *  Shipment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\HandlingInstructions[]
     */
    public function getHandlingInstructions()
    {
        return $this->handlingInstructions;
    }

    /**
     * Sets a new handlingInstructions
     *
     * BBIE
     *  Shipment. Handling_ Instructions. Text
     *  The handling required for this shipment, expressed as text.
     *  0..n
     *  Shipment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\HandlingInstructions[] $handlingInstructions
     * @return self
     */
    public function setHandlingInstructions(array $handlingInstructions = null)
    {
        $this->handlingInstructions = $handlingInstructions;
        return $this;
    }

    /**
     * Adds as information
     *
     * BBIE
     *  Shipment. Information. Text
     *  Free-form text pertinent to this shipment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Information $information
     */
    public function addToInformation(\UBL21\Common\CommonBasicComponents\Information $information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * isset information
     *
     * BBIE
     *  Shipment. Information. Text
     *  Free-form text pertinent to this shipment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * BBIE
     *  Shipment. Information. Text
     *  Free-form text pertinent to this shipment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * BBIE
     *  Shipment. Information. Text
     *  Free-form text pertinent to this shipment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Information[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * BBIE
     *  Shipment. Information. Text
     *  Free-form text pertinent to this shipment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Shipment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Information[] $information
     * @return self
     */
    public function setInformation(array $information = null)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Shipment. Gross_ Weight. Measure
     *  The total gross weight of a shipment; the weight of the goods plus packaging plus transport equipment.
     *  0..1
     *  Shipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Shipment. Gross_ Weight. Measure
     *  The total gross weight of a shipment; the weight of the goods plus packaging plus transport equipment.
     *  0..1
     *  Shipment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(?\UBL21\Common\CommonBasicComponents\GrossWeightMeasure $grossWeightMeasure = null)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Shipment. Net_ Weight. Measure
     *  The net weight of this shipment, excluding packaging.
     *  0..1
     *  Shipment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Shipment. Net_ Weight. Measure
     *  The net weight of this shipment, excluding packaging.
     *  0..1
     *  Shipment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(?\UBL21\Common\CommonBasicComponents\NetWeightMeasure $netWeightMeasure = null)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netNetWeightMeasure
     *
     * BBIE
     *  Shipment. Net Net_ Weight. Measure
     *  The total net weight of this shipment, excluding packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasure()
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * Sets a new netNetWeightMeasure
     *
     * BBIE
     *  Shipment. Net Net_ Weight. Measure
     *  The total net weight of this shipment, excluding packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(?\UBL21\Common\CommonBasicComponents\NetNetWeightMeasure $netNetWeightMeasure = null)
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Shipment. Gross_ Volume. Measure
     *  The total volume of the goods in this shipment, including packaging.
     *  0..1
     *  Shipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Shipment. Gross_ Volume. Measure
     *  The total volume of the goods in this shipment, including packaging.
     *  0..1
     *  Shipment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(?\UBL21\Common\CommonBasicComponents\GrossVolumeMeasure $grossVolumeMeasure = null)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Shipment. Net_ Volume. Measure
     *  The total volume of the goods in this shipment, excluding packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Shipment. Net_ Volume. Measure
     *  The total volume of the goods in this shipment, excluding packaging and transport equipment.
     *  0..1
     *  Shipment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(?\UBL21\Common\CommonBasicComponents\NetVolumeMeasure $netVolumeMeasure = null)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as totalGoodsItemQuantity
     *
     * BBIE
     *  Shipment. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this shipment.
     *  0..1
     *  Shipment
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TotalGoodsItemQuantity
     */
    public function getTotalGoodsItemQuantity()
    {
        return $this->totalGoodsItemQuantity;
    }

    /**
     * Sets a new totalGoodsItemQuantity
     *
     * BBIE
     *  Shipment. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this shipment.
     *  0..1
     *  Shipment
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity
     * @return self
     */
    public function setTotalGoodsItemQuantity(?\UBL21\Common\CommonBasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity = null)
    {
        $this->totalGoodsItemQuantity = $totalGoodsItemQuantity;
        return $this;
    }

    /**
     * Gets as totalTransportHandlingUnitQuantity
     *
     * BBIE
     *  Shipment. Total_ Transport Handling Unit Quantity. Quantity
     *  The number of pieces of transport handling equipment (pallets, boxes, cases, etc.) in this shipment.
     *  0..1
     *  Shipment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @return \UBL21\Common\CommonBasicComponents\TotalTransportHandlingUnitQuantity
     */
    public function getTotalTransportHandlingUnitQuantity()
    {
        return $this->totalTransportHandlingUnitQuantity;
    }

    /**
     * Sets a new totalTransportHandlingUnitQuantity
     *
     * BBIE
     *  Shipment. Total_ Transport Handling Unit Quantity. Quantity
     *  The number of pieces of transport handling equipment (pallets, boxes, cases, etc.) in this shipment.
     *  0..1
     *  Shipment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @param \UBL21\Common\CommonBasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     * @return self
     */
    public function setTotalTransportHandlingUnitQuantity(?\UBL21\Common\CommonBasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity = null)
    {
        $this->totalTransportHandlingUnitQuantity = $totalTransportHandlingUnitQuantity;
        return $this;
    }

    /**
     * Gets as insuranceValueAmount
     *
     * BBIE
     *  Shipment. Insurance_ Value. Amount
     *  The amount covered by insurance for this shipment.
     *  0..1
     *  Shipment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @return \UBL21\Common\CommonBasicComponents\InsuranceValueAmount
     */
    public function getInsuranceValueAmount()
    {
        return $this->insuranceValueAmount;
    }

    /**
     * Sets a new insuranceValueAmount
     *
     * BBIE
     *  Shipment. Insurance_ Value. Amount
     *  The amount covered by insurance for this shipment.
     *  0..1
     *  Shipment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @param \UBL21\Common\CommonBasicComponents\InsuranceValueAmount $insuranceValueAmount
     * @return self
     */
    public function setInsuranceValueAmount(?\UBL21\Common\CommonBasicComponents\InsuranceValueAmount $insuranceValueAmount = null)
    {
        $this->insuranceValueAmount = $insuranceValueAmount;
        return $this;
    }

    /**
     * Gets as declaredCustomsValueAmount
     *
     * BBIE
     *  Shipment. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of those goods in this shipment that are subject to the same customs procedure and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Shipment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmount()
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * Sets a new declaredCustomsValueAmount
     *
     * BBIE
     *  Shipment. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of those goods in this shipment that are subject to the same customs procedure and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Shipment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(?\UBL21\Common\CommonBasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount = null)
    {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;
        return $this;
    }

    /**
     * Gets as declaredForCarriageValueAmount
     *
     * BBIE
     *  Shipment. Declared For Carriage_ Value. Amount
     *  The value of this shipment, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Shipment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @return \UBL21\Common\CommonBasicComponents\DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmount()
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * Sets a new declaredForCarriageValueAmount
     *
     * BBIE
     *  Shipment. Declared For Carriage_ Value. Amount
     *  The value of this shipment, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Shipment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @param \UBL21\Common\CommonBasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     * @return self
     */
    public function setDeclaredForCarriageValueAmount(?\UBL21\Common\CommonBasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount = null)
    {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;
        return $this;
    }

    /**
     * Gets as declaredStatisticsValueAmount
     *
     * BBIE
     *  Shipment. Declared Statistics_ Value. Amount
     *  The value, declared for statistical purposes, of those goods in this shipment that have the same statistical heading.
     *  0..1
     *  Shipment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @return \UBL21\Common\CommonBasicComponents\DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmount()
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * Sets a new declaredStatisticsValueAmount
     *
     * BBIE
     *  Shipment. Declared Statistics_ Value. Amount
     *  The value, declared for statistical purposes, of those goods in this shipment that have the same statistical heading.
     *  0..1
     *  Shipment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @param \UBL21\Common\CommonBasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     * @return self
     */
    public function setDeclaredStatisticsValueAmount(?\UBL21\Common\CommonBasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount = null)
    {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;
        return $this;
    }

    /**
     * Gets as freeOnBoardValueAmount
     *
     * BBIE
     *  Shipment. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Shipment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @return \UBL21\Common\CommonBasicComponents\FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmount()
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * Sets a new freeOnBoardValueAmount
     *
     * BBIE
     *  Shipment. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Shipment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @param \UBL21\Common\CommonBasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount
     * @return self
     */
    public function setFreeOnBoardValueAmount(?\UBL21\Common\CommonBasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount = null)
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;
        return $this;
    }

    /**
     * Adds as specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\SpecialInstructions $specialInstructions
     */
    public function addToSpecialInstructions(\UBL21\Common\CommonBasicComponents\SpecialInstructions $specialInstructions)
    {
        $this->specialInstructions[] = $specialInstructions;
        return $this;
    }

    /**
     * isset specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialInstructions($index)
    {
        return isset($this->specialInstructions[$index]);
    }

    /**
     * unset specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialInstructions($index)
    {
        unset($this->specialInstructions[$index]);
    }

    /**
     * Gets as specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\SpecialInstructions[]
     */
    public function getSpecialInstructions()
    {
        return $this->specialInstructions;
    }

    /**
     * Sets a new specialInstructions
     *
     * BBIE
     *  Shipment. Special_ Instructions. Text
     *  Special instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\SpecialInstructions[] $specialInstructions
     * @return self
     */
    public function setSpecialInstructions(array $specialInstructions = null)
    {
        $this->specialInstructions = $specialInstructions;
        return $this;
    }

    /**
     * Adds as deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\DeliveryInstructions $deliveryInstructions
     */
    public function addToDeliveryInstructions(\UBL21\Common\CommonBasicComponents\DeliveryInstructions $deliveryInstructions)
    {
        $this->deliveryInstructions[] = $deliveryInstructions;
        return $this;
    }

    /**
     * isset deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryInstructions($index)
    {
        return isset($this->deliveryInstructions[$index]);
    }

    /**
     * unset deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryInstructions($index)
    {
        unset($this->deliveryInstructions[$index]);
    }

    /**
     * Gets as deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\DeliveryInstructions[]
     */
    public function getDeliveryInstructions()
    {
        return $this->deliveryInstructions;
    }

    /**
     * Sets a new deliveryInstructions
     *
     * BBIE
     *  Shipment. Delivery_ Instructions. Text
     *  Delivery instructions relating to this shipment.
     *  0..n
     *  Shipment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\DeliveryInstructions[] $deliveryInstructions
     * @return self
     */
    public function setDeliveryInstructions(array $deliveryInstructions = null)
    {
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }

    /**
     * Gets as splitConsignmentIndicator
     *
     * BBIE
     *  Shipment. Split Consignment_ Indicator. Indicator
     *  An indicator that the consignment has been split in transit (true) or not (false).
     *  0..1
     *  Shipment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSplitConsignmentIndicator()
    {
        return $this->splitConsignmentIndicator;
    }

    /**
     * Sets a new splitConsignmentIndicator
     *
     * BBIE
     *  Shipment. Split Consignment_ Indicator. Indicator
     *  An indicator that the consignment has been split in transit (true) or not (false).
     *  0..1
     *  Shipment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $splitConsignmentIndicator
     * @return self
     */
    public function setSplitConsignmentIndicator($splitConsignmentIndicator)
    {
        $this->splitConsignmentIndicator = $splitConsignmentIndicator;
        return $this;
    }

    /**
     * Gets as consignmentQuantity
     *
     * BBIE
     *  Shipment. Consignment_ Quantity. Quantity
     *  The total number of consignments within this shipment.
     *  0..1
     *  Shipment
     *  Consignment
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ConsignmentQuantity
     */
    public function getConsignmentQuantity()
    {
        return $this->consignmentQuantity;
    }

    /**
     * Sets a new consignmentQuantity
     *
     * BBIE
     *  Shipment. Consignment_ Quantity. Quantity
     *  The total number of consignments within this shipment.
     *  0..1
     *  Shipment
     *  Consignment
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ConsignmentQuantity $consignmentQuantity
     * @return self
     */
    public function setConsignmentQuantity(?\UBL21\Common\CommonBasicComponents\ConsignmentQuantity $consignmentQuantity = null)
    {
        $this->consignmentQuantity = $consignmentQuantity;
        return $this;
    }

    /**
     * Adds as consignment
     *
     * ASBIE
     *  Shipment. Consignment
     *  A consignment covering this shipment.
     *  0..n
     *  Shipment
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Consignment $consignment
     */
    public function addToConsignment(\UBL21\Common\CommonAggregateComponents\Consignment $consignment)
    {
        $this->consignment[] = $consignment;
        return $this;
    }

    /**
     * isset consignment
     *
     * ASBIE
     *  Shipment. Consignment
     *  A consignment covering this shipment.
     *  0..n
     *  Shipment
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsignment($index)
    {
        return isset($this->consignment[$index]);
    }

    /**
     * unset consignment
     *
     * ASBIE
     *  Shipment. Consignment
     *  A consignment covering this shipment.
     *  0..n
     *  Shipment
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsignment($index)
    {
        unset($this->consignment[$index]);
    }

    /**
     * Gets as consignment
     *
     * ASBIE
     *  Shipment. Consignment
     *  A consignment covering this shipment.
     *  0..n
     *  Shipment
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return \UBL21\Common\CommonAggregateComponents\Consignment[]
     */
    public function getConsignment()
    {
        return $this->consignment;
    }

    /**
     * Sets a new consignment
     *
     * ASBIE
     *  Shipment. Consignment
     *  A consignment covering this shipment.
     *  0..n
     *  Shipment
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param \UBL21\Common\CommonAggregateComponents\Consignment[] $consignment
     * @return self
     */
    public function setConsignment(array $consignment = null)
    {
        $this->consignment = $consignment;
        return $this;
    }

    /**
     * Adds as goodsItem
     *
     * ASBIE
     *  Shipment. Goods Item
     *  A goods item included in this shipment.
     *  0..n
     *  Shipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\GoodsItem $goodsItem
     */
    public function addToGoodsItem(\UBL21\Common\CommonAggregateComponents\GoodsItem $goodsItem)
    {
        $this->goodsItem[] = $goodsItem;
        return $this;
    }

    /**
     * isset goodsItem
     *
     * ASBIE
     *  Shipment. Goods Item
     *  A goods item included in this shipment.
     *  0..n
     *  Shipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItem($index)
    {
        return isset($this->goodsItem[$index]);
    }

    /**
     * unset goodsItem
     *
     * ASBIE
     *  Shipment. Goods Item
     *  A goods item included in this shipment.
     *  0..n
     *  Shipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItem($index)
    {
        unset($this->goodsItem[$index]);
    }

    /**
     * Gets as goodsItem
     *
     * ASBIE
     *  Shipment. Goods Item
     *  A goods item included in this shipment.
     *  0..n
     *  Shipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\GoodsItem[]
     */
    public function getGoodsItem()
    {
        return $this->goodsItem;
    }

    /**
     * Sets a new goodsItem
     *
     * ASBIE
     *  Shipment. Goods Item
     *  A goods item included in this shipment.
     *  0..n
     *  Shipment
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\GoodsItem[] $goodsItem
     * @return self
     */
    public function setGoodsItem(array $goodsItem = null)
    {
        $this->goodsItem = $goodsItem;
        return $this;
    }

    /**
     * Adds as shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  A stage in the transport movement of this shipment.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ShipmentStage $shipmentStage
     */
    public function addToShipmentStage(\UBL21\Common\CommonAggregateComponents\ShipmentStage $shipmentStage)
    {
        $this->shipmentStage[] = $shipmentStage;
        return $this;
    }

    /**
     * isset shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  A stage in the transport movement of this shipment.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentStage($index)
    {
        return isset($this->shipmentStage[$index]);
    }

    /**
     * unset shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  A stage in the transport movement of this shipment.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentStage($index)
    {
        unset($this->shipmentStage[$index]);
    }

    /**
     * Gets as shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  A stage in the transport movement of this shipment.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return \UBL21\Common\CommonAggregateComponents\ShipmentStage[]
     */
    public function getShipmentStage()
    {
        return $this->shipmentStage;
    }

    /**
     * Sets a new shipmentStage
     *
     * ASBIE
     *  Shipment. Shipment Stage
     *  A stage in the transport movement of this shipment.
     *  0..n
     *  Shipment
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param \UBL21\Common\CommonAggregateComponents\ShipmentStage[] $shipmentStage
     * @return self
     */
    public function setShipmentStage(array $shipmentStage = null)
    {
        $this->shipmentStage = $shipmentStage;
        return $this;
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Shipment. Delivery
     *  The delivery of this shipment.
     *  0..1
     *  Shipment
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \UBL21\Common\CommonAggregateComponents\Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Shipment. Delivery
     *  The delivery of this shipment.
     *  0..1
     *  Shipment
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \UBL21\Common\CommonAggregateComponents\Delivery $delivery
     * @return self
     */
    public function setDelivery(?\UBL21\Common\CommonAggregateComponents\Delivery $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  A transport handling unit associated with this shipment.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\TransportHandlingUnit $transportHandlingUnit
     */
    public function addToTransportHandlingUnit(\UBL21\Common\CommonAggregateComponents\TransportHandlingUnit $transportHandlingUnit)
    {
        $this->transportHandlingUnit[] = $transportHandlingUnit;
        return $this;
    }

    /**
     * isset transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  A transport handling unit associated with this shipment.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportHandlingUnit($index)
    {
        return isset($this->transportHandlingUnit[$index]);
    }

    /**
     * unset transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  A transport handling unit associated with this shipment.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportHandlingUnit($index)
    {
        unset($this->transportHandlingUnit[$index]);
    }

    /**
     * Gets as transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  A transport handling unit associated with this shipment.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @return \UBL21\Common\CommonAggregateComponents\TransportHandlingUnit[]
     */
    public function getTransportHandlingUnit()
    {
        return $this->transportHandlingUnit;
    }

    /**
     * Sets a new transportHandlingUnit
     *
     * ASBIE
     *  Shipment. Transport Handling Unit
     *  A transport handling unit associated with this shipment.
     *  0..n
     *  Shipment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param \UBL21\Common\CommonAggregateComponents\TransportHandlingUnit[] $transportHandlingUnit
     * @return self
     */
    public function setTransportHandlingUnit(array $transportHandlingUnit = null)
    {
        $this->transportHandlingUnit = $transportHandlingUnit;
        return $this;
    }

    /**
     * Gets as returnAddress
     *
     * ASBIE
     *  Shipment. Return_ Address. Address
     *  The address to which a shipment should be returned.
     *  0..1
     *  Shipment
     *  Return
     *  Address
     *  Address
     *  Address
     *
     * @return \UBL21\Common\CommonAggregateComponents\ReturnAddress
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }

    /**
     * Sets a new returnAddress
     *
     * ASBIE
     *  Shipment. Return_ Address. Address
     *  The address to which a shipment should be returned.
     *  0..1
     *  Shipment
     *  Return
     *  Address
     *  Address
     *  Address
     *
     * @param \UBL21\Common\CommonAggregateComponents\ReturnAddress $returnAddress
     * @return self
     */
    public function setReturnAddress(?\UBL21\Common\CommonAggregateComponents\ReturnAddress $returnAddress = null)
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }

    /**
     * Gets as originAddress
     *
     * ASBIE
     *  Shipment. Origin_ Address. Address
     *  The region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the customs tariff, or of quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Shipment
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @return \UBL21\Common\CommonAggregateComponents\OriginAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * Sets a new originAddress
     *
     * ASBIE
     *  Shipment. Origin_ Address. Address
     *  The region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the customs tariff, or of quantitative restrictions, or of any other measure related to trade.
     *  0..1
     *  Shipment
     *  Origin
     *  Address
     *  Address
     *  Address
     *
     * @param \UBL21\Common\CommonAggregateComponents\OriginAddress $originAddress
     * @return self
     */
    public function setOriginAddress(?\UBL21\Common\CommonAggregateComponents\OriginAddress $originAddress = null)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * Gets as firstArrivalPortLocation
     *
     * ASBIE
     *  Shipment. First Arrival Port_ Location. Location
     *  The first arrival location of a shipment. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Shipment
     *  First Arrival Port
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL21\Common\CommonAggregateComponents\FirstArrivalPortLocation
     */
    public function getFirstArrivalPortLocation()
    {
        return $this->firstArrivalPortLocation;
    }

    /**
     * Sets a new firstArrivalPortLocation
     *
     * ASBIE
     *  Shipment. First Arrival Port_ Location. Location
     *  The first arrival location of a shipment. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Shipment
     *  First Arrival Port
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL21\Common\CommonAggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation
     * @return self
     */
    public function setFirstArrivalPortLocation(?\UBL21\Common\CommonAggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation = null)
    {
        $this->firstArrivalPortLocation = $firstArrivalPortLocation;
        return $this;
    }

    /**
     * Gets as lastExitPortLocation
     *
     * ASBIE
     *  Shipment. Last Exit Port_ Location. Location
     *  The final exporting location for a shipment. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Shipment
     *  Last Exit Port
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL21\Common\CommonAggregateComponents\LastExitPortLocation
     */
    public function getLastExitPortLocation()
    {
        return $this->lastExitPortLocation;
    }

    /**
     * Sets a new lastExitPortLocation
     *
     * ASBIE
     *  Shipment. Last Exit Port_ Location. Location
     *  The final exporting location for a shipment. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Shipment
     *  Last Exit Port
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL21\Common\CommonAggregateComponents\LastExitPortLocation $lastExitPortLocation
     * @return self
     */
    public function setLastExitPortLocation(?\UBL21\Common\CommonAggregateComponents\LastExitPortLocation $lastExitPortLocation = null)
    {
        $this->lastExitPortLocation = $lastExitPortLocation;
        return $this;
    }

    /**
     * Gets as exportCountry
     *
     * ASBIE
     *  Shipment. Export_ Country. Country
     *  The country from which the goods were originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Shipment
     *  Export
     *  Country
     *  Country
     *  Country
     *  Country of exportation (WCO ID 062)
     *
     * @return \UBL21\Common\CommonAggregateComponents\ExportCountry
     */
    public function getExportCountry()
    {
        return $this->exportCountry;
    }

    /**
     * Sets a new exportCountry
     *
     * ASBIE
     *  Shipment. Export_ Country. Country
     *  The country from which the goods were originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Shipment
     *  Export
     *  Country
     *  Country
     *  Country
     *  Country of exportation (WCO ID 062)
     *
     * @param \UBL21\Common\CommonAggregateComponents\ExportCountry $exportCountry
     * @return self
     */
    public function setExportCountry(?\UBL21\Common\CommonAggregateComponents\ExportCountry $exportCountry = null)
    {
        $this->exportCountry = $exportCountry;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\UBL21\Common\CommonAggregateComponents\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @return \UBL21\Common\CommonAggregateComponents\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * ASBIE
     *  Shipment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Shipment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param \UBL21\Common\CommonAggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(array $freightAllowanceCharge = null)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }
}

