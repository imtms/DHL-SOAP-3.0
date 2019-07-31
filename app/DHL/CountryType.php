<?php

namespace App\DHL;

class CountryType
{

    /**
     * @var country $country
     */
    protected $country = null;

    /**
     * @var countryISOType $countryISOCode
     */
    protected $countryISOCode = null;

    /**
     * @var state $state
     */
    protected $state = null;

    /**
     * @param countryISOType $countryISOCode
     */
    public function __construct($countryISOCode)
    {
      $this->countryISOCode = $countryISOCode;
    }

    /**
     * @return country
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param country $country
     * @return \App\DHL\CountryType
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return countryISOType
     */
    public function getCountryISOCode()
    {
      return $this->countryISOCode;
    }

    /**
     * @param countryISOType $countryISOCode
     * @return \App\DHL\CountryType
     */
    public function setCountryISOCode($countryISOCode)
    {
      $this->countryISOCode = $countryISOCode;
      return $this;
    }

    /**
     * @return state
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param state $state
     * @return \App\DHL\CountryType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

}
