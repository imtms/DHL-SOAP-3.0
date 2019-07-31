<?php

namespace App\DHL;

class Status
{

    /**
     * @var statuscode $statuscode
     */
    protected $statuscode = null;

    /**
     * @var statusDescription $statusDescription
     */
    protected $statusDescription = null;

    /**
     * @param statuscode $statuscode
     * @param statusDescription $statusDescription
     */
    public function __construct($statuscode, $statusDescription)
    {
      $this->statuscode = $statuscode;
      $this->statusDescription = $statusDescription;
    }

    /**
     * @return statuscode
     */
    public function getStatuscode()
    {
      return $this->statuscode;
    }

    /**
     * @param statuscode $statuscode
     * @return \App\DHL\Status
     */
    public function setStatuscode($statuscode)
    {
      $this->statuscode = $statuscode;
      return $this;
    }

    /**
     * @return statusDescription
     */
    public function getStatusDescription()
    {
      return $this->statusDescription;
    }

    /**
     * @param statusDescription $statusDescription
     * @return \App\DHL\Status
     */
    public function setStatusDescription($statusDescription)
    {
      $this->statusDescription = $statusDescription;
      return $this;
    }

}
