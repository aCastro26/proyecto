<?php
    require_once("c://xampp/htdocs/proyecto/controller/submenuController.php");
    $obj = new submenuController();
    $obj->update($_POST['id'],$_POST['id_menu'],$_POST['nombre'],$_POST['descripcion']);

?>