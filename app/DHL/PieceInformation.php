<?php

namespace App\DHL;

class PieceInformation
{

    /**
     * @var ShipmentNumberType $PieceNumber
     */
    protected $PieceNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentNumberType
     */
    public function getPieceNumber()
    {
      return $this->PieceNumber;
    }

    /**
     * @param ShipmentNumberType $PieceNumber
     * @return \App\DHL\PieceInformation
     */
    public function setPieceNumber($PieceNumber)
    {
      $this->PieceNumber = $PieceNumber;
      return $this;
    }

}
