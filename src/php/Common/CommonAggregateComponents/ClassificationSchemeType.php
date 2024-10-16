<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ClassificationSchemeType
 *
 * ABIE
 *  Classification Scheme. Details
 *  A class to define a classification scheme, such as a taxonomy for classifying goods or services.
 *  Classification Scheme
 * XSD Type: ClassificationSchemeType
 */
class ClassificationSchemeType
{
    /**
     * BBIE
     *  Classification Scheme. Identifier
     *  An identifier for this classification scheme.
     *  1
     *  Classification Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date on which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $lastRevisionDate
     */
    private $lastRevisionDate = null;

    /**
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $lastRevisionTime
     */
    private $lastRevisionTime = null;

    /**
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Classification Scheme. Name
     *  The name of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  UNSPSC
     *
     * @var \UBL21\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
     *
     * @var \UBL21\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  An identifier for the agency that maintains this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @var \UBL21\Common\CommonBasicComponents\AgencyID $agencyID
     */
    private $agencyID = null;

    /**
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AgencyName $agencyName
     */
    private $agencyName = null;

    /**
     * BBIE
     *  Classification Scheme. Version. Identifier
     *  An identifier for the version of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the documentation for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\SchemeURI $schemeURI
     */
    private $schemeURI = null;

    /**
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  An identifier for the language of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LanguageID $languageID
     */
    private $languageID = null;

    /**
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @var \UBL21\Common\CommonAggregateComponents\ClassificationCategory[] $classificationCategory
     */
    private $classificationCategory = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Classification Scheme. Identifier
     *  An identifier for this classification scheme.
     *  1
     *  Classification Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Classification Scheme. Identifier
     *  An identifier for this classification scheme.
     *  1
     *  Classification Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as uUID
     *
     * BBIE
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(?\UBL21\Common\CommonBasicComponents\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as lastRevisionDate
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date on which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLastRevisionDate()
    {
        return $this->lastRevisionDate;
    }

    /**
     * Sets a new lastRevisionDate
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date on which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $lastRevisionDate
     * @return self
     */
    public function setLastRevisionDate(\DateTime $lastRevisionDate = null)
    {
        $this->lastRevisionDate = $lastRevisionDate;
        return $this;
    }

    /**
     * Gets as lastRevisionTime
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getLastRevisionTime()
    {
        return $this->lastRevisionTime;
    }

    /**
     * Sets a new lastRevisionTime
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $lastRevisionTime
     * @return self
     */
    public function setLastRevisionTime(\DateTime $lastRevisionTime = null)
    {
        $this->lastRevisionTime = $lastRevisionTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\UBL21\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Classification Scheme. Name
     *  The name of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  UNSPSC
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
     *  Classification Scheme. Name
     *  The name of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  UNSPSC
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
     * Adds as description
     *
     * BBIE
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
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
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
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
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
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
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
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
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
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
     * Gets as agencyID
     *
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  An identifier for the agency that maintains this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @return \UBL21\Common\CommonBasicComponents\AgencyID
     */
    public function getAgencyID()
    {
        return $this->agencyID;
    }

    /**
     * Sets a new agencyID
     *
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  An identifier for the agency that maintains this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @param \UBL21\Common\CommonBasicComponents\AgencyID $agencyID
     * @return self
     */
    public function setAgencyID(?\UBL21\Common\CommonBasicComponents\AgencyID $agencyID = null)
    {
        $this->agencyID = $agencyID;
        return $this;
    }

    /**
     * Gets as agencyName
     *
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\AgencyName
     */
    public function getAgencyName()
    {
        return $this->agencyName;
    }

    /**
     * Sets a new agencyName
     *
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\AgencyName $agencyName
     * @return self
     */
    public function setAgencyName(?\UBL21\Common\CommonBasicComponents\AgencyName $agencyName = null)
    {
        $this->agencyName = $agencyName;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Classification Scheme. Version. Identifier
     *  An identifier for the version of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Classification Scheme. Version. Identifier
     *  An identifier for the version of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(?\UBL21\Common\CommonBasicComponents\VersionID $versionID = null)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the documentation for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the documentation for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\URI $uRI
     * @return self
     */
    public function setURI(?\UBL21\Common\CommonBasicComponents\URI $uRI = null)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as schemeURI
     *
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\SchemeURI
     */
    public function getSchemeURI()
    {
        return $this->schemeURI;
    }

    /**
     * Sets a new schemeURI
     *
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\SchemeURI $schemeURI
     * @return self
     */
    public function setSchemeURI(?\UBL21\Common\CommonBasicComponents\SchemeURI $schemeURI = null)
    {
        $this->schemeURI = $schemeURI;
        return $this;
    }

    /**
     * Gets as languageID
     *
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  An identifier for the language of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LanguageID
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  An identifier for the language of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LanguageID $languageID
     * @return self
     */
    public function setLanguageID(?\UBL21\Common\CommonBasicComponents\LanguageID $languageID = null)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * Adds as classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ClassificationCategory $classificationCategory
     */
    public function addToClassificationCategory(\UBL21\Common\CommonAggregateComponents\ClassificationCategory $classificationCategory)
    {
        $this->classificationCategory[] = $classificationCategory;
        return $this;
    }

    /**
     * isset classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassificationCategory($index)
    {
        return isset($this->classificationCategory[$index]);
    }

    /**
     * unset classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassificationCategory($index)
    {
        unset($this->classificationCategory[$index]);
    }

    /**
     * Gets as classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return \UBL21\Common\CommonAggregateComponents\ClassificationCategory[]
     */
    public function getClassificationCategory()
    {
        return $this->classificationCategory;
    }

    /**
     * Sets a new classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param \UBL21\Common\CommonAggregateComponents\ClassificationCategory[] $classificationCategory
     * @return self
     */
    public function setClassificationCategory(array $classificationCategory)
    {
        $this->classificationCategory = $classificationCategory;
        return $this;
    }
}

