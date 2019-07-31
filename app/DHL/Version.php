<?php

namespace App\DHL;

class Version
{

    /**
     * @var majorRelease $majorRelease
     */
    protected $majorRelease = null;

    /**
     * @var minorRelease $minorRelease
     */
    protected $minorRelease = null;

    /**
     * @var build $build
     */
    protected $build = null;

    /**
     * @param majorRelease $majorRelease
     * @param minorRelease $minorRelease
     * @param build $build
     */
    public function __construct($majorRelease, $minorRelease, $build)
    {
      $this->majorRelease = $majorRelease;
      $this->minorRelease = $minorRelease;
      $this->build = $build;
    }

    /**
     * @return majorRelease
     */
    public function getMajorRelease()
    {
      return $this->majorRelease;
    }

    /**
     * @param majorRelease $majorRelease
     * @return \App\DHL\Version
     */
    public function setMajorRelease($majorRelease)
    {
      $this->majorRelease = $majorRelease;
      return $this;
    }

    /**
     * @return minorRelease
     */
    public function getMinorRelease()
    {
      return $this->minorRelease;
    }

    /**
     * @param minorRelease $minorRelease
     * @return \App\DHL\Version
     */
    public function setMinorRelease($minorRelease)
    {
      $this->minorRelease = $minorRelease;
      return $this;
    }

    /**
     * @return build
     */
    public function getBuild()
    {
      return $this->build;
    }

    /**
     * @param build $build
     * @return \App\DHL\Version
     */
    public function setBuild($build)
    {
      $this->build = $build;
      return $this;
    }

}
