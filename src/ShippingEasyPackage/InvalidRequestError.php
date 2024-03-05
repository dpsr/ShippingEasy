<?php

namespace Dpsr\ShippingEasyPackage;

class ShippingEasyInvalidRequestError extends ShippingEasyError
{
  public function __construct($message, $http_status=null, $http_body=null, $json_body=null)
  {
    parent::__construct($message, $http_status, $http_body, $json_body);
  }
}
