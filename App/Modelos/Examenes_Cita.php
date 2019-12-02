<?php


namespace App\Modelos;


class Examenes_Cita
{
    private $idExamenCita;
    private $ojoderecho;
    private $ojoizquierdo;

    /**
     * Examenes_Cita constructor.
     * @param $idExamenCita
     * @param $ojoderecho
     * @param $ojoizquierdo
     */
    public function __construct($idExamenCita, $ojoderecho, $ojoizquierdo)
    {
        $this->idExamenCita = $idExamenCita;
        $this->ojoderecho = $ojoderecho;
        $this->ojoizquierdo = $ojoizquierdo;
    }

    /**
     * @return mixed
     */
    public function getIdExamenCita()
    {
        return $this->idExamenCita;
    }

    /**
     * @param mixed $idExamenCita
     */
    public function setIdExamenCita($idExamenCita)
    {
        $this->idExamenCita = $idExamenCita;
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