<?php

function sumar($num1, $num2) {
    return $num1 + $num2;
}

$url = "http://localhost/soap/calcular.php";
$uri = "http://localhost/soap/calcular.php";

$servidor = new SoapServer(null, [
    "location" => $url,
    "uri" => $uri
]);

$servidor->addFunction("sumar");

$servidor->handle();

?>