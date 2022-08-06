<?php
class Pagocuatris extends Controllers
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url());
        }
        parent::__construct();
    }
    public function pagocuatris()
    {
        $data = $this->model->selectPagocuatri();
        $this->views->getView($this, "listar", $data);
    }
    public function registrar()
    {
        $nombre_alumno = $_POST['nombre_alumno'];
        $carrera_alumno = $_POST['carrera_alumno'];
        $cuatrimestre = $_POST['cuatrimestre'];
        $monto = $_POST['monto'];
        
        $insert = $this->model->insertarPagocuatri($nombre_alumno, $carrera_alumno, $cuatrimestre, $monto);
        if ($insert) {
            header("location: " . base_url() . "pagocuatris");
            die();    
        }
    }
    public function editar()
    {
        $id = $_GET['id'];
        $data = $this->model->editPagocuatri($id);
        if ($data == 0) {
            $this->pagocuatris();
        } else {
            $this->views->getView($this, "editar", $data);
        }
    }
    public function modificar()
    {
        $id = $_POST['id'];
        $nombre_alumno = $_POST['nombre_alumno'];
        $carrera_alumno = $_POST['carrera_alumno'];
        $cuatrimestre = $_POST['cuatrimestre'];
        $monto = $_POST['monto'];
        $actualizar = $this->model->actualizarPagocuatri($nombre_alumno, $carrera_alumno, $cuatrimestre, $monto, $id);
        if ($actualizar) {   
            header("location: " . base_url() . "pagocuatris"); 
            die();
        }
    }
 
}
?>