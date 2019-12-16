<?php


namespace App\Modelos;


class Paciente  extends basicModel
{
    private $idPaciente;
    private $ocupacion;
    private $estado_civil ;
    private $tipo_afiliacion;
    private $tipo_vinculacion;
    private $fecha_ultima_cita;

    /* Metodo destructor cierra la conexion. */
    function __destruct() {
        $this->Disconnect();
    }
    /**
     * Paciente constructor.
     * @param idPaciente
     * @param $ocupacion
     * @param $Estado_Civil
     * @param $Tipo_Afiliacion
     * @param $TipoVinculacion
     * @param $Fecha_Ultima_Cita
     */
    public function __construct($Paciente = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idPaciente= $Paciente['idPaciente'] ?? null;
        $this->ocupacion = $Paciente['ocupacion'] ?? null;
        $this->estado_civil = $Paciente['estado_civil'] ?? null;
        $this->tipo_afiliacion = $Paciente['tipo_afiliacion'] ?? null;
        $this->tipo_vinculacion = $Paciente['tipo_vinculacion'] ?? null;
        $this->fecha_ultima_cita = $Paciente['fecha_ultima_cita'] ?? null;

    }

    /**
     * @return mixed
     */
    public function getIdPaciente(int $id): int
    {
        return $this->idPaciente;
    }

    /**
     * @param mixed $idPaciente
     */
    public function setIdPaciente($idPaciente): void
    {
        $this->idPaciente = $idPaciente;
    }

    /**
     * @return mixed
     */
    public function getocupacion(): string
    {
        return $this->ocupacion;
    }

    /**
     * @param mixed $ocupacion
     */
    public function setOcupacion(string $ocupacion): void
    {
        $this->ocupacion = $ocupacion;
    }

    /**
     * @return mixed
     */
    public function getEstadoCivil()
    {
        return $this->estado_civil;
    }

    /**
     * @param mixed $estado_civil
     */
    public function setEstadoCivil(int $estado_civil): void
    {
        $this->estado_civil = $estado_civil;
    }

    /**
     * @return mixed
     */
    public function getTipoAfiliacion(string $tipo_afiliacion):string
    {
        return $this->tipo_afiliacion;
    }

    /**
     * @param mixed $tipo_afiliacion
     */
    public function setTipoAfiliacion(string $tipo_afiliacion): void
    {
        $this->tipo_afiliacion = $tipo_afiliacion;
    }

    /**
     * @return mixed
     */
    public function getTipoVinculacion(): string
    {
        return $this->tipo_vinculacion;
    }

    /**
     * @param mixed $tipo_vinculacion
     */
    public function setTipoVinculacion(string $tipo_vinculacion): void
    {
        $this->tipo_vinculacion = $tipo_vinculacion;
    }

    /**
     * @return mixed
     */
    public function getFechaUltimaCita(): string
    {
        return $this->fecha_ultima_cita;
    }

    /**
     * @param mixed $fecha_ultima_cita
     */
    public function setFechaUltimaCita(string $fecha_ultima_cita): void
    {
        $this->fecha_ultima_cita = $fecha_ultima_cita;
    }

    protected function create(): bool
    {
        $result= $this->insertRow("INSERT INTO optica.Paciente VALUES (NULL, ?, ?, ?, ?, ?)", array(
                $this->ocupacion,
                $this->estado_civil,
                $this->tipo_afiliacion,
                $this->tipo_vinculacion,
                $this->fecha_ultima_cita,
            )
        );
        $this->Disconnect();
        return $result;
    }
    protected function update(): bool
    {
        $result=  $this->updateRow("UPDATE optica.paciente SET idPaciente = ?, ocupacion = ?, estado_civil = ?, tipo_afiliacion = ?, tipo_vinculacion = ?, fecha_ultima_cita = ? WHERE id = ?", array(
                $this->idPaciente,
                $this->ocupacion,
                $this->estado_civil,
                $this->tipo_afiliacion,
                $this->tipo_vinculacion,
                $this->fecha_ultima_cita,


            )
        );
        $this->Disconnect();
        return $result;
    }
    protected function deleted($id)
    {
        // TODO: Implement deleted() method.
    }

    protected static function search($query)
    {
        $arrPaciente = array();
        $tmp = new Paciente();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Paciente = new Paciente();
            $Paciente->idPaciente = $valor['idPaciente'];
            $Paciente->ocupacion = $valor['ocupacion'];
            $Paciente->estado_civil = $valor['estado_civil'];
            $Paciente->tipo_afiliacion = $valor['tipo_afiliacion'];
            $Paciente->fecha_ultima_cita = $valor['fecha_ultima_cita'];

            $Paciente->Disconnect();
            array_push($arrPaciente, $Paciente);
        }
        $tmp->Disconnect();
        return $arrPaciente;
    }

    protected static function searchForId($id)
    {
        $Paciente= new Paciente();
        if ($id > 0){
            $getrow = $Paciente->getRow("SELECT * FROM optica.paciente WHERE id =?", array($id));
            $Paciente->idPaciente = $getrow['idPaciente'];
            $Paciente->ocupacion = $getrow['ocupacion'];
            $Paciente->estado_civil = $getrow['estado_civil'];
            $Paciente->tipo_afiliacion = $getrow['tipo_afiliacion'];
            $Paciente->tipo_vinculacion = $getrow['tipo_vinculacion'];
            $Paciente->fecha_ultima_cita = $getrow['fecha_ultima_cita'];
            $Paciente->acudiente_idAcudiente = $getrow['acudiente_idAcudiente'];
            $Paciente->persona_idPersona = $getrow['persona_idPersona'];
        }else{
            $Paciente->Disconnect();
            unset($Paciente);
            return NULL;
        }
    }

    protected static function getAll() : array
    {
        return Paciente::search("SELECT * FROM optica.paciente");
    }

    public static function pacienteRegistrado ($documento) : bool
    {
        $result = Paciente::search("SELECT id FROM optica.paciente where documento = ".$documento);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }


    protected function store()
    {
        // TODO: Implement store() method.
    }
}
