<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing CertificateValuesType
 *
 *
 * XSD Type: CertificateValuesType
 */
class CertificateValuesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType $encapsulatedX509Certificate
     */
    private $encapsulatedX509Certificate = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\AnyType $otherCertificate
     */
    private $otherCertificate = null;

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
     * Gets as encapsulatedX509Certificate
     *
     * @return \UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType
     */
    public function getEncapsulatedX509Certificate()
    {
        return $this->encapsulatedX509Certificate;
    }

    /**
     * Sets a new encapsulatedX509Certificate
     *
     * @param \UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType $encapsulatedX509Certificate
     * @return self
     */
    public function setEncapsulatedX509Certificate(?\UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType $encapsulatedX509Certificate = null)
    {
        $this->encapsulatedX509Certificate = $encapsulatedX509Certificate;
        return $this;
    }

    /**
     * Gets as otherCertificate
     *
     * @return \UBL21\Common\UriEtsi\V132\AnyType
     */
    public function getOtherCertificate()
    {
        return $this->otherCertificate;
    }

    /**
     * Sets a new otherCertificate
     *
     * @param \UBL21\Common\UriEtsi\V132\AnyType $otherCertificate
     * @return self
     */
    public function setOtherCertificate(?\UBL21\Common\UriEtsi\V132\AnyType $otherCertificate = null)
    {
        $this->otherCertificate = $otherCertificate;
        return $this;
    }
}

