<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function redondear($numero, $decimales) {
            $factor = pow(10, $decimales);
            $parte_entera = floor($numero * $factor);
            $parte_decimal = $numero * $factor - $parte_entera;
            $ajuste = $parte_decimal >= 0.5 ? 1 : 0;
            return ($parte_entera + $ajuste) / $factor;
        }

        $numero = 3.14159;
        $redondeado = redondear($numero, 3);
        echo "El número original es: " . $numero . "<br>";
        echo "El número redondeado es: " . $redondeado;
    ?>

</body>
</html>