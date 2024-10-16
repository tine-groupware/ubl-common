<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing CRLRefType
 *
 *
 * XSD Type: CRLRefType
 */
class CRLRefType
{
    /**
     * @var \UBL21\Common\UriEtsi\V132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\CRLIdentifierType $cRLIdentifier
     */
    private $cRLIdentifier = null;

    /**
     * Gets as digestAlgAndValue
     *
     * @return \UBL21\Common\UriEtsi\V132\DigestAlgAndValueType
     */
    public function getDigestAlgAndValue()
    {
        return $this->digestAlgAndValue;
    }

    /**
     * Sets a new digestAlgAndValue
     *
     * @param \UBL21\Common\UriEtsi\V132\DigestAlgAndValueType $digestAlgAndValue
     * @return self
     */
    public function setDigestAlgAndValue(\UBL21\Common\UriEtsi\V132\DigestAlgAndValueType $digestAlgAndValue)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }

    /**
     * Gets as cRLIdentifier
     *
     * @return \UBL21\Common\UriEtsi\V132\CRLIdentifierType
     */
    public function getCRLIdentifier()
    {
        return $this->cRLIdentifier;
    }

    /**
     * Sets a new cRLIdentifier
     *
     * @param \UBL21\Common\UriEtsi\V132\CRLIdentifierType $cRLIdentifier
     * @return self
     */
    public function setCRLIdentifier(?\UBL21\Common\UriEtsi\V132\CRLIdentifierType $cRLIdentifier = null)
    {
        $this->cRLIdentifier = $cRLIdentifier;
        return $this;
    }
}

