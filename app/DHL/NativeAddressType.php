<?php

namespace App\DHL;

class NativeAddressType
{

    /**
     * @var streetName $streetName
     */
    protected $streetName = null;

    /**
     * @var streetNumber $streetNumber
     */
    protected $streetNumber = null;

    /**
     * @var addressAddition[] $addressAddition
     */
    protected $addressAddition = null;

    /**
     * @var dispatchingInformation $dispatchingInformation
     */
    protected $dispatchingInformation = null;

    /**
     * @var ZipType $zip
     */
    protected $zip = null;

    /**
     * @var city $city
     */
    protected $city = null;

    /**
     * @var province $province
     */
    protected $province = null;

    /**
     * @var CountryType $Origin
     */
    protected $Origin = null;

    /**
     * @param streetName $streetName
     * @param streetNumber $streetNumber
     * @param ZipType $zip
     * @param city $city
     * @param province $province
     * @param CountryType $Origin
     */
    public function __construct($streetName, $streetNumber, $zip, $city, $province, $Origin)
    {
      $this->streetName = $streetName;
      $this->streetNumber = $streetNumber;
      $this->zip = $zip;
      $this->city = $city;
      $this->province = $province;
      $this->Origin = $Origin;
    }

    /**
     * @return streetName
     */
    public function getStreetName()
    {
      return $this->streetName;
    }

    /**
     * @param streetName $streetName
     * @return \App\DHL\NativeAddressType
     */
    public function setStreetName($streetName)
    {
      $this->streetName = $streetName;
      return $this;
    }

    /**
     * @return streetNumber
     */
    public function getStreetNumber()
    {
      return $this->streetNumber;
    }

    /**
     * @param streetNumber $streetNumber
     * @return \App\DHL\NativeAddressType
     */
    public function setStreetNumber($streetNumber)
    {
      $this->streetNumber = $streetNumber;
      return $this;
    }

    /**
     * @return addressAddition[]
     */
    public function getAddressAddition()
    {
      return $this->addressAddition;
    }

    /**
     * @param addressAddition[] $addressAddition
     * @return \App\DHL\NativeAddressType
     */
    public function setAddressAddition(array $addressAddition = null)
    {
      $this->addressAddition = $addressAddition;
      return $this;
    }

    /**
     * @return dispatchingInformation
     */
    public function getDispatchingInformation()
    {
      return $this->dispatchingInformation;
    }

    /**
     * @param dispatchingInformation $dispatchingInformation
     * @return \App\DHL\NativeAddressType
     */
    public function setDispatchingInformation($dispatchingInformation)
    {
      $this->dispatchingInformation = $dispatchingInformation;
      return $this;
    }

    /**
     * @return ZipType
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param ZipType $zip
     * @return \App\DHL\NativeAddressType
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return city
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param city $city
     * @return \App\DHL\NativeAddressType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return province
     */
    public function getProvince()
    {
      return $this->province;
    }

    /**
     * @param province $province
     * @return \App\DHL\NativeAddressType
     */
    public function setProvince($province)
    {
      $this->province = $province;
      return $this;
    }

    /**
     * @return CountryType
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param CountryType $Origin
     * @return \App\DHL\NativeAddressType
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

}
