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
        for ($i = 1; $i <= 100; $i++) {
            // Generar un color aleatorio en formato hexadecimal
            $color = sprintf("#%06x", mt_rand(0, 0xFFFFFF));
            
            // Imprimir el cuadrado con el color generado
            echo "<div style='background-color: $color; width: 50px; height: 50px; display: inline-block;'></div>";
        }
    ?>

</body>
</html>