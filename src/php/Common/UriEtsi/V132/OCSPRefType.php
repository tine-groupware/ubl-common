<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing OCSPRefType
 *
 *
 * XSD Type: OCSPRefType
 */
class OCSPRefType
{
    /**
     * @var \UBL21\Common\UriEtsi\V132\OCSPIdentifierType $oCSPIdentifier
     */
    private $oCSPIdentifier = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * Gets as oCSPIdentifier
     *
     * @return \UBL21\Common\UriEtsi\V132\OCSPIdentifierType
     */
    public function getOCSPIdentifier()
    {
        return $this->oCSPIdentifier;
    }

    /**
     * Sets a new oCSPIdentifier
     *
     * @param \UBL21\Common\UriEtsi\V132\OCSPIdentifierType $oCSPIdentifier
     * @return self
     */
    public function setOCSPIdentifier(\UBL21\Common\UriEtsi\V132\OCSPIdentifierType $oCSPIdentifier)
    {
        $this->oCSPIdentifier = $oCSPIdentifier;
        return $this;
    }

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
    public function setDigestAlgAndValue(?\UBL21\Common\UriEtsi\V132\DigestAlgAndValueType $digestAlgAndValue = null)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }
}

