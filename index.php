<?php
    include("funciones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Vinos y licores</title>
</head>

<body>

    <header class="container contenido" style="max-width:1500px">
        <img class="imagen-cabecera" src="img/header.jpg" width="1500" height="600">
        <div class="carta-centro">
            <h1>Vinos y Licores</h1>
            <h3>BY PEDRO</h3>
        </div>
    </header>

    <h2>Cliente</h2>
    
    <div>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido" required>
            <br>
            <?php
                getPro();
            ?>
            <br>
            <textarea name="comentario" placeholder="Comentarios"></textarea>
            <br>
            <input type="submit" value="Enviar"name="enviar">
        </form>
    </div>
    </div>
</body>

</html>


