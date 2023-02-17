<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Formulario HTML para seleccionar y enviar una imagen -->
    <form action="subir_imagen.php" method="post" enctype="multipart/form-data">
    Seleccione una imagen (formato GIF o JPG, tamaño máximo 200KB):
    <input type="file" name="imagen">
    <input type="submit" value="Subir imagen">
    </form>


    <?php
        // Directorio donde se almacenarán las imágenes
        $directorio = "imagenes/";

        // Verificar que se haya seleccionado una imagen
        if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] != UPLOAD_ERR_OK) {
        die("Error al subir la imagen");
        }

        // Verificar que la imagen tenga un formato válido (GIF o JPG)
        $tipo = $_FILES["imagen"]["type"];
        if ($tipo != "image/gif" && $tipo != "image/jpeg") {
        die("El formato de la imagen debe ser GIF o JPG");
        }

        // Verificar que la imagen no exceda el tamaño máximo permitido (200KB)
        $tamanio = $_FILES["imagen"]["size"];
        if ($tamanio > 200000) {
        die("La imagen no puede tener más de 200KB");
        }

        // Generar un nombre único para la imagen basado en la fecha y hora actual
        $nombre = date("YmdHis") . "_" . rand(1000, 9999);

        // Obtener la extensión del archivo original (GIF o JPG)
        $extension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);

        // Construir la ruta completa de la imagen en el directorio de destino
        $ruta_destino = $directorio . $nombre . "." . $extension;

        // Mover el archivo temporal de la imagen al directorio de destino
        if (!move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_destino)) {
        die("Error al subir la imagen al servidor");
        }

        // Mostrar todas las imágenes que se hayan subido
        $imagenes = glob($directorio . "*.{gif,jpg,jpeg}", GLOB_BRACE);
        foreach ($imagenes as $imagen) {
        echo "<img src='$imagen'><br>";
        }
    ?>


</body>
</html>