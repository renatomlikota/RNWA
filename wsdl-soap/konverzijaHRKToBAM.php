<?php

if (!extension_loaded("soap")){
  dl("php_soap.dll");
}


ini_set("soap.wsdl_cache_enabled", "0");

$server = new SoapServer("konverter.wsdl");

function konverzijaHRKToBAM($val) {
  return $val * 0.26 . " BAM";
}

$server->AddFunction("konverzijaHRKToBAM");
$server->handle();
?>