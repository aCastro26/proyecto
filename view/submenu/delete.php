<?php
    require_once("c://xampp/htdocs/proyecto/controller/submenuController.php");
    $obj = new submenuController();
    $obj->delete($_GET['id']);

?>