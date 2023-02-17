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
        $numero = 1;
        $suma = 0;
        while ($numero <= 50) {
            $cuadrado = $numero * $numero;
            echo "El cuadrado de " . $numero . " es " . $cuadrado . "<br>";
            $suma += $cuadrado;
            $numero++;
        }
        echo "La suma total es: " . $suma;
    ?>
</body>
</html>