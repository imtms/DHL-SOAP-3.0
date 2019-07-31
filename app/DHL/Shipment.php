<?php

namespace App\DHL;

class Shipment
{

    /**
     * @var ShipmentDetailsTypeType $ShipmentDetails
     */
    protected $ShipmentDetails = null;

    /**
     * @var ShipperType $Shipper
     */
    protected $Shipper = null;

    /**
     * @var ReceiverType $Receiver
     */
    protected $Receiver = null;

    /**
     * @var ShipperType $ReturnReceiver
     */
    protected $ReturnReceiver = null;

    /**
     * @var ExportDocumentType $ExportDocument
     */
    protected $ExportDocument = null;

    /**
     * @param ShipmentDetailsTypeType $ShipmentDetails
     * @param ShipperType $Shipper
     * @param ReceiverType $Receiver
     * @param ShipperType $ReturnReceiver
     * @param ExportDocumentType $ExportDocument
     */
    public function __construct($ShipmentDetails, $Shipper, $Receiver, $ReturnReceiver, $ExportDocument)
    {
      $this->ShipmentDetails = $ShipmentDetails;
      $this->Shipper = $Shipper;
      $this->Receiver = $Receiver;
      $this->ReturnReceiver = $ReturnReceiver;
      $this->ExportDocument = $ExportDocument;
    }

    /**
     * @return ShipmentDetailsTypeType
     */
    public function getShipmentDetails()
    {
      return $this->ShipmentDetails;
    }

    /**
     * @param ShipmentDetailsTypeType $ShipmentDetails
     * @return \App\DHL\Shipment
     */
    public function setShipmentDetails($ShipmentDetails)
    {
      $this->ShipmentDetails = $ShipmentDetails;
      return $this;
    }

    /**
     * @return ShipperType
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param ShipperType $Shipper
     * @return \App\DHL\Shipment
     */
    public function setShipper($Shipper)
    {
      $this->Shipper = $Shipper;
      return $this;
    }

    /**
     * @return ReceiverType
     */
    public function getReceiver()
    {
      return $this->Receiver;
    }

    /**
     * @param ReceiverType $Receiver
     * @return \App\DHL\Shipment
     */
    public function setReceiver($Receiver)
    {
      $this->Receiver = $Receiver;
      return $this;
    }

    /**
     * @return ShipperType
     */
    public function getReturnReceiver()
    {
      return $this->ReturnReceiver;
    }

    /**
     * @param ShipperType $ReturnReceiver
     * @return \App\DHL\Shipment
     */
    public function setReturnReceiver($ReturnReceiver)
    {
      $this->ReturnReceiver = $ReturnReceiver;
      return $this;
    }

    /**
     * @return ExportDocumentType
     */
    public function getExportDocument()
    {
      return $this->ExportDocument;
    }

    /**
     * @param ExportDocumentType $ExportDocument
     * @return \App\DHL\Shipment
     */
    public function setExportDocument($ExportDocument)
    {
      $this->ExportDocument = $ExportDocument;
      return $this;
    }

}
