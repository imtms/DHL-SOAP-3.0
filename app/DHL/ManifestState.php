<?php

namespace App\DHL;

class ManifestState
{

    /**
     * @var shipmentNumber $shipmentNumber
     */
    protected $shipmentNumber = null;

    /**
     * @var Statusinformation $Status
     */
    protected $Status = null;

    /**
     * @param shipmentNumber $shipmentNumber
     * @param Statusinformation $Status
     */
    public function __construct($shipmentNumber, $Status)
    {
      $this->shipmentNumber = $shipmentNumber;
      $this->Status = $Status;
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
     * @return \App\DHL\ManifestState
     */
    public function setShipmentNumber($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
      return $this;
    }

    /**
     * @return Statusinformation
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Statusinformation $Status
     * @return \App\DHL\ManifestState
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
