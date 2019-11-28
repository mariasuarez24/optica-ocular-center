<?php


namespace App\Modelos;


class Paciente
{
    private $IdPaciente;
    private $Ocupacion;
    private $Estado_Civil ;
    private $Tipo_Afiliacion;
    private $TipoVinculacion;
    private $Fecha_Ultima_Cita;
    private $Acudiente_Id_Acudiente;
    private $Persona_Id_Persona;

    /**
     * Paciente constructor.
     * @param $IdPaciente
     * @param $Ocupacion
     * @param $Estado_Civil
     * @param $Tipo_Afiliacion
     * @param $TipoVinculacion
     * @param $Fecha_Ultima_Cita
     * @param $Acudiente_Id_Acudiente
     * @param $Persona_Id_Persona
     */
    public function __construct($IdPaciente, $Ocupacion, $Estado_Civil, $Tipo_Afiliacion, $TipoVinculacion, $Fecha_Ultima_Cita, $Acudiente_Id_Acudiente, $Persona_Id_Persona)
    {
        $this->IdPaciente = $IdPaciente;
        $this->Ocupacion = $Ocupacion;
        $this->Estado_Civil = $Estado_Civil;
        $this->Tipo_Afiliacion = $Tipo_Afiliacion;
        $this->TipoVinculacion = $TipoVinculacion;
        $this->Fecha_Ultima_Cita = $Fecha_Ultima_Cita;
        $this->Acudiente_Id_Acudiente = $Acudiente_Id_Acudiente;
        $this->Persona_Id_Persona = $Persona_Id_Persona;
    }

    /**
     * @return mixed
     */
    public function getIdPaciente()
    {
        return $this->IdPaciente;
    }

    /**
     * @param mixed $IdPaciente
     */
    public function setIdPaciente($IdPaciente)
    {
        $this->IdPaciente = $IdPaciente;
    }

    /**
     * @return mixed
     */
    public function getOcupacion()
    {
        return $this->Ocupacion;
    }

    /**
     * @param mixed $Ocupacion
     */
    public function setOcupacion($Ocupacion)
    {
        $this->Ocupacion = $Ocupacion;
    }

    /**
     * @return mixed
     */
    public function getEstadoCivil()
    {
        return $this->Estado_Civil;
    }

    /**
     * @param mixed $Estado_Civil
     */
    public function setEstadoCivil($Estado_Civil)
    {
        $this->Estado_Civil = $Estado_Civil;
    }

    /**
     * @return mixed
     */
    public function getTipoAfiliacion()
    {
        return $this->Tipo_Afiliacion;
    }

    /**
     * @param mixed $Tipo_Afiliacion
     */
    public function setTipoAfiliacion($Tipo_Afiliacion)
    {
        $this->Tipo_Afiliacion = $Tipo_Afiliacion;
    }

    /**
     * @return mixed
     */
    public function getTipoVinculacion()
    {
        return $this->TipoVinculacion;
    }

    /**
     * @param mixed $TipoVinculacion
     */
    public function setTipoVinculacion($TipoVinculacion)
    {
        $this->TipoVinculacion = $TipoVinculacion;
    }

    /**
     * @return mixed
     */
    public function getFechaUltimaCita()
    {
        return $this->Fecha_Ultima_Cita;
    }

    /**
     * @param mixed $Fecha_Ultima_Cita
     */
    public function setFechaUltimaCita($Fecha_Ultima_Cita)
    {
        $this->Fecha_Ultima_Cita = $Fecha_Ultima_Cita;
    }

    /**
     * @return mixed
     */
    public function getAcudienteIdAcudiente()
    {
        return $this->Acudiente_Id_Acudiente;
    }

    /**
     * @param mixed $Acudiente_Id_Acudiente
     */
    public function setAcudienteIdAcudiente($Acudiente_Id_Acudiente)
    {
        $this->Acudiente_Id_Acudiente = $Acudiente_Id_Acudiente;
    }

    /**
     * @return mixed
     */
    public function getPersonaIdPersona()
    {
        return $this->Persona_Id_Persona;
    }

    /**
     * @param mixed $Persona_Id_Persona
     */
    public function setPersonaIdPersona($Persona_Id_Persona)
    {
        $this->Persona_Id_Persona = $Persona_Id_Persona;
    }


    public function mostrardatos()
    {
        echo"<h4>los datos del paciente son:</h4>";
        echo"li><strong>IdPaciente</strong>".$this->getIdPaciente()."</li>";
        echo"li><strong>Ocupacion</strong>".$this->getOcupacion()."</li>";
        echo"li><strong>Estado_Civil</strong>".$this->getEstadoCivil()."</li>";
        echo"li><strong>Tipo_Afiliacion</strong>".$this->getTipoAfiliacion()."</li>";
        echo"li><strong>Tipo_Vinculacion</strong>".$this->getTipoVinculacion()."</li>";
        echo"li><strong>Fecha_ultima_cita</strong>".$this->getFechaUltimaCita()."</li>";
        echo"li><strong>Acudiente_Id_Acudiente</strong>".$this->getAcudienteIdAcudiente()."</li>";
        echo"li><strong>Persona_Id_Persona</strong>".$this->getPersonaIdPersona()."</li>";

    }
}