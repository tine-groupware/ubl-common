<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing QualifyingPropertiesType
 *
 *
 * XSD Type: QualifyingPropertiesType
 */
class QualifyingPropertiesType
{
    /**
     * @var string $target
     */
    private $target = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\SignedPropertiesType $signedProperties
     */
    private $signedProperties = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\UnsignedPropertiesType $unsignedProperties
     */
    private $unsignedProperties = null;

    /**
     * Gets as target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

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
     * Gets as signedProperties
     *
     * @return \UBL21\Common\UriEtsi\V132\SignedPropertiesType
     */
    public function getSignedProperties()
    {
        return $this->signedProperties;
    }

    /**
     * Sets a new signedProperties
     *
     * @param \UBL21\Common\UriEtsi\V132\SignedPropertiesType $signedProperties
     * @return self
     */
    public function setSignedProperties(?\UBL21\Common\UriEtsi\V132\SignedPropertiesType $signedProperties = null)
    {
        $this->signedProperties = $signedProperties;
        return $this;
    }

    /**
     * Gets as unsignedProperties
     *
     * @return \UBL21\Common\UriEtsi\V132\UnsignedPropertiesType
     */
    public function getUnsignedProperties()
    {
        return $this->unsignedProperties;
    }

    /**
     * Sets a new unsignedProperties
     *
     * @param \UBL21\Common\UriEtsi\V132\UnsignedPropertiesType $unsignedProperties
     * @return self
     */
    public function setUnsignedProperties(?\UBL21\Common\UriEtsi\V132\UnsignedPropertiesType $unsignedProperties = null)
    {
        $this->unsignedProperties = $unsignedProperties;
        return $this;
    }
}

