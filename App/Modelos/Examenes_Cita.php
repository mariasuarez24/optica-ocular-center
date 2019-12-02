<?php


namespace App\Modelos;


class Examenes_Historial
{
    private $idExamenHistorial;
    private $ojoderecho;
    private $ojoizquierdo;

    /**
     * Examenes_Historial constructor.
     * @param $idExamenHistorial
     * @param $ojoderecho
     * @param $ojoizquierdo
     */
    public function __construct($idExamenHistorial, $ojoderecho, $ojoizquierdo)
    {
        $this->idExamenHistorial = $idExamenHistorial;
        $this->ojoderecho = $ojoderecho;
        $this->ojoizquierdo = $ojoizquierdo;
    }

    /**
     * @return mixed
     */
    public function getIdExamenHistorial()
    {
        return $this->idExamenHistorial;
    }

    /**
     * @param mixed $idExamenHistorial
     */
    public function setIdExamenHistorial($idExamenHistorial)
    {
        $this->idExamenHistorial = $idExamenHistorial;
    }

    /**
     * @return mixed
     */
    public function getOjoderecho()
    {
        return $this->ojoderecho;
    }

    /**
     * @param mixed $ojoderecho
     */
    public function setOjoderecho($ojoderecho)
    {
        $this->ojoderecho = $ojoderecho;
    }

    /**
     * @return mixed
     */
    public function getOjoizquierdo()
    {
        return $this->ojoizquierdo;
    }

    /**
     * @param mixed $ojoizquierdo
     */
    public function setOjoizquierdo($ojoizquierdo)
    {
        $this->ojoizquierdo = $ojoizquierdo;
    }


}