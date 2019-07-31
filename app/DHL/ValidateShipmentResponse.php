<?php

namespace App\DHL;

class ValidateShipmentResponse
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @var Statusinformation $Status
     */
    protected $Status = null;

    /**
     * @var ValidationState $ValidationState
     */
    protected $ValidationState = null;

    /**
     * @param Version $Version
     * @param Statusinformation $Status
     * @param ValidationState $ValidationState
     */
    public function __construct($Version, $Status, $ValidationState)
    {
      $this->Version = $Version;
      $this->Status = $Status;
      $this->ValidationState = $ValidationState;
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
     * @return \App\DHL\ValidateShipmentResponse
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
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
     * @return \App\DHL\ValidateShipmentResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ValidationState
     */
    public function getValidationState()
    {
      return $this->ValidationState;
    }

    /**
     * @param ValidationState $ValidationState
     * @return \App\DHL\ValidateShipmentResponse
     */
    public function setValidationState($ValidationState)
    {
      $this->ValidationState = $ValidationState;
      return $this;
    }

}
