<?php

namespace Dpsr\ShippingEasyPackage;

class ShippingEasyObject
{
  public function request($meth, $path, $params=null, $payload = null, $apiKey = null, $apiSecret = null)
  {
    $requestor = new ShippingEasyApiRequestor();
    return $requestor->request($meth, $path, $params, $payload, $apiKey, $apiSecret);
  }

}

