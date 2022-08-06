<?php
class ProfesoresModel extends Mysql{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectProfesor()
    {
        $sql = "SELECT * FROM profesor";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertarProfesor(String $nombre_profesor, String $apellido_profesor, String $materia_profesor,String $grado_estudios)
    {
        $this->nombre_profesor = $nombre_profesor;
        $this->apellido_profesor = $apellido_profesor;
        $this->materia_profesor = $materia_profesor;
        $this->grado_estudios = $grado_estudios;
        $query = "INSERT INTO profesor(nombre_profesor,apellido_profesor,materia_profesor,grado_estudios) VALUES (?,?,?,?)";
        $data = array($this->nombre_profesor, $this->apellido_profesor, $this->materia_profesor, $this->grado_estudios);
        $this->insert($query, $data);
        return true;
    }
    public function editProfesor(int $id)
    {
        $sql = "SELECT * FROM profesor WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
    public function actualizarProfesor(String $nombre_profesor, String $apellido_profesor, String $materia_profesor,String $grado_estudios, int $id)
    {
        $this->nombre_profesor = $nombre_profesor;
        $this->apellido_profesor = $apellido_profesor;
        $this->materia_profesor = $materia_profesor;
        $this->grado_estudios = $grado_estudios;
        $this->id = $id;
        $query = "UPDATE profesor SET nombre_profesor = ?, apellido_profesor = ?, materia_profesor = ?, grado_estudios = ?  WHERE id = ?";
        $data = array($this->nombre_profesor, $this->apellido_profesor, $this->materia_profesor,$this->grado_estudios, $this->id);
        $this->update($query, $data);
        return true;
    }
    public function estadoProfesor(int $estado, int $id)
    {
        $this->estado = $estado;
        $this->id = $id;
        $query = "UPDATE profesor SET estado = ? WHERE id = ?";
        $data = array($this->estado, $this->id);
        $this->update($query, $data);
        return true;
    }
}
?>