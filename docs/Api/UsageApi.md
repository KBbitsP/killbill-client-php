# Killbill\Client\Swagger\UsageApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllUsage**](UsageApi.md#getallusage) | **GET** /1.0/kb/usages/{subscriptionId} | Retrieve usage for a subscription
[**getUsage**](UsageApi.md#getusage) | **GET** /1.0/kb/usages/{subscriptionId}/{unitType} | Retrieve usage for a subscription and unit type
[**recordUsage**](UsageApi.md#recordusage) | **POST** /1.0/kb/usages | Record usage for a subscription

# **getAllUsage**
> \Killbill\Client\Swagger\Model\RolledUpUsage getAllUsage($subscriptionId, $startDate, $endDate, $pluginProperty)

Retrieve usage for a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Swagger\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$startDate = new \DateTime("2013-10-20"); // \DateTime | 
$endDate = new \DateTime("2013-10-20"); // \DateTime | 
$pluginProperty = array("pluginProperty_example"); // string[] | 

try {
    $result = $apiInstance->getAllUsage($subscriptionId, $startDate, $endDate, $pluginProperty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getAllUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | [**string**](../Model/.md)|  |
 **startDate** | **\DateTime**|  | [optional]
 **endDate** | **\DateTime**|  | [optional]
 **pluginProperty** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Killbill\Client\Swagger\Model\RolledUpUsage**](../Model/RolledUpUsage.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsage**
> \Killbill\Client\Swagger\Model\RolledUpUsage getUsage($subscriptionId, $unitType, $startDate, $endDate, $pluginProperty)

Retrieve usage for a subscription and unit type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Swagger\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$unitType = "unitType_example"; // string | 
$startDate = new \DateTime("2013-10-20"); // \DateTime | 
$endDate = new \DateTime("2013-10-20"); // \DateTime | 
$pluginProperty = array("pluginProperty_example"); // string[] | 

try {
    $result = $apiInstance->getUsage($subscriptionId, $unitType, $startDate, $endDate, $pluginProperty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | [**string**](../Model/.md)|  |
 **unitType** | **string**|  |
 **startDate** | **\DateTime**|  | [optional]
 **endDate** | **\DateTime**|  | [optional]
 **pluginProperty** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Killbill\Client\Swagger\Model\RolledUpUsage**](../Model/RolledUpUsage.md)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordUsage**
> recordUsage($body, $xKillbillCreatedBy, $xKillbillReason, $xKillbillComment)

Record usage for a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Killbill Api Key
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiKey', 'Bearer');// Configure API key authorization: Killbill Api Secret
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('X-Killbill-ApiSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Killbill-ApiSecret', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Killbill\Client\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Killbill\Client\Swagger\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Killbill\Client\Swagger\Model\SubscriptionUsageRecord(); // \Killbill\Client\Swagger\Model\SubscriptionUsageRecord | 
$xKillbillCreatedBy = "xKillbillCreatedBy_example"; // string | 
$xKillbillReason = "xKillbillReason_example"; // string | 
$xKillbillComment = "xKillbillComment_example"; // string | 

try {
    $apiInstance->recordUsage($body, $xKillbillCreatedBy, $xKillbillReason, $xKillbillComment);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->recordUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Killbill\Client\Swagger\Model\SubscriptionUsageRecord**](../Model/SubscriptionUsageRecord.md)|  |
 **xKillbillCreatedBy** | **string**|  |
 **xKillbillReason** | **string**|  | [optional]
 **xKillbillComment** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Killbill Api Key](../../README.md#Killbill Api Key), [Killbill Api Secret](../../README.md#Killbill Api Secret), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

