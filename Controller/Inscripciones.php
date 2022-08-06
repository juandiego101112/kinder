<?php
class Inscripciones extends Controllers
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url());
        }
        parent::__construct();
    }
    public function inscripciones()
    {
        $data = $this->model->selectInscripcion();
        $this->views->getView($this, "listar", $data);
    }
    public function registrar()
    {
        $nombre_alumno = $_POST['nombre_alumno'];
        $apellido_alumno = $_POST['apellido_alumno'];
        $carrera_alumno = $_POST['carrera_alumno'];
        
        $insert = $this->model->insertarInscripcion($nombre_alumno, $apellido_alumno, $carrera_alumno);
        if ($insert) {
            header("location: " . base_url() . "inscripciones");
            die();    
        }
    }
    public function editar()
    {
        $id = $_GET['id'];
        $data = $this->model->editInscripcion($id);
        if ($data == 0) {
            $this->inscripciones();
        } else {
            $this->views->getView($this, "editar", $data);
        }
    }
    public function modificar()
    {
        $id = $_POST['id'];
        $nombre_alumno = $_POST['nombre_alumno'];
        $apellido_alumno = $_POST['apellido_alumno'];
        $carrera_alumno = $_POST['carrera_alumno'];
        $actualizar = $this->model->actualizarInscripcion($nombre_alumno, $apellido_alumno, $carrera_alumno, $id);
        if ($actualizar) {   
            header("location: " . base_url() . "inscripciones"); 
            die();
        }
    }
    public function eliminar()
    {
        $id = $_POST['id'];
        $this->model->estadoInscripcion(0, $id);
        header("location: " . base_url() . "inscripciones");
        die();
    }
    public function reingresar()
    {
        $id = $_POST['id'];
        $this->model->estadoInscripcion(1, $id);
        header("location: " . base_url() . "inscripciones");
        die();
    }
}
?>