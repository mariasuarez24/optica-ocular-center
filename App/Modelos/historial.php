<?php


namespace App\Modelos;

require('BasicModel.php');

class historial extends basicModel
{
    private $idHistorial;
    private $Codg_Rips;
    private $Conducta;
    private $Control;
    private $Diagnostico;
    private $Anamnesis;
    private $Antecedentes;

    /* Metodo destructor cierra la conexion. */
    function __destruct() {
        $this->Disconnect();
    }
    /**
     * historial constructor.
     * @param $idHistorial
     * @param $Codg_Rips
     * @param $Conducta
     * @param $Control
     * @param $Diagnostico
     * @param $Anamnesis
     * @param $Antecedentes
     */
    public function __construct($historial= array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idHistorial= $historial['idHistorial'] ?? null;
        $this->Codg_Rips = $historial['Codg_Rips'] ?? null;
        $this->Conducta = $historial['Conducta'] ?? null;
        $this->Diagnostico = $historial['Diagnostico'] ?? null;
        $this->Anamnesis = $historial['Anamnesis'] ?? null;
        $this->Antecedentes = $historial['Antecedentes'] ?? null;


    }

    /**
     * @return mixed
     */
    public function getIdHistorial(int $IdHistorial): int
    {
        return $this->idHistorial;
    }

    /**
     * @param mixed $idHistorial
     */
    public function setIdHistorial($idHistorial): void
    {
        $this->idHistorial = $idHistorial;
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
    public function setCodgRips($Codg_Rips): void
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
    public function setConducta($Conducta): void
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
    public function setControl($Control): void
    {
        $this->Control = $Control;
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
    public function setDiagnostico($Diagnostico): void
    {
        $this->Diagnostico = $Diagnostico;
    }

    /**
     * @return mixed
     */
    public function getAnamnesis()
    {
        return $this->Anamnesis;
    }

    /**
     * @param mixed $Anamnesis
     */
    public function setAnamnesis($Anamnesis): void
    {
        $this->Anamnesis = $Anamnesis;
    }

    /**
     * @return mixed
     */
    public function getAntecedentes()
    {
        return $this->Antecedentes;
    }

    /**
     * @param mixed $Antecedentes
     */
    public function setAntecedentes($Antecedentes): void
    {
        $this->Antecedentes = $Antecedentes;
    }

        protected function create(): bool
    {
        $result=$this->insertRow("INSERT INTO optica.historial VALUES (NULL, ?, ?, ?, ?, ?, ?)", array(
                $this->Codg_Rips,
                $this->Conducta,
                $this->Control,
                $this->Diagnostico,
                $this->Anamnesis,
                $this->Antecedentes,
            )
        );
        $this->Disconnect();
        return $result;
    }

    protected function update() : bool
    {
        $result=$this->updateRow("UPDATE optica.historial SET idHistorial = ?, Codg_Rips = ?, Conducta = ?, Control = ?, Anamnesis = ? , Antecedentes= ? WHERE id = ?", array(
                $this->idHistorial,
                $this->Codg_Rips,
                $this->Conducta,
                $this->Control,
                $this->Anamnesis,
                $this->Diagnostico,
                $this->Antecedentes,
            )
        );
        $this->Disconnect();
        return $result;
    }

    protected function deleted($id) : void
    {
        // TODO: Implement deleted() method.
    }

    protected static function search($query)
    {
        $arrhistorial = array();
        $tmp = new historial();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $historial = new historial();
            $historial->idHistorial = $valor['idHistorial'];
            $historial->Codg_Rips = $valor['Codg_Rips'];
            $historial->Conducta = $valor['Conducta'];
            $historial->Control = $valor['Control'];
            $historial->Anamnesis = $valor['Anamnesis'];
            $historial->Antecedentes = $valor['Antecedentes'];


            $historial->Disconnect();
            array_push($arrhistorial,  $historial);
        }
        $tmp->Disconnect();
        return $arrhistorial;
    }

    protected static function searchForId($id)
    {
        $historial = new historial();
        if ($id > 0){
            $getrow = $historial>getRow("SELECT * FROM optica.historial WHERE idHistorial =?", array($id));
            $historial->idHistorial = $getrow['idHistorial'];
            $historial->Codg_Rips = $getrow['Codg_Rips'];
            $historial->Conducta = $getrow['Conducta'];
            $historial->Control = $getrow['Control'];
            $historial->Anamnesis = $getrow['Anamnesis'];
            $historial->Anamnesis = $getrow['Antecedentes'];

            $historial->Disconnect();
            return $historial;
        }else{
            $historial->Disconnect();
            unset($historial);
            return NULL;
        }
    }

    protected static function getAll()
    {
        return Citas::search("SELECT * FROM optica.historial");
    }

    public static function historialRegistrado ($documento) : bool
    {
        $result = historial::search("SELECT id FROM optica.historialwhere documento = ".$documento);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }



}