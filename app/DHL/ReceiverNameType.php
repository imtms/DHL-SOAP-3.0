<?php

namespace App\DHL;

class ReceiverNameType
{

    /**
     * @var name $name
     */
    protected $name = null;

    /**
     * @param name $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return name
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param name $name
     * @return \App\DHL\ReceiverNameType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
