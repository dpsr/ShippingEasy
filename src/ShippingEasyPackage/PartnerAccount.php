<?php

namespace Dpsr\ShippingEasyPackage;

class ShippingEasyPartnerAccount extends ShippingEasyObject
{
  public function create($data = array())
  {
    return $this->request("post", "/partners/api/accounts", null, array("account" => $data), ShippingEasy::$partnerApiKey, ShippingEasy::$partnerApiSecret);
  }
}
