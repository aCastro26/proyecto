<?php
    require_once("c://xampp/htdocs/proyecto/controller/menuController.php");
    $obj = new menuController();
    $obj->delete($_GET['id']);

?>