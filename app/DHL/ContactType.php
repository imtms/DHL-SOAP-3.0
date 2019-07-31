<?php

namespace App\DHL;

class ContactType
{

    /**
     * @var CommunicationType $Communication
     */
    protected $Communication = null;

    /**
     * @var NativeAddressType $Address
     */
    protected $Address = null;

    /**
     * @var NameType $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
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
     * @return \App\DHL\ContactType
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
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
     * @return \App\DHL\ContactType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return NameType
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param NameType $Name
     * @return \App\DHL\ContactType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
