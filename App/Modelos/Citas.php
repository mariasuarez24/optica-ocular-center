<?php


namespace App\Modelos;
include("BasicModel.php");

class Citas  extends basicModel
{
private $idCitas;
private $fecha;
private $hora;
private $duracion;
private $estado;

    /* Metodo destructor cierra la conexion. */
    function __destruct() {
        $this->Disconnect();
    }
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
    public function __construct($Citas= array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idCitas= $Citas['idCitas'] ?? null;
        $this->fecha = $Citas['fecha'] ?? null;
        $this->hora = $Citas['hora'] ?? null;
        $this->duracion = $Citas['duracion'] ?? null;
        $this->estado = $Citas['estado'] ?? null;


    }

    /**
     * @return mixed
     */
    public function getidCitas(int $id): int
    {
        return $this->idCitas;
    }

    /**
     * @param mixed $idCitas
     */
    public function setidCitas($idCitas): void
    {
        $this->Id_citas = $idCitas;
    }

    /**
     * @return mixed
     */
    public function getfecha(): string
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setfecha(string $fecha): void
    {
        $this->Fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function gethora(): string
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora(string $hora):void
    {
        $this->Hora = $hora;
    }

    /**
     * @return mixed
     */
    public function getduracion():string
    {
        return $this->duracion;
    }

    /**
     * @param mixed $duracion
     */
    public function setDuracion(string $duracion):void
    {
        $this->Duracion = $duracion;
    }

    /**
     * @return mixed
     */
    public function getestado():string
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setestado(string $estado):void
    {
        $this->Estado = $estado;
    }
    protected function create(): bool
    {
        $result= $this->insertRow("INSERT INTO optica.citas VALUES (NULL, ?, ?, ?, ?, ?)", array(
                $this->idCitas,
                $this->fecha,
                $this->hora,
                $this->duracion,
                $this->estado,
            )
        );
        $this->Disconnect();
        return $result;
    }

    protected function store()
    {
        $result=   $this->insertRow("INSERT INTO optica.Citas VALUES (NULL, ?, ?, ?, ?, ?)", array(
                $this->idCitas,
                $this->fecha,
                $this->hora,
                $this->duracion,
                $this->estado,
            )
        );
        $this->Disconnect();
        return $result;
    }

    protected function update():bool
    {
        $result= $this->updateRow("UPDATE optica.Citas SET idCitas = ?, fecha = ?, hora = ?, duracion = ?, estado = ? WHERE id = ?", array(
                $this->idCitas,
                $this->fecha,
                $this->hora,
                $this->duracion,
                $this->estado,


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
        $arrCitas = array();
        $tmp = new Citas();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Citas = new Citas();
            $Citas->idCitas = $valor['idCitas'];
            $Citas->ocupacion = $valor['ocupacion'];
            $Citas->estado_civil = $valor['estado_civil'];
            $Citas->tipo_afiliacion = $valor['tipo_afiliacion'];
            $Citas->fecha_ultima_cita = $valor['fecha_ultima_cita'];

            $Citas->Disconnect();
            array_push($arrCitas, $Citas);
        }
        $tmp->Disconnect();
        return $arrCitas;
    }

    protected static function searchForId($id)
    {
        $Citas = new Citas();
        if ($id > 0){
            $getrow = $Citas->getRow("SELECT * FROM optica.citas WHERE idCitas =?", array($id));
            $Citas->idCitas = $getrow['idCitas'];
            $Citas->ocupacion = $getrow['ocupacion'];
            $Citas->estado_civil = $getrow['estado_civil'];
            $Citas->tipo_afiliacion = $getrow['tipo_afiliacion'];
            $Citas->fecha_ultima_cita = $getrow['fecha_ultima_cita'];

            $Citas->Disconnect();
            return $Citas;
        }else{
            $Citas->Disconnect();
            unset($Citas);
            return NULL;
        }
    }

    protected static function getAll()
    {
        return Citas::search("SELECT * FROM optica.citas");
    }
    public static function citasRegistrado ($documento) : bool
    {
        $result = Paciente::search("SELECT id FROM optica.citas where documento = ".$documento);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }
}