<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing RegulationType
 *
 * ABIE
 *  Regulation. Details
 *  A class to describe a regulation.
 *  Regulation
 *  Points to regulation at atomic level
 * XSD Type: RegulationType
 */
class RegulationType
{
    /**
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @var \UBL21\Common\CommonBasicComponents\LegalReference $legalReference
     */
    private $legalReference = null;

    /**
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\OntologyURI $ontologyURI
     */
    private $ontologyURI = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
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
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(\UBL21\Common\CommonBasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as legalReference
     *
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @return \UBL21\Common\CommonBasicComponents\LegalReference
     */
    public function getLegalReference()
    {
        return $this->legalReference;
    }

    /**
     * Sets a new legalReference
     *
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @param \UBL21\Common\CommonBasicComponents\LegalReference $legalReference
     * @return self
     */
    public function setLegalReference(?\UBL21\Common\CommonBasicComponents\LegalReference $legalReference = null)
    {
        $this->legalReference = $legalReference;
        return $this;
    }

    /**
     * Gets as ontologyURI
     *
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\OntologyURI
     */
    public function getOntologyURI()
    {
        return $this->ontologyURI;
    }

    /**
     * Sets a new ontologyURI
     *
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\OntologyURI $ontologyURI
     * @return self
     */
    public function setOntologyURI(?\UBL21\Common\CommonBasicComponents\OntologyURI $ontologyURI = null)
    {
        $this->ontologyURI = $ontologyURI;
        return $this;
    }
}

