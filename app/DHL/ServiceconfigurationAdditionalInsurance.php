<?php

namespace App\DHL;

class ServiceconfigurationAdditionalInsurance
{

    /**
     * @var anonymous182 $active
     */
    protected $active = null;

    /**
     * @var anonymous183 $insuranceAmount
     */
    protected $insuranceAmount = null;

    /**
     * @param anonymous182 $active
     * @param anonymous183 $insuranceAmount
     */
    public function __construct($active, $insuranceAmount)
    {
      $this->active = $active;
      $this->insuranceAmount = $insuranceAmount;
    }

    /**
     * @return anonymous182
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param anonymous182 $active
     * @return \App\DHL\ServiceconfigurationAdditionalInsurance
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

    /**
     * @return anonymous183
     */
    public function getInsuranceAmount()
    {
      return $this->insuranceAmount;
    }

    /**
     * @param anonymous183 $insuranceAmount
     * @return \App\DHL\ServiceconfigurationAdditionalInsurance
     */
    public function setInsuranceAmount($insuranceAmount)
    {
      $this->insuranceAmount = $insuranceAmount;
      return $this;
    }

}
