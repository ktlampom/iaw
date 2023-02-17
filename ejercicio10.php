<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Metodo Post</h1>

    <form method="post" action="resumen_pedido.php">
    <label for="barras">Barras de pan:</label>
    <input type="number" id="barras" name="barras" min="0" max="10" value="0">
    <br>
    <label for="bollos">Bollos:</label>
    <input type="number" id="bollos" name="bollos" min="0" max="10" value="0">
    <br>
    <label for="bocatas">Pan de bocatas:</label>
    <input type="number" id="bocatas" name="bocatas" min="0" max="10" value="0">
    <br>
    <label for="fuente">¿Cómo encontró nuestra página web?</label>
    <select id="fuente" name="fuente">
        <option value="buscador">A través de un buscador</option>
        <option value="redes">A través de redes sociales</option>
        <option value="amigo">Por recomendación de un amigo</option>
        <option value="otro">Otro</option>
    </select>
    <br>
    <input type="submit" value="Enviar pedido">
    </form>

    <?php
        // Obtener los datos del pedido
        $barras = $_POST["barras"];
        $bollos = $_POST["bollos"];
        $bocatas = $_POST["bocatas"];
        $fuente = $_POST["fuente"];
        
        // Calcular el total del pedido
        $total = $barras * 0.5 + $bollos * 0.3 + $bocatas * 0.7;
        
        // Mostrar un resumen del pedido
        echo "<p>Ha pedido:</p>";
        echo "<ul>";
        echo "<li>$barras barras de pan</li>";
        echo "<li>$bollos bollos</li>";
        echo "<li>$bocatas pan de bocatas</li>";
        echo "</ul>";
        echo "<p>Total a pagar: $total euros</p>";
        echo "<p>¿Cómo encontró nuestra página web? $fuente</p>";
    ?>

    <h1>Metodo Get</h1>

    <form action="resumen.php" method="get">
        <label for="barra">Barras de pan:</label>
        <input type="number" id="barra" name="barra" min="0" value="0"><br>
        
        <label for="bollo">Bollos:</label>
        <input type="number" id="bollo" name="bollo" min="0" value="0"><br>
        
        <label for="pan_bocata">Pan de bocatas:</label>
        <input type="number" id="pan_bocata" name="pan_bocata" min="0" value="0"><br>
        
        <label for="como_encontro">¿Cómo encontró nuestra página web?</label>
        <select id="como_encontro" name="como_encontro">
            <option value="google">Google</option>
            <option value="redes_sociales">Redes sociales</option>
            <option value="recomendacion">Recomendación de un amigo</option>
            <option value="otros">Otros</option>
        </select><br>

        <input type="submit" value="Enviar pedido">
    </form>


    <?php
        $barra = $_GET['barra'];
        $bollo = $_GET['bollo'];
        $pan_bocata = $_GET['pan_bocata'];
        $como_encontro = $_GET['como_encontro'];

        $total = $barra + $bollo + $pan_bocata;

        echo "<h3>Resumen de pedido</h3>";
        echo "<p>Ha pedido $barra barras de pan, $bollo bollos y $pan_bocata panes de bocata.</p>";
        echo "<p>Total de productos: $total</p>";
        echo "<p>¿Cómo nos ha encontrado? $como_encontro</p>";
    ?>

</body>
</html>