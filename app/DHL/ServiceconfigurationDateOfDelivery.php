<?php

namespace App\DHL;

class ServiceconfigurationDateOfDelivery
{

    /**
     * @var anonymous179 $active
     */
    protected $active = null;

    /**
     * @var anonymous180 $details
     */
    protected $details = null;

    /**
     * @param anonymous179 $active
     * @param anonymous180 $details
     */
    public function __construct($active, $details)
    {
      $this->active = $active;
      $this->details = $details;
    }

    /**
     * @return anonymous179
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param anonymous179 $active
     * @return \App\DHL\ServiceconfigurationDateOfDelivery
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

    /**
     * @return anonymous180
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param anonymous180 $details
     * @return \App\DHL\ServiceconfigurationDateOfDelivery
     */
    public function setDetails($details)
    {
      $this->details = $details;
      return $this;
    }

}
