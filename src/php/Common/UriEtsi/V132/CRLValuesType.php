<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing CRLValuesType
 *
 *
 * XSD Type: CRLValuesType
 */
class CRLValuesType
{
    /**
     * @var \UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType[] $encapsulatedCRLValue
     */
    private $encapsulatedCRLValue = [
        
    ];

    /**
     * Adds as encapsulatedCRLValue
     *
     * @return self
     * @param \UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType $encapsulatedCRLValue
     */
    public function addToEncapsulatedCRLValue(\UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType $encapsulatedCRLValue)
    {
        $this->encapsulatedCRLValue[] = $encapsulatedCRLValue;
        return $this;
    }

    /**
     * isset encapsulatedCRLValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedCRLValue($index)
    {
        return isset($this->encapsulatedCRLValue[$index]);
    }

    /**
     * unset encapsulatedCRLValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedCRLValue($index)
    {
        unset($this->encapsulatedCRLValue[$index]);
    }

    /**
     * Gets as encapsulatedCRLValue
     *
     * @return \UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedCRLValue()
    {
        return $this->encapsulatedCRLValue;
    }

    /**
     * Sets a new encapsulatedCRLValue
     *
     * @param \UBL21\Common\UriEtsi\V132\EncapsulatedPKIDataType[] $encapsulatedCRLValue
     * @return self
     */
    public function setEncapsulatedCRLValue(array $encapsulatedCRLValue)
    {
        $this->encapsulatedCRLValue = $encapsulatedCRLValue;
        return $this;
    }
}

