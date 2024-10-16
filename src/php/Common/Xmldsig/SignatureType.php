<?php

namespace UBL21\Common\Xmldsig;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \UBL21\Common\Xmldsig\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @var \UBL21\Common\Xmldsig\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @var \UBL21\Common\Xmldsig\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @var \UBL21\Common\Xmldsig\ObjectXsd[] $object
     */
    private $object = [
        
    ];

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
     * Gets as signedInfo
     *
     * @return \UBL21\Common\Xmldsig\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \UBL21\Common\Xmldsig\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\UBL21\Common\Xmldsig\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \UBL21\Common\Xmldsig\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \UBL21\Common\Xmldsig\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\UBL21\Common\Xmldsig\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \UBL21\Common\Xmldsig\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \UBL21\Common\Xmldsig\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(?\UBL21\Common\Xmldsig\KeyInfo $keyInfo = null)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \UBL21\Common\Xmldsig\ObjectXsd $object
     */
    public function addToObject(\UBL21\Common\Xmldsig\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \UBL21\Common\Xmldsig\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \UBL21\Common\Xmldsig\ObjectXsd[] $object
     * @return self
     */
    public function setObject(array $object = null)
    {
        $this->object = $object;
        return $this;
    }
}

