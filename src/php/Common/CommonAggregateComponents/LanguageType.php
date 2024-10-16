<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing LanguageType
 *
 * ABIE
 *  Language. Details
 *  A class to describe a language.
 *  Language
 * XSD Type: LanguageType
 */
class LanguageType
{
    /**
     * BBIE
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\LocaleCode $localeCode
     */
    private $localeCode = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
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
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * BBIE
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
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
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
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
     * Gets as localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\LocaleCode
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Sets a new localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\LocaleCode $localeCode
     * @return self
     */
    public function setLocaleCode(?\UBL21\Common\CommonBasicComponents\LocaleCode $localeCode = null)
    {
        $this->localeCode = $localeCode;
        return $this;
    }
}

