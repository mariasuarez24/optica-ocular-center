<?php


namespace App\Modelos;


class MotivoConsulta
{
private $idMotivoConsulta;
private $Descripcion;
private $Estado;

    /**
     * MotivoConsulta constructor.
     * @param $idMotivoConsulta
     * @param $Descripcion
     * @param $Estado
     */
    public function __construct($idMotivoConsulta, $Descripcion, $Estado)
    {
        $this->idMotivoConsulta = $idMotivoConsulta;
        $this->Descripcion = $Descripcion;
        $this->Estado = $Estado;
    }

    /**
     * @return mixed
     */
    public function getIdMotivoConsulta()
    {
        return $this->idMotivoConsulta;
    }

    /**
     * @param mixed $idMotivoConsulta
     */
    public function setIdMotivoConsulta($idMotivoConsulta)
    {
        $this->idMotivoConsulta = $idMotivoConsulta;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param mixed $Descripcion
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }


}