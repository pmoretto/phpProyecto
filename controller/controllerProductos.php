<?php
    require_once("model/modelProductos.php");
    $productos = new modelProductos();
    $matrizProductos = $productos->getProductos();
    require_once("view/viewProductos.php");
?>