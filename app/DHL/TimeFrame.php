<?php

namespace App\DHL;

class TimeFrame
{

    /**
     * @var time $from
     */
    protected $from = null;

    /**
     * @var time $until
     */
    protected $until = null;

    /**
     * @param time $from
     * @param time $until
     */
    public function __construct($from, $until)
    {
      $this->from = $from;
      $this->until = $until;
    }

    /**
     * @return time
     */
    public function getFrom()
    {
      return $this->from;
    }

    /**
     * @param time $from
     * @return \App\DHL\TimeFrame
     */
    public function setFrom($from)
    {
      $this->from = $from;
      return $this;
    }

    /**
     * @return time
     */
    public function getUntil()
    {
      return $this->until;
    }

    /**
     * @param time $until
     * @return \App\DHL\TimeFrame
     */
    public function setUntil($until)
    {
      $this->until = $until;
      return $this;
    }

}
