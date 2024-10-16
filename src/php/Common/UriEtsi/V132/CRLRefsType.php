<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing CRLRefsType
 *
 *
 * XSD Type: CRLRefsType
 */
class CRLRefsType
{
    /**
     * @var \UBL21\Common\UriEtsi\V132\CRLRefType[] $cRLRef
     */
    private $cRLRef = [
        
    ];

    /**
     * Adds as cRLRef
     *
     * @return self
     * @param \UBL21\Common\UriEtsi\V132\CRLRefType $cRLRef
     */
    public function addToCRLRef(\UBL21\Common\UriEtsi\V132\CRLRefType $cRLRef)
    {
        $this->cRLRef[] = $cRLRef;
        return $this;
    }

    /**
     * isset cRLRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCRLRef($index)
    {
        return isset($this->cRLRef[$index]);
    }

    /**
     * unset cRLRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCRLRef($index)
    {
        unset($this->cRLRef[$index]);
    }

    /**
     * Gets as cRLRef
     *
     * @return \UBL21\Common\UriEtsi\V132\CRLRefType[]
     */
    public function getCRLRef()
    {
        return $this->cRLRef;
    }

    /**
     * Sets a new cRLRef
     *
     * @param \UBL21\Common\UriEtsi\V132\CRLRefType[] $cRLRef
     * @return self
     */
    public function setCRLRef(array $cRLRef)
    {
        $this->cRLRef = $cRLRef;
        return $this;
    }
}

