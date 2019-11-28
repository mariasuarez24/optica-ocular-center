<?php


namespace App\Modelos;


class Historial
{
    private $Id;
    private $Prescipcion_Final;
    private $Codg_Rips;
    private $Conducta;
    private $Control;
    private $Citas_Id_Citas;
    private $Paciente_Id_Paciente;

    /**
     * Historial constructor.
     * @param $Id_Historial
     * @param $Prescipcion_Final
     * @param $Codg_Rips
     * @param $Conducta
     * @param $Control
     * @param $Citas_Id_Citas
     * @param $Paciente_Id_Paciente
     */
    public function __construct($Id_Historial, $Prescipcion_Final, $Codg_Rips, $Conducta, $Control, $Citas_Id_Citas, $Paciente_Id_Paciente)
    {
        $this->Id_Historial = $Id_Historial;
        $this->Prescipcion_Final = $Prescipcion_Final;
        $this->Codg_Rips = $Codg_Rips;
        $this->Conducta = $Conducta;
        $this->Control = $Control;
        $this->Citas_Id_Citas = $Citas_Id_Citas;
        $this->Paciente_Id_Paciente = $Paciente_Id_Paciente;
    }

    /**
     * @return mixed
     */
    public function getIdHistorial()
    {
        return $this->Id_Historial;
    }

    /**
     * @param mixed $Id_Historial
     */
    public function setIdHistorial($Id_Historial)
    {
        $this->Id_Historial = $Id_Historial;
    }

    /**
     * @return mixed
     */
    public function getPrescipcionFinal()
    {
        return $this->Prescipcion_Final;
    }

    /**
     * @param mixed $Prescipcion_Final
     */
    public function setPrescipcionFinal($Prescipcion_Final)
    {
        $this->Prescipcion_Final = $Prescipcion_Final;
    }

    /**
     * @return mixed
     */
    public function getCodgRips()
    {
        return $this->Codg_Rips;
    }

    /**
     * @param mixed $Codg_Rips
     */
    public function setCodgRips($Codg_Rips)
    {
        $this->Codg_Rips = $Codg_Rips;
    }

    /**
     * @return mixed
     */
    public function getConducta()
    {
        return $this->Conducta;
    }

    /**
     * @param mixed $Conducta
     */
    public function setConducta($Conducta)
    {
        $this->Conducta = $Conducta;
    }

    /**
     * @return mixed
     */
    public function getControl()
    {
        return $this->Control;
    }

    /**
     * @param mixed $Control
     */
    public function setControl($Control)
    {
        $this->Control = $Control;
    }

    /**
     * @return mixed
     */
    public function getCitasIdCitas()
    {
        return $this->Citas_Id_Citas;
    }

    /**
     * @param mixed $Citas_Id_Citas
     */
    public function setCitasIdCitas($Citas_Id_Citas)
    {
        $this->Citas_Id_Citas = $Citas_Id_Citas;
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
    public function mostrardatos()
    {
        echo"<h4>los datos del paciente son:</h4>";
        echo"li><strong>IdHistorial</strong>".$this->getIdHistorial()."</li>";
        echo"li><strong>Prescipcion_Final</strong>".$this->getPrescipcionFinal()."</li>";
        echo"li><strong>Codg_Rips</strong>".$this->getCodgRips()."</li>";
        echo"li><strong>Conducta</strong>".$this->getConducta()."</li>";
        echo"li><strong>Control</strong>".$this->getControl()."</li>";
        echo"li><strong>Citas_Id_Citas</strong>".$this->getCitasIdCitas()."</li>";
        echo"li><strong>Paciente_Id_Paciente </strong>".$this->getPacienteIdPaciente()."</li>";


    }

}