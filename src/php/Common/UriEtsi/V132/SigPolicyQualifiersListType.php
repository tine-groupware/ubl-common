<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing SigPolicyQualifiersListType
 *
 *
 * XSD Type: SigPolicyQualifiersListType
 */
class SigPolicyQualifiersListType
{
    /**
     * @var \UBL21\Common\UriEtsi\V132\AnyType[] $sigPolicyQualifier
     */
    private $sigPolicyQualifier = [
        
    ];

    /**
     * Adds as sigPolicyQualifier
     *
     * @return self
     * @param \UBL21\Common\UriEtsi\V132\AnyType $sigPolicyQualifier
     */
    public function addToSigPolicyQualifier(\UBL21\Common\UriEtsi\V132\AnyType $sigPolicyQualifier)
    {
        $this->sigPolicyQualifier[] = $sigPolicyQualifier;
        return $this;
    }

    /**
     * isset sigPolicyQualifier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigPolicyQualifier($index)
    {
        return isset($this->sigPolicyQualifier[$index]);
    }

    /**
     * unset sigPolicyQualifier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigPolicyQualifier($index)
    {
        unset($this->sigPolicyQualifier[$index]);
    }

    /**
     * Gets as sigPolicyQualifier
     *
     * @return \UBL21\Common\UriEtsi\V132\AnyType[]
     */
    public function getSigPolicyQualifier()
    {
        return $this->sigPolicyQualifier;
    }

    /**
     * Sets a new sigPolicyQualifier
     *
     * @param \UBL21\Common\UriEtsi\V132\AnyType[] $sigPolicyQualifier
     * @return self
     */
    public function setSigPolicyQualifier(array $sigPolicyQualifier)
    {
        $this->sigPolicyQualifier = $sigPolicyQualifier;
        return $this;
    }
}

