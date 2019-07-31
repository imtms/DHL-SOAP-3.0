<?php

namespace App\DHL;

class ServiceconfigurationUnfree
{

    /**
     * @var anonymous192 $active
     */
    protected $active = null;

    /**
     * @var anonymous193 $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var anonymous194 $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @param anonymous192 $active
     * @param anonymous193 $PaymentType
     * @param anonymous194 $CustomerNumber
     */
    public function __construct($active, $PaymentType, $CustomerNumber)
    {
      $this->active = $active;
      $this->PaymentType = $PaymentType;
      $this->CustomerNumber = $CustomerNumber;
    }

    /**
     * @return anonymous192
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param anonymous192 $active
     * @return \App\DHL\ServiceconfigurationUnfree
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

    /**
     * @return anonymous193
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param anonymous193 $PaymentType
     * @return \App\DHL\ServiceconfigurationUnfree
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

    /**
     * @return anonymous194
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param anonymous194 $CustomerNumber
     * @return \App\DHL\ServiceconfigurationUnfree
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

}
