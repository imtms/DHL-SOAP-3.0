<?php

namespace App\DHL;

class ExportDocData
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
     * @var string $exportDocData
     */
    protected $exportDocData = null;

    /**
     * @var string $exportDocURL
     */
    protected $exportDocURL = null;

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
     * @return \App\DHL\ExportDocData
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
     * @return \App\DHL\ExportDocData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportDocData()
    {
      return $this->exportDocData;
    }

    /**
     * @param string $exportDocData
     * @return \App\DHL\ExportDocData
     */
    public function setExportDocData($exportDocData)
    {
      $this->exportDocData = $exportDocData;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportDocURL()
    {
      return $this->exportDocURL;
    }

    /**
     * @param string $exportDocURL
     * @return \App\DHL\ExportDocData
     */
    public function setExportDocURL($exportDocURL)
    {
      $this->exportDocURL = $exportDocURL;
      return $this;
    }

}
