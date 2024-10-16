<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing EventTacticType
 *
 * ABIE
 *  Event Tactic. Details
 *  A class defining a specific type of action or situation arranged by the Buyer or the Seller to promote the product or products.
 *  Event Tactic
 * XSD Type: EventTacticType
 */
class EventTacticType
{
    /**
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Comment $comment
     */
    private $comment = null;

    /**
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @var \UBL21\Common\CommonAggregateComponents\EventTacticEnumeration $eventTacticEnumeration
     */
    private $eventTacticEnumeration = null;

    /**
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL21\Common\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as comment
     *
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Comment $comment
     * @return self
     */
    public function setComment(?\UBL21\Common\CommonBasicComponents\Comment $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\UBL21\Common\CommonBasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as eventTacticEnumeration
     *
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @return \UBL21\Common\CommonAggregateComponents\EventTacticEnumeration
     */
    public function getEventTacticEnumeration()
    {
        return $this->eventTacticEnumeration;
    }

    /**
     * Sets a new eventTacticEnumeration
     *
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @param \UBL21\Common\CommonAggregateComponents\EventTacticEnumeration $eventTacticEnumeration
     * @return self
     */
    public function setEventTacticEnumeration(\UBL21\Common\CommonAggregateComponents\EventTacticEnumeration $eventTacticEnumeration)
    {
        $this->eventTacticEnumeration = $eventTacticEnumeration;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL21\Common\CommonAggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL21\Common\CommonAggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(?\UBL21\Common\CommonAggregateComponents\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }
}

