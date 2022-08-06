<?php
class InscripcionesModel extends Mysql{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectInscripcion()
    {
        $sql = "SELECT * FROM inscripcion";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertarInscripcion(String $nombre_alumno, String $apellido_alumno, String $carrera_alumno)
    {
        $this->nombre_alumno = $nombre_alumno;
        $this->apellido_alumno = $apellido_alumno;
        $this->carrera_alumno = $carrera_alumno;
        $query = "INSERT INTO inscripcion(nombre_alumno,apellido_alumno,carrera_alumno) VALUES (?,?,?)";
        $data = array($this->nombre_alumno, $this->apellido_alumno, $this->carrera_alumno);
        $this->insert($query, $data);
        return true;
    }
    public function editInscripcion(int $id)
    {
        $sql = "SELECT * FROM inscripcion WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
    public function actualizarInscripcion(String $nombre_alumno, String $apellido_alumno, String $carrera_alumno, int $id)
    {
        $this->nombre_alumno = $nombre_alumno;
        $this->apellido_alumno = $apellido_alumno;
        $this->carrera_alumno = $carrera_alumno;
        $this->id = $id;
        $query = "UPDATE inscripcion SET nombre_alumno = ?, apellido_alumno = ?, carrera_alumno = ?  WHERE id = ?";
        $data = array($this->nombre_alumno, $this->apellido_alumno, $this->carrera_alumno, $this->id);
        $this->update($query, $data);
        return true;
    }
    public function estadoInscripcion(int $estado, int $id)
    {
        $this->estado = $estado;
        $this->id = $id;
        $query = "UPDATE inscripcion SET estado = ? WHERE id = ?";
        $data = array($this->estado, $this->id);
        $this->update($query, $data);
        return true;
    }
}
?>