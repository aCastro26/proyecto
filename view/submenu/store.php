<?php
    require_once("c://xampp/htdocs/proyecto/controller/submenuController.php");
    $obj = new submenuController();
    echo $_POST['id_menu'];
    $obj->guardar($_POST['id_menu'], $_POST['nombre'], ($_POST['descripcion']));
?>