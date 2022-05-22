<?php

if (!extension_loaded("soap")){
  dl("php_soap.dll");
}


ini_set("soap.wsdl_cache_enabled", "0");

$server = new SoapServer("konverter.wsdl");

function konverzijaBAMToEUR($val){
  return $val * 0.51 . " EUR";
}

$server->AddFunction("konverzijaBAMToEUR");
$server->handle();
?>