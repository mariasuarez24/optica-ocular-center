<?php


namespace App\Modelos;


class Cita
{
private $Id;
private $Fecha;
private $Hora;
private $Duracion;
private $Estado;
private $Diagnostico;
private $Motivos_Consulta_Id_Motivos_Consulta;
private $Paciente_Id_Paciente;
private $Medico_Id_Medico;

    /**
     * Cita constructor.
     * @param $Id_citas
     * @param $Fecha
     * @param $Hora
     * @param $Duracion
     * @param $Estado
     * @param $Diagnostico
     * @param $Motivos_Consulta_Id_Motivos_Consulta
     * @param $Paciente_Id_Paciente
     * @param $Medico_Id_Medico
     */
    public function __construct($Id_citas, $Fecha, $Hora, $Duracion, $Estado, $Diagnostico, $Motivos_Consulta_Id_Motivos_Consulta, $Paciente_Id_Paciente, $Medico_Id_Medico)
    {
        $this->Id_citas = $Id_citas;
        $this->Fecha = $Fecha;
        $this->Hora = $Hora;
        $this->Duracion = $Duracion;
        $this->Estado = $Estado;
        $this->Diagnostico = $Diagnostico;
        $this->Motivos_Consulta_Id_Motivos_Consulta = $Motivos_Consulta_Id_Motivos_Consulta;
        $this->Paciente_Id_Paciente = $Paciente_Id_Paciente;
        $this->Medico_Id_Medico = $Medico_Id_Medico;
    }

    /**
     * @return mixed
     */
    public function getIdCitas()
    {
        return $this->Id_citas;
    }

    /**
     * @param mixed $Id_citas
     */
    public function setIdCitas($Id_citas)
    {
        $this->Id_citas = $Id_citas;
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
    public function getHora()
    {
        return $this->Hora;
    }

    /**
     * @param mixed $Hora
     */
    public function setHora($Hora)
    {
        $this->Hora = $Hora;
    }

    /**
     * @return mixed
     */
    public function getDuracion()
    {
        return $this->Duracion;
    }

    /**
     * @param mixed $Duracion
     */
    public function setDuracion($Duracion)
    {
        $this->Duracion = $Duracion;
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

    /**
     * @return mixed
     */
    public function getDiagnostico()
    {
        return $this->Diagnostico;
    }

    /**
     * @param mixed $Diagnostico
     */
    public function setDiagnostico($Diagnostico)
    {
        $this->Diagnostico = $Diagnostico;
    }

    /**
     * @return mixed
     */
    public function getMotivosConsultaIdMotivosConsulta()
    {
        return $this->Motivos_Consulta_Id_Motivos_Consulta;
    }

    /**
     * @param mixed $Motivos_Consulta_Id_Motivos_Consulta
     */
    public function setMotivosConsultaIdMotivosConsulta($Motivos_Consulta_Id_Motivos_Consulta)
    {
        $this->Motivos_Consulta_Id_Motivos_Consulta = $Motivos_Consulta_Id_Motivos_Consulta;
    }

    /**
     * @return mixed
     */
    public function getPacienteIdPaciente()
    {
        return $this->Paciente_Id_Paciente;
    }

    /**
     * @param mixed $Paciente_Id_Paciente
     */
    public function setPacienteIdPaciente($Paciente_Id_Paciente)
    {
        $this->Paciente_Id_Paciente = $Paciente_Id_Paciente;
    }

    /**
     * @return mixed
     */
    public function getMedicoIdMedico()
    {
        return $this->Medico_Id_Medico;
    }

    /**
     * @param mixed $Medico_Id_Medico
     */
    public function setMedicoIdMedico($Medico_Id_Medico)
    {
        $this->Medico_Id_Medico = $Medico_Id_Medico;
    }
    public function mostrardatos()
    {
        echo"<h4>los datos del paciente son:</h4>";
        echo"li><strong>IdHistorial</strong>".$this->getIdCitas()."</li>";
        echo"li><strong>Prescipcion_Final</strong>".$this->getFecha()."</li>";
        echo"li><strong>Codg_Rips</strong>".$this->getHora()."</li>";
        echo"li><strong>Conducta</strong>".$this->getDuracion()."</li>";
        echo"li><strong>Control</strong>".$this->getEstado()."</li>";
        echo"li><strong>Citas_Id_Citas</strong>".$this->getCitasIdCitas()."</li>";
        echo"li><strong>Paciente_Id_Paciente </strong>".$this->getPacienteIdPaciente()."</li>";


    }

}