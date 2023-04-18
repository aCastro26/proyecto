<?php
    class submenuModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id_menu, $nombre, $descripcion){
            $stament = $this->PDO->prepare("INSERT INTO submenu VALUES(null,:id_menu,:nombre,:descripcion)");
            $stament->bindParam(":id_menu",$id_menu,);
            $stament->bindParam(":nombre",$nombre,);
            $stament->bindParam(":descripcion",$descripcion,);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT submenu.id SUB_ID, menu.nombre M_NAME, submenu.nombre SUB_NAME, submenu.descripcion SUB_DESCR FROM submenu INNER JOIN menu ON submenu.id_menu = menu.id WHERE submenu.id_menu = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT submenu.id SUB_ID, menu.nombre M_NAME, submenu.nombre SUB_NAME FROM submenu INNER JOIN menu ON submenu.id_menu = menu.id");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id, $id_menu, $nombre, $descripcion){
            $stament = $this->PDO->prepare("UPDATE submenu SET id_menu = :id_menu, nombre = :nombre, descripcion = :descripcion WHERE id = :id");
            $stament->bindParam(":id_menu",$id_menu);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":descripcion",$descripcion);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM submenu WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>