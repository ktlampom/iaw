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

    <form method="post" action="procesar_pedido.php">
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

        // Realizar alguna acción con los datos del pedido (por ejemplo, guardarlos en una base de datos)

        // Mostrar un mensaje de confirmación
        echo "Pedido enviado correctamente. Gracias!";
    ?>

    <h1>Metodo Get</h1>

    <form method="get" action="procesar_pedido.php">
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
        $barras = $_GET["barras"];
        $bollos = $_GET["bollos"];
        $bocatas = $_GET["bocatas"];
        $fuente = $_GET["fuente"];

        // Realizar alguna acción con los datos del pedido (por ejemplo, guardarlos en una base de datos)

        // Mostrar un mensaje de confirmación
        echo "Pedido enviado correctamente. Gracias!";
    ?>



</body>
</html>