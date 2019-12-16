<?php


namespace App\Modelos;


class Cita  extends db_abstract_class

{
private $idCitas;
private $fecha;
private $hora;
private $duracion;
private $estado;
private $motivos_consulta_idMotivos_consulta;
private $paciente_idPaciente;
private $Medico_idMedico;


    /**
     * Cita constructor.
     * @param $idCitas
     * @param $fecha
     * @param $hora
     * @param $duracion
     * @param $estado
     * @param $motivos_consulta_idMotivos_consulta
     * @param $paciente_idPaciente
     * @param $Medico_idMedico
     */
    public function __construct($Cita= array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idCitas= $Cita['idCitas'];
        $this->fecha = $Cita['fecha'];
        $this->hora = $Cita['hora'];
        $this->duracion = $Cita['duracion'];
        $this->estado = $Cita['estado'];


    }

    /**
     * @return mixed
     */
    public function getidCitas()
    {
        return $this->idCitas;
    }

    /**
     * @param mixed $idCitas
     */
    public function setidCitas($idCitas)
    {
        $this->Id_citas = $idCitas;
    }

    /**
     * @return mixed
     */
    public function getfecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setfecha($fecha)
    {
        $this->Fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function gethora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->Hora = $hora;
    }

    /**
     * @return mixed
     */
    public function getduracion()
    {
        return $this->duracion;
    }

    /**
     * @param mixed $duracion
     */
    public function setDuracion($duracion)
    {
        $this->Duracion = $duracion;
    }

    /**
     * @return mixed
     */
    public function getestado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->Estado = $estado;
    }


    protected function store()
    {
        $this->insertRow("INSERT INTO optica.citas VALUES (NULL, ?, ?, ?, ?, ?)", array(
                $this->idCitas,
                $this->fecha,
                $this->hora,
                $this->duracion,
                $this->estado,
            )
        );
        $this->Disconnect();
    }

    protected function update()
    {
        $this->updateRow("UPDATE optica.citas SET idPaciente = ?, ocupacion = ?, estado_civil = ?, tipo_afiliacion = ?, tipo_vinculacion = ?, fecha_ultima_cita = ? WHERE id = ?", array(
                $this->idPaciente,
                $this->ocupacion,
                $this->estado_civil,
                $this->tipo_afiliacion,
                $this->tipo_vinculacion,
                $this->fecha_ultima_cita,


            )
        );
        $this->Disconnect();



}