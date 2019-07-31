<?php

namespace App\DHL;

class ShipmentOrderType
{

    /**
     * @var SequenceNumber $sequenceNumber
     */
    protected $sequenceNumber = null;

    /**
     * @var Shipment $Shipment
     */
    protected $Shipment = null;

    /**
     * @var Serviceconfiguration $PrintOnlyIfCodeable
     */
    protected $PrintOnlyIfCodeable = null;

    /**
     * @param SequenceNumber $sequenceNumber
     * @param Shipment $Shipment
     */
    public function __construct($sequenceNumber, $Shipment)
    {
      $this->sequenceNumber = $sequenceNumber;
      $this->Shipment = $Shipment;
    }

    /**
     * @return SequenceNumber
     */
    public function getSequenceNumber()
    {
      return $this->sequenceNumber;
    }

    /**
     * @param SequenceNumber $sequenceNumber
     * @return \App\DHL\ShipmentOrderType
     */
    public function setSequenceNumber($sequenceNumber)
    {
      $this->sequenceNumber = $sequenceNumber;
      return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipment()
    {
      return $this->Shipment;
    }

    /**
     * @param Shipment $Shipment
     * @return \App\DHL\ShipmentOrderType
     */
    public function setShipment($Shipment)
    {
      $this->Shipment = $Shipment;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getPrintOnlyIfCodeable()
    {
      return $this->PrintOnlyIfCodeable;
    }

    /**
     * @param Serviceconfiguration $PrintOnlyIfCodeable
     * @return \App\DHL\ShipmentOrderType
     */
    public function setPrintOnlyIfCodeable($PrintOnlyIfCodeable)
    {
      $this->PrintOnlyIfCodeable = $PrintOnlyIfCodeable;
      return $this;
    }

}
