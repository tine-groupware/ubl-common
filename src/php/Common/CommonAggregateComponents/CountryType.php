<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing CountryType
 *
 * ABIE
 *  Country. Details
 *  A class to describe a country.
 *  Country
 * XSD Type: CountryType
 */
class CountryType
{
    /**
     * BBIE
     *  Country. Identification Code. Code
     *  A code signifying this country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification
     *  Country Identification_ Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\IdentificationCode $identificationCode
     */
    private $identificationCode = null;

    /**
     * BBIE
     *  Country. Name
     *  The name of this country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  SOUTH AFRICA
     *
     * @var \UBL21\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * Gets as identificationCode
     *
     * BBIE
     *  Country. Identification Code. Code
     *  A code signifying this country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification
     *  Country Identification_ Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\IdentificationCode
     */
    public function getIdentificationCode()
    {
        return $this->identificationCode;
    }

    /**
     * Sets a new identificationCode
     *
     * BBIE
     *  Country. Identification Code. Code
     *  A code signifying this country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification
     *  Country Identification_ Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\IdentificationCode $identificationCode
     * @return self
     */
    public function setIdentificationCode(?\UBL21\Common\CommonBasicComponents\IdentificationCode $identificationCode = null)
    {
        $this->identificationCode = $identificationCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Country. Name
     *  The name of this country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  SOUTH AFRICA
     *
     * @return \UBL21\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Country. Name
     *  The name of this country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  SOUTH AFRICA
     *
     * @param \UBL21\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\UBL21\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }
}

