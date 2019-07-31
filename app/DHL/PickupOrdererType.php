<?php

namespace App\DHL;

class PickupOrdererType
{

    /**
     * @var NameType $Company
     */
    protected $Company = null;

    /**
     * @var string $Name3
     */
    protected $Name3 = null;

    /**
     * @var NativeAddressType $Address
     */
    protected $Address = null;

    /**
     * @var CommunicationType $Communication
     */
    protected $Communication = null;

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     */
    public function __construct($Company, $Address, $Communication)
    {
      $this->Company = $Company;
      $this->Address = $Address;
      $this->Communication = $Communication;
    }

    /**
     * @return NameType
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param NameType $Company
     * @return \App\DHL\PickupOrdererType
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getName3()
    {
      return $this->Name3;
    }

    /**
     * @param string $Name3
     * @return \App\DHL\PickupOrdererType
     */
    public function setName3($Name3)
    {
      $this->Name3 = $Name3;
      return $this;
    }

    /**
     * @return NativeAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param NativeAddressType $Address
     * @return \App\DHL\PickupOrdererType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return CommunicationType
     */
    public function getCommunication()
    {
      return $this->Communication;
    }

    /**
     * @param CommunicationType $Communication
     * @return \App\DHL\PickupOrdererType
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
      return $this;
    }

}
