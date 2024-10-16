<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing SignedPropertiesType
 *
 *
 * XSD Type: SignedPropertiesType
 */
class SignedPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\SignedSignaturePropertiesType $signedSignatureProperties
     */
    private $signedSignatureProperties = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\SignedDataObjectPropertiesType $signedDataObjectProperties
     */
    private $signedDataObjectProperties = null;

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
     * Gets as signedSignatureProperties
     *
     * @return \UBL21\Common\UriEtsi\V132\SignedSignaturePropertiesType
     */
    public function getSignedSignatureProperties()
    {
        return $this->signedSignatureProperties;
    }

    /**
     * Sets a new signedSignatureProperties
     *
     * @param \UBL21\Common\UriEtsi\V132\SignedSignaturePropertiesType $signedSignatureProperties
     * @return self
     */
    public function setSignedSignatureProperties(?\UBL21\Common\UriEtsi\V132\SignedSignaturePropertiesType $signedSignatureProperties = null)
    {
        $this->signedSignatureProperties = $signedSignatureProperties;
        return $this;
    }

    /**
     * Gets as signedDataObjectProperties
     *
     * @return \UBL21\Common\UriEtsi\V132\SignedDataObjectPropertiesType
     */
    public function getSignedDataObjectProperties()
    {
        return $this->signedDataObjectProperties;
    }

    /**
     * Sets a new signedDataObjectProperties
     *
     * @param \UBL21\Common\UriEtsi\V132\SignedDataObjectPropertiesType $signedDataObjectProperties
     * @return self
     */
    public function setSignedDataObjectProperties(?\UBL21\Common\UriEtsi\V132\SignedDataObjectPropertiesType $signedDataObjectProperties = null)
    {
        $this->signedDataObjectProperties = $signedDataObjectProperties;
        return $this;
    }
}

