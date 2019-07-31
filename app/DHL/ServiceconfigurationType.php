<?php

namespace App\DHL;

class ServiceconfigurationType
{

    /**
     * @var anonymous161 $active
     */
    protected $active = null;

    /**
     * @var anonymous162 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous161 $active
     * @param anonymous162 $Type
     */
    public function __construct($active, $Type)
    {
      $this->active = $active;
      $this->Type = $Type;
    }

    /**
     * @return anonymous161
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param anonymous161 $active
     * @return \App\DHL\ServiceconfigurationType
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

    /**
     * @return anonymous162
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous162 $Type
     * @return \App\DHL\ServiceconfigurationType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
