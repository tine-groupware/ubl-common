<?php

namespace UBL21\Common\UriEtsi\V132;

/**
 * Class representing ObjectIdentifierType
 *
 *
 * XSD Type: ObjectIdentifierType
 */
class ObjectIdentifierType
{
    /**
     * @var \UBL21\Common\UriEtsi\V132\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var \UBL21\Common\UriEtsi\V132\DocumentationReferencesType $documentationReferences
     */
    private $documentationReferences = null;

    /**
     * Gets as identifier
     *
     * @return \UBL21\Common\UriEtsi\V132\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * @param \UBL21\Common\UriEtsi\V132\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\UBL21\Common\UriEtsi\V132\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as documentationReferences
     *
     * @return \UBL21\Common\UriEtsi\V132\DocumentationReferencesType
     */
    public function getDocumentationReferences()
    {
        return $this->documentationReferences;
    }

    /**
     * Sets a new documentationReferences
     *
     * @param \UBL21\Common\UriEtsi\V132\DocumentationReferencesType $documentationReferences
     * @return self
     */
    public function setDocumentationReferences(?\UBL21\Common\UriEtsi\V132\DocumentationReferencesType $documentationReferences = null)
    {
        $this->documentationReferences = $documentationReferences;
        return $this;
    }
}

