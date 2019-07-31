<?php
namespace App\Http\Controllers;

use Storage;

class DHLController extends DHLBase
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
    	//默认版本
        $version = new \App\DHL\Version('3', '0', null);
        $shipmentitem = new \App\DHL\ShipmentItemType('1');
        //ELP等配置请在base里配
        $ShipmentDetails = new \App\DHL\ShipmentDetailsTypeType('V01PAK', $this->ekp, date('Y-m-d', time()), $shipmentitem);
        //发件人收件人信息
        $sender = $this->getSender('TMs', 'Westenhellweg', '106', '44137', 'Dortmund', 'Dortmund', $this->getCountry('Deutschland', 'DE'));
        $receiver = $this->getReceiver('TMss', 'Ettore-Bugatti-Straße', '45', '51149', 'Köln', 'Köln', $this->getCountry('Deutschland', 'DE'));
        //包裹信息
        $Shipment = new \App\DHL\Shipment($ShipmentDetails, $sender, $receiver, null, null);

        $shipmentOrder = new \App\DHL\ShipmentOrderType('01', $Shipment);

        $csor = new \App\DHL\CreateShipmentOrderRequest($version, $shipmentOrder, null, null, null, null, null, null);
        $service = new \App\DHL\GVAPI_2_0_de($this->options);
        $service->__setSoapHeaders($this->getHeader());
        try {
            $response = $service->createShipmentOrder($csor);
            $state = $response->getCreationState();
            foreach ($state as $value) {
                $label = $value->getLabelData()->getlabelUrl();
            }
            header('Content-type: application/pdf');
            echo file_get_contents($label);
        } catch (\SoapFault $exception) {
            if ($this->debug) {
                $originrequest = $service->__getLastRequest();
                $originresponse = $service->__getLastResponse();
                Storage::disk('local')->put(time() . ".txt", $originrequest . "\r\n\r\nresponse:\r\n" . $originresponse);
            }
        }
    }
}
