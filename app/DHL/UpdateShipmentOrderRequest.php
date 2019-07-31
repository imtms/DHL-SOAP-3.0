<?php

namespace App\DHL;

class UpdateShipmentOrderRequest
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @var shipmentNumber $shipmentNumber
     */
    protected $shipmentNumber = null;

    /**
     * @var ShipmentOrderType $ShipmentOrder
     */
    protected $ShipmentOrder = null;

    /**
     * @var labelResponseType $labelResponseType
     */
    protected $labelResponseType = null;

    /**
     * @var groupProfileName $groupProfileName
     */
    protected $groupProfileName = null;

    /**
     * @var labelFormat $labelFormat
     */
    protected $labelFormat = null;

    /**
     * @var labelFormatRetoure $labelFormatRetoure
     */
    protected $labelFormatRetoure = null;

    /**
     * @var combinedPrinting $combinedPrinting
     */
    protected $combinedPrinting = null;

    /**
     * @var feederSystem $feederSystem
     */
    protected $feederSystem = null;

    /**
     * @param Version $Version
     * @param shipmentNumber $shipmentNumber
     * @param ShipmentOrderType $ShipmentOrder
     * @param labelResponseType $labelResponseType
     * @param groupProfileName $groupProfileName
     * @param labelFormat $labelFormat
     * @param labelFormatRetoure $labelFormatRetoure
     * @param combinedPrinting $combinedPrinting
     * @param feederSystem $feederSystem
     */
    public function __construct($Version, $shipmentNumber, $ShipmentOrder, $labelResponseType, $groupProfileName, $labelFormat, $labelFormatRetoure, $combinedPrinting, $feederSystem)
    {
      $this->Version = $Version;
      $this->shipmentNumber = $shipmentNumber;
      $this->ShipmentOrder = $ShipmentOrder;
      $this->labelResponseType = $labelResponseType;
      $this->groupProfileName = $groupProfileName;
      $this->labelFormat = $labelFormat;
      $this->labelFormatRetoure = $labelFormatRetoure;
      $this->combinedPrinting = $combinedPrinting;
      $this->feederSystem = $feederSystem;
    }

    /**
     * @return Version
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param Version $Version
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
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
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setShipmentNumber($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
      return $this;
    }

    /**
     * @return ShipmentOrderType
     */
    public function getShipmentOrder()
    {
      return $this->ShipmentOrder;
    }

    /**
     * @param ShipmentOrderType $ShipmentOrder
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setShipmentOrder($ShipmentOrder)
    {
      $this->ShipmentOrder = $ShipmentOrder;
      return $this;
    }

    /**
     * @return labelResponseType
     */
    public function getLabelResponseType()
    {
      return $this->labelResponseType;
    }

    /**
     * @param labelResponseType $labelResponseType
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setLabelResponseType($labelResponseType)
    {
      $this->labelResponseType = $labelResponseType;
      return $this;
    }

    /**
     * @return groupProfileName
     */
    public function getGroupProfileName()
    {
      return $this->groupProfileName;
    }

    /**
     * @param groupProfileName $groupProfileName
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setGroupProfileName($groupProfileName)
    {
      $this->groupProfileName = $groupProfileName;
      return $this;
    }

    /**
     * @return labelFormat
     */
    public function getLabelFormat()
    {
      return $this->labelFormat;
    }

    /**
     * @param labelFormat $labelFormat
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setLabelFormat($labelFormat)
    {
      $this->labelFormat = $labelFormat;
      return $this;
    }

    /**
     * @return labelFormatRetoure
     */
    public function getLabelFormatRetoure()
    {
      return $this->labelFormatRetoure;
    }

    /**
     * @param labelFormatRetoure $labelFormatRetoure
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setLabelFormatRetoure($labelFormatRetoure)
    {
      $this->labelFormatRetoure = $labelFormatRetoure;
      return $this;
    }

    /**
     * @return combinedPrinting
     */
    public function getCombinedPrinting()
    {
      return $this->combinedPrinting;
    }

    /**
     * @param combinedPrinting $combinedPrinting
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setCombinedPrinting($combinedPrinting)
    {
      $this->combinedPrinting = $combinedPrinting;
      return $this;
    }

    /**
     * @return feederSystem
     */
    public function getFeederSystem()
    {
      return $this->feederSystem;
    }

    /**
     * @param feederSystem $feederSystem
     * @return \App\DHL\UpdateShipmentOrderRequest
     */
    public function setFeederSystem($feederSystem)
    {
      $this->feederSystem = $feederSystem;
      return $this;
    }

}
