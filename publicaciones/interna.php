<?php
$sql = "SELECT fecha, id, titulo, author, imagen_portada, cuerpo FROM publicaciones where id = '$id' and estado = 1";
$resultado = $conexion->query($sql);
$texto = "";
if ($resultado->num_rows) {
    while ($fila = $resultado->fetch_assoc()) {
        $titulo = $fila["titulo"];
        $texto .= "
                 <div>
                     <h1>{$fila['titulo']}</h1>
                     <figure alt='{{$fila['titulo']}'>
                         <img loading='lazy'
                             src='{$fila['imagen_portada']}'
                             alt='{$fila['titulo']}'>
                     </figure>
                     Publicado: {$fila['fecha']}
                     <p>
                     {$fila['cuerpo']}
                     <p>
                 </div>";
    }
} else {
    $texto .= "NO HAY PUBLICACIONES!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/publicaciones.css">
</head>
<body>
    <div class="contenedor">
        <div class="ele1">
            <?php include "../php/conexion.php"; ?>
            <?php include "../menu.php"; ?>
        </div>
        <div class="ele3">

            <?php 
                echo $texto;
            ?>


        </div>
        <div class="ele2"></div>
        <div class="ele4">
            fabricio &copy; 2023
        </div>
    </div>
</body>
</html>
