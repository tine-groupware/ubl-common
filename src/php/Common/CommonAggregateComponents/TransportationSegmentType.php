<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing TransportationSegmentType
 *
 * ABIE
 *  Transportation Segment. Details
 *  A class to describe one segment or leg in a transportation service.
 *  Transportation Segment
 * XSD Type: TransportationSegmentType
 */
class TransportationSegmentType
{
    /**
     * BBIE
     *  Transportation Segment. Sequence. Numeric
     *  A number indicating the order of this segment in the sequence of transportation segments making up a transportation service.
     *  1
     *  Transportation Segment
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
     *  Transportation Segment. Transport Execution Plan Reference. Identifier
     *  An identifier for the transport execution plan governing this transportation segment.
     *  0..1
     *  Transportation Segment
     *  Transport Execution Plan Reference
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID
     */
    private $transportExecutionPlanReferenceID = null;

    /**
     * ASBIE
     *  Transportation Segment. Transportation Service
     *  The transportation service used in this transportation segment.
     *  1
     *  Transportation Segment
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @var \UBL21\Common\CommonAggregateComponents\TransportationService $transportationService
     */
    private $transportationService = null;

    /**
     * ASBIE
     *  Transportation Segment. Transport Service Provider_ Party. Party
     *  The transport service provider responsible for carrying out transportation services in this transportation segment.
     *  1
     *  Transportation Segment
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty
     */
    private $transportServiceProviderParty = null;

    /**
     * ASBIE
     *  Transportation Segment. Referenced_ Consignment. Consignment
     *  A consignment referenced in this transportation segment. Such a consignment may have different identifiers than the consignment identifiers being used in the transportation service agreed between the transport user and the transport service provider.
     *  0..1
     *  Transportation Segment
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @var \UBL21\Common\CommonAggregateComponents\ReferencedConsignment $referencedConsignment
     */
    private $referencedConsignment = null;

    /**
     * ASBIE
     *  Transportation Segment. Shipment Stage
     *  The shipment stage associated with this transportation segment.
     *  0..n
     *  Transportation Segment
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @var \UBL21\Common\CommonAggregateComponents\ShipmentStage[] $shipmentStage
     */
    private $shipmentStage = [
        
    ];

    /**
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Transportation Segment. Sequence. Numeric
     *  A number indicating the order of this segment in the sequence of transportation segments making up a transportation service.
     *  1
     *  Transportation Segment
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
     *  Transportation Segment. Sequence. Numeric
     *  A number indicating the order of this segment in the sequence of transportation segments making up a transportation service.
     *  1
     *  Transportation Segment
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @param \UBL21\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\UBL21\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as transportExecutionPlanReferenceID
     *
     * BBIE
     *  Transportation Segment. Transport Execution Plan Reference. Identifier
     *  An identifier for the transport execution plan governing this transportation segment.
     *  0..1
     *  Transportation Segment
     *  Transport Execution Plan Reference
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TransportExecutionPlanReferenceID
     */
    public function getTransportExecutionPlanReferenceID()
    {
        return $this->transportExecutionPlanReferenceID;
    }

    /**
     * Sets a new transportExecutionPlanReferenceID
     *
     * BBIE
     *  Transportation Segment. Transport Execution Plan Reference. Identifier
     *  An identifier for the transport execution plan governing this transportation segment.
     *  0..1
     *  Transportation Segment
     *  Transport Execution Plan Reference
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID
     * @return self
     */
    public function setTransportExecutionPlanReferenceID(?\UBL21\Common\CommonBasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID = null)
    {
        $this->transportExecutionPlanReferenceID = $transportExecutionPlanReferenceID;
        return $this;
    }

    /**
     * Gets as transportationService
     *
     * ASBIE
     *  Transportation Segment. Transportation Service
     *  The transportation service used in this transportation segment.
     *  1
     *  Transportation Segment
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @return \UBL21\Common\CommonAggregateComponents\TransportationService
     */
    public function getTransportationService()
    {
        return $this->transportationService;
    }

    /**
     * Sets a new transportationService
     *
     * ASBIE
     *  Transportation Segment. Transportation Service
     *  The transportation service used in this transportation segment.
     *  1
     *  Transportation Segment
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @param \UBL21\Common\CommonAggregateComponents\TransportationService $transportationService
     * @return self
     */
    public function setTransportationService(\UBL21\Common\CommonAggregateComponents\TransportationService $transportationService)
    {
        $this->transportationService = $transportationService;
        return $this;
    }

    /**
     * Gets as transportServiceProviderParty
     *
     * ASBIE
     *  Transportation Segment. Transport Service Provider_ Party. Party
     *  The transport service provider responsible for carrying out transportation services in this transportation segment.
     *  1
     *  Transportation Segment
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\TransportServiceProviderParty
     */
    public function getTransportServiceProviderParty()
    {
        return $this->transportServiceProviderParty;
    }

    /**
     * Sets a new transportServiceProviderParty
     *
     * ASBIE
     *  Transportation Segment. Transport Service Provider_ Party. Party
     *  The transport service provider responsible for carrying out transportation services in this transportation segment.
     *  1
     *  Transportation Segment
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty
     * @return self
     */
    public function setTransportServiceProviderParty(\UBL21\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty)
    {
        $this->transportServiceProviderParty = $transportServiceProviderParty;
        return $this;
    }

    /**
     * Gets as referencedConsignment
     *
     * ASBIE
     *  Transportation Segment. Referenced_ Consignment. Consignment
     *  A consignment referenced in this transportation segment. Such a consignment may have different identifiers than the consignment identifiers being used in the transportation service agreed between the transport user and the transport service provider.
     *  0..1
     *  Transportation Segment
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return \UBL21\Common\CommonAggregateComponents\ReferencedConsignment
     */
    public function getReferencedConsignment()
    {
        return $this->referencedConsignment;
    }

    /**
     * Sets a new referencedConsignment
     *
     * ASBIE
     *  Transportation Segment. Referenced_ Consignment. Consignment
     *  A consignment referenced in this transportation segment. Such a consignment may have different identifiers than the consignment identifiers being used in the transportation service agreed between the transport user and the transport service provider.
     *  0..1
     *  Transportation Segment
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param \UBL21\Common\CommonAggregateComponents\ReferencedConsignment $referencedConsignment
     * @return self
     */
    public function setReferencedConsignment(?\UBL21\Common\CommonAggregateComponents\ReferencedConsignment $referencedConsignment = null)
    {
        $this->referencedConsignment = $referencedConsignment;
        return $this;
    }

    /**
     * Adds as shipmentStage
     *
     * ASBIE
     *  Transportation Segment. Shipment Stage
     *  The shipment stage associated with this transportation segment.
     *  0..n
     *  Transportation Segment
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
     *  Transportation Segment. Shipment Stage
     *  The shipment stage associated with this transportation segment.
     *  0..n
     *  Transportation Segment
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
     *  Transportation Segment. Shipment Stage
     *  The shipment stage associated with this transportation segment.
     *  0..n
     *  Transportation Segment
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
     *  Transportation Segment. Shipment Stage
     *  The shipment stage associated with this transportation segment.
     *  0..n
     *  Transportation Segment
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
     *  Transportation Segment. Shipment Stage
     *  The shipment stage associated with this transportation segment.
     *  0..n
     *  Transportation Segment
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
}

