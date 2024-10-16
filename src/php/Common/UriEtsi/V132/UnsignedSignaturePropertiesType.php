<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing UnsignedSignaturePropertiesType
 *
 *
 * XSD Type: UnsignedSignaturePropertiesType
 */
class UnsignedSignaturePropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\CounterSignatureType $counterSignature
     */
    private $counterSignature = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\XAdESTimeStampType $signatureTimeStamp
     */
    private $signatureTimeStamp = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\CompleteCertificateRefsType $completeCertificateRefs
     */
    private $completeCertificateRefs = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\CompleteRevocationRefsType $completeRevocationRefs
     */
    private $completeRevocationRefs = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\CompleteCertificateRefsType $attributeCertificateRefs
     */
    private $attributeCertificateRefs = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\CompleteRevocationRefsType $attributeRevocationRefs
     */
    private $attributeRevocationRefs = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\XAdESTimeStampType $sigAndRefsTimeStamp
     */
    private $sigAndRefsTimeStamp = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\XAdESTimeStampType $refsOnlyTimeStamp
     */
    private $refsOnlyTimeStamp = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\CertificateValuesType $certificateValues
     */
    private $certificateValues = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\RevocationValuesType $revocationValues
     */
    private $revocationValues = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\CertificateValuesType $attrAuthoritiesCertValues
     */
    private $attrAuthoritiesCertValues = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\RevocationValuesType $attributeRevocationValues
     */
    private $attributeRevocationValues = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\XAdESTimeStampType $archiveTimeStamp
     */
    private $archiveTimeStamp = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as counterSignature
     *
     * @return \UBL21\Common\UriEtsi\V132\CounterSignatureType
     */
    public function getCounterSignature()
    {
        return $this->counterSignature;
    }

    /**
     * Sets a new counterSignature
     *
     * @param \UBL21\Common\UriEtsi\V132\CounterSignatureType $counterSignature
     * @return self
     */
    public function setCounterSignature(?\UBL21\Common\UriEtsi\V132\CounterSignatureType $counterSignature = null)
    {
        $this->counterSignature = $counterSignature;
        return $this;
    }

    /**
     * Gets as signatureTimeStamp
     *
     * @return \UBL21\Common\UriEtsi\V132\XAdESTimeStampType
     */
    public function getSignatureTimeStamp()
    {
        return $this->signatureTimeStamp;
    }

    /**
     * Sets a new signatureTimeStamp
     *
     * @param \UBL21\Common\UriEtsi\V132\XAdESTimeStampType $signatureTimeStamp
     * @return self
     */
    public function setSignatureTimeStamp(?\UBL21\Common\UriEtsi\V132\XAdESTimeStampType $signatureTimeStamp = null)
    {
        $this->signatureTimeStamp = $signatureTimeStamp;
        return $this;
    }

    /**
     * Gets as completeCertificateRefs
     *
     * @return \UBL21\Common\UriEtsi\V132\CompleteCertificateRefsType
     */
    public function getCompleteCertificateRefs()
    {
        return $this->completeCertificateRefs;
    }

    /**
     * Sets a new completeCertificateRefs
     *
     * @param \UBL21\Common\UriEtsi\V132\CompleteCertificateRefsType $completeCertificateRefs
     * @return self
     */
    public function setCompleteCertificateRefs(?\UBL21\Common\UriEtsi\V132\CompleteCertificateRefsType $completeCertificateRefs = null)
    {
        $this->completeCertificateRefs = $completeCertificateRefs;
        return $this;
    }

    /**
     * Gets as completeRevocationRefs
     *
     * @return \UBL21\Common\UriEtsi\V132\CompleteRevocationRefsType
     */
    public function getCompleteRevocationRefs()
    {
        return $this->completeRevocationRefs;
    }

    /**
     * Sets a new completeRevocationRefs
     *
     * @param \UBL21\Common\UriEtsi\V132\CompleteRevocationRefsType $completeRevocationRefs
     * @return self
     */
    public function setCompleteRevocationRefs(?\UBL21\Common\UriEtsi\V132\CompleteRevocationRefsType $completeRevocationRefs = null)
    {
        $this->completeRevocationRefs = $completeRevocationRefs;
        return $this;
    }

    /**
     * Gets as attributeCertificateRefs
     *
     * @return \UBL21\Common\UriEtsi\V132\CompleteCertificateRefsType
     */
    public function getAttributeCertificateRefs()
    {
        return $this->attributeCertificateRefs;
    }

    /**
     * Sets a new attributeCertificateRefs
     *
     * @param \UBL21\Common\UriEtsi\V132\CompleteCertificateRefsType $attributeCertificateRefs
     * @return self
     */
    public function setAttributeCertificateRefs(?\UBL21\Common\UriEtsi\V132\CompleteCertificateRefsType $attributeCertificateRefs = null)
    {
        $this->attributeCertificateRefs = $attributeCertificateRefs;
        return $this;
    }

    /**
     * Gets as attributeRevocationRefs
     *
     * @return \UBL21\Common\UriEtsi\V132\CompleteRevocationRefsType
     */
    public function getAttributeRevocationRefs()
    {
        return $this->attributeRevocationRefs;
    }

    /**
     * Sets a new attributeRevocationRefs
     *
     * @param \UBL21\Common\UriEtsi\V132\CompleteRevocationRefsType $attributeRevocationRefs
     * @return self
     */
    public function setAttributeRevocationRefs(?\UBL21\Common\UriEtsi\V132\CompleteRevocationRefsType $attributeRevocationRefs = null)
    {
        $this->attributeRevocationRefs = $attributeRevocationRefs;
        return $this;
    }

    /**
     * Gets as sigAndRefsTimeStamp
     *
     * @return \UBL21\Common\UriEtsi\V132\XAdESTimeStampType
     */
    public function getSigAndRefsTimeStamp()
    {
        return $this->sigAndRefsTimeStamp;
    }

    /**
     * Sets a new sigAndRefsTimeStamp
     *
     * @param \UBL21\Common\UriEtsi\V132\XAdESTimeStampType $sigAndRefsTimeStamp
     * @return self
     */
    public function setSigAndRefsTimeStamp(?\UBL21\Common\UriEtsi\V132\XAdESTimeStampType $sigAndRefsTimeStamp = null)
    {
        $this->sigAndRefsTimeStamp = $sigAndRefsTimeStamp;
        return $this;
    }

    /**
     * Gets as refsOnlyTimeStamp
     *
     * @return \UBL21\Common\UriEtsi\V132\XAdESTimeStampType
     */
    public function getRefsOnlyTimeStamp()
    {
        return $this->refsOnlyTimeStamp;
    }

    /**
     * Sets a new refsOnlyTimeStamp
     *
     * @param \UBL21\Common\UriEtsi\V132\XAdESTimeStampType $refsOnlyTimeStamp
     * @return self
     */
    public function setRefsOnlyTimeStamp(?\UBL21\Common\UriEtsi\V132\XAdESTimeStampType $refsOnlyTimeStamp = null)
    {
        $this->refsOnlyTimeStamp = $refsOnlyTimeStamp;
        return $this;
    }

    /**
     * Gets as certificateValues
     *
     * @return \UBL21\Common\UriEtsi\V132\CertificateValuesType
     */
    public function getCertificateValues()
    {
        return $this->certificateValues;
    }

    /**
     * Sets a new certificateValues
     *
     * @param \UBL21\Common\UriEtsi\V132\CertificateValuesType $certificateValues
     * @return self
     */
    public function setCertificateValues(?\UBL21\Common\UriEtsi\V132\CertificateValuesType $certificateValues = null)
    {
        $this->certificateValues = $certificateValues;
        return $this;
    }

    /**
     * Gets as revocationValues
     *
     * @return \UBL21\Common\UriEtsi\V132\RevocationValuesType
     */
    public function getRevocationValues()
    {
        return $this->revocationValues;
    }

    /**
     * Sets a new revocationValues
     *
     * @param \UBL21\Common\UriEtsi\V132\RevocationValuesType $revocationValues
     * @return self
     */
    public function setRevocationValues(?\UBL21\Common\UriEtsi\V132\RevocationValuesType $revocationValues = null)
    {
        $this->revocationValues = $revocationValues;
        return $this;
    }

    /**
     * Gets as attrAuthoritiesCertValues
     *
     * @return \UBL21\Common\UriEtsi\V132\CertificateValuesType
     */
    public function getAttrAuthoritiesCertValues()
    {
        return $this->attrAuthoritiesCertValues;
    }

    /**
     * Sets a new attrAuthoritiesCertValues
     *
     * @param \UBL21\Common\UriEtsi\V132\CertificateValuesType $attrAuthoritiesCertValues
     * @return self
     */
    public function setAttrAuthoritiesCertValues(?\UBL21\Common\UriEtsi\V132\CertificateValuesType $attrAuthoritiesCertValues = null)
    {
        $this->attrAuthoritiesCertValues = $attrAuthoritiesCertValues;
        return $this;
    }

    /**
     * Gets as attributeRevocationValues
     *
     * @return \UBL21\Common\UriEtsi\V132\RevocationValuesType
     */
    public function getAttributeRevocationValues()
    {
        return $this->attributeRevocationValues;
    }

    /**
     * Sets a new attributeRevocationValues
     *
     * @param \UBL21\Common\UriEtsi\V132\RevocationValuesType $attributeRevocationValues
     * @return self
     */
    public function setAttributeRevocationValues(?\UBL21\Common\UriEtsi\V132\RevocationValuesType $attributeRevocationValues = null)
    {
        $this->attributeRevocationValues = $attributeRevocationValues;
        return $this;
    }

    /**
     * Gets as archiveTimeStamp
     *
     * @return \UBL21\Common\UriEtsi\V132\XAdESTimeStampType
     */
    public function getArchiveTimeStamp()
    {
        return $this->archiveTimeStamp;
    }

    /**
     * Sets a new archiveTimeStamp
     *
     * @param \UBL21\Common\UriEtsi\V132\XAdESTimeStampType $archiveTimeStamp
     * @return self
     */
    public function setArchiveTimeStamp(?\UBL21\Common\UriEtsi\V132\XAdESTimeStampType $archiveTimeStamp = null)
    {
        $this->archiveTimeStamp = $archiveTimeStamp;
        return $this;
    }
}

