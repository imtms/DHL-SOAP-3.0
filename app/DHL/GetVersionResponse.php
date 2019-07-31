<?php

namespace App\DHL;

class GetVersionResponse
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @param Version $Version
     */
    public function __construct($Version)
    {
      $this->Version = $Version;
    }

    /**
     * @return Version
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param Version $Version
     * @return \App\DHL\GetVersionResponse
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
