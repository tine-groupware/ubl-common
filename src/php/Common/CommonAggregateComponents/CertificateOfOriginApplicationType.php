<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing CertificateOfOriginApplicationType
 *
 * ABIE
 *  Certificate Of Origin Application. Details
 *  A class to define an application for a Certificate of Origin (CoO).
 *  Certificate Of Origin Application
 * XSD Type: CertificateOfOriginApplicationType
 */
class CertificateOfOriginApplicationType
{
    /**
     * BBIE
     *  Certificate Of Origin Application. Reference. Identifier
     *  An identifier for a reference as part of the CoO application.
     *  1
     *  Certificate Of Origin Application
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ReferenceID $referenceID
     */
    private $referenceID = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Certificate Type. Text
     *  The type of CoO being applied for (Ordinary, Re-export, Commonwealth Preferential, etc.).
     *  1
     *  Certificate Of Origin Application
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\CertificateType $certificateType
     */
    private $certificateType = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Application Status Code. Code
     *  A code signifying the status of the application (revision, replacement, etc.).
     *  0..1
     *  Certificate Of Origin Application
     *  Application Status Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ApplicationStatusCode $applicationStatusCode
     */
    private $applicationStatusCode = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Original_ Job Identifier. Identifier
     *  The latest job number given to the CoO application. This is used by the system to keep track of amendments to or cancellation of any earlier applications.
     *  1
     *  Certificate Of Origin Application
     *  Original
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\OriginalJobID $originalJobID
     */
    private $originalJobID = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Previous_ Job Identifier. Identifier
     *  An identifier for the previous job used in case the application requires query or change.
     *  0..1
     *  Certificate Of Origin Application
     *  Previous
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\PreviousJobID $previousJobID
     */
    private $previousJobID = null;

    /**
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the CoO.
     *  0..n
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Certificate Of Origin Application. Shipment
     *  The shipment of goods covered by the CoO.
     *  1
     *  Certificate Of Origin Application
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \UBL21\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  A party providing an endorsement to the CoO.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\EndorserParty[] $endorserParty
     */
    private $endorserParty = [
        
    ];

    /**
     * ASBIE
     *  Certificate Of Origin Application. Preparation_ Party. Party
     *  The party (individual, group, or body) that prepared this CoO application.
     *  1
     *  Certificate Of Origin Application
     *  Preparation
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\PreparationParty $preparationParty
     */
    private $preparationParty = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Issuer_ Party. Party
     *  The organization authorized to issue the CoO requested by this application.
     *  1
     *  Certificate Of Origin Application
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Exporter_ Party. Party
     *  The party making an export declaration, or on behalf of which the export declaration is made, and that is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Certificate Of Origin Application
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @var \UBL21\Common\CommonAggregateComponents\ExporterParty $exporterParty
     */
    private $exporterParty = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Importer_ Party. Party
     *  The party making an import declaration, or on behalf of which a customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Certificate Of Origin Application
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @var \UBL21\Common\CommonAggregateComponents\ImporterParty $importerParty
     */
    private $importerParty = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Issuing_ Country. Country
     *  The country where the requested CoO will be issued.
     *  1
     *  Certificate Of Origin Application
     *  Issuing
     *  Country
     *  Country
     *  Country
     *
     * @var \UBL21\Common\CommonAggregateComponents\IssuingCountry $issuingCountry
     */
    private $issuingCountry = null;

    /**
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  An interested party to which the CoO is to be distributed.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @var \UBL21\Common\CommonAggregateComponents\DocumentDistribution[] $documentDistribution
     */
    private $documentDistribution = [
        
    ];

    /**
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  A reference to a document supporting this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL21\Common\CommonAggregateComponents\SupportingDocumentReference[] $supportingDocumentReference
     */
    private $supportingDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  A signature applied to this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \UBL21\Common\CommonAggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as referenceID
     *
     * BBIE
     *  Certificate Of Origin Application. Reference. Identifier
     *  An identifier for a reference as part of the CoO application.
     *  1
     *  Certificate Of Origin Application
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ReferenceID
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * BBIE
     *  Certificate Of Origin Application. Reference. Identifier
     *  An identifier for a reference as part of the CoO application.
     *  1
     *  Certificate Of Origin Application
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ReferenceID $referenceID
     * @return self
     */
    public function setReferenceID(\UBL21\Common\CommonBasicComponents\ReferenceID $referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as certificateType
     *
     * BBIE
     *  Certificate Of Origin Application. Certificate Type. Text
     *  The type of CoO being applied for (Ordinary, Re-export, Commonwealth Preferential, etc.).
     *  1
     *  Certificate Of Origin Application
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\CertificateType
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets a new certificateType
     *
     * BBIE
     *  Certificate Of Origin Application. Certificate Type. Text
     *  The type of CoO being applied for (Ordinary, Re-export, Commonwealth Preferential, etc.).
     *  1
     *  Certificate Of Origin Application
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\CertificateType $certificateType
     * @return self
     */
    public function setCertificateType(\UBL21\Common\CommonBasicComponents\CertificateType $certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }

    /**
     * Gets as applicationStatusCode
     *
     * BBIE
     *  Certificate Of Origin Application. Application Status Code. Code
     *  A code signifying the status of the application (revision, replacement, etc.).
     *  0..1
     *  Certificate Of Origin Application
     *  Application Status Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ApplicationStatusCode
     */
    public function getApplicationStatusCode()
    {
        return $this->applicationStatusCode;
    }

    /**
     * Sets a new applicationStatusCode
     *
     * BBIE
     *  Certificate Of Origin Application. Application Status Code. Code
     *  A code signifying the status of the application (revision, replacement, etc.).
     *  0..1
     *  Certificate Of Origin Application
     *  Application Status Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ApplicationStatusCode $applicationStatusCode
     * @return self
     */
    public function setApplicationStatusCode(?\UBL21\Common\CommonBasicComponents\ApplicationStatusCode $applicationStatusCode = null)
    {
        $this->applicationStatusCode = $applicationStatusCode;
        return $this;
    }

    /**
     * Gets as originalJobID
     *
     * BBIE
     *  Certificate Of Origin Application. Original_ Job Identifier. Identifier
     *  The latest job number given to the CoO application. This is used by the system to keep track of amendments to or cancellation of any earlier applications.
     *  1
     *  Certificate Of Origin Application
     *  Original
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\OriginalJobID
     */
    public function getOriginalJobID()
    {
        return $this->originalJobID;
    }

    /**
     * Sets a new originalJobID
     *
     * BBIE
     *  Certificate Of Origin Application. Original_ Job Identifier. Identifier
     *  The latest job number given to the CoO application. This is used by the system to keep track of amendments to or cancellation of any earlier applications.
     *  1
     *  Certificate Of Origin Application
     *  Original
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\OriginalJobID $originalJobID
     * @return self
     */
    public function setOriginalJobID(\UBL21\Common\CommonBasicComponents\OriginalJobID $originalJobID)
    {
        $this->originalJobID = $originalJobID;
        return $this;
    }

    /**
     * Gets as previousJobID
     *
     * BBIE
     *  Certificate Of Origin Application. Previous_ Job Identifier. Identifier
     *  An identifier for the previous job used in case the application requires query or change.
     *  0..1
     *  Certificate Of Origin Application
     *  Previous
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\PreviousJobID
     */
    public function getPreviousJobID()
    {
        return $this->previousJobID;
    }

    /**
     * Sets a new previousJobID
     *
     * BBIE
     *  Certificate Of Origin Application. Previous_ Job Identifier. Identifier
     *  An identifier for the previous job used in case the application requires query or change.
     *  0..1
     *  Certificate Of Origin Application
     *  Previous
     *  Job Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\PreviousJobID $previousJobID
     * @return self
     */
    public function setPreviousJobID(?\UBL21\Common\CommonBasicComponents\PreviousJobID $previousJobID = null)
    {
        $this->previousJobID = $previousJobID;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the CoO.
     *  0..n
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Remarks $remarks
     */
    public function addToRemarks(\UBL21\Common\CommonBasicComponents\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the CoO.
     *  0..n
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the CoO.
     *  0..n
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the CoO.
     *  0..n
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Certificate Of Origin Application. Remarks. Text
     *  Remarks by the applicant for the CoO.
     *  0..n
     *  Certificate Of Origin Application
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Certificate Of Origin Application. Shipment
     *  The shipment of goods covered by the CoO.
     *  1
     *  Certificate Of Origin Application
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \UBL21\Common\CommonAggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Certificate Of Origin Application. Shipment
     *  The shipment of goods covered by the CoO.
     *  1
     *  Certificate Of Origin Application
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \UBL21\Common\CommonAggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(\UBL21\Common\CommonAggregateComponents\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  A party providing an endorsement to the CoO.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\EndorserParty $endorserParty
     */
    public function addToEndorserParty(\UBL21\Common\CommonAggregateComponents\EndorserParty $endorserParty)
    {
        $this->endorserParty[] = $endorserParty;
        return $this;
    }

    /**
     * isset endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  A party providing an endorsement to the CoO.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndorserParty($index)
    {
        return isset($this->endorserParty[$index]);
    }

    /**
     * unset endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  A party providing an endorsement to the CoO.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndorserParty($index)
    {
        unset($this->endorserParty[$index]);
    }

    /**
     * Gets as endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  A party providing an endorsement to the CoO.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\EndorserParty[]
     */
    public function getEndorserParty()
    {
        return $this->endorserParty;
    }

    /**
     * Sets a new endorserParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Endorser Party
     *  A party providing an endorsement to the CoO.
     *  1..n
     *  Certificate Of Origin Application
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\EndorserParty[] $endorserParty
     * @return self
     */
    public function setEndorserParty(array $endorserParty)
    {
        $this->endorserParty = $endorserParty;
        return $this;
    }

    /**
     * Gets as preparationParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Preparation_ Party. Party
     *  The party (individual, group, or body) that prepared this CoO application.
     *  1
     *  Certificate Of Origin Application
     *  Preparation
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\PreparationParty
     */
    public function getPreparationParty()
    {
        return $this->preparationParty;
    }

    /**
     * Sets a new preparationParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Preparation_ Party. Party
     *  The party (individual, group, or body) that prepared this CoO application.
     *  1
     *  Certificate Of Origin Application
     *  Preparation
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\PreparationParty $preparationParty
     * @return self
     */
    public function setPreparationParty(\UBL21\Common\CommonAggregateComponents\PreparationParty $preparationParty)
    {
        $this->preparationParty = $preparationParty;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Issuer_ Party. Party
     *  The organization authorized to issue the CoO requested by this application.
     *  1
     *  Certificate Of Origin Application
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Issuer_ Party. Party
     *  The organization authorized to issue the CoO requested by this application.
     *  1
     *  Certificate Of Origin Application
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(\UBL21\Common\CommonAggregateComponents\IssuerParty $issuerParty)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Gets as exporterParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Exporter_ Party. Party
     *  The party making an export declaration, or on behalf of which the export declaration is made, and that is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Certificate Of Origin Application
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @return \UBL21\Common\CommonAggregateComponents\ExporterParty
     */
    public function getExporterParty()
    {
        return $this->exporterParty;
    }

    /**
     * Sets a new exporterParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Exporter_ Party. Party
     *  The party making an export declaration, or on behalf of which the export declaration is made, and that is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Certificate Of Origin Application
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @param \UBL21\Common\CommonAggregateComponents\ExporterParty $exporterParty
     * @return self
     */
    public function setExporterParty(?\UBL21\Common\CommonAggregateComponents\ExporterParty $exporterParty = null)
    {
        $this->exporterParty = $exporterParty;
        return $this;
    }

    /**
     * Gets as importerParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Importer_ Party. Party
     *  The party making an import declaration, or on behalf of which a customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Certificate Of Origin Application
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @return \UBL21\Common\CommonAggregateComponents\ImporterParty
     */
    public function getImporterParty()
    {
        return $this->importerParty;
    }

    /**
     * Sets a new importerParty
     *
     * ASBIE
     *  Certificate Of Origin Application. Importer_ Party. Party
     *  The party making an import declaration, or on behalf of which a customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Certificate Of Origin Application
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @param \UBL21\Common\CommonAggregateComponents\ImporterParty $importerParty
     * @return self
     */
    public function setImporterParty(?\UBL21\Common\CommonAggregateComponents\ImporterParty $importerParty = null)
    {
        $this->importerParty = $importerParty;
        return $this;
    }

    /**
     * Gets as issuingCountry
     *
     * ASBIE
     *  Certificate Of Origin Application. Issuing_ Country. Country
     *  The country where the requested CoO will be issued.
     *  1
     *  Certificate Of Origin Application
     *  Issuing
     *  Country
     *  Country
     *  Country
     *
     * @return \UBL21\Common\CommonAggregateComponents\IssuingCountry
     */
    public function getIssuingCountry()
    {
        return $this->issuingCountry;
    }

    /**
     * Sets a new issuingCountry
     *
     * ASBIE
     *  Certificate Of Origin Application. Issuing_ Country. Country
     *  The country where the requested CoO will be issued.
     *  1
     *  Certificate Of Origin Application
     *  Issuing
     *  Country
     *  Country
     *  Country
     *
     * @param \UBL21\Common\CommonAggregateComponents\IssuingCountry $issuingCountry
     * @return self
     */
    public function setIssuingCountry(\UBL21\Common\CommonAggregateComponents\IssuingCountry $issuingCountry)
    {
        $this->issuingCountry = $issuingCountry;
        return $this;
    }

    /**
     * Adds as documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  An interested party to which the CoO is to be distributed.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\DocumentDistribution $documentDistribution
     */
    public function addToDocumentDistribution(\UBL21\Common\CommonAggregateComponents\DocumentDistribution $documentDistribution)
    {
        $this->documentDistribution[] = $documentDistribution;
        return $this;
    }

    /**
     * isset documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  An interested party to which the CoO is to be distributed.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentDistribution($index)
    {
        return isset($this->documentDistribution[$index]);
    }

    /**
     * unset documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  An interested party to which the CoO is to be distributed.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentDistribution($index)
    {
        unset($this->documentDistribution[$index]);
    }

    /**
     * Gets as documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  An interested party to which the CoO is to be distributed.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @return \UBL21\Common\CommonAggregateComponents\DocumentDistribution[]
     */
    public function getDocumentDistribution()
    {
        return $this->documentDistribution;
    }

    /**
     * Sets a new documentDistribution
     *
     * ASBIE
     *  Certificate Of Origin Application. Document Distribution
     *  An interested party to which the CoO is to be distributed.
     *  0..n
     *  Certificate Of Origin Application
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @param \UBL21\Common\CommonAggregateComponents\DocumentDistribution[] $documentDistribution
     * @return self
     */
    public function setDocumentDistribution(array $documentDistribution = null)
    {
        $this->documentDistribution = $documentDistribution;
        return $this;
    }

    /**
     * Adds as supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  A reference to a document supporting this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\SupportingDocumentReference $supportingDocumentReference
     */
    public function addToSupportingDocumentReference(\UBL21\Common\CommonAggregateComponents\SupportingDocumentReference $supportingDocumentReference)
    {
        $this->supportingDocumentReference[] = $supportingDocumentReference;
        return $this;
    }

    /**
     * isset supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  A reference to a document supporting this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingDocumentReference($index)
    {
        return isset($this->supportingDocumentReference[$index]);
    }

    /**
     * unset supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  A reference to a document supporting this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingDocumentReference($index)
    {
        unset($this->supportingDocumentReference[$index]);
    }

    /**
     * Gets as supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  A reference to a document supporting this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL21\Common\CommonAggregateComponents\SupportingDocumentReference[]
     */
    public function getSupportingDocumentReference()
    {
        return $this->supportingDocumentReference;
    }

    /**
     * Sets a new supportingDocumentReference
     *
     * ASBIE
     *  Certificate Of Origin Application. Supporting_ Document Reference. Document Reference
     *  A reference to a document supporting this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Supporting
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL21\Common\CommonAggregateComponents\SupportingDocumentReference[] $supportingDocumentReference
     * @return self
     */
    public function setSupportingDocumentReference(array $supportingDocumentReference = null)
    {
        $this->supportingDocumentReference = $supportingDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  A signature applied to this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\Signature $signature
     */
    public function addToSignature(\UBL21\Common\CommonAggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  A signature applied to this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  A signature applied to this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  A signature applied to this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \UBL21\Common\CommonAggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Certificate Of Origin Application. Signature
     *  A signature applied to this application.
     *  0..n
     *  Certificate Of Origin Application
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \UBL21\Common\CommonAggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}

