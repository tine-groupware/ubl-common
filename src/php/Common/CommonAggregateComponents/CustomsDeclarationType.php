<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing CustomsDeclarationType
 *
 * ABIE
 *  Customs Declaration. Details
 *  A class describing identifiers or references relating to customs procedures.
 *  Customs Declaration
 *  Movement Reference Number, Local Reference Number
 * XSD Type: CustomsDeclarationType
 */
class CustomsDeclarationType
{
    /**
     * BBIE
     *  Customs Declaration. Identifier
     *  An identifier associated with customs related procedures.
     *  1
     *  Customs Declaration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Customs Declaration. Issuer_ Party. Party
     *  Describes the party issuing the customs declaration.
     *  0..1
     *  Customs Declaration
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL21\Common\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Customs Declaration. Identifier
     *  An identifier associated with customs related procedures.
     *  1
     *  Customs Declaration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
     *
     * @return \UBL21\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Customs Declaration. Identifier
     *  An identifier associated with customs related procedures.
     *  1
     *  Customs Declaration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
     *
     * @param \UBL21\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\UBL21\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Customs Declaration. Issuer_ Party. Party
     *  Describes the party issuing the customs declaration.
     *  0..1
     *  Customs Declaration
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL21\Common\CommonAggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Customs Declaration. Issuer_ Party. Party
     *  Describes the party issuing the customs declaration.
     *  0..1
     *  Customs Declaration
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL21\Common\CommonAggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\UBL21\Common\CommonAggregateComponents\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }
}

