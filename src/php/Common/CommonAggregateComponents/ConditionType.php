<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing ConditionType
 *
 * ABIE
 *  Condition. Details
 *  A class to define a measurable condition of an object.
 *  Condition
 * XSD Type: ConditionType
 */
class ConditionType
{
    /**
     * BBIE
     *  Condition. Attribute Identifier. Identifier
     *  An identifier for the attribute that applies to the condition.
     *  1
     *  Condition
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Condition. Measure
     *  The measurement value.
     *  0..1
     *  Condition
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Condition. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement for this condition.
     *  0..1
     *  Condition
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MinimumMeasure $minimumMeasure
     */
    private $minimumMeasure = null;

    /**
     * BBIE
     *  Condition. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement for this condition.
     *  0..1
     *  Condition
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MaximumMeasure $maximumMeasure
     */
    private $maximumMeasure = null;

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Condition. Attribute Identifier. Identifier
     *  An identifier for the attribute that applies to the condition.
     *  1
     *  Condition
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Condition. Attribute Identifier. Identifier
     *  An identifier for the attribute that applies to the condition.
     *  1
     *  Condition
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\UBL21\Common\CommonBasicComponents\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as measure
     *
     * BBIE
     *  Condition. Measure
     *  The measurement value.
     *  0..1
     *  Condition
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * BBIE
     *  Condition. Measure
     *  The measurement value.
     *  0..1
     *  Condition
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Measure $measure
     * @return self
     */
    public function setMeasure(?\UBL21\Common\CommonBasicComponents\Measure $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     * Gets as minimumMeasure
     *
     * BBIE
     *  Condition. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement for this condition.
     *  0..1
     *  Condition
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MinimumMeasure
     */
    public function getMinimumMeasure()
    {
        return $this->minimumMeasure;
    }

    /**
     * Sets a new minimumMeasure
     *
     * BBIE
     *  Condition. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement for this condition.
     *  0..1
     *  Condition
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MinimumMeasure $minimumMeasure
     * @return self
     */
    public function setMinimumMeasure(?\UBL21\Common\CommonBasicComponents\MinimumMeasure $minimumMeasure = null)
    {
        $this->minimumMeasure = $minimumMeasure;
        return $this;
    }

    /**
     * Gets as maximumMeasure
     *
     * BBIE
     *  Condition. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement for this condition.
     *  0..1
     *  Condition
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MaximumMeasure
     */
    public function getMaximumMeasure()
    {
        return $this->maximumMeasure;
    }

    /**
     * Sets a new maximumMeasure
     *
     * BBIE
     *  Condition. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement for this condition.
     *  0..1
     *  Condition
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MaximumMeasure $maximumMeasure
     * @return self
     */
    public function setMaximumMeasure(?\UBL21\Common\CommonBasicComponents\MaximumMeasure $maximumMeasure = null)
    {
        $this->maximumMeasure = $maximumMeasure;
        return $this;
    }
}

