<?php

namespace App\DHL;

class ServiceconfigurationDetailsResponse
{

    /**
     * @var anonymous159 $details
     */
    protected $details = null;

    /**
     * @param anonymous159 $details
     */
    public function __construct($details)
    {
      $this->details = $details;
    }

    /**
     * @return anonymous159
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param anonymous159 $details
     * @return \App\DHL\ServiceconfigurationDetailsResponse
     */
    public function setDetails($details)
    {
      $this->details = $details;
      return $this;
    }

}
