<?php

if (!extension_loaded("soap")){
  dl("php_soap.dll");
}


ini_set("soap.wsdl_cache_enabled", "0");

$server = new SoapServer("konverter.wsdl");

function konverzijaBAMToHRK($val){
  return $val * 3.86 . " BAM";
}

$server->AddFunction("konverzijaBAMToHRK");
$server->handle();
?>