<?php


namespace App\Modelos;


class FormulaMedica
{
    private $idFormulaMedica;
    private $Fecha;
    private $Descripcion;

    /**
     * FormulaMedica constructor.
     * @param $idFormulaMedica
     * @param $Fecha
     * @param $Descripcion
     */
    public function __construct($idFormulaMedica, $Fecha, $Descripcion)
    {
        $this->idFormulaMedica = $idFormulaMedica;
        $this->Fecha = $Fecha;
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getIdFormulaMedica()
    {
        return $this->idFormulaMedica;
    }

    /**
     * @param mixed $idFormulaMedica
     */
    public function setIdFormulaMedica($idFormulaMedica)
    {
        $this->idFormulaMedica = $idFormulaMedica;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
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


}