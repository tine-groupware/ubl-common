<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing PartyType
 *
 * ABIE
 *  Party. Details
 *  A class to describe an organization, sub-organization, or individual fulfilling a role in a business process.
 *  Party
 * XSD Type: PartyType
 */
class PartyType
{
    /**
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $markCareIndicator
     */
    private $markCareIndicator = null;

    /**
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $markAttentionIndicator
     */
    private $markAttentionIndicator = null;

    /**
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\WebsiteURI $websiteURI
     */
    private $websiteURI = null;

    /**
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @var \UBL21\Common\CommonBasicComponents\LogoReferenceID $logoReferenceID
     */
    private $logoReferenceID = null;

    /**
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @var \UBL21\Common\CommonBasicComponents\EndpointID $endpointID
     */
    private $endpointID = null;

    /**
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @var \UBL21\Common\CommonBasicComponents\IndustryClassificationCode $industryClassificationCode
     */
    private $industryClassificationCode = null;

    /**
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @var \UBL21\Common\CommonAggregateComponents\PartyIdentification[] $partyIdentification
     */
    private $partyIdentification = [
        
    ];

    /**
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @var \UBL21\Common\CommonAggregateComponents\PartyName[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @var \UBL21\Common\CommonAggregateComponents\Language $language
     */
    private $language = null;

    /**
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @var \UBL21\Common\CommonAggregateComponents\PostalAddress $postalAddress
     */
    private $postalAddress = null;

    /**
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @var \UBL21\Common\CommonAggregateComponents\PhysicalLocation $physicalLocation
     */
    private $physicalLocation = null;

    /**
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @var \UBL21\Common\CommonAggregateComponents\PartyTaxScheme[] $partyTaxScheme
     */
    private $partyTaxScheme = [
        
    ];

    /**
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @var \UBL21\Common\CommonAggregateComponents\PartyLegalEntity[] $partyLegalEntity
     */
    private $partyLegalEntity = [
        
    ];

    /**
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \UBL21\Common\CommonAggregateComponents\Contact $contact
     */
    private $contact = null;

    /**
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @var \UBL21\Common\CommonAggregateComponents\Person[] $person
     */
    private $person = [
        
    ];

    /**
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @var \UBL21\Common\CommonAggregateComponents\AgentParty $agentParty
     */
    private $agentParty = null;

    /**
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\ServiceProviderParty[] $serviceProviderParty
     */
    private $serviceProviderParty = [
        
    ];

    /**
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @var \UBL21\Common\CommonAggregateComponents\PowerOfAttorney[] $powerOfAttorney
     */
    private $powerOfAttorney = [
        
    ];

    /**
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \UBL21\Common\CommonAggregateComponents\FinancialAccount $financialAccount
     */
    private $financialAccount = null;

    /**
     * Gets as markCareIndicator
     *
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMarkCareIndicator()
    {
        return $this->markCareIndicator;
    }

    /**
     * Sets a new markCareIndicator
     *
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $markCareIndicator
     * @return self
     */
    public function setMarkCareIndicator($markCareIndicator)
    {
        $this->markCareIndicator = $markCareIndicator;
        return $this;
    }

    /**
     * Gets as markAttentionIndicator
     *
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMarkAttentionIndicator()
    {
        return $this->markAttentionIndicator;
    }

    /**
     * Sets a new markAttentionIndicator
     *
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $markAttentionIndicator
     * @return self
     */
    public function setMarkAttentionIndicator($markAttentionIndicator)
    {
        $this->markAttentionIndicator = $markAttentionIndicator;
        return $this;
    }

    /**
     * Gets as websiteURI
     *
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\WebsiteURI
     */
    public function getWebsiteURI()
    {
        return $this->websiteURI;
    }

    /**
     * Sets a new websiteURI
     *
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\WebsiteURI $websiteURI
     * @return self
     */
    public function setWebsiteURI(?\UBL21\Common\CommonBasicComponents\WebsiteURI $websiteURI = null)
    {
        $this->websiteURI = $websiteURI;
        return $this;
    }

    /**
     * Gets as logoReferenceID
     *
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @return \UBL21\Common\CommonBasicComponents\LogoReferenceID
     */
    public function getLogoReferenceID()
    {
        return $this->logoReferenceID;
    }

    /**
     * Sets a new logoReferenceID
     *
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @param \UBL21\Common\CommonBasicComponents\LogoReferenceID $logoReferenceID
     * @return self
     */
    public function setLogoReferenceID(?\UBL21\Common\CommonBasicComponents\LogoReferenceID $logoReferenceID = null)
    {
        $this->logoReferenceID = $logoReferenceID;
        return $this;
    }

    /**
     * Gets as endpointID
     *
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @return \UBL21\Common\CommonBasicComponents\EndpointID
     */
    public function getEndpointID()
    {
        return $this->endpointID;
    }

    /**
     * Sets a new endpointID
     *
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @param \UBL21\Common\CommonBasicComponents\EndpointID $endpointID
     * @return self
     */
    public function setEndpointID(?\UBL21\Common\CommonBasicComponents\EndpointID $endpointID = null)
    {
        $this->endpointID = $endpointID;
        return $this;
    }

    /**
     * Gets as industryClassificationCode
     *
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @return \UBL21\Common\CommonBasicComponents\IndustryClassificationCode
     */
    public function getIndustryClassificationCode()
    {
        return $this->industryClassificationCode;
    }

    /**
     * Sets a new industryClassificationCode
     *
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @param \UBL21\Common\CommonBasicComponents\IndustryClassificationCode $industryClassificationCode
     * @return self
     */
    public function setIndustryClassificationCode(?\UBL21\Common\CommonBasicComponents\IndustryClassificationCode $industryClassificationCode = null)
    {
        $this->industryClassificationCode = $industryClassificationCode;
        return $this;
    }

    /**
     * Adds as partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\PartyIdentification $partyIdentification
     */
    public function addToPartyIdentification(\UBL21\Common\CommonAggregateComponents\PartyIdentification $partyIdentification)
    {
        $this->partyIdentification[] = $partyIdentification;
        return $this;
    }

    /**
     * isset partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyIdentification($index)
    {
        return isset($this->partyIdentification[$index]);
    }

    /**
     * unset partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyIdentification($index)
    {
        unset($this->partyIdentification[$index]);
    }

    /**
     * Gets as partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @return \UBL21\Common\CommonAggregateComponents\PartyIdentification[]
     */
    public function getPartyIdentification()
    {
        return $this->partyIdentification;
    }

    /**
     * Sets a new partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param \UBL21\Common\CommonAggregateComponents\PartyIdentification[] $partyIdentification
     * @return self
     */
    public function setPartyIdentification(array $partyIdentification = null)
    {
        $this->partyIdentification = $partyIdentification;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\PartyName $partyName
     */
    public function addToPartyName(\UBL21\Common\CommonAggregateComponents\PartyName $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @return \UBL21\Common\CommonAggregateComponents\PartyName[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param \UBL21\Common\CommonAggregateComponents\PartyName[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @return \UBL21\Common\CommonAggregateComponents\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @param \UBL21\Common\CommonAggregateComponents\Language $language
     * @return self
     */
    public function setLanguage(?\UBL21\Common\CommonAggregateComponents\Language $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as postalAddress
     *
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @return \UBL21\Common\CommonAggregateComponents\PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Sets a new postalAddress
     *
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @param \UBL21\Common\CommonAggregateComponents\PostalAddress $postalAddress
     * @return self
     */
    public function setPostalAddress(?\UBL21\Common\CommonAggregateComponents\PostalAddress $postalAddress = null)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * Gets as physicalLocation
     *
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @return \UBL21\Common\CommonAggregateComponents\PhysicalLocation
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Sets a new physicalLocation
     *
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @param \UBL21\Common\CommonAggregateComponents\PhysicalLocation $physicalLocation
     * @return self
     */
    public function setPhysicalLocation(?\UBL21\Common\CommonAggregateComponents\PhysicalLocation $physicalLocation = null)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * Adds as partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\PartyTaxScheme $partyTaxScheme
     */
    public function addToPartyTaxScheme(\UBL21\Common\CommonAggregateComponents\PartyTaxScheme $partyTaxScheme)
    {
        $this->partyTaxScheme[] = $partyTaxScheme;
        return $this;
    }

    /**
     * isset partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyTaxScheme($index)
    {
        return isset($this->partyTaxScheme[$index]);
    }

    /**
     * unset partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyTaxScheme($index)
    {
        unset($this->partyTaxScheme[$index]);
    }

    /**
     * Gets as partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @return \UBL21\Common\CommonAggregateComponents\PartyTaxScheme[]
     */
    public function getPartyTaxScheme()
    {
        return $this->partyTaxScheme;
    }

    /**
     * Sets a new partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param \UBL21\Common\CommonAggregateComponents\PartyTaxScheme[] $partyTaxScheme
     * @return self
     */
    public function setPartyTaxScheme(array $partyTaxScheme = null)
    {
        $this->partyTaxScheme = $partyTaxScheme;
        return $this;
    }

    /**
     * Adds as partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\PartyLegalEntity $partyLegalEntity
     */
    public function addToPartyLegalEntity(\UBL21\Common\CommonAggregateComponents\PartyLegalEntity $partyLegalEntity)
    {
        $this->partyLegalEntity[] = $partyLegalEntity;
        return $this;
    }

    /**
     * isset partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyLegalEntity($index)
    {
        return isset($this->partyLegalEntity[$index]);
    }

    /**
     * unset partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyLegalEntity($index)
    {
        unset($this->partyLegalEntity[$index]);
    }

    /**
     * Gets as partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @return \UBL21\Common\CommonAggregateComponents\PartyLegalEntity[]
     */
    public function getPartyLegalEntity()
    {
        return $this->partyLegalEntity;
    }

    /**
     * Sets a new partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param \UBL21\Common\CommonAggregateComponents\PartyLegalEntity[] $partyLegalEntity
     * @return self
     */
    public function setPartyLegalEntity(array $partyLegalEntity = null)
    {
        $this->partyLegalEntity = $partyLegalEntity;
        return $this;
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \UBL21\Common\CommonAggregateComponents\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \UBL21\Common\CommonAggregateComponents\Contact $contact
     * @return self
     */
    public function setContact(?\UBL21\Common\CommonAggregateComponents\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Person $person
     */
    public function addToPerson(\UBL21\Common\CommonAggregateComponents\Person $person)
    {
        $this->person[] = $person;
        return $this;
    }

    /**
     * isset person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerson($index)
    {
        return isset($this->person[$index]);
    }

    /**
     * unset person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerson($index)
    {
        unset($this->person[$index]);
    }

    /**
     * Gets as person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @return \UBL21\Common\CommonAggregateComponents\Person[]
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param \UBL21\Common\CommonAggregateComponents\Person[] $person
     * @return self
     */
    public function setPerson(array $person = null)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as agentParty
     *
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @return \UBL21\Common\CommonAggregateComponents\AgentParty
     */
    public function getAgentParty()
    {
        return $this->agentParty;
    }

    /**
     * Sets a new agentParty
     *
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @param \UBL21\Common\CommonAggregateComponents\AgentParty $agentParty
     * @return self
     */
    public function setAgentParty(?\UBL21\Common\CommonAggregateComponents\AgentParty $agentParty = null)
    {
        $this->agentParty = $agentParty;
        return $this;
    }

    /**
     * Adds as serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ServiceProviderParty $serviceProviderParty
     */
    public function addToServiceProviderParty(\UBL21\Common\CommonAggregateComponents\ServiceProviderParty $serviceProviderParty)
    {
        $this->serviceProviderParty[] = $serviceProviderParty;
        return $this;
    }

    /**
     * isset serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProviderParty($index)
    {
        return isset($this->serviceProviderParty[$index]);
    }

    /**
     * unset serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProviderParty($index)
    {
        unset($this->serviceProviderParty[$index]);
    }

    /**
     * Gets as serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\ServiceProviderParty[]
     */
    public function getServiceProviderParty()
    {
        return $this->serviceProviderParty;
    }

    /**
     * Sets a new serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\ServiceProviderParty[] $serviceProviderParty
     * @return self
     */
    public function setServiceProviderParty(array $serviceProviderParty = null)
    {
        $this->serviceProviderParty = $serviceProviderParty;
        return $this;
    }

    /**
     * Adds as powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\PowerOfAttorney $powerOfAttorney
     */
    public function addToPowerOfAttorney(\UBL21\Common\CommonAggregateComponents\PowerOfAttorney $powerOfAttorney)
    {
        $this->powerOfAttorney[] = $powerOfAttorney;
        return $this;
    }

    /**
     * isset powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPowerOfAttorney($index)
    {
        return isset($this->powerOfAttorney[$index]);
    }

    /**
     * unset powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPowerOfAttorney($index)
    {
        unset($this->powerOfAttorney[$index]);
    }

    /**
     * Gets as powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @return \UBL21\Common\CommonAggregateComponents\PowerOfAttorney[]
     */
    public function getPowerOfAttorney()
    {
        return $this->powerOfAttorney;
    }

    /**
     * Sets a new powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param \UBL21\Common\CommonAggregateComponents\PowerOfAttorney[] $powerOfAttorney
     * @return self
     */
    public function setPowerOfAttorney(array $powerOfAttorney = null)
    {
        $this->powerOfAttorney = $powerOfAttorney;
        return $this;
    }

    /**
     * Gets as financialAccount
     *
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \UBL21\Common\CommonAggregateComponents\FinancialAccount
     */
    public function getFinancialAccount()
    {
        return $this->financialAccount;
    }

    /**
     * Sets a new financialAccount
     *
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \UBL21\Common\CommonAggregateComponents\FinancialAccount $financialAccount
     * @return self
     */
    public function setFinancialAccount(?\UBL21\Common\CommonAggregateComponents\FinancialAccount $financialAccount = null)
    {
        $this->financialAccount = $financialAccount;
        return $this;
    }
}

