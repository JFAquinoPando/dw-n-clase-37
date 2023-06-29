<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <div class="ele1">
            <?php include "php/conexion.php"; ?>
            <?php include "menu.php"; ?>
        </div>
        <div class="ele3">

            <div class="grilla">
                
                <?php include "publicaciones/listado.php"; ?>


            </div>


        </div>
        <div class="ele2"></div>
        <div class="ele4">
            fabricio &copy; 2023
        </div>
    </div>
</body>
</html>