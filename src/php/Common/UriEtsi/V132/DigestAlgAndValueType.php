<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing DigestAlgAndValueType
 *
 *
 * XSD Type: DigestAlgAndValueType
 */
class DigestAlgAndValueType
{
    /**
     * @var \UBL21\Common\Xmldsig\DigestMethod $digestMethod
     */
    private $digestMethod = null;

    /**
     * @var string $digestValue
     */
    private $digestValue = null;

    /**
     * Gets as digestMethod
     *
     * @return \UBL21\Common\Xmldsig\DigestMethod
     */
    public function getDigestMethod()
    {
        return $this->digestMethod;
    }

    /**
     * Sets a new digestMethod
     *
     * @param \UBL21\Common\Xmldsig\DigestMethod $digestMethod
     * @return self
     */
    public function setDigestMethod(\UBL21\Common\Xmldsig\DigestMethod $digestMethod)
    {
        $this->digestMethod = $digestMethod;
        return $this;
    }

    /**
     * Gets as digestValue
     *
     * @return string
     */
    public function getDigestValue()
    {
        return $this->digestValue;
    }

    /**
     * Sets a new digestValue
     *
     * @param string $digestValue
     * @return self
     */
    public function setDigestValue($digestValue)
    {
        $this->digestValue = $digestValue;
        return $this;
    }
}

