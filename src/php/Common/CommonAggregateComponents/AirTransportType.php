<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing AirTransportType
 *
 * ABIE
 *  Air Transport. Details
 *  A class to identify a specific aircraft used for transportation.
 *  Air Transport
 * XSD Type: AirTransportType
 */
class AirTransportType
{
    /**
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AircraftID $aircraftID
     */
    private $aircraftID = null;

    /**
     * Gets as aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\AircraftID
     */
    public function getAircraftID()
    {
        return $this->aircraftID;
    }

    /**
     * Sets a new aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\AircraftID $aircraftID
     * @return self
     */
    public function setAircraftID(\UBL21\Common\CommonBasicComponents\AircraftID $aircraftID)
    {
        $this->aircraftID = $aircraftID;
        return $this;
    }
}

