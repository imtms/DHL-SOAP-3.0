<?php

namespace App\DHL;

class IdentityCard
{

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var string $CardAuthority
     */
    protected $CardAuthority = null;

    /**
     * @param string $CardNumber
     * @param string $CardAuthority
     */
    public function __construct($CardNumber, $CardAuthority)
    {
      $this->CardNumber = $CardNumber;
      $this->CardAuthority = $CardAuthority;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \App\DHL\IdentityCard
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardAuthority()
    {
      return $this->CardAuthority;
    }

    /**
     * @param string $CardAuthority
     * @return \App\DHL\IdentityCard
     */
    public function setCardAuthority($CardAuthority)
    {
      $this->CardAuthority = $CardAuthority;
      return $this;
    }

}
