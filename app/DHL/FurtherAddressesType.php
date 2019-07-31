<?php

namespace App\DHL;

class FurtherAddressesType
{

    /**
     * @var DeliveryAdress $DeliveryAdress
     */
    protected $DeliveryAdress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeliveryAdress
     */
    public function getDeliveryAdress()
    {
      return $this->DeliveryAdress;
    }

    /**
     * @param DeliveryAdress $DeliveryAdress
     * @return \App\DHL\FurtherAddressesType
     */
    public function setDeliveryAdress($DeliveryAdress)
    {
      $this->DeliveryAdress = $DeliveryAdress;
      return $this;
    }

}
