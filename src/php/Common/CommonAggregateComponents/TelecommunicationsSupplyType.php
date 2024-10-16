<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing TelecommunicationsSupplyType
 *
 * ABIE
 *  Telecommunications Supply. Details
 *  A class describing the supply of a telecommunication service, e.g., providing telephone calls.
 *  Telecommunications Supply
 * XSD Type: TelecommunicationsSupplyType
 */
class TelecommunicationsSupplyType
{
    /**
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @var \UBL21\Common\CommonBasicComponents\TelecommunicationsSupplyType $telecommunicationsSupplyType
     */
    private $telecommunicationsSupplyType = null;

    /**
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @var \UBL21\Common\CommonBasicComponents\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode
     */
    private $telecommunicationsSupplyTypeCode = null;

    /**
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @var \UBL21\Common\CommonBasicComponents\PrivacyCode $privacyCode
     */
    private $privacyCode = null;

    /**
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @var \UBL21\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\TotalAmount $totalAmount
     */
    private $totalAmount = null;

    /**
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @var \UBL21\Common\CommonAggregateComponents\TelecommunicationsSupplyLine[] $telecommunicationsSupplyLine
     */
    private $telecommunicationsSupplyLine = [
        
    ];

    /**
     * Gets as telecommunicationsSupplyType
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @return \UBL21\Common\CommonBasicComponents\TelecommunicationsSupplyType
     */
    public function getTelecommunicationsSupplyType()
    {
        return $this->telecommunicationsSupplyType;
    }

    /**
     * Sets a new telecommunicationsSupplyType
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @param \UBL21\Common\CommonBasicComponents\TelecommunicationsSupplyType $telecommunicationsSupplyType
     * @return self
     */
    public function setTelecommunicationsSupplyType(?\UBL21\Common\CommonBasicComponents\TelecommunicationsSupplyType $telecommunicationsSupplyType = null)
    {
        $this->telecommunicationsSupplyType = $telecommunicationsSupplyType;
        return $this;
    }

    /**
     * Gets as telecommunicationsSupplyTypeCode
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @return \UBL21\Common\CommonBasicComponents\TelecommunicationsSupplyTypeCode
     */
    public function getTelecommunicationsSupplyTypeCode()
    {
        return $this->telecommunicationsSupplyTypeCode;
    }

    /**
     * Sets a new telecommunicationsSupplyTypeCode
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @param \UBL21\Common\CommonBasicComponents\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode
     * @return self
     */
    public function setTelecommunicationsSupplyTypeCode(?\UBL21\Common\CommonBasicComponents\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode = null)
    {
        $this->telecommunicationsSupplyTypeCode = $telecommunicationsSupplyTypeCode;
        return $this;
    }

    /**
     * Gets as privacyCode
     *
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @return \UBL21\Common\CommonBasicComponents\PrivacyCode
     */
    public function getPrivacyCode()
    {
        return $this->privacyCode;
    }

    /**
     * Sets a new privacyCode
     *
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @param \UBL21\Common\CommonBasicComponents\PrivacyCode $privacyCode
     * @return self
     */
    public function setPrivacyCode(\UBL21\Common\CommonBasicComponents\PrivacyCode $privacyCode)
    {
        $this->privacyCode = $privacyCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\UBL21\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @return \UBL21\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @param \UBL21\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\TotalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\TotalAmount $totalAmount
     * @return self
     */
    public function setTotalAmount(?\UBL21\Common\CommonBasicComponents\TotalAmount $totalAmount = null)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Adds as telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\TelecommunicationsSupplyLine $telecommunicationsSupplyLine
     */
    public function addToTelecommunicationsSupplyLine(\UBL21\Common\CommonAggregateComponents\TelecommunicationsSupplyLine $telecommunicationsSupplyLine)
    {
        $this->telecommunicationsSupplyLine[] = $telecommunicationsSupplyLine;
        return $this;
    }

    /**
     * isset telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelecommunicationsSupplyLine($index)
    {
        return isset($this->telecommunicationsSupplyLine[$index]);
    }

    /**
     * unset telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelecommunicationsSupplyLine($index)
    {
        unset($this->telecommunicationsSupplyLine[$index]);
    }

    /**
     * Gets as telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @return \UBL21\Common\CommonAggregateComponents\TelecommunicationsSupplyLine[]
     */
    public function getTelecommunicationsSupplyLine()
    {
        return $this->telecommunicationsSupplyLine;
    }

    /**
     * Sets a new telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param \UBL21\Common\CommonAggregateComponents\TelecommunicationsSupplyLine[] $telecommunicationsSupplyLine
     * @return self
     */
    public function setTelecommunicationsSupplyLine(array $telecommunicationsSupplyLine)
    {
        $this->telecommunicationsSupplyLine = $telecommunicationsSupplyLine;
        return $this;
    }
}

