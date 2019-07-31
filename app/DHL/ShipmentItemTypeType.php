<?php

namespace App\DHL;

class ShipmentItemTypeType extends ShipmentItemType
{

    /**
     * @param weightInKG $weightInKG
     */
    public function __construct($weightInKG)
    {
      parent::__construct($weightInKG);
    }

}
