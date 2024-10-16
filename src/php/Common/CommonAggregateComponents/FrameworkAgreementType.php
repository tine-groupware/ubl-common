<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing FrameworkAgreementType
 *
 * ABIE
 *  Framework Agreement. Details
 *  A class to describe a tendering framework agreement.
 *  Framework Agreement
 * XSD Type: FrameworkAgreementType
 */
class FrameworkAgreementType
{
    /**
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ExpectedOperatorQuantity $expectedOperatorQuantity
     */
    private $expectedOperatorQuantity = null;

    /**
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\MaximumOperatorQuantity $maximumOperatorQuantity
     */
    private $maximumOperatorQuantity = null;

    /**
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Justification[] $justification
     */
    private $justification = [
        
    ];

    /**
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Frequency[] $frequency
     */
    private $frequency = [
        
    ];

    /**
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\DurationPeriod $durationPeriod
     */
    private $durationPeriod = null;

    /**
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @var \UBL21\Common\CommonAggregateComponents\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     */
    private $subsequentProcessTenderRequirement = [
        
    ];

    /**
     * Gets as expectedOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ExpectedOperatorQuantity
     */
    public function getExpectedOperatorQuantity()
    {
        return $this->expectedOperatorQuantity;
    }

    /**
     * Sets a new expectedOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ExpectedOperatorQuantity $expectedOperatorQuantity
     * @return self
     */
    public function setExpectedOperatorQuantity(?\UBL21\Common\CommonBasicComponents\ExpectedOperatorQuantity $expectedOperatorQuantity = null)
    {
        $this->expectedOperatorQuantity = $expectedOperatorQuantity;
        return $this;
    }

    /**
     * Gets as maximumOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\MaximumOperatorQuantity
     */
    public function getMaximumOperatorQuantity()
    {
        return $this->maximumOperatorQuantity;
    }

    /**
     * Sets a new maximumOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\MaximumOperatorQuantity $maximumOperatorQuantity
     * @return self
     */
    public function setMaximumOperatorQuantity(?\UBL21\Common\CommonBasicComponents\MaximumOperatorQuantity $maximumOperatorQuantity = null)
    {
        $this->maximumOperatorQuantity = $maximumOperatorQuantity;
        return $this;
    }

    /**
     * Adds as justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Justification $justification
     */
    public function addToJustification(\UBL21\Common\CommonBasicComponents\Justification $justification)
    {
        $this->justification[] = $justification;
        return $this;
    }

    /**
     * isset justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJustification($index)
    {
        return isset($this->justification[$index]);
    }

    /**
     * unset justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJustification($index)
    {
        unset($this->justification[$index]);
    }

    /**
     * Gets as justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Justification[]
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Sets a new justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Justification[] $justification
     * @return self
     */
    public function setJustification(array $justification = null)
    {
        $this->justification = $justification;
        return $this;
    }

    /**
     * Adds as frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Frequency $frequency
     */
    public function addToFrequency(\UBL21\Common\CommonBasicComponents\Frequency $frequency)
    {
        $this->frequency[] = $frequency;
        return $this;
    }

    /**
     * isset frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFrequency($index)
    {
        return isset($this->frequency[$index]);
    }

    /**
     * unset frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFrequency($index)
    {
        unset($this->frequency[$index]);
    }

    /**
     * Gets as frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Frequency[]
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Frequency[] $frequency
     * @return self
     */
    public function setFrequency(array $frequency = null)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as durationPeriod
     *
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\DurationPeriod
     */
    public function getDurationPeriod()
    {
        return $this->durationPeriod;
    }

    /**
     * Sets a new durationPeriod
     *
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\DurationPeriod $durationPeriod
     * @return self
     */
    public function setDurationPeriod(?\UBL21\Common\CommonAggregateComponents\DurationPeriod $durationPeriod = null)
    {
        $this->durationPeriod = $durationPeriod;
        return $this;
    }

    /**
     * Adds as subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement
     */
    public function addToSubsequentProcessTenderRequirement(\UBL21\Common\CommonAggregateComponents\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement)
    {
        $this->subsequentProcessTenderRequirement[] = $subsequentProcessTenderRequirement;
        return $this;
    }

    /**
     * isset subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsequentProcessTenderRequirement($index)
    {
        return isset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * unset subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsequentProcessTenderRequirement($index)
    {
        unset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * Gets as subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @return \UBL21\Common\CommonAggregateComponents\SubsequentProcessTenderRequirement[]
     */
    public function getSubsequentProcessTenderRequirement()
    {
        return $this->subsequentProcessTenderRequirement;
    }

    /**
     * Sets a new subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param \UBL21\Common\CommonAggregateComponents\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     * @return self
     */
    public function setSubsequentProcessTenderRequirement(array $subsequentProcessTenderRequirement = null)
    {
        $this->subsequentProcessTenderRequirement = $subsequentProcessTenderRequirement;
        return $this;
    }
}

