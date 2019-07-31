<?php

namespace App\DHL;

class GetLabelRequest
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
     * @param labelResponseType $labelResponseType
     * @param groupProfileName $groupProfileName
     * @param labelFormat $labelFormat
     * @param labelFormatRetoure $labelFormatRetoure
     * @param combinedPrinting $combinedPrinting
     * @param feederSystem $feederSystem
     */
    public function __construct($Version, $shipmentNumber, $labelResponseType, $groupProfileName, $labelFormat, $labelFormatRetoure, $combinedPrinting, $feederSystem)
    {
      $this->Version = $Version;
      $this->shipmentNumber = $shipmentNumber;
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
     * @return \App\DHL\GetLabelRequest
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
     * @return \App\DHL\GetLabelRequest
     */
    public function setShipmentNumber($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
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
     * @return \App\DHL\GetLabelRequest
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
     * @return \App\DHL\GetLabelRequest
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
     * @return \App\DHL\GetLabelRequest
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
     * @return \App\DHL\GetLabelRequest
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
     * @return \App\DHL\GetLabelRequest
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
     * @return \App\DHL\GetLabelRequest
     */
    public function setFeederSystem($feederSystem)
    {
      $this->feederSystem = $feederSystem;
      return $this;
    }

}
