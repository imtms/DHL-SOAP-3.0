<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DHLBase extends Controller
{
    protected $debug = 1;
    protected $options;
    protected $ekp = '22222222220101';//ekp
    protected $user = '2222222222_01';//用户名
    protected $pass = 'pass';//密码
    public function __construct()
    {
        //sandbox environment
        $this->options = array(
            'login' => '用户名',
            'password' => '密码',
            'trace' => true
        );
    }
    protected function getCountry($country, $code)
    {
        $origin = new \App\DHL\CountryType($code);
        $origin = $origin->setCountry($country);
        return $origin;
    }
    protected function getSender($name, $road, $num, $zip, $city, $province, $country)
    {
        $Address = new \App\DHL\NativeAddressType($road, $num, $zip, $city, $province, $country);
        $shipper = new \App\DHL\ShipperType(new \App\DHL\NameType($name, null, null), $Address);
        return $shipper;
    }
    protected function getReceiver($name, $road, $num, $zip, $city, $province, $country)
    {
        $Address = new \App\DHL\ReceiverNativeAddressType(null, null, $road, $num, $zip, $city, $province, $country);
        $receiver = new \App\DHL\ReceiverType(new \App\DHL\ReceiverNameType($name), $Address, null, null);
        return $receiver;
    }
    protected function getHeader()
    {
        $auth = new \App\DHL\AuthentificationType($this->user, $this->pass);
        $header = new \SoapHeader('http://dhl.de/webservice/cisbase', 'Authentification', $auth);
        return $header;
    }
}

