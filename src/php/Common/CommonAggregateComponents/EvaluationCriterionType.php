<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing EvaluationCriterionType
 *
 * ABIE
 *  Evaluation Criterion. Details
 *  A class defining the required criterion for a tenderer to be elligible in a tendering process. 
 *  Evaluation Criterion
 * XSD Type: EvaluationCriterionType
 */
class EvaluationCriterionType
{
    /**
     * BBIE
     *  Evaluation Criterion. Evaluation Criterion Type Code. Code
     *  A code that specifies the criterion; it may be financial, technical or organizational.
     *  0..1
     *  Evaluation Criterion
     *  Evaluation Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\EvaluationCriterionTypeCode $evaluationCriterionTypeCode
     */
    private $evaluationCriterionTypeCode = null;

    /**
     * BBIE
     *  Evaluation Criterion. Description. Text
     *  A description of the criterion.
     *  0..n
     *  Evaluation Criterion
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
     *  Evaluation Criterion. Threshold_ Amount. Amount
     *  Estimated monetary amount of the threshold for the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Threshold
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ThresholdAmount $thresholdAmount
     */
    private $thresholdAmount = null;

    /**
     * BBIE
     *  Evaluation Criterion. Threshold_ Quantity. Quantity
     *  Estimated quantity of the threshold for the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Threshold
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ThresholdQuantity $thresholdQuantity
     */
    private $thresholdQuantity = null;

    /**
     * BBIE
     *  Evaluation Criterion. Expression Code. Code
     *  A code identifying the expression that will be used to evaluate the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Expression Code
     *  Code
     *  Code. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ExpressionCode $expressionCode
     */
    private $expressionCode = null;

    /**
     * BBIE
     *  Evaluation Criterion. Expression. Text
     *  The expression that will be used to evaluate the criterion.
     *  0..n
     *  Evaluation Criterion
     *  Expression
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Expression[] $expression
     */
    private $expression = [
        
    ];

    /**
     * ASBIE
     *  Evaluation Criterion. Duration_ Period. Period
     *  Describes the period for which the evaluation criterion is valid.
     *  0..1
     *  Evaluation Criterion
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
     *  Evaluation Criterion. Suggested_ Evidence. Evidence
     *  Describes any evidences that should be used to satisfy the criterion. 
     *  0..n
     *  Evaluation Criterion
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @var \UBL21\Common\CommonAggregateComponents\SuggestedEvidence[] $suggestedEvidence
     */
    private $suggestedEvidence = [
        
    ];

    /**
     * Gets as evaluationCriterionTypeCode
     *
     * BBIE
     *  Evaluation Criterion. Evaluation Criterion Type Code. Code
     *  A code that specifies the criterion; it may be financial, technical or organizational.
     *  0..1
     *  Evaluation Criterion
     *  Evaluation Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\EvaluationCriterionTypeCode
     */
    public function getEvaluationCriterionTypeCode()
    {
        return $this->evaluationCriterionTypeCode;
    }

    /**
     * Sets a new evaluationCriterionTypeCode
     *
     * BBIE
     *  Evaluation Criterion. Evaluation Criterion Type Code. Code
     *  A code that specifies the criterion; it may be financial, technical or organizational.
     *  0..1
     *  Evaluation Criterion
     *  Evaluation Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\EvaluationCriterionTypeCode $evaluationCriterionTypeCode
     * @return self
     */
    public function setEvaluationCriterionTypeCode(?\UBL21\Common\CommonBasicComponents\EvaluationCriterionTypeCode $evaluationCriterionTypeCode = null)
    {
        $this->evaluationCriterionTypeCode = $evaluationCriterionTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Evaluation Criterion. Description. Text
     *  A description of the criterion.
     *  0..n
     *  Evaluation Criterion
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
     *  Evaluation Criterion. Description. Text
     *  A description of the criterion.
     *  0..n
     *  Evaluation Criterion
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
     *  Evaluation Criterion. Description. Text
     *  A description of the criterion.
     *  0..n
     *  Evaluation Criterion
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
     *  Evaluation Criterion. Description. Text
     *  A description of the criterion.
     *  0..n
     *  Evaluation Criterion
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
     *  Evaluation Criterion. Description. Text
     *  A description of the criterion.
     *  0..n
     *  Evaluation Criterion
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
     * Gets as thresholdAmount
     *
     * BBIE
     *  Evaluation Criterion. Threshold_ Amount. Amount
     *  Estimated monetary amount of the threshold for the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Threshold
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ThresholdAmount
     */
    public function getThresholdAmount()
    {
        return $this->thresholdAmount;
    }

    /**
     * Sets a new thresholdAmount
     *
     * BBIE
     *  Evaluation Criterion. Threshold_ Amount. Amount
     *  Estimated monetary amount of the threshold for the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Threshold
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ThresholdAmount $thresholdAmount
     * @return self
     */
    public function setThresholdAmount(?\UBL21\Common\CommonBasicComponents\ThresholdAmount $thresholdAmount = null)
    {
        $this->thresholdAmount = $thresholdAmount;
        return $this;
    }

    /**
     * Gets as thresholdQuantity
     *
     * BBIE
     *  Evaluation Criterion. Threshold_ Quantity. Quantity
     *  Estimated quantity of the threshold for the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Threshold
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ThresholdQuantity
     */
    public function getThresholdQuantity()
    {
        return $this->thresholdQuantity;
    }

    /**
     * Sets a new thresholdQuantity
     *
     * BBIE
     *  Evaluation Criterion. Threshold_ Quantity. Quantity
     *  Estimated quantity of the threshold for the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Threshold
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ThresholdQuantity $thresholdQuantity
     * @return self
     */
    public function setThresholdQuantity(?\UBL21\Common\CommonBasicComponents\ThresholdQuantity $thresholdQuantity = null)
    {
        $this->thresholdQuantity = $thresholdQuantity;
        return $this;
    }

    /**
     * Gets as expressionCode
     *
     * BBIE
     *  Evaluation Criterion. Expression Code. Code
     *  A code identifying the expression that will be used to evaluate the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Expression Code
     *  Code
     *  Code. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\ExpressionCode
     */
    public function getExpressionCode()
    {
        return $this->expressionCode;
    }

    /**
     * Sets a new expressionCode
     *
     * BBIE
     *  Evaluation Criterion. Expression Code. Code
     *  A code identifying the expression that will be used to evaluate the criterion.
     *  0..1
     *  Evaluation Criterion
     *  Expression Code
     *  Code
     *  Code. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\ExpressionCode $expressionCode
     * @return self
     */
    public function setExpressionCode(?\UBL21\Common\CommonBasicComponents\ExpressionCode $expressionCode = null)
    {
        $this->expressionCode = $expressionCode;
        return $this;
    }

    /**
     * Adds as expression
     *
     * BBIE
     *  Evaluation Criterion. Expression. Text
     *  The expression that will be used to evaluate the criterion.
     *  0..n
     *  Evaluation Criterion
     *  Expression
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL21\Common\CommonBasicComponents\Expression $expression
     */
    public function addToExpression(\UBL21\Common\CommonBasicComponents\Expression $expression)
    {
        $this->expression[] = $expression;
        return $this;
    }

    /**
     * isset expression
     *
     * BBIE
     *  Evaluation Criterion. Expression. Text
     *  The expression that will be used to evaluate the criterion.
     *  0..n
     *  Evaluation Criterion
     *  Expression
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpression($index)
    {
        return isset($this->expression[$index]);
    }

    /**
     * unset expression
     *
     * BBIE
     *  Evaluation Criterion. Expression. Text
     *  The expression that will be used to evaluate the criterion.
     *  0..n
     *  Evaluation Criterion
     *  Expression
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpression($index)
    {
        unset($this->expression[$index]);
    }

    /**
     * Gets as expression
     *
     * BBIE
     *  Evaluation Criterion. Expression. Text
     *  The expression that will be used to evaluate the criterion.
     *  0..n
     *  Evaluation Criterion
     *  Expression
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Expression[]
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * BBIE
     *  Evaluation Criterion. Expression. Text
     *  The expression that will be used to evaluate the criterion.
     *  0..n
     *  Evaluation Criterion
     *  Expression
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Expression[] $expression
     * @return self
     */
    public function setExpression(array $expression = null)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Gets as durationPeriod
     *
     * ASBIE
     *  Evaluation Criterion. Duration_ Period. Period
     *  Describes the period for which the evaluation criterion is valid.
     *  0..1
     *  Evaluation Criterion
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
     *  Evaluation Criterion. Duration_ Period. Period
     *  Describes the period for which the evaluation criterion is valid.
     *  0..1
     *  Evaluation Criterion
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
     * Adds as suggestedEvidence
     *
     * ASBIE
     *  Evaluation Criterion. Suggested_ Evidence. Evidence
     *  Describes any evidences that should be used to satisfy the criterion. 
     *  0..n
     *  Evaluation Criterion
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\SuggestedEvidence $suggestedEvidence
     */
    public function addToSuggestedEvidence(\UBL21\Common\CommonAggregateComponents\SuggestedEvidence $suggestedEvidence)
    {
        $this->suggestedEvidence[] = $suggestedEvidence;
        return $this;
    }

    /**
     * isset suggestedEvidence
     *
     * ASBIE
     *  Evaluation Criterion. Suggested_ Evidence. Evidence
     *  Describes any evidences that should be used to satisfy the criterion. 
     *  0..n
     *  Evaluation Criterion
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestedEvidence($index)
    {
        return isset($this->suggestedEvidence[$index]);
    }

    /**
     * unset suggestedEvidence
     *
     * ASBIE
     *  Evaluation Criterion. Suggested_ Evidence. Evidence
     *  Describes any evidences that should be used to satisfy the criterion. 
     *  0..n
     *  Evaluation Criterion
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestedEvidence($index)
    {
        unset($this->suggestedEvidence[$index]);
    }

    /**
     * Gets as suggestedEvidence
     *
     * ASBIE
     *  Evaluation Criterion. Suggested_ Evidence. Evidence
     *  Describes any evidences that should be used to satisfy the criterion. 
     *  0..n
     *  Evaluation Criterion
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @return \UBL21\Common\CommonAggregateComponents\SuggestedEvidence[]
     */
    public function getSuggestedEvidence()
    {
        return $this->suggestedEvidence;
    }

    /**
     * Sets a new suggestedEvidence
     *
     * ASBIE
     *  Evaluation Criterion. Suggested_ Evidence. Evidence
     *  Describes any evidences that should be used to satisfy the criterion. 
     *  0..n
     *  Evaluation Criterion
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param \UBL21\Common\CommonAggregateComponents\SuggestedEvidence[] $suggestedEvidence
     * @return self
     */
    public function setSuggestedEvidence(array $suggestedEvidence = null)
    {
        $this->suggestedEvidence = $suggestedEvidence;
        return $this;
    }
}

