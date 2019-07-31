<?php

namespace App\DHL;

class Serviceconfiguration
{

    /**
     * @var anonymous151 $active
     */
    protected $active = null;

    /**
     * @param anonymous151 $active
     */
    public function __construct($active)
    {
      $this->active = $active;
    }

    /**
     * @return anonymous151
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param anonymous151 $active
     * @return \App\DHL\Serviceconfiguration
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

}
