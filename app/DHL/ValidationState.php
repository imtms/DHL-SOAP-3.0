<?php

namespace App\DHL;

class ValidationState
{

    /**
     * @var SequenceNumber $sequenceNumber
     */
    protected $sequenceNumber = null;

    /**
     * @var Statusinformation $Status
     */
    protected $Status = null;

    /**
     * @param SequenceNumber $sequenceNumber
     * @param Statusinformation $Status
     */
    public function __construct($sequenceNumber, $Status)
    {
      $this->sequenceNumber = $sequenceNumber;
      $this->Status = $Status;
    }

    /**
     * @return SequenceNumber
     */
    public function getSequenceNumber()
    {
      return $this->sequenceNumber;
    }

    /**
     * @param SequenceNumber $sequenceNumber
     * @return \App\DHL\ValidationState
     */
    public function setSequenceNumber($sequenceNumber)
    {
      $this->sequenceNumber = $sequenceNumber;
      return $this;
    }

    /**
     * @return Statusinformation
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Statusinformation $Status
     * @return \App\DHL\ValidationState
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
