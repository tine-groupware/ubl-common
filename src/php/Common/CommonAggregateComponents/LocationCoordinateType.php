<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing LocationCoordinateType
 *
 * ABIE
 *  Location Coordinate. Details
 *  A class for defining a set of geographical coordinates (apparently misnamed).
 *  Location Coordinate
 * XSD Type: LocationCoordinateType
 */
class LocationCoordinateType
{
    /**
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  A code signifying the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\CoordinateSystemCode $coordinateSystemCode
     */
    private $coordinateSystemCode = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The degree component of a latitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure
     */
    private $latitudeDegreesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The minutes component of a latitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure
     */
    private $latitudeMinutesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  A code signifying the direction of latitude measurement from the equator (north or south).
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction
     *  Latitude Direction_ Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LatitudeDirectionCode $latitudeDirectionCode
     */
    private $latitudeDirectionCode = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The degree component of a longitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure
     */
    private $longitudeDegreesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The minutes component of a longitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure
     */
    private $longitudeMinutesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  A code signifying the direction of longitude measurement from the prime meridian (east or west).
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction
     *  Longitude Direction_ Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LongitudeDirectionCode $longitudeDirectionCode
     */
    private $longitudeDirectionCode = null;

    /**
     * BBIE
     *  Location Coordinate. Altitude. Measure
     *  The altitude of the location.
     *  0..1
     *  Location Coordinate
     *  Altitude
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AltitudeMeasure $altitudeMeasure
     */
    private $altitudeMeasure = null;

    /**
     * Gets as coordinateSystemCode
     *
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  A code signifying the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\CoordinateSystemCode
     */
    public function getCoordinateSystemCode()
    {
        return $this->coordinateSystemCode;
    }

    /**
     * Sets a new coordinateSystemCode
     *
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  A code signifying the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\CoordinateSystemCode $coordinateSystemCode
     * @return self
     */
    public function setCoordinateSystemCode(?\UBL21\Common\CommonBasicComponents\CoordinateSystemCode $coordinateSystemCode = null)
    {
        $this->coordinateSystemCode = $coordinateSystemCode;
        return $this;
    }

    /**
     * Gets as latitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The degree component of a latitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LatitudeDegreesMeasure
     */
    public function getLatitudeDegreesMeasure()
    {
        return $this->latitudeDegreesMeasure;
    }

    /**
     * Sets a new latitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The degree component of a latitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure
     * @return self
     */
    public function setLatitudeDegreesMeasure(?\UBL21\Common\CommonBasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure = null)
    {
        $this->latitudeDegreesMeasure = $latitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The minutes component of a latitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LatitudeMinutesMeasure
     */
    public function getLatitudeMinutesMeasure()
    {
        return $this->latitudeMinutesMeasure;
    }

    /**
     * Sets a new latitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The minutes component of a latitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure
     * @return self
     */
    public function setLatitudeMinutesMeasure(?\UBL21\Common\CommonBasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure = null)
    {
        $this->latitudeMinutesMeasure = $latitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  A code signifying the direction of latitude measurement from the equator (north or south).
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction
     *  Latitude Direction_ Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LatitudeDirectionCode
     */
    public function getLatitudeDirectionCode()
    {
        return $this->latitudeDirectionCode;
    }

    /**
     * Sets a new latitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  A code signifying the direction of latitude measurement from the equator (north or south).
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction
     *  Latitude Direction_ Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LatitudeDirectionCode $latitudeDirectionCode
     * @return self
     */
    public function setLatitudeDirectionCode(?\UBL21\Common\CommonBasicComponents\LatitudeDirectionCode $latitudeDirectionCode = null)
    {
        $this->latitudeDirectionCode = $latitudeDirectionCode;
        return $this;
    }

    /**
     * Gets as longitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The degree component of a longitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LongitudeDegreesMeasure
     */
    public function getLongitudeDegreesMeasure()
    {
        return $this->longitudeDegreesMeasure;
    }

    /**
     * Sets a new longitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The degree component of a longitude measured in degrees and minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure
     * @return self
     */
    public function setLongitudeDegreesMeasure(?\UBL21\Common\CommonBasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure = null)
    {
        $this->longitudeDegreesMeasure = $longitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The minutes component of a longitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LongitudeMinutesMeasure
     */
    public function getLongitudeMinutesMeasure()
    {
        return $this->longitudeMinutesMeasure;
    }

    /**
     * Sets a new longitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The minutes component of a longitude measured in degrees and minutes (modulo 60).
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure
     * @return self
     */
    public function setLongitudeMinutesMeasure(?\UBL21\Common\CommonBasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure = null)
    {
        $this->longitudeMinutesMeasure = $longitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  A code signifying the direction of longitude measurement from the prime meridian (east or west).
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction
     *  Longitude Direction_ Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LongitudeDirectionCode
     */
    public function getLongitudeDirectionCode()
    {
        return $this->longitudeDirectionCode;
    }

    /**
     * Sets a new longitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  A code signifying the direction of longitude measurement from the prime meridian (east or west).
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction
     *  Longitude Direction_ Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LongitudeDirectionCode $longitudeDirectionCode
     * @return self
     */
    public function setLongitudeDirectionCode(?\UBL21\Common\CommonBasicComponents\LongitudeDirectionCode $longitudeDirectionCode = null)
    {
        $this->longitudeDirectionCode = $longitudeDirectionCode;
        return $this;
    }

    /**
     * Gets as altitudeMeasure
     *
     * BBIE
     *  Location Coordinate. Altitude. Measure
     *  The altitude of the location.
     *  0..1
     *  Location Coordinate
     *  Altitude
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\AltitudeMeasure
     */
    public function getAltitudeMeasure()
    {
        return $this->altitudeMeasure;
    }

    /**
     * Sets a new altitudeMeasure
     *
     * BBIE
     *  Location Coordinate. Altitude. Measure
     *  The altitude of the location.
     *  0..1
     *  Location Coordinate
     *  Altitude
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\AltitudeMeasure $altitudeMeasure
     * @return self
     */
    public function setAltitudeMeasure(?\UBL21\Common\CommonBasicComponents\AltitudeMeasure $altitudeMeasure = null)
    {
        $this->altitudeMeasure = $altitudeMeasure;
        return $this;
    }
}

