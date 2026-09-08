<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Actividad 2 - Webservice SOAP</title>
</head>
<body>

<?php

//Cambios de prueba

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $url = "http://localhost/soap/sinWSDL/calcular.php";
    $uri = "http://localhost/soap/sinWSDL/calcular.php";

    $cliente = new SoapClient(null, [
        "location" => $url,
        "uri" => $uri
    ]);

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if (is_numeric($num1) && is_numeric($num2)) {

        $resultado = $cliente->sumar($num1, $num2);

        echo "<p>La suma de $num1 + $num2 es: <strong>$resultado</strong></p>";

    } else {

        echo "<p>Introduce dos valores numéricos válidos.</p>";

    }
}

?>

<form method="post" action="cliente.php">

    <fieldset>

        <legend>Suma dos numeros</legend>

        Número 1:
        <input type="text" name="num1" required>
        <br><br>

        Número 2:
        <input type="text" name="num2" required>
        <br><br>

        <input type="submit" value="SUMAR">

    </fieldset>

</form>

</body>
</html>