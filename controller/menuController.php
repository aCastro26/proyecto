<?php
    class menuController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/menuModel.php");
            $this->model = new menuModel();
        }
        public function guardar($nombre, $descripcion){
            $id = $this->model->insertar($nombre, $descripcion);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre, $descripcion){
            return ($this->model->update($id,$nombre,$descripcion) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>