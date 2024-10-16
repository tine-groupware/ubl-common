<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing CorporateRegistrationSchemeType
 *
 * ABIE
 *  Corporate Registration Scheme. Details
 *  A class to describe a scheme for corporate registration.
 *  Corporate Registration Scheme
 * XSD Type: CorporateRegistrationSchemeType
 */
class CorporateRegistrationSchemeType
{
    /**
     * BBIE
     *  Corporate Registration Scheme. Identifier
     *  An identifier for this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ASIC in Australia
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Corporate Registration Scheme. Name
     *  The name of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Australian Securities and Investment Commission in Australia
     *
     * @var \UBL21\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  A code signifying the type of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  ACN
     *
     * @var \UBL21\Common\CommonBasicComponents\CorporateRegistrationTypeCode $corporateRegistrationTypeCode
     */
    private $corporateRegistrationTypeCode = null;

    /**
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @var \UBL21\Common\CommonAggregateComponents\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     */
    private $jurisdictionRegionAddress = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Corporate Registration Scheme. Identifier
     *  An identifier for this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ASIC in Australia
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
     *  Corporate Registration Scheme. Identifier
     *  An identifier for this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ASIC in Australia
     *
     * @param \UBL21\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\UBL21\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Corporate Registration Scheme. Name
     *  The name of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Australian Securities and Investment Commission in Australia
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
     *  Corporate Registration Scheme. Name
     *  The name of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Australian Securities and Investment Commission in Australia
     *
     * @param \UBL21\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\UBL21\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as corporateRegistrationTypeCode
     *
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  A code signifying the type of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  ACN
     *
     * @return \UBL21\Common\CommonBasicComponents\CorporateRegistrationTypeCode
     */
    public function getCorporateRegistrationTypeCode()
    {
        return $this->corporateRegistrationTypeCode;
    }

    /**
     * Sets a new corporateRegistrationTypeCode
     *
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  A code signifying the type of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  ACN
     *
     * @param \UBL21\Common\CommonBasicComponents\CorporateRegistrationTypeCode $corporateRegistrationTypeCode
     * @return self
     */
    public function setCorporateRegistrationTypeCode(?\UBL21\Common\CommonBasicComponents\CorporateRegistrationTypeCode $corporateRegistrationTypeCode = null)
    {
        $this->corporateRegistrationTypeCode = $corporateRegistrationTypeCode;
        return $this;
    }

    /**
     * Adds as jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress
     */
    public function addToJurisdictionRegionAddress(\UBL21\Common\CommonAggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress[] = $jurisdictionRegionAddress;
        return $this;
    }

    /**
     * isset jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionRegionAddress($index)
    {
        return isset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * unset jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionRegionAddress($index)
    {
        unset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * Gets as jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @return \UBL21\Common\CommonAggregateComponents\JurisdictionRegionAddress[]
     */
    public function getJurisdictionRegionAddress()
    {
        return $this->jurisdictionRegionAddress;
    }

    /**
     * Sets a new jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @param \UBL21\Common\CommonAggregateComponents\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(array $jurisdictionRegionAddress = null)
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;
        return $this;
    }
}

