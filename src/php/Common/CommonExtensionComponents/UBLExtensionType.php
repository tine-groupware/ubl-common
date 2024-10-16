<?php

namespace UBL21\Common\CommonExtensionComponents;

/**
 * Class representing UBLExtensionType
 *
 * A single extension for private use.
 * XSD Type: UBLExtensionType
 */
class UBLExtensionType
{
    /**
     * An identifier for the Extension assigned by the creator of the extension.
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * A name for the Extension assigned by the creator of the extension.
     *
     * @var \UBL21\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * An agency that maintains one or more Extensions.
     *
     * @var \UBL21\Common\CommonExtensionComponents\ExtensionAgencyID $extensionAgencyID
     */
    private $extensionAgencyID = null;

    /**
     * The name of the agency that maintains the Extension.
     *
     * @var \UBL21\Common\CommonExtensionComponents\ExtensionAgencyName $extensionAgencyName
     */
    private $extensionAgencyName = null;

    /**
     * The version of the Extension.
     *
     * @var \UBL21\Common\CommonExtensionComponents\ExtensionVersionID $extensionVersionID
     */
    private $extensionVersionID = null;

    /**
     * A URI for the Agency that maintains the Extension.
     *
     * @var \UBL21\Common\CommonExtensionComponents\ExtensionAgencyURI $extensionAgencyURI
     */
    private $extensionAgencyURI = null;

    /**
     * A URI for the Extension.
     *
     * @var \UBL21\Common\CommonExtensionComponents\ExtensionURI $extensionURI
     */
    private $extensionURI = null;

    /**
     * A code for reason the Extension is being included.
     *
     * @var \UBL21\Common\CommonExtensionComponents\ExtensionReasonCode $extensionReasonCode
     */
    private $extensionReasonCode = null;

    /**
     * A description of the reason for the Extension.
     *
     * @var \UBL21\Common\CommonExtensionComponents\ExtensionReason $extensionReason
     */
    private $extensionReason = null;

    /**
     * The definition of the extension content.
     *
     * @var \UBL21\Common\CommonExtensionComponents\ExtensionContent $extensionContent
     */
    private $extensionContent = null;

    /**
     * Gets as iD
     *
     * An identifier for the Extension assigned by the creator of the extension.
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
     * An identifier for the Extension assigned by the creator of the extension.
     *
     * @param \UBL21\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\UBL21\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * A name for the Extension assigned by the creator of the extension.
     *
     * @return \UBL21\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name for the Extension assigned by the creator of the extension.
     *
     * @param \UBL21\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\UBL21\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @return \UBL21\Common\CommonExtensionComponents\ExtensionAgencyID
     */
    public function getExtensionAgencyID()
    {
        return $this->extensionAgencyID;
    }

    /**
     * Sets a new extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @param \UBL21\Common\CommonExtensionComponents\ExtensionAgencyID $extensionAgencyID
     * @return self
     */
    public function setExtensionAgencyID(?\UBL21\Common\CommonExtensionComponents\ExtensionAgencyID $extensionAgencyID = null)
    {
        $this->extensionAgencyID = $extensionAgencyID;
        return $this;
    }

    /**
     * Gets as extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @return \UBL21\Common\CommonExtensionComponents\ExtensionAgencyName
     */
    public function getExtensionAgencyName()
    {
        return $this->extensionAgencyName;
    }

    /**
     * Sets a new extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @param \UBL21\Common\CommonExtensionComponents\ExtensionAgencyName $extensionAgencyName
     * @return self
     */
    public function setExtensionAgencyName(?\UBL21\Common\CommonExtensionComponents\ExtensionAgencyName $extensionAgencyName = null)
    {
        $this->extensionAgencyName = $extensionAgencyName;
        return $this;
    }

    /**
     * Gets as extensionVersionID
     *
     * The version of the Extension.
     *
     * @return \UBL21\Common\CommonExtensionComponents\ExtensionVersionID
     */
    public function getExtensionVersionID()
    {
        return $this->extensionVersionID;
    }

    /**
     * Sets a new extensionVersionID
     *
     * The version of the Extension.
     *
     * @param \UBL21\Common\CommonExtensionComponents\ExtensionVersionID $extensionVersionID
     * @return self
     */
    public function setExtensionVersionID(?\UBL21\Common\CommonExtensionComponents\ExtensionVersionID $extensionVersionID = null)
    {
        $this->extensionVersionID = $extensionVersionID;
        return $this;
    }

    /**
     * Gets as extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @return \UBL21\Common\CommonExtensionComponents\ExtensionAgencyURI
     */
    public function getExtensionAgencyURI()
    {
        return $this->extensionAgencyURI;
    }

    /**
     * Sets a new extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @param \UBL21\Common\CommonExtensionComponents\ExtensionAgencyURI $extensionAgencyURI
     * @return self
     */
    public function setExtensionAgencyURI(?\UBL21\Common\CommonExtensionComponents\ExtensionAgencyURI $extensionAgencyURI = null)
    {
        $this->extensionAgencyURI = $extensionAgencyURI;
        return $this;
    }

    /**
     * Gets as extensionURI
     *
     * A URI for the Extension.
     *
     * @return \UBL21\Common\CommonExtensionComponents\ExtensionURI
     */
    public function getExtensionURI()
    {
        return $this->extensionURI;
    }

    /**
     * Sets a new extensionURI
     *
     * A URI for the Extension.
     *
     * @param \UBL21\Common\CommonExtensionComponents\ExtensionURI $extensionURI
     * @return self
     */
    public function setExtensionURI(?\UBL21\Common\CommonExtensionComponents\ExtensionURI $extensionURI = null)
    {
        $this->extensionURI = $extensionURI;
        return $this;
    }

    /**
     * Gets as extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @return \UBL21\Common\CommonExtensionComponents\ExtensionReasonCode
     */
    public function getExtensionReasonCode()
    {
        return $this->extensionReasonCode;
    }

    /**
     * Sets a new extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @param \UBL21\Common\CommonExtensionComponents\ExtensionReasonCode $extensionReasonCode
     * @return self
     */
    public function setExtensionReasonCode(?\UBL21\Common\CommonExtensionComponents\ExtensionReasonCode $extensionReasonCode = null)
    {
        $this->extensionReasonCode = $extensionReasonCode;
        return $this;
    }

    /**
     * Gets as extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @return \UBL21\Common\CommonExtensionComponents\ExtensionReason
     */
    public function getExtensionReason()
    {
        return $this->extensionReason;
    }

    /**
     * Sets a new extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @param \UBL21\Common\CommonExtensionComponents\ExtensionReason $extensionReason
     * @return self
     */
    public function setExtensionReason(?\UBL21\Common\CommonExtensionComponents\ExtensionReason $extensionReason = null)
    {
        $this->extensionReason = $extensionReason;
        return $this;
    }

    /**
     * Gets as extensionContent
     *
     * The definition of the extension content.
     *
     * @return \UBL21\Common\CommonExtensionComponents\ExtensionContent
     */
    public function getExtensionContent()
    {
        return $this->extensionContent;
    }

    /**
     * Sets a new extensionContent
     *
     * The definition of the extension content.
     *
     * @param \UBL21\Common\CommonExtensionComponents\ExtensionContent $extensionContent
     * @return self
     */
    public function setExtensionContent(\UBL21\Common\CommonExtensionComponents\ExtensionContent $extensionContent)
    {
        $this->extensionContent = $extensionContent;
        return $this;
    }
}

