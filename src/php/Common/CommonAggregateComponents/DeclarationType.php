<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing DeclarationType
 *
 * ABIE
 *  Declaration. Details
 *  A class to describe a declaration by an economic operator of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
 *  Declaration
 * XSD Type: DeclarationType
 */
class DeclarationType
{
    /**
     * BBIE
     *  Declaration. Name
     *  The name of this declaration.
     *  0..n
     *  Declaration
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * BBIE
     *  Declaration. Declaration Type Code. Code
     *  A code signifying the type of this declaration.
     *  0..1
     *  Declaration
     *  Declaration Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\DeclarationTypeCode $declarationTypeCode
     */
    private $declarationTypeCode = null;

    /**
     * BBIE
     *  Declaration. Description. Text
     *  Text describing this declaration.
     *  0..n
     *  Declaration
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Declaration. Evidence Supplied
     *  The evidence supporting this declaration.
     *  0..n
     *  Declaration
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @var \UBL21\Common\CommonAggregateComponents\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * Adds as name
     *
     * BBIE
     *  Declaration. Name
     *  The name of this declaration.
     *  0..n
     *  Declaration
     *  Name
     *  Name
     *  Name. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Name $name
     */
    public function addToName(\UBL21\Common\CommonBasicComponents\Name $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * BBIE
     *  Declaration. Name
     *  The name of this declaration.
     *  0..n
     *  Declaration
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * BBIE
     *  Declaration. Name
     *  The name of this declaration.
     *  0..n
     *  Declaration
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Declaration. Name
     *  The name of this declaration.
     *  0..n
     *  Declaration
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Name[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Declaration. Name
     *  The name of this declaration.
     *  0..n
     *  Declaration
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Name[] $name
     * @return self
     */
    public function setName(array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as declarationTypeCode
     *
     * BBIE
     *  Declaration. Declaration Type Code. Code
     *  A code signifying the type of this declaration.
     *  0..1
     *  Declaration
     *  Declaration Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\DeclarationTypeCode
     */
    public function getDeclarationTypeCode()
    {
        return $this->declarationTypeCode;
    }

    /**
     * Sets a new declarationTypeCode
     *
     * BBIE
     *  Declaration. Declaration Type Code. Code
     *  A code signifying the type of this declaration.
     *  0..1
     *  Declaration
     *  Declaration Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\DeclarationTypeCode $declarationTypeCode
     * @return self
     */
    public function setDeclarationTypeCode(?\UBL21\Common\CommonBasicComponents\DeclarationTypeCode $declarationTypeCode = null)
    {
        $this->declarationTypeCode = $declarationTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Declaration. Description. Text
     *  Text describing this declaration.
     *  0..n
     *  Declaration
     *  Description
     *  Text
     *  Text. Type
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
     *  Declaration. Description. Text
     *  Text describing this declaration.
     *  0..n
     *  Declaration
     *  Description
     *  Text
     *  Text. Type
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
     *  Declaration. Description. Text
     *  Text describing this declaration.
     *  0..n
     *  Declaration
     *  Description
     *  Text
     *  Text. Type
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
     *  Declaration. Description. Text
     *  Text describing this declaration.
     *  0..n
     *  Declaration
     *  Description
     *  Text
     *  Text. Type
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
     *  Declaration. Description. Text
     *  Text describing this declaration.
     *  0..n
     *  Declaration
     *  Description
     *  Text
     *  Text. Type
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
     * Adds as evidenceSupplied
     *
     * ASBIE
     *  Declaration. Evidence Supplied
     *  The evidence supporting this declaration.
     *  0..n
     *  Declaration
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\UBL21\Common\CommonAggregateComponents\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * ASBIE
     *  Declaration. Evidence Supplied
     *  The evidence supporting this declaration.
     *  0..n
     *  Declaration
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * ASBIE
     *  Declaration. Evidence Supplied
     *  The evidence supporting this declaration.
     *  0..n
     *  Declaration
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * ASBIE
     *  Declaration. Evidence Supplied
     *  The evidence supporting this declaration.
     *  0..n
     *  Declaration
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return \UBL21\Common\CommonAggregateComponents\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * ASBIE
     *  Declaration. Evidence Supplied
     *  The evidence supporting this declaration.
     *  0..n
     *  Declaration
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param \UBL21\Common\CommonAggregateComponents\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(array $evidenceSupplied = null)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }
}

