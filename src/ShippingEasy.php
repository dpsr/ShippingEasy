<?php

// Tested on PHP 5.2, 5.3

// This snippet (and some of the curl code) due to the Facebook SDK.
if (!function_exists('curl_init')) {
  throw new Exception('ShippingEasy needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('ShippingEasy needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('ShippingEasy needs the Multibyte String PHP extension.');
}

require(dirname(__FILE__) . '/ShippingEasyPackage/ShippingEasy.php');

// Errors
require(dirname(__FILE__) . '/ShippingEasyPackage/Error.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/ApiError.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/ApiConnectionError.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/AuthenticationError.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/InvalidRequestError.php');

require(dirname(__FILE__) . '/ShippingEasyPackage/ApiRequestor.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/Authenticator.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/Object.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/Order.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/PartnerSession.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/PartnerAccount.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/Signature.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/SignedUrl.php');
require(dirname(__FILE__) . '/ShippingEasyPackage/Cancellation.php');