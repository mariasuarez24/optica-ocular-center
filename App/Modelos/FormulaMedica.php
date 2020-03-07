<?php

namespace App\Modelos;
include('db_abstract_class.php');

class FormulaMedica  extends db_abstract_class
{
    private $idFormulaMedica;
    private $Fecha;
    private $Descripcion;

    /* Relaciones */
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
        $this->idFormulamedica = $idFormulaMedica ['$idFormulamedica'] ?? null;
        $this->Fecha = $idFormulamedica['Fecha'] ?? null;
        $this->Descripcion = $idFormulamedica ['Descripcion'] ?? null;
        $this->Prescripcion_idPrescripcion_final = $idFormulamedica ['$Prescripcion_idPrescripcion_final'] ?? null;
    }
    /*Metodo destructor cierra conexion. */
    function __destruct(){

        $this->Disconnect();
    }

    /**
     * @return mixed
     */

    public function getIdFormulamedica()
    {
        return $this->idFormulamedica;
    }

    /**
     * @param mixed $idFormulamedica
     */
    public function setidFormulaMedica( $idFormulamedica): int
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
     * @return mixed $Fecha
     */
    public function setFecha( $Fecha): int
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
     * @return mixed
     */
    public function setDescripcion($Descripcion): string
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getPrescripcion_idPrescripcion_final()
    {
        return $this->Prescripcion_idPrescripcion_final;
    }

    /**
     * @return mixed
     */
    public function setPrescripcion_idPrescripcion_final($Prescripcion_idPrescripcion_final)
    {
         $this->Prescripcion_idPrescripcion_final = $Prescripcion_idPrescripcion_final;
    }
    /**
     * @return mixed
     */
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
            $idFormulamedica->idFormulamedica = $valor['idFormulamedica'];
            $idFormulamedica->Fecha = $valor['fecha'];
            $idFormulamedica->Descripcion = $valor['Descripcion'];
            $idFormulamedica->Prescripcion_idPrescripcion_final = $valor['Prescripcion_idPrescripcion_final'];
            $idFormulamedica->Disconnect();
            array_push($arrFormulaMedica, $idFormulamedica);
        }
        $tmp->Disconnect();
        return $arrFormulaMedica;
    }
    public static function searchForId($idFormulaMedica) : FormulaMedica
    {
        $idFormulamedica = new FormulaMedica();
        if ($idFormulaMedica > 0){
            $getrow = $idFormulamedica->getRow("SELECT * FROM optica.formula_medica WHERE $idFormulaMedica =?", array($idFormulamedica));
            $idFormulamedica->idFormulamedica = $getrow['$idFormulamedica'];
            $idFormulamedica->Fecha = $getrow['fecha'];
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





