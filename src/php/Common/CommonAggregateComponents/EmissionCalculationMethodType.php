<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing EmissionCalculationMethodType
 *
 * ABIE
 *  Emission Calculation Method. Details
 *  A class to define how an environmental emission is calculated.
 *  Emission Calculation Method
 * XSD Type: EmissionCalculationMethodType
 */
class EmissionCalculationMethodType
{
    /**
     * BBIE
     *  Emission Calculation Method. Calculation Method Code. Code
     *  A code signifying the method used to calculate the emission.
     *  0..1
     *  Emission Calculation Method
     *  Calculation Method Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\CalculationMethodCode $calculationMethodCode
     */
    private $calculationMethodCode = null;

    /**
     * BBIE
     *  Emission Calculation Method. Fullness Indication Code. Code
     *  A code signifying whether a piece of transport equipment is full, partially full, or empty. This indication is used as a parameter when calculating the environmental emission.
     *  0..1
     *  Emission Calculation Method
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\FullnessIndicationCode $fullnessIndicationCode
     */
    private $fullnessIndicationCode = null;

    /**
     * ASBIE
     *  Emission Calculation Method. Measurement From_ Location. Location
     *  A start location from which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement From
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL21\Common\CommonAggregateComponents\MeasurementFromLocation $measurementFromLocation
     */
    private $measurementFromLocation = null;

    /**
     * ASBIE
     *  Emission Calculation Method. Measurement To_ Location. Location
     *  An end location to which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement To
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL21\Common\CommonAggregateComponents\MeasurementToLocation $measurementToLocation
     */
    private $measurementToLocation = null;

    /**
     * Gets as calculationMethodCode
     *
     * BBIE
     *  Emission Calculation Method. Calculation Method Code. Code
     *  A code signifying the method used to calculate the emission.
     *  0..1
     *  Emission Calculation Method
     *  Calculation Method Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\CalculationMethodCode
     */
    public function getCalculationMethodCode()
    {
        return $this->calculationMethodCode;
    }

    /**
     * Sets a new calculationMethodCode
     *
     * BBIE
     *  Emission Calculation Method. Calculation Method Code. Code
     *  A code signifying the method used to calculate the emission.
     *  0..1
     *  Emission Calculation Method
     *  Calculation Method Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\CalculationMethodCode $calculationMethodCode
     * @return self
     */
    public function setCalculationMethodCode(?\UBL21\Common\CommonBasicComponents\CalculationMethodCode $calculationMethodCode = null)
    {
        $this->calculationMethodCode = $calculationMethodCode;
        return $this;
    }

    /**
     * Gets as fullnessIndicationCode
     *
     * BBIE
     *  Emission Calculation Method. Fullness Indication Code. Code
     *  A code signifying whether a piece of transport equipment is full, partially full, or empty. This indication is used as a parameter when calculating the environmental emission.
     *  0..1
     *  Emission Calculation Method
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\FullnessIndicationCode
     */
    public function getFullnessIndicationCode()
    {
        return $this->fullnessIndicationCode;
    }

    /**
     * Sets a new fullnessIndicationCode
     *
     * BBIE
     *  Emission Calculation Method. Fullness Indication Code. Code
     *  A code signifying whether a piece of transport equipment is full, partially full, or empty. This indication is used as a parameter when calculating the environmental emission.
     *  0..1
     *  Emission Calculation Method
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\FullnessIndicationCode $fullnessIndicationCode
     * @return self
     */
    public function setFullnessIndicationCode(?\UBL21\Common\CommonBasicComponents\FullnessIndicationCode $fullnessIndicationCode = null)
    {
        $this->fullnessIndicationCode = $fullnessIndicationCode;
        return $this;
    }

    /**
     * Gets as measurementFromLocation
     *
     * ASBIE
     *  Emission Calculation Method. Measurement From_ Location. Location
     *  A start location from which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement From
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL21\Common\CommonAggregateComponents\MeasurementFromLocation
     */
    public function getMeasurementFromLocation()
    {
        return $this->measurementFromLocation;
    }

    /**
     * Sets a new measurementFromLocation
     *
     * ASBIE
     *  Emission Calculation Method. Measurement From_ Location. Location
     *  A start location from which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement From
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL21\Common\CommonAggregateComponents\MeasurementFromLocation $measurementFromLocation
     * @return self
     */
    public function setMeasurementFromLocation(?\UBL21\Common\CommonAggregateComponents\MeasurementFromLocation $measurementFromLocation = null)
    {
        $this->measurementFromLocation = $measurementFromLocation;
        return $this;
    }

    /**
     * Gets as measurementToLocation
     *
     * ASBIE
     *  Emission Calculation Method. Measurement To_ Location. Location
     *  An end location to which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement To
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL21\Common\CommonAggregateComponents\MeasurementToLocation
     */
    public function getMeasurementToLocation()
    {
        return $this->measurementToLocation;
    }

    /**
     * Sets a new measurementToLocation
     *
     * ASBIE
     *  Emission Calculation Method. Measurement To_ Location. Location
     *  An end location to which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement To
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL21\Common\CommonAggregateComponents\MeasurementToLocation $measurementToLocation
     * @return self
     */
    public function setMeasurementToLocation(?\UBL21\Common\CommonAggregateComponents\MeasurementToLocation $measurementToLocation = null)
    {
        $this->measurementToLocation = $measurementToLocation;
        return $this;
    }
}

