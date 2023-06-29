<?php
    /* 
    <div>
        <h4>Texto</h4>
        <figure alt="primera temporada">
            <img loading="lazy"
                src="https://www.crunchyroll.com/imgsrv/display/thumbnail/240x360/catalog/crunchyroll/47efe819e954f83cf0b8e022c39488ce.jpe"
                alt="ver para creer">
        </figure>
    </div>
    */
    $sql = "SELECT fecha, id, titulo, author, imagen_portada FROM publicaciones where estado = 1";
    $resultado = $conexion->query($sql);
    $texto = "";
    if ($resultado->num_rows) {
        while ($fila = $resultado->fetch_assoc()) {
            $texto .= "
                <div>
                    <h4>{$fila['titulo']}</h4>
                    <figure alt='{$fila['titulo']} {$fila['fecha']}'>
                        <img loading='lazy'
                            src='{$fila['imagen_portada']}'
                            alt='{$fila['titulo']}'>
                    </figure>
                </div>";
        }
    }else{
        $texto .= "NO HAY PUBLICACIONES!";
    }

    echo $texto;
