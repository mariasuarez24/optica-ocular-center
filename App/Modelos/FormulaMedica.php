<?php


namespace App\Modelos;
include ('db_abstract_class.php');

class FormulaMedica extends db_abstract_class
{
    private $idFormulamedica;
    private $Fecha;
    private $Descripcion;
    private $Prescripcion_idPrescripcion_final;

    /**
     * FormulaMedica constructor.
     * @param $idFormulamedica
     * @param $Fecha
     * @param $Descripcion
     * @param $Prescripcion_idPrescripcion_final
     */

    public function __construct($idFormulaMedica = array())
    {
        parent::__construct();
        $this->idFormulamedica = $FormulaMedica ['$idFormulamedica'] ?? null;
        $this->Fecha = $FormulaMedica['Fecha'] ?? null;
        $this->Descripcion = $FormulaMedica ['Descripcion'] ?? null;
        $this->Prescripcion_idPrescripcion_final = $FormulaMedica ['$Prescripcion_idPrescripcion_final'] ?? null;

    }
    /*Metodo destructor cierra conexion. */
    function __destruct()
    {
        $this->Disconnect();
    }

    /**
     * @return mixed
     */

    public function getidFormulamedica()
    {
        return $this->idFormulamedica;
    }

    /**
     * @param mixed $idFormulamedica
     */
    public function setIdFormulaMedica( $idFormulamedica): void
    {
        $this->idFormulamedica = $idFormulamedica;
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
    public function setFecha( $Fecha): void
    {
        $this->Fecha = $Fecha;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param mixed $Descripcion
     */
    public function setDescripcion($Descripcion): void
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getPrescripcionIdPrescripcionFinal()
    {
        return $this->Prescripcion_idPrescripcion_final;
    }

    /**
     * @param mixed $Prescripcion_idPrescripcion_final
     */
    public function setPrescripcionIdPrescripcionFinal($Prescripcion_idPrescripcion_final):string
    {
        $this->Prescripcion_idPrescripcion_final = $Prescripcion_idPrescripcion_final;
    }


    protected function store()
    {
        // TODO: Implement store() method.
    }
    public function create()  :bool
    {
        $result = $this->insertRow("INSERT INTO optica.formula_medica VALUES (NULL, ?, ?, ?)",array(
                $this->Fecha,
                $this->Descripcion,
                $this->Prescripcion_idPrescripcion_final,
            )
        );
        $this->Disconnect();
        return $result;

    }
    public function update(): bool
    {
        $result = $this->updateRow ("UPDATE optica.formula_medica SET $this->Fecha = ?, $this->Descripcion = ?, $this->Prescripcion_idPrescripcion_final =?, WHERE $this->idFormulaMedica = ?", array(
                $this->Fecha,
                $this->Descripcion,
                $this->Prescripcion_idPrescripcion_final,
            )
        );
        $this->Disconnect();
        return $result;
    }
    public function deleted($idFormulamedica) : void
    {
        // TODO: Implement deleted() method.
    }
    public static function search($query) : array
    {
        $arrFormulaMedica = array();
        $tmp = new FormulaMedica();
        $getrows = $tmp->getRows($query);



        foreach ($getrows as $valor) {
            $idFormulamedica = new FormulaMedica();
            $idFormulamedica->idFormulamedica = $valor['$idFormulamedica'];
            $idFormulamedica->Fecha = $valor['Fecha'];
            $idFormulamedica->Descripcion = $valor['Descripcion'];
            $idFormulamedica->Prescripcion_idPrescripcion_final = $valor['Prescripcion_idPrescripcion_final'];
            $idFormulamedica->Disconnect();
            array_push($arrFormulaMedica, $idFormulamedica);
        }
        $tmp->Disconnect();
        return $arrFormulaMedica;
    }
    public static function searchForId($idFormulamedica) : FormulaMedica
    {
        $idFormulamedica = new FormulaMedica();
        if ($idFormulamedica > 0){
            $getrow = $idFormulamedica->getRow("SELECT * FROM optica.formula_medica WHERE $idFormulamedica =?", array($idFormulamedica));
            $idFormulamedica->idFormulamedica = $getrow['$idFormulamedica'];
            $idFormulamedica->Fecha = $getrow['Fecha'];
            $idFormulamedica->Descripcion = $getrow['Descripcion'];
            $idFormulamedica->Prescripcion_idPrescripcion_final = $getrow['Prescripcion_idPrescripcion_final'];
            $idFormulamedica->Disconnect();
            return $idFormulamedica;
        }else{
            $idFormulamedica->Disconnect();
            unset($idFormulamedica);
            return NULL;
        }
    }
    public static function getAll() : array
    {
        return FormulaMedica::search("SELECT * FROM optica.formula_medica");
    }

    public static function FormulaMedicaRegistrada ($Fecha) : bool
    {
        $result = FormulaMedica::search("SELECT idFormulamedica FROM optica.formula_medica where Descripcion = ".$Fecha);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}





