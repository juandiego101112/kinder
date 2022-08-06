<?php
class PagocuatrisModel extends Mysql{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectPagocuatri()
    {
        $sql = "SELECT * FROM pagocuatri";
        $res = $this->select_all($sql);
        return $res;
    }
    public function insertarPagocuatri(String $nombre_alumno, String $carrera_alumno, String $cuatrimestre,String $monto)
    {
        $this->nombre_alumno = $nombre_alumno;
        $this->carrera_alumno = $carrera_alumno;
        $this->cuatrimestre = $cuatrimestre;
        $this->monto = $monto;
        $query = "INSERT INTO pagocuatri(nombre_alumno,carrera_alumno,cuatrimestre,monto) VALUES (?,?,?,?)";
        $data = array($this->nombre_alumno, $this->carrera_alumno, $this->cuatrimestre, $this->monto);
        $this->insert($query, $data);
        return true;
    }
    public function editPagocuatri(int $id)
    {
        $sql = "SELECT * FROM pagocuatri WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
    public function actualizarPagocuatri(String $nombre_alumno, String $carrera_alumno, String $cuatrimestre,String $monto, int $id)
    {
        $this->nombre_alumno = $nombre_alumno;
        $this->carrera_alumno = $carrera_alumno;
        $this->cuatrimestre = $cuatrimestre;
        $this->monto = $monto;
        $this->id = $id;
        $query = "UPDATE pagocuatri SET nombre_alumno = ?, carrera_alumno = ?, cuatrimestre = ?, monto = ?  WHERE id = ?";
        $data = array($this->nombre_alumno, $this->carrera_alumno, $this->cuatrimestre,$this->monto, $this->id);
        $this->update($query, $data);
        return true;
    }
   
}
?>