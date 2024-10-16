<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ClassificationCategoryType
 *
 * ABIE
 *  Classification Category. Details
 *  A class to define a category within a classification scheme.
 *  Classification Category
 * XSD Type: ClassificationCategoryType
 */
class ClassificationCategoryType
{
    /**
     * BBIE
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
     *
     * @var \UBL21\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @var \UBL21\Common\CommonBasicComponents\CodeValue $codeValue
     */
    private $codeValue = null;

    /**
     * BBIE
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
     *
     * @var \UBL21\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @var \UBL21\Common\CommonAggregateComponents\CategorizesClassificationCategory[] $categorizesClassificationCategory
     */
    private $categorizesClassificationCategory = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
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
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
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
     * Gets as codeValue
     *
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @return \UBL21\Common\CommonBasicComponents\CodeValue
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * Sets a new codeValue
     *
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @param \UBL21\Common\CommonBasicComponents\CodeValue $codeValue
     * @return self
     */
    public function setCodeValue(?\UBL21\Common\CommonBasicComponents\CodeValue $codeValue = null)
    {
        $this->codeValue = $codeValue;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     * Adds as categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\CategorizesClassificationCategory $categorizesClassificationCategory
     */
    public function addToCategorizesClassificationCategory(\UBL21\Common\CommonAggregateComponents\CategorizesClassificationCategory $categorizesClassificationCategory)
    {
        $this->categorizesClassificationCategory[] = $categorizesClassificationCategory;
        return $this;
    }

    /**
     * isset categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategorizesClassificationCategory($index)
    {
        return isset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * unset categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategorizesClassificationCategory($index)
    {
        unset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * Gets as categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return \UBL21\Common\CommonAggregateComponents\CategorizesClassificationCategory[]
     */
    public function getCategorizesClassificationCategory()
    {
        return $this->categorizesClassificationCategory;
    }

    /**
     * Sets a new categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param \UBL21\Common\CommonAggregateComponents\CategorizesClassificationCategory[] $categorizesClassificationCategory
     * @return self
     */
    public function setCategorizesClassificationCategory(array $categorizesClassificationCategory = null)
    {
        $this->categorizesClassificationCategory = $categorizesClassificationCategory;
        return $this;
    }
}

