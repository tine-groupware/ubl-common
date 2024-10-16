<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing PromotionalEventLineItemType
 *
 * ABIE
 *  Promotional Event Line Item. Details
 *  A class to describe a line item associated with a promotional event.
 *  Promotional Event Line Item
 * XSD Type: PromotionalEventLineItemType
 */
class PromotionalEventLineItemType
{
    /**
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @var \UBL21\Common\CommonAggregateComponents\EventLineItem $eventLineItem
     */
    private $eventLineItem = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL21\Common\CommonBasicComponents\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL21\Common\CommonBasicComponents\Amount $amount
     * @return self
     */
    public function setAmount(\UBL21\Common\CommonBasicComponents\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as eventLineItem
     *
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @return \UBL21\Common\CommonAggregateComponents\EventLineItem
     */
    public function getEventLineItem()
    {
        return $this->eventLineItem;
    }

    /**
     * Sets a new eventLineItem
     *
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param \UBL21\Common\CommonAggregateComponents\EventLineItem $eventLineItem
     * @return self
     */
    public function setEventLineItem(\UBL21\Common\CommonAggregateComponents\EventLineItem $eventLineItem)
    {
        $this->eventLineItem = $eventLineItem;
        return $this;
    }
}

