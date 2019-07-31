<?php

namespace App\DHL;

class ShipmentNumberType
{

    /**
     * @var shipmentNumber $shipmentNumber
     */
    protected $shipmentNumber = null;

    /**
     * @param shipmentNumber $shipmentNumber
     */
    public function __construct($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
    }

    /**
     * @return shipmentNumber
     */
    public function getShipmentNumber()
    {
      return $this->shipmentNumber;
    }

    /**
     * @param shipmentNumber $shipmentNumber
     * @return \App\DHL\ShipmentNumberType
     */
    public function setShipmentNumber($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
      return $this;
    }

}
