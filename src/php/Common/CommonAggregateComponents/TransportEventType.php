<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing TransportEventType
 *
 * ABIE
 *  Transport Event. Details
 *  A class to describe a significant occurrence or happening related to the transportation of goods.
 *  Transport Event
 * XSD Type: TransportEventType
 */
class TransportEventType
{
    /**
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for this transport event within an agreed event identification scheme.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\IdentificationID $identificationID
     */
    private $identificationID = null;

    /**
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $occurrenceDate
     */
    private $occurrenceDate = null;

    /**
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $occurrenceTime
     */
    private $occurrenceTime = null;

    /**
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code signifying the type of this transport event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TransportEventTypeCode $transportEventTypeCode
     */
    private $transportEventTypeCode = null;

    /**
     * BBIE
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Transport Event. Completion_ Indicator. Indicator
     *  An indicator that this transport event has been completed (true) or not (false).
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $completionIndicator
     */
    private $completionIndicator = null;

    /**
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  The shipment involved in this transport event.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \UBL21\Common\CommonAggregateComponents\ReportedShipment $reportedShipment
     */
    private $reportedShipment = null;

    /**
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @var \UBL21\Common\CommonAggregateComponents\CurrentStatus[] $currentStatus
     */
    private $currentStatus = [
        
    ];

    /**
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \UBL21\Common\CommonAggregateComponents\Contact[] $contact
     */
    private $contact = [
        
    ];

    /**
     * ASBIE
     *  Transport Event. Location
     *  The location associated with this transport event.
     *  0..1
     *  Transport Event
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL21\Common\CommonAggregateComponents\Location $location
     */
    private $location = null;

    /**
     * ASBIE
     *  Transport Event. Signature
     *  A signature that can be used to sign for an entry or an exit at a transport location (e.g., port terminal).
     *  0..1
     *  Transport Event
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \UBL21\Common\CommonAggregateComponents\Signature $signature
     */
    private $signature = null;

    /**
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\Period[] $period
     */
    private $period = [
        
    ];

    /**
     * Gets as identificationID
     *
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for this transport event within an agreed event identification scheme.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\IdentificationID
     */
    public function getIdentificationID()
    {
        return $this->identificationID;
    }

    /**
     * Sets a new identificationID
     *
     * BBIE
     *  Transport Event. Identification. Identifier
     *  An identifier for this transport event within an agreed event identification scheme.
     *  0..1
     *  Transport Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\IdentificationID $identificationID
     * @return self
     */
    public function setIdentificationID(?\UBL21\Common\CommonBasicComponents\IdentificationID $identificationID = null)
    {
        $this->identificationID = $identificationID;
        return $this;
    }

    /**
     * Gets as occurrenceDate
     *
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getOccurrenceDate()
    {
        return $this->occurrenceDate;
    }

    /**
     * Sets a new occurrenceDate
     *
     * BBIE
     *  Transport Event. Occurrence Date. Date
     *  The date of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $occurrenceDate
     * @return self
     */
    public function setOccurrenceDate(\DateTime $occurrenceDate = null)
    {
        $this->occurrenceDate = $occurrenceDate;
        return $this;
    }

    /**
     * Gets as occurrenceTime
     *
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getOccurrenceTime()
    {
        return $this->occurrenceTime;
    }

    /**
     * Sets a new occurrenceTime
     *
     * BBIE
     *  Transport Event. Occurrence Time. Time
     *  The time of this transport event.
     *  0..1
     *  Transport Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $occurrenceTime
     * @return self
     */
    public function setOccurrenceTime(\DateTime $occurrenceTime = null)
    {
        $this->occurrenceTime = $occurrenceTime;
        return $this;
    }

    /**
     * Gets as transportEventTypeCode
     *
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code signifying the type of this transport event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TransportEventTypeCode
     */
    public function getTransportEventTypeCode()
    {
        return $this->transportEventTypeCode;
    }

    /**
     * Sets a new transportEventTypeCode
     *
     * BBIE
     *  Transport Event. Transport Event Type Code. Code
     *  A code signifying the type of this transport event.
     *  0..1
     *  Transport Event
     *  Transport Event Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TransportEventTypeCode $transportEventTypeCode
     * @return self
     */
    public function setTransportEventTypeCode(?\UBL21\Common\CommonBasicComponents\TransportEventTypeCode $transportEventTypeCode = null)
    {
        $this->transportEventTypeCode = $transportEventTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\UBL21\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Transport Event. Description. Text
     *  Text describing this transport event.
     *  0..n
     *  Transport Event
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as completionIndicator
     *
     * BBIE
     *  Transport Event. Completion_ Indicator. Indicator
     *  An indicator that this transport event has been completed (true) or not (false).
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCompletionIndicator()
    {
        return $this->completionIndicator;
    }

    /**
     * Sets a new completionIndicator
     *
     * BBIE
     *  Transport Event. Completion_ Indicator. Indicator
     *  An indicator that this transport event has been completed (true) or not (false).
     *  0..1
     *  Transport Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $completionIndicator
     * @return self
     */
    public function setCompletionIndicator($completionIndicator)
    {
        $this->completionIndicator = $completionIndicator;
        return $this;
    }

    /**
     * Gets as reportedShipment
     *
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  The shipment involved in this transport event.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \UBL21\Common\CommonAggregateComponents\ReportedShipment
     */
    public function getReportedShipment()
    {
        return $this->reportedShipment;
    }

    /**
     * Sets a new reportedShipment
     *
     * ASBIE
     *  Transport Event. Reported_ Shipment. Shipment
     *  The shipment involved in this transport event.
     *  0..1
     *  Transport Event
     *  Reported
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \UBL21\Common\CommonAggregateComponents\ReportedShipment $reportedShipment
     * @return self
     */
    public function setReportedShipment(?\UBL21\Common\CommonAggregateComponents\ReportedShipment $reportedShipment = null)
    {
        $this->reportedShipment = $reportedShipment;
        return $this;
    }

    /**
     * Adds as currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\CurrentStatus $currentStatus
     */
    public function addToCurrentStatus(\UBL21\Common\CommonAggregateComponents\CurrentStatus $currentStatus)
    {
        $this->currentStatus[] = $currentStatus;
        return $this;
    }

    /**
     * isset currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrentStatus($index)
    {
        return isset($this->currentStatus[$index]);
    }

    /**
     * unset currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrentStatus($index)
    {
        unset($this->currentStatus[$index]);
    }

    /**
     * Gets as currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @return \UBL21\Common\CommonAggregateComponents\CurrentStatus[]
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * Sets a new currentStatus
     *
     * ASBIE
     *  Transport Event. Current_ Status. Status
     *  The current status of this transport event.
     *  0..n
     *  Transport Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param \UBL21\Common\CommonAggregateComponents\CurrentStatus[] $currentStatus
     * @return self
     */
    public function setCurrentStatus(array $currentStatus = null)
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }

    /**
     * Adds as contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Contact $contact
     */
    public function addToContact(\UBL21\Common\CommonAggregateComponents\Contact $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \UBL21\Common\CommonAggregateComponents\Contact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Transport Event. Contact
     *  A contact associated with this transport event.
     *  0..n
     *  Transport Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \UBL21\Common\CommonAggregateComponents\Contact[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as location
     *
     * ASBIE
     *  Transport Event. Location
     *  The location associated with this transport event.
     *  0..1
     *  Transport Event
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL21\Common\CommonAggregateComponents\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * ASBIE
     *  Transport Event. Location
     *  The location associated with this transport event.
     *  0..1
     *  Transport Event
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL21\Common\CommonAggregateComponents\Location $location
     * @return self
     */
    public function setLocation(?\UBL21\Common\CommonAggregateComponents\Location $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Transport Event. Signature
     *  A signature that can be used to sign for an entry or an exit at a transport location (e.g., port terminal).
     *  0..1
     *  Transport Event
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \UBL21\Common\CommonAggregateComponents\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Transport Event. Signature
     *  A signature that can be used to sign for an entry or an exit at a transport location (e.g., port terminal).
     *  0..1
     *  Transport Event
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \UBL21\Common\CommonAggregateComponents\Signature $signature
     * @return self
     */
    public function setSignature(?\UBL21\Common\CommonAggregateComponents\Signature $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Adds as period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Period $period
     */
    public function addToPeriod(\UBL21\Common\CommonAggregateComponents\Period $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\Period[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Transport Event. Period
     *  A period of time associated with this transport event.
     *  0..n
     *  Transport Event
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\Period[] $period
     * @return self
     */
    public function setPeriod(array $period = null)
    {
        $this->period = $period;
        return $this;
    }
}

