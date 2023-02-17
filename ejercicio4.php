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
        $suma = 0;
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 5 == 0) {
                echo $i . " ";
                $suma += $i;
            }
        }
        echo "<br>";
        echo "La suma de los múltiplos de 5 es: " . $suma . "<br>";
        echo "El cuadrado de la suma es: " . pow($suma, 2);
    ?>


</body>
</html>