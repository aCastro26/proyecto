<?php
    require_once("c://xampp/htdocs/proyecto/controller/menuController.php");
    $obj = new menuController();
    $obj->guardar($_POST['nombre'], ($_POST['descripcion']));
?>