<?php

namespace App\DHL;

class AuthentificationType
{

    /**
     * @var user $user
     */
    protected $user = null;

    /**
     * @var signature $signature
     */
    protected $signature = null;

    /**
     * @param user $user
     * @param signature $signature
     */
    public function __construct($user, $signature)
    {
      $this->user = $user;
      $this->signature = $signature;
    }

    /**
     * @return user
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param user $user
     * @return \App\DHL\AuthentificationType
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return signature
     */
    public function getSignature()
    {
      return $this->signature;
    }

    /**
     * @param signature $signature
     * @return \App\DHL\AuthentificationType
     */
    public function setSignature($signature)
    {
      $this->signature = $signature;
      return $this;
    }

}
