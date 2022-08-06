<?php
class Profesores extends Controllers
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url());
        }
        parent::__construct();
    }
    public function profesores()
    {
        $data = $this->model->selectProfesor();
        $this->views->getView($this, "listar", $data);
    }
    public function registrar()
    {
        $nombre_profesor = $_POST['nombre_profesor'];
        $apellido_profesor = $_POST['apellido_profesor'];
        $materia_profesor = $_POST['materia_profesor'];
        $grado_estudios = $_POST['grado_estudios'];
        
        $insert = $this->model->insertarProfesor($nombre_profesor, $apellido_profesor, $materia_profesor, $grado_estudios);
        if ($insert) {
            header("location: " . base_url() . "profesores");
            die();    
        }
    }
    public function editar()
    {
        $id = $_GET['id'];
        $data = $this->model->editProfesor($id);
        if ($data == 0) {
            $this->profesores();
        } else {
            $this->views->getView($this, "editar", $data);
        }
    }
    public function modificar()
    {
        $id = $_POST['id'];
        $nombre_profesor = $_POST['nombre_profesor'];
        $apellido_profesor = $_POST['apellido_profesor'];
        $materia_profesor = $_POST['materia_profesor'];
        $grado_estudios = $_POST['grado_estudios'];
        $actualizar = $this->model->actualizarProfesor($nombre_profesor, $apellido_profesor, $materia_profesor, $grado_estudios, $id);
        if ($actualizar) {   
            header("location: " . base_url() . "profesores"); 
            die();
        }
    }
    public function eliminar()
    {
        $id = $_POST['id'];
        $this->model->estadoProfesor(0, $id);
        header("location: " . base_url() . "profesores");
        die();
    }
    public function reingresar()
    {
        $id = $_POST['id'];
        $this->model->estadoProfesor(1, $id);
        header("location: " . base_url() . "profesores");
        die();
    }
}
?>