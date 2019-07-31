<?php

namespace App\DHL;

class ShipperType extends ShipperTypeType
{

    /**
     * @param NameType $Name
     * @param NativeAddressType $Address
     */
    public function __construct($Name, $Address)
    {
      parent::__construct($Name, $Address);
    }

}
