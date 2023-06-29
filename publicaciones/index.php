<?php

    $id = isset($_GET["id"]) ? $_GET["id"] : "0";

    if (is_numeric($id) && $id > 0) {
        include "../php/conexion.php";
        include "interna.php";
    }else {
        header("Location: http://localhost/dw-n-37-proyecto/");
        exit();
    }
