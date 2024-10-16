<?php

namespace UBL21\Common\Xmldsig;

/**
 * Class representing KeyInfoType
 *
 *
 * XSD Type: KeyInfoType
 */
class KeyInfoType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $keyName
     */
    private $keyName = null;

    /**
     * @var \UBL21\Common\Xmldsig\KeyValue $keyValue
     */
    private $keyValue = null;

    /**
     * @var \UBL21\Common\Xmldsig\RetrievalMethod $retrievalMethod
     */
    private $retrievalMethod = null;

    /**
     * @var \UBL21\Common\Xmldsig\X509Data $x509Data
     */
    private $x509Data = null;

    /**
     * @var \UBL21\Common\Xmldsig\PGPData $pGPData
     */
    private $pGPData = null;

    /**
     * @var \UBL21\Common\Xmldsig\SPKIData $sPKIData
     */
    private $sPKIData = null;

    /**
     * @var string $mgmtData
     */
    private $mgmtData = null;

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
     * Gets as keyName
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Sets a new keyName
     *
     * @param string $keyName
     * @return self
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as keyValue
     *
     * @return \UBL21\Common\Xmldsig\KeyValue
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }

    /**
     * Sets a new keyValue
     *
     * @param \UBL21\Common\Xmldsig\KeyValue $keyValue
     * @return self
     */
    public function setKeyValue(?\UBL21\Common\Xmldsig\KeyValue $keyValue = null)
    {
        $this->keyValue = $keyValue;
        return $this;
    }

    /**
     * Gets as retrievalMethod
     *
     * @return \UBL21\Common\Xmldsig\RetrievalMethod
     */
    public function getRetrievalMethod()
    {
        return $this->retrievalMethod;
    }

    /**
     * Sets a new retrievalMethod
     *
     * @param \UBL21\Common\Xmldsig\RetrievalMethod $retrievalMethod
     * @return self
     */
    public function setRetrievalMethod(?\UBL21\Common\Xmldsig\RetrievalMethod $retrievalMethod = null)
    {
        $this->retrievalMethod = $retrievalMethod;
        return $this;
    }

    /**
     * Gets as x509Data
     *
     * @return \UBL21\Common\Xmldsig\X509Data
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * Sets a new x509Data
     *
     * @param \UBL21\Common\Xmldsig\X509Data $x509Data
     * @return self
     */
    public function setX509Data(?\UBL21\Common\Xmldsig\X509Data $x509Data = null)
    {
        $this->x509Data = $x509Data;
        return $this;
    }

    /**
     * Gets as pGPData
     *
     * @return \UBL21\Common\Xmldsig\PGPData
     */
    public function getPGPData()
    {
        return $this->pGPData;
    }

    /**
     * Sets a new pGPData
     *
     * @param \UBL21\Common\Xmldsig\PGPData $pGPData
     * @return self
     */
    public function setPGPData(?\UBL21\Common\Xmldsig\PGPData $pGPData = null)
    {
        $this->pGPData = $pGPData;
        return $this;
    }

    /**
     * Gets as sPKIData
     *
     * @return \UBL21\Common\Xmldsig\SPKIData
     */
    public function getSPKIData()
    {
        return $this->sPKIData;
    }

    /**
     * Sets a new sPKIData
     *
     * @param \UBL21\Common\Xmldsig\SPKIData $sPKIData
     * @return self
     */
    public function setSPKIData(?\UBL21\Common\Xmldsig\SPKIData $sPKIData = null)
    {
        $this->sPKIData = $sPKIData;
        return $this;
    }

    /**
     * Gets as mgmtData
     *
     * @return string
     */
    public function getMgmtData()
    {
        return $this->mgmtData;
    }

    /**
     * Sets a new mgmtData
     *
     * @param string $mgmtData
     * @return self
     */
    public function setMgmtData($mgmtData)
    {
        $this->mgmtData = $mgmtData;
        return $this;
    }
}

