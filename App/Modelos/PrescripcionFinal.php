<?php


namespace App\Modelos;
include ('db_abstract_class.php');

class PrescripcionFinal extends db_abstract_class

{
    private $idPrescripcion_Final;
    private $Diagnostico_OI;
    private $Diagnostico_OD;
    private $AV_OD;
    private $VL_OD;
    private $AV_OI;
    private $VL_OI;
    private $VP_OD;
    private $VP_OI;
    private $DNP_OD;
    private $DNP_OI;
    private $AB_OD;
    private $AB_OI;

    /**
     * PrescripcionFinal constructor.
     * @param $id
     * @param $Diagnostico_OI
     * @param $Diagnostico_OD
     * @param $AV_OD
     * @param $VL_OD
     * @param $AI_OI
     * @param $VL_OI
     * @param $VP_OD
     * @param $VP_OI
     * @param $DNP_OD
     * @param $DNP_OI
     * @param $AB_OD
     * @param $AB_OI
     */

    public function __construct($prescripcionfinal = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->Diagnostico_OI = $prescripcionfinal['Diagnostico_OI'] ?? null;
        $this->Diagnostico_OD = $prescripcionfinal['Diagnostico_OD'] ?? null;
        $this->AV_OD = $prescripcionfinal['AV_OD'] ?? null ;
        $this->VL_OD = $prescripcionfinal['VL_OD'] ?? null;
        $this->AV_OI = $prescripcionfinal['AV_OI'] ?? null;
        $this->VL_OI = $prescripcionfinal['VL_OI'] ?? null;
        $this->VP_OD = $prescripcionfinal['VP_OD'] ?? null;
        $this->VP_OI = $prescripcionfinal['VP_OI'] ?? null;
        $this->DNP_OD = $prescripcionfinal['DNP_OD'] ?? null;
        $this->DNP_OI = $prescripcionfinal['DNP_OI'] ?? null;
        $this->AB_OD = $prescripcionfinal['AB_OD'] ?? null;
        $this->AB_OI = $prescripcionfinal['AB_OI'] ?? null;
    }

    /* Metodo destructor cierra la conexion. */
    function __destruct()
    {
        $this->Disconnect();
    }

    /**
     * @return mixed
     */
    public function getIdPrescripcionFinal(): int
    {
        return $this->idPrescripcion_Final;
    }

    /**
     * @param mixed $idPrescripcion_Final
     */
    public function setIdPrescripcionFinal(int $idPrescripcion_Final): void
    {
        $this->idPrescripcion_Final = $idPrescripcion_Final;
    }

    /**
     * @return mixed
     */
    public function getDiagnosticoOI(): string
    {
        return $this->Diagnostico_OI;
    }

    /**
     * @param mixed $Diagnostico_OI
     */
    public function setDiagnosticoOI(string $Diagnostico_OI): void
    {
        $this->Diagnostico_OI = $Diagnostico_OI;
    }

    /**
     * @return mixed
     */
    public function getDiagnosticoOD(): string
    {
        return $this->Diagnostico_OD;
    }

    /**
     * @param mixed $Diagnostico_OD
     */
    public function setDiagnosticoOD(string $Diagnostico_OD): void
    {
        $this->Diagnostico_OD = $Diagnostico_OD;
    }

    /**
     * @return mixed
     */
    public function getAVOD(): string
    {
        return $this->AV_OD;
    }

    /**
     * @param mixed|null $AV_OD
     */
    public function setAVOD(string $AV_OD): void
    {
        $this->AV_OD = $AV_OD;
    }

    /**
     * @return mixed
     */
    public function getVLOD(): string
    {
        return $this->VL_OD;
    }

    /**
     * @param mixed $VL_OD
     */
    public function setVLOD(string $VL_OD): void
    {
        $this->VL_OD = $VL_OD;
    }

    /**
     * @return mixed
     */
    public function getAVOI(): void
    {
         $this->AV_OI;
    }

    /**
     * @param mixed $AV_OI
     */
    public function setAVOI(string $AV_OI): void
    {
        $this->AV_OI = $AV_OI;
    }

    /**
     * @return mixed
     */
    public function getVLOI(): string
    {
        return $this->VL_OI;
    }

    /**
     * @param mixed $VL_OI
     */
    public function setVLOI(string $VL_OI): void
    {
        $this->VL_OI = $VL_OI;
    }

    /**
     * @return mixed
     */
    public function getVPOD(): void
    {
         $this->VP_OD;
    }

    /**
     * @param mixed  $VP_OD
     */
    public function setVPOD(string $VP_OD): void
    {
        $this->VP_OD = $VP_OD;
    }

    /**
     * @return mixed
     */
    public function getVPOI(): string
    {
        return $this->VP_OI;
    }

    /**
     * @param mixed $VP_OI
     */
    public function setVPOI(string $VP_OI): void
    {
        $this->VP_OI = $VP_OI;
    }

    /**
     * @return mixed
     */
    public function getDNPOD(): string
    {
        return $this->DNP_OD;
    }

    /**
     * @param mixed $DNP_OD
     */
    public function setDNPOD(string $DNP_OD): void
    {
        $this->DNP_OD = $DNP_OD;
    }

    /**
     * @return mixed
     */
    public function getDNPOI(): string
    {
        return $this->DNP_OI;
    }

    /**
     * @param mixed $DNP_OI
     */
    public function setDNPOI(string $DNP_OI): void
    {
        $this->DNP_OI = $DNP_OI;
    }

    /**
     * @return mixed
     */
    public function getABOD(): string
    {
        return $this->AB_OD;
    }

    /**
     * @param mixed $AB_OD
     */
    public function setABOD(string $AB_OD): void
    {
        $this->AB_OD = $AB_OD;
    }

    /**
     * @return mixed
     */
    public function getABOI(): string
    {
        return $this->AB_OI;
    }

    /**
     * @param mixed $AB_OI
     */
    public function setABOI(string $AB_OI): void
    {
        $this->AB_OI = $AB_OI;
    }



    public function create(): bool
    {
        $result = $this->insertRow("INSERT INTO optica.prescripcion_final VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(

                $this->Diagnostico_OI,
                $this->Diagnostico_OD,
                $this->AV_OD,
                $this->VL_OD,
                $this->AV_OI,
                $this->VL_OI,
                $this->VP_OD,
                $this->VP_OI,
                $this->DNP_OD,
                $this->DNP_OI,
                $this->AB_OD,
                $this->AB_OI,
            )
        );
        $this->Disconnect();
        return $result;
    }
    public function update() : bool
    {
        $result = $this->updateRow("UPDATE optica.prescripcion_final SET Diagnostico_OI = ?, Diagnostico_OD = ?, AV_OD = ?, VL_OD = ?, AV_OI = ?, VL_OI = ?, VP_OD = ?, VP_OI = ?, DNP_OD = ?, DNP_OI = ?,AB_OD = ?,AB_OI = ? WHERE idPrescripcion_Final = ?", array(

                $this->Diagnostico_OI,
                $this->Diagnostico_OD,
                $this->AV_OD,
                $this->VL_OD,
                $this->AV_OI,
                $this->VL_OI,
                $this->VP_OD,
                $this->VP_OI,
                $this->DNP_OD,
                $this->DNP_OI,
                $this->AB_OD,
                $this->AB_OI,
                $this->idPrescripcion_Final ,
            )
        );
        $this->Disconnect();
        return $result;
    }
    public function deleted($idPrescripcion_Final) : void
    {
        // TODO: Implement deleted() method.
    }
    public static function search($query) : array
    {
        $arrayprescripcionfinal = array();
        $tmp = new PrescripcionFinal();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $prescripcionfinal = new PrescripcionFinal();
            $prescripcionfinal->idPrescripcion_Final = $valor['idPrescripcion_Final'];
            $prescripcionfinal->Diagnostico_OI = $valor['Diagnostico_OI'];
            $prescripcionfinal->Diagnostico_OD = $valor['Diagnostico_OD'];
            $prescripcionfinal->AV_OD = $valor['AV_OD'];
            $prescripcionfinal->VL_OD = $valor['VL_OD'];
            $prescripcionfinal->AV_OI = $valor['AV_OI'];
            $prescripcionfinal->VL_OI = $valor['VL_OI'];
            $prescripcionfinal->VP_OD = $valor['VP_OD'];
            $prescripcionfinal->VP_OI = $valor['VP_OI'];
            $prescripcionfinal->DNP_OD = $valor['DNP_OD'];
            $prescripcionfinal->DNP_OI = $valor['DNP_OI'];
            $prescripcionfinal->AB_OD = $valor['AB_OD'];
            $prescripcionfinal->AB_OI = $valor['AB_OI'];
            $prescripcionfinal->Disconnect();
            array_push($arrayprescripcionfinal, $prescripcionfinal);
        }
        $tmp->Disconnect();
        return $arrayprescripcionfinal;
    }
    public static function searchForId($idPrescripcion_Final) : PrescripcionFinal
    {
        $prescripcionfinal = null;
        if ($idPrescripcion_Final > 0){
            $prescripcionfinal = new PrescripcionFinal();
            $getrow = $prescripcionfinal->getRow("SELECT * FROM optica.prescripcion_final WHERE idPrescripcion_Final =?", array($idPrescripcion_Final));
            $prescripcionfinal->idPrescripcion_Final = $getrow['idPrescripcion_Final'];
            $prescripcionfinal->Diagnostico_OI = $getrow['Diagnostico_OI'];
            $prescripcionfinal->Diagnostico_OD = $getrow['Diagnostico_OD'];
            $prescripcionfinal->AV_OD = $getrow['AV_OD'];
            $prescripcionfinal->VL_OD = $getrow['VL_OD'];
            $prescripcionfinal->AV_OI = $getrow['AV_OI'];
            $prescripcionfinal->VL_OI = $getrow['VL_OI'];
            $prescripcionfinal->VP_OD = $getrow['VP_OD'];
            $prescripcionfinal->VP_OI = $getrow['VP_OI'];
            $prescripcionfinal->DNP_OD = $getrow['DNP_OD'];
            $prescripcionfinal->DNP_OI = $getrow['DNP_OI'];
            $prescripcionfinal->AB_OD = $getrow['AB_OD'];
            $prescripcionfinal->AB_OI = $getrow['AB_OI'];
        }
        $prescripcionfinal->Disconnect();
        return $prescripcionfinal;
    }
    public static function getAll() : array
    {
        return PrescripcionFinal::search("SELECT * FROM optica.prescripcion_final");
    }

    public static function PrescripcionRegistrada ($idPrescripcion_Final) : bool
    {
        $result = PrescripcionFinal::search("SELECT idPrescripcion_Final FROM optica.prescripcion_final where idPrescripcion_Final = ".$idPrescripcion_Final." ;");
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