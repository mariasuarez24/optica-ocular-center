<?php


namespace App\Modelos;


class Parametros
{
private $idparametros;
private $Nombre;
private $Descripcion;

    /**
     * parametros constructor.
     * @param $idparametros
     * @param $Nombre
     * @param $Descripcion
     */
    public function __construct($idparametros, $Nombre, $Descripcion)
    {
        $this->idparametros = $idparametros;
        $this->Nombre = $Nombre;
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getIdparametros()
    {
        return $this->idparametros;
    }

    /**
     * @param mixed $idparametros
     */
    public function setIdparametros($idparametros)
    {
        $this->idparametros = $idparametros;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
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