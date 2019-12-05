<?php


namespace App\Modelos;


class Examenes
{
private $id;
private $Nombre;
private $Descripcion;

    /**
     * examenes constructor.
     * @param $id
     * @param $Nombre
     * @param $Descripcion
     */
    public function __construct($id, $Nombre, $Descripcion)
    {
        $this->id = $id;
        $this->Nombre = $Nombre;
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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