<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PublisherQueryLanguageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201911\\AdUnitCodeError',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v201911\\AdUnitHierarchyError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201911\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201911\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BuyerUserListTargeting',
      'ChangeHistoryValue' => 'Google\\AdsApi\\AdManager\\v201911\\ChangeHistoryValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'ColumnType' => 'Google\\AdsApi\\AdManager\\v201911\\ColumnType',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201911\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DayPartTargeting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceManufacturerTargeting',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201911\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'FileError' => 'Google\\AdsApi\\AdManager\\v201911\\FileError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'InvalidEmailError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidEmailError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryUnitError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201911\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201911\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201911\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201911\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201911\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201911\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201911\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201911\\ReservationDetailsError',
      'ResultSet' => 'Google\\AdsApi\\AdManager\\v201911\\ResultSet',
      'Row' => 'Google\\AdsApi\\AdManager\\v201911\\Row',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201911\\Targeting',
      'TargetingValue' => 'Google\\AdsApi\\AdManager\\v201911\\TargetingValue',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201911\\Technology',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201911\\TimeOfDay',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTarget',
      'selectResponse' => 'Google\\AdsApi\\AdManager\\v201911\\selectResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/PublisherQueryLanguageService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Retrieves rows of data that satisfy the given {@link Statement#query} from
     * the system.
     *
     * specify what data needs to returned
     *
     * @param \Google\AdsApi\AdManager\v201911\Statement $selectStatement
     * @return \Google\AdsApi\AdManager\v201911\ResultSet
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function select(\Google\AdsApi\AdManager\v201911\Statement $selectStatement)
    {
      return $this->__soapCall('select', array(array('selectStatement' => $selectStatement)))->getRval();
    }

}
