<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing StowageType
 *
 * ABIE
 *  Stowage. Details
 *  A class to describe a location on board a means of transport where specified goods or transport equipment have been stowed or are to be stowed.
 *  Stowage
 * XSD Type: StowageType
 */
class StowageType
{
    /**
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @var \UBL21\Common\CommonBasicComponents\LocationID $locationID
     */
    private $locationID = null;

    /**
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @var \UBL21\Common\CommonBasicComponents\Location[] $location
     */
    private $location = [
        
    ];

    /**
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \UBL21\Common\CommonAggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * Gets as locationID
     *
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @return \UBL21\Common\CommonBasicComponents\LocationID
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * Sets a new locationID
     *
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @param \UBL21\Common\CommonBasicComponents\LocationID $locationID
     * @return self
     */
    public function setLocationID(?\UBL21\Common\CommonBasicComponents\LocationID $locationID = null)
    {
        $this->locationID = $locationID;
        return $this;
    }

    /**
     * Adds as location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Location $location
     */
    public function addToLocation(\UBL21\Common\CommonBasicComponents\Location $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @return \UBL21\Common\CommonBasicComponents\Location[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param \UBL21\Common\CommonBasicComponents\Location[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\UBL21\Common\CommonAggregateComponents\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \UBL21\Common\CommonAggregateComponents\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \UBL21\Common\CommonAggregateComponents\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(array $measurementDimension = null)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }
}

