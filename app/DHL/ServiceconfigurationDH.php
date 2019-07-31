<?php

namespace App\DHL;

class ServiceconfigurationDH
{

    /**
     * @var anonymous170 $active
     */
    protected $active = null;

    /**
     * @var anonymous171 $Days
     */
    protected $Days = null;

    /**
     * @param anonymous170 $active
     * @param anonymous171 $Days
     */
    public function __construct($active, $Days)
    {
      $this->active = $active;
      $this->Days = $Days;
    }

    /**
     * @return anonymous170
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param anonymous170 $active
     * @return \App\DHL\ServiceconfigurationDH
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

    /**
     * @return anonymous171
     */
    public function getDays()
    {
      return $this->Days;
    }

    /**
     * @param anonymous171 $Days
     * @return \App\DHL\ServiceconfigurationDH
     */
    public function setDays($Days)
    {
      $this->Days = $Days;
      return $this;
    }

}
