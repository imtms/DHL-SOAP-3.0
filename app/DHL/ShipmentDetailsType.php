<?php

namespace App\DHL;

class ShipmentDetailsType
{

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var accountNumber $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var customerReference $customerReference
     */
    protected $customerReference = null;

    /**
     * @var shipmentDate $shipmentDate
     */
    protected $shipmentDate = null;

    /**
     * @var costCentre $costCentre
     */
    protected $costCentre = null;

    /**
     * @var returnShipmentAccountNumber $returnShipmentAccountNumber
     */
    protected $returnShipmentAccountNumber = null;

    /**
     * @var returnShipmentReference $returnShipmentReference
     */
    protected $returnShipmentReference = null;

    /**
     * @param string $product
     * @param accountNumber $accountNumber
     * @param shipmentDate $shipmentDate
     */
    public function __construct($product, $accountNumber, $shipmentDate)
    {
      $this->product = $product;
      $this->accountNumber = $accountNumber;
      $this->shipmentDate = $shipmentDate;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param string $product
     * @return \App\DHL\ShipmentDetailsType
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return accountNumber
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param accountNumber $accountNumber
     * @return \App\DHL\ShipmentDetailsType
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return customerReference
     */
    public function getCustomerReference()
    {
      return $this->customerReference;
    }

    /**
     * @param customerReference $customerReference
     * @return \App\DHL\ShipmentDetailsType
     */
    public function setCustomerReference($customerReference)
    {
      $this->customerReference = $customerReference;
      return $this;
    }

    /**
     * @return shipmentDate
     */
    public function getShipmentDate()
    {
      return $this->shipmentDate;
    }

    /**
     * @param shipmentDate $shipmentDate
     * @return \App\DHL\ShipmentDetailsType
     */
    public function setShipmentDate($shipmentDate)
    {
      $this->shipmentDate = $shipmentDate;
      return $this;
    }

    /**
     * @return costCentre
     */
    public function getCostCentre()
    {
      return $this->costCentre;
    }

    /**
     * @param costCentre $costCentre
     * @return \App\DHL\ShipmentDetailsType
     */
    public function setCostCentre($costCentre)
    {
      $this->costCentre = $costCentre;
      return $this;
    }

    /**
     * @return returnShipmentAccountNumber
     */
    public function getReturnShipmentAccountNumber()
    {
      return $this->returnShipmentAccountNumber;
    }

    /**
     * @param returnShipmentAccountNumber $returnShipmentAccountNumber
     * @return \App\DHL\ShipmentDetailsType
     */
    public function setReturnShipmentAccountNumber($returnShipmentAccountNumber)
    {
      $this->returnShipmentAccountNumber = $returnShipmentAccountNumber;
      return $this;
    }

    /**
     * @return returnShipmentReference
     */
    public function getReturnShipmentReference()
    {
      return $this->returnShipmentReference;
    }

    /**
     * @param returnShipmentReference $returnShipmentReference
     * @return \App\DHL\ShipmentDetailsType
     */
    public function setReturnShipmentReference($returnShipmentReference)
    {
      $this->returnShipmentReference = $returnShipmentReference;
      return $this;
    }

}
