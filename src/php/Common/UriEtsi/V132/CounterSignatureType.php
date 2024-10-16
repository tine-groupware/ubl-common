<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing CounterSignatureType
 *
 *
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{
    /**
     * @var \UBL21\Common\Xmldsig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as signature
     *
     * @return \UBL21\Common\Xmldsig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \UBL21\Common\Xmldsig\Signature $signature
     * @return self
     */
    public function setSignature(\UBL21\Common\Xmldsig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }
}

