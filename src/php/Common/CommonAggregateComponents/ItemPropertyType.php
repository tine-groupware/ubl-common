<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ItemPropertyType
 *
 * ABIE
 *  Item Property. Details
 *  A class to describe a specific property of an item.
 *  Item Property
 * XSD Type: ItemPropertyType
 */
class ItemPropertyType
{
    /**
     * BBIE
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @var \UBL21\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\NameCode $nameCode
     */
    private $nameCode = null;

    /**
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \UBL21\Common\CommonBasicComponents\TestMethod $testMethod
     */
    private $testMethod = null;

    /**
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \UBL21\Common\CommonBasicComponents\Value $value
     */
    private $value = null;

    /**
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ValueQualifier[] $valueQualifier
     */
    private $valueQualifier = [
        
    ];

    /**
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ImportanceCode $importanceCode
     */
    private $importanceCode = null;

    /**
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ListValue[] $listValue
     */
    private $listValue = [
        
    ];

    /**
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\UsabilityPeriod $usabilityPeriod
     */
    private $usabilityPeriod = null;

    /**
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @var \UBL21\Common\CommonAggregateComponents\ItemPropertyGroup[] $itemPropertyGroup
     */
    private $itemPropertyGroup = [
        
    ];

    /**
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \UBL21\Common\CommonAggregateComponents\RangeDimension $rangeDimension
     */
    private $rangeDimension = null;

    /**
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @var \UBL21\Common\CommonAggregateComponents\ItemPropertyRange $itemPropertyRange
     */
    private $itemPropertyRange = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
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
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
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
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
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
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
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
     * Gets as nameCode
     *
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\NameCode
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }

    /**
     * Sets a new nameCode
     *
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\NameCode $nameCode
     * @return self
     */
    public function setNameCode(?\UBL21\Common\CommonBasicComponents\NameCode $nameCode = null)
    {
        $this->nameCode = $nameCode;
        return $this;
    }

    /**
     * Gets as testMethod
     *
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \UBL21\Common\CommonBasicComponents\TestMethod
     */
    public function getTestMethod()
    {
        return $this->testMethod;
    }

    /**
     * Sets a new testMethod
     *
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param \UBL21\Common\CommonBasicComponents\TestMethod $testMethod
     * @return self
     */
    public function setTestMethod(?\UBL21\Common\CommonBasicComponents\TestMethod $testMethod = null)
    {
        $this->testMethod = $testMethod;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \UBL21\Common\CommonBasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param \UBL21\Common\CommonBasicComponents\Value $value
     * @return self
     */
    public function setValue(?\UBL21\Common\CommonBasicComponents\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\UBL21\Common\CommonBasicComponents\ValueQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\ValueQualifier $valueQualifier
     */
    public function addToValueQualifier(\UBL21\Common\CommonBasicComponents\ValueQualifier $valueQualifier)
    {
        $this->valueQualifier[] = $valueQualifier;
        return $this;
    }

    /**
     * isset valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueQualifier($index)
    {
        return isset($this->valueQualifier[$index]);
    }

    /**
     * unset valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueQualifier($index)
    {
        unset($this->valueQualifier[$index]);
    }

    /**
     * Gets as valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ValueQualifier[]
     */
    public function getValueQualifier()
    {
        return $this->valueQualifier;
    }

    /**
     * Sets a new valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ValueQualifier[] $valueQualifier
     * @return self
     */
    public function setValueQualifier(array $valueQualifier = null)
    {
        $this->valueQualifier = $valueQualifier;
        return $this;
    }

    /**
     * Gets as importanceCode
     *
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ImportanceCode
     */
    public function getImportanceCode()
    {
        return $this->importanceCode;
    }

    /**
     * Sets a new importanceCode
     *
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ImportanceCode $importanceCode
     * @return self
     */
    public function setImportanceCode(?\UBL21\Common\CommonBasicComponents\ImportanceCode $importanceCode = null)
    {
        $this->importanceCode = $importanceCode;
        return $this;
    }

    /**
     * Adds as listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\ListValue $listValue
     */
    public function addToListValue(\UBL21\Common\CommonBasicComponents\ListValue $listValue)
    {
        $this->listValue[] = $listValue;
        return $this;
    }

    /**
     * isset listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListValue($index)
    {
        return isset($this->listValue[$index]);
    }

    /**
     * unset listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListValue($index)
    {
        unset($this->listValue[$index]);
    }

    /**
     * Gets as listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ListValue[]
     */
    public function getListValue()
    {
        return $this->listValue;
    }

    /**
     * Sets a new listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ListValue[] $listValue
     * @return self
     */
    public function setListValue(array $listValue = null)
    {
        $this->listValue = $listValue;
        return $this;
    }

    /**
     * Gets as usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\UsabilityPeriod
     */
    public function getUsabilityPeriod()
    {
        return $this->usabilityPeriod;
    }

    /**
     * Sets a new usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\UsabilityPeriod $usabilityPeriod
     * @return self
     */
    public function setUsabilityPeriod(?\UBL21\Common\CommonAggregateComponents\UsabilityPeriod $usabilityPeriod = null)
    {
        $this->usabilityPeriod = $usabilityPeriod;
        return $this;
    }

    /**
     * Adds as itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\ItemPropertyGroup $itemPropertyGroup
     */
    public function addToItemPropertyGroup(\UBL21\Common\CommonAggregateComponents\ItemPropertyGroup $itemPropertyGroup)
    {
        $this->itemPropertyGroup[] = $itemPropertyGroup;
        return $this;
    }

    /**
     * isset itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemPropertyGroup($index)
    {
        return isset($this->itemPropertyGroup[$index]);
    }

    /**
     * unset itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemPropertyGroup($index)
    {
        unset($this->itemPropertyGroup[$index]);
    }

    /**
     * Gets as itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @return \UBL21\Common\CommonAggregateComponents\ItemPropertyGroup[]
     */
    public function getItemPropertyGroup()
    {
        return $this->itemPropertyGroup;
    }

    /**
     * Sets a new itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param \UBL21\Common\CommonAggregateComponents\ItemPropertyGroup[] $itemPropertyGroup
     * @return self
     */
    public function setItemPropertyGroup(array $itemPropertyGroup = null)
    {
        $this->itemPropertyGroup = $itemPropertyGroup;
        return $this;
    }

    /**
     * Gets as rangeDimension
     *
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \UBL21\Common\CommonAggregateComponents\RangeDimension
     */
    public function getRangeDimension()
    {
        return $this->rangeDimension;
    }

    /**
     * Sets a new rangeDimension
     *
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \UBL21\Common\CommonAggregateComponents\RangeDimension $rangeDimension
     * @return self
     */
    public function setRangeDimension(?\UBL21\Common\CommonAggregateComponents\RangeDimension $rangeDimension = null)
    {
        $this->rangeDimension = $rangeDimension;
        return $this;
    }

    /**
     * Gets as itemPropertyRange
     *
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @return \UBL21\Common\CommonAggregateComponents\ItemPropertyRange
     */
    public function getItemPropertyRange()
    {
        return $this->itemPropertyRange;
    }

    /**
     * Sets a new itemPropertyRange
     *
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @param \UBL21\Common\CommonAggregateComponents\ItemPropertyRange $itemPropertyRange
     * @return self
     */
    public function setItemPropertyRange(?\UBL21\Common\CommonAggregateComponents\ItemPropertyRange $itemPropertyRange = null)
    {
        $this->itemPropertyRange = $itemPropertyRange;
        return $this;
    }
}

