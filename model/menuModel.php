<?php
    class menuModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre, $descripcion){
            $stament = $this->PDO->prepare("INSERT INTO menu VALUES(null,:nombre,:descripcion)");
            $stament->bindParam(":nombre",$nombre,);
            $stament->bindParam(":descripcion",$descripcion,);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM menu where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM menu");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre, $descripcion){
            $stament = $this->PDO->prepare("UPDATE menu SET nombre = :nombre, descripcion = :descripcion WHERE id = :id");
            $stament->bindParam(":nombre",$nombre,);
            $stament->bindParam(":descripcion",$descripcion);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM menu WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>