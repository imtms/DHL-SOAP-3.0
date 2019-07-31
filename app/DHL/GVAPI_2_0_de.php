<?php

namespace App\DHL;

class GVAPI_2_0_de extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Version' => 'App\\DHL\\Version',
      'AuthentificationType' => 'App\\DHL\\AuthentificationType',
      'NativeAddressType' => 'App\\DHL\\NativeAddressType',
      'ReceiverNativeAddressType' => 'App\\DHL\\ReceiverNativeAddressType',
      'PickupAddressType' => 'App\\DHL\\PickupAddressType',
      'DeliveryAddressType' => 'App\\DHL\\DeliveryAddressType',
      'BankType' => 'App\\DHL\\BankType',
      'NameType' => 'App\\DHL\\NameType',
      'ReceiverNameType' => 'App\\DHL\\ReceiverNameType',
      'CommunicationType' => 'App\\DHL\\CommunicationType',
      'ContactType' => 'App\\DHL\\ContactType',
      'PackStationType' => 'App\\DHL\\PackStationType',
      'PostfilialeType' => 'App\\DHL\\PostfilialeType',
      'ParcelShopType' => 'App\\DHL\\ParcelShopType',
      'CustomerType' => 'App\\DHL\\CustomerType',
      'ErrorType' => 'App\\DHL\\ErrorType',
      'CountryType' => 'App\\DHL\\CountryType',
      'ShipmentNumberType' => 'App\\DHL\\ShipmentNumberType',
      'Status' => 'App\\DHL\\Status',
      'Dimension' => 'App\\DHL\\Dimension',
      'TimeFrame' => 'App\\DHL\\TimeFrame',
      'GetVersionResponse' => 'App\\DHL\\GetVersionResponse',
      'CreateShipmentOrderRequest' => 'App\\DHL\\CreateShipmentOrderRequest',
      'ValidateShipmentOrderRequest' => 'App\\DHL\\ValidateShipmentOrderRequest',
      'CreateShipmentOrderResponse' => 'App\\DHL\\CreateShipmentOrderResponse',
      'ValidateShipmentResponse' => 'App\\DHL\\ValidateShipmentResponse',
      'GetLabelRequest' => 'App\\DHL\\GetLabelRequest',
      'GetLabelResponse' => 'App\\DHL\\GetLabelResponse',
      'DoManifestRequest' => 'App\\DHL\\DoManifestRequest',
      'DoManifestResponse' => 'App\\DHL\\DoManifestResponse',
      'DeleteShipmentOrderRequest' => 'App\\DHL\\DeleteShipmentOrderRequest',
      'DeleteShipmentOrderResponse' => 'App\\DHL\\DeleteShipmentOrderResponse',
      'GetExportDocRequest' => 'App\\DHL\\GetExportDocRequest',
      'GetExportDocResponse' => 'App\\DHL\\GetExportDocResponse',
      'GetManifestRequest' => 'App\\DHL\\GetManifestRequest',
      'GetManifestResponse' => 'App\\DHL\\GetManifestResponse',
      'UpdateShipmentOrderRequest' => 'App\\DHL\\UpdateShipmentOrderRequest',
      'UpdateShipmentOrderResponse' => 'App\\DHL\\UpdateShipmentOrderResponse',
      'CreationState' => 'App\\DHL\\CreationState',
      'ValidationState' => 'App\\DHL\\ValidationState',
      'Statusinformation' => 'App\\DHL\\Statusinformation',
      'PieceInformation' => 'App\\DHL\\PieceInformation',
      'ShipmentOrderType' => 'App\\DHL\\ShipmentOrderType',
      'Shipment' => 'App\\DHL\\Shipment',
      'ValidateShipmentOrderType' => 'App\\DHL\\ValidateShipmentOrderType',
      'ShipperTypeType' => 'App\\DHL\\ShipperTypeType',
      'ShipperType' => 'App\\DHL\\ShipperType',
      'ReceiverTypeType' => 'App\\DHL\\ReceiverTypeType',
      'ReceiverType' => 'App\\DHL\\ReceiverType',
      'Ident' => 'App\\DHL\\Ident',
      'ShipmentDetailsType' => 'App\\DHL\\ShipmentDetailsType',
      'ShipmentDetailsTypeType' => 'App\\DHL\\ShipmentDetailsTypeType',
      'ShipmentItemType' => 'App\\DHL\\ShipmentItemType',
      'ShipmentItemTypeType' => 'App\\DHL\\ShipmentItemTypeType',
      'ShipmentService' => 'App\\DHL\\ShipmentService',
      'Serviceconfiguration' => 'App\\DHL\\Serviceconfiguration',
      'ServiceconfigurationDetails' => 'App\\DHL\\ServiceconfigurationDetails',
      'ServiceconfigurationDetailsOptional' => 'App\\DHL\\ServiceconfigurationDetailsOptional',
      'ServiceconfigurationDetailsResponse' => 'App\\DHL\\ServiceconfigurationDetailsResponse',
      'ServiceconfigurationType' => 'App\\DHL\\ServiceconfigurationType',
      'ServiceconfigurationEndorsement' => 'App\\DHL\\ServiceconfigurationEndorsement',
      'ServiceconfigurationISR' => 'App\\DHL\\ServiceconfigurationISR',
      'ServiceconfigurationDH' => 'App\\DHL\\ServiceconfigurationDH',
      'ServiceconfigurationVisualAgeCheck' => 'App\\DHL\\ServiceconfigurationVisualAgeCheck',
      'ServiceconfigurationDeliveryTimeframe' => 'App\\DHL\\ServiceconfigurationDeliveryTimeframe',
      'ServiceconfigurationDateOfDelivery' => 'App\\DHL\\ServiceconfigurationDateOfDelivery',
      'ServiceconfigurationAdditionalInsurance' => 'App\\DHL\\ServiceconfigurationAdditionalInsurance',
      'ServiceconfigurationCashOnDelivery' => 'App\\DHL\\ServiceconfigurationCashOnDelivery',
      'ServiceconfigurationShipmentHandling' => 'App\\DHL\\ServiceconfigurationShipmentHandling',
      'ServiceconfigurationUnfree' => 'App\\DHL\\ServiceconfigurationUnfree',
      'ServiceconfigurationIC' => 'App\\DHL\\ServiceconfigurationIC',
      'ShipmentNotificationType' => 'App\\DHL\\ShipmentNotificationType',
      'ExportDocumentType' => 'App\\DHL\\ExportDocumentType',
      'ExportDocPosition' => 'App\\DHL\\ExportDocPosition',
      'FurtherAddressesType' => 'App\\DHL\\FurtherAddressesType',
      'DeliveryAdress' => 'App\\DHL\\DeliveryAdress',
      'LabelData' => 'App\\DHL\\LabelData',
      'ExportDocData' => 'App\\DHL\\ExportDocData',
      'ManifestState' => 'App\\DHL\\ManifestState',
      'DeletionState' => 'App\\DHL\\DeletionState',
      'BookPickupRequest' => 'App\\DHL\\BookPickupRequest',
      'BookPickupResponse' => 'App\\DHL\\BookPickupResponse',
      'PickupDetailsType' => 'App\\DHL\\PickupDetailsType',
      'PickupOrdererType' => 'App\\DHL\\PickupOrdererType',
      'PickupBookingInformationType' => 'App\\DHL\\PickupBookingInformationType',
      'CancelPickupRequest' => 'App\\DHL\\CancelPickupRequest',
      'CancelPickupResponse' => 'App\\DHL\\CancelPickupResponse',
      'IdentityData' => 'App\\DHL\\IdentityData',
      'DrivingLicense' => 'App\\DHL\\DrivingLicense',
      'IdentityCard' => 'App\\DHL\\IdentityCard',
      'BankCard' => 'App\\DHL\\BankCard',
      'PackstationType' => 'App\\DHL\\PackstationType',
      'ReadShipmentOrderResponse' => 'App\\DHL\\ReadShipmentOrderResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://tms.im/geschaeftskundenversand-api-3.0.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates shipments.
     *
     * @param CreateShipmentOrderRequest $part1
     * @return CreateShipmentOrderResponse
     */
    public function createShipmentOrder(CreateShipmentOrderRequest $part1)
    {
      return $this->__soapCall('createShipmentOrder', array($part1));
    }

    /**
     * Creates shipments.
     *
     * @param ValidateShipmentOrderRequest $part1
     * @return ValidateShipmentResponse
     */
    public function validateShipment(ValidateShipmentOrderRequest $part1)
    {
      return $this->__soapCall('validateShipment', array($part1));
    }

    /**
     * Deletes the requested shipments.
     *
     * @param DeleteShipmentOrderRequest $part1
     * @return DeleteShipmentOrderResponse
     */
    public function deleteShipmentOrder(DeleteShipmentOrderRequest $part1)
    {
      return $this->__soapCall('deleteShipmentOrder', array($part1));
    }

    /**
     * Manifest the requested DD shipments.
     *
     * @param DoManifestRequest $part1
     * @return DoManifestResponse
     */
    public function doManifest(DoManifestRequest $part1)
    {
      return $this->__soapCall('doManifest', array($part1));
    }

    /**
     * Returns the request-url for getting a label.
     *
     * @param GetLabelRequest $part1
     * @return GetLabelResponse
     */
    public function getLabel(GetLabelRequest $part1)
    {
      return $this->__soapCall('getLabel', array($part1));
    }

    /**
     * Returns the actual version of the implementation of the whole ISService
     *         webservice.
     *
     * @param Version $part1
     * @return GetVersionResponse
     */
    public function getVersion(Version $part1)
    {
      return $this->__soapCall('getVersion', array($part1));
    }

    /**
     * Returns the request-url for getting a export
     *         document.
     *
     * @param GetExportDocRequest $part1
     * @return GetExportDocResponse
     */
    public function getExportDoc(GetExportDocRequest $part1)
    {
      return $this->__soapCall('getExportDoc', array($part1));
    }

    /**
     * Request the manifest.
     *
     * @param GetManifestRequest $part1
     * @return GetManifestResponse
     */
    public function getManifest(GetManifestRequest $part1)
    {
      return $this->__soapCall('getManifest', array($part1));
    }

    /**
     * Updates a shipment order.
     *
     * @param UpdateShipmentOrderRequest $part1
     * @return UpdateShipmentOrderResponse
     */
    public function updateShipmentOrder(UpdateShipmentOrderRequest $part1)
    {
      return $this->__soapCall('updateShipmentOrder', array($part1));
    }

}
