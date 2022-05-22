<?php

if (!extension_loaded("soap")){
  dl("php_soap.dll");
}


ini_set("soap.wsdl_cache_enabled", "0");

$server = new SoapServer("konverter.wsdl");

function konverzijaEURToBAM($val){
  return $val * 1.96 . " BAM";
}

$server->AddFunction("konverzijaEURToBAM");
$server->handle();
?>