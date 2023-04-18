<?php
    require_once("c://xampp/htdocs/proyecto/controller/menuController.php");
    $obj = new menuController();
    $obj->update($_POST['id'],$_POST['nombre'],$_POST['descripcion']);

?>