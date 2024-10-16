<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing PromotionalSpecificationType
 *
 * ABIE
 *  Promotional Specification. Details
 *  A class to describe a promotional event as a set of item locations that share a set of promotional tactics.
 *  Promotional Specification
 * XSD Type: PromotionalSpecificationType
 */
class PromotionalSpecificationType
{
    /**
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\SpecificationID $specificationID
     */
    private $specificationID = null;

    /**
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\PromotionalEventLineItem[] $promotionalEventLineItem
     */
    private $promotionalEventLineItem = [
        
    ];

    /**
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @var \UBL21\Common\CommonAggregateComponents\EventTactic[] $eventTactic
     */
    private $eventTactic = [
        
    ];

    /**
     * Gets as specificationID
     *
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\SpecificationID
     */
    public function getSpecificationID()
    {
        return $this->specificationID;
    }

    /**
     * Sets a new specificationID
     *
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\SpecificationID $specificationID
     * @return self
     */
    public function setSpecificationID(?\UBL21\Common\CommonBasicComponents\SpecificationID $specificationID = null)
    {
        $this->specificationID = $specificationID;
        return $this;
    }

    /**
     * Adds as promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\PromotionalEventLineItem $promotionalEventLineItem
     */
    public function addToPromotionalEventLineItem(\UBL21\Common\CommonAggregateComponents\PromotionalEventLineItem $promotionalEventLineItem)
    {
        $this->promotionalEventLineItem[] = $promotionalEventLineItem;
        return $this;
    }

    /**
     * isset promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalEventLineItem($index)
    {
        return isset($this->promotionalEventLineItem[$index]);
    }

    /**
     * unset promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalEventLineItem($index)
    {
        unset($this->promotionalEventLineItem[$index]);
    }

    /**
     * Gets as promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\PromotionalEventLineItem[]
     */
    public function getPromotionalEventLineItem()
    {
        return $this->promotionalEventLineItem;
    }

    /**
     * Sets a new promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\PromotionalEventLineItem[] $promotionalEventLineItem
     * @return self
     */
    public function setPromotionalEventLineItem(array $promotionalEventLineItem)
    {
        $this->promotionalEventLineItem = $promotionalEventLineItem;
        return $this;
    }

    /**
     * Adds as eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\EventTactic $eventTactic
     */
    public function addToEventTactic(\UBL21\Common\CommonAggregateComponents\EventTactic $eventTactic)
    {
        $this->eventTactic[] = $eventTactic;
        return $this;
    }

    /**
     * isset eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventTactic($index)
    {
        return isset($this->eventTactic[$index]);
    }

    /**
     * unset eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventTactic($index)
    {
        unset($this->eventTactic[$index]);
    }

    /**
     * Gets as eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @return \UBL21\Common\CommonAggregateComponents\EventTactic[]
     */
    public function getEventTactic()
    {
        return $this->eventTactic;
    }

    /**
     * Sets a new eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param \UBL21\Common\CommonAggregateComponents\EventTactic[] $eventTactic
     * @return self
     */
    public function setEventTactic(array $eventTactic = null)
    {
        $this->eventTactic = $eventTactic;
        return $this;
    }
}

