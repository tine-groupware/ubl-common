<?php

namespace UBL21\Common\CommonAggregateComponents;

/**
 * Class representing GoodsItemContainerType
 *
 * ABIE
 *  Goods Item Container. Details
 *  A class defining how goods items are split across transport equipment.
 *  Goods Item Container
 * XSD Type: GoodsItemContainerType
 */
class GoodsItemContainerType
{
    /**
     * BBIE
     *  Goods Item Container. Identifier
     *  An identifier for this goods item container.
     *  1
     *  Goods Item Container
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL21\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Item Container. Quantity
     *  The number of goods items loaded into or onto one piece of transport equipment as a total consignment or part of a consignment.
     *  0..1
     *  Goods Item Container
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of packages stuffed
     *
     * @var \UBL21\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Goods Item Container. Transport Equipment
     *  A piece of transport equipment used to contain a single goods item.
     *  0..n
     *  Goods Item Container
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \UBL21\Common\CommonAggregateComponents\TransportEquipment[] $transportEquipment
     */
    private $transportEquipment = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Goods Item Container. Identifier
     *  An identifier for this goods item container.
     *  1
     *  Goods Item Container
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
     *  Goods Item Container. Identifier
     *  An identifier for this goods item container.
     *  1
     *  Goods Item Container
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
     * Gets as quantity
     *
     * BBIE
     *  Goods Item Container. Quantity
     *  The number of goods items loaded into or onto one piece of transport equipment as a total consignment or part of a consignment.
     *  0..1
     *  Goods Item Container
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of packages stuffed
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
     *  Goods Item Container. Quantity
     *  The number of goods items loaded into or onto one piece of transport equipment as a total consignment or part of a consignment.
     *  0..1
     *  Goods Item Container
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of packages stuffed
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
     * Adds as transportEquipment
     *
     * ASBIE
     *  Goods Item Container. Transport Equipment
     *  A piece of transport equipment used to contain a single goods item.
     *  0..n
     *  Goods Item Container
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return self
     * @param \UBL21\Common\CommonAggregateComponents\TransportEquipment $transportEquipment
     */
    public function addToTransportEquipment(\UBL21\Common\CommonAggregateComponents\TransportEquipment $transportEquipment)
    {
        $this->transportEquipment[] = $transportEquipment;
        return $this;
    }

    /**
     * isset transportEquipment
     *
     * ASBIE
     *  Goods Item Container. Transport Equipment
     *  A piece of transport equipment used to contain a single goods item.
     *  0..n
     *  Goods Item Container
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEquipment($index)
    {
        return isset($this->transportEquipment[$index]);
    }

    /**
     * unset transportEquipment
     *
     * ASBIE
     *  Goods Item Container. Transport Equipment
     *  A piece of transport equipment used to contain a single goods item.
     *  0..n
     *  Goods Item Container
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEquipment($index)
    {
        unset($this->transportEquipment[$index]);
    }

    /**
     * Gets as transportEquipment
     *
     * ASBIE
     *  Goods Item Container. Transport Equipment
     *  A piece of transport equipment used to contain a single goods item.
     *  0..n
     *  Goods Item Container
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \UBL21\Common\CommonAggregateComponents\TransportEquipment[]
     */
    public function getTransportEquipment()
    {
        return $this->transportEquipment;
    }

    /**
     * Sets a new transportEquipment
     *
     * ASBIE
     *  Goods Item Container. Transport Equipment
     *  A piece of transport equipment used to contain a single goods item.
     *  0..n
     *  Goods Item Container
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \UBL21\Common\CommonAggregateComponents\TransportEquipment[] $transportEquipment
     * @return self
     */
    public function setTransportEquipment(array $transportEquipment = null)
    {
        $this->transportEquipment = $transportEquipment;
        return $this;
    }
}

