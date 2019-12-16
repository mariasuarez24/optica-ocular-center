<?php


namespace App\Modelos;
include ('db_abstract_class.php');

class FormulaMedica extends db_abstract_class
{
    private $idFormulaMedica;
    private $Fecha;
    private $Descripcion;
    private $Prescripcion_idPrescripcion_final;

    /**
     * FormulaMedica constructor.
     * @param $idFormulaMedica
     * @param $Fecha
     * @param $Descripcion
     * @param $Prescripcion_idPrescripcion_final
     */

    public function __construct($idFormulaMedica = array())
    {
        parent::__construct();
        $this->idFormulaMedica = $FormulaMedica ['$idFormulaMedica'] ?? null;
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

    public function getIdFormulaMedica()
    {
        return $this->idFormulaMedica;
    }

    /**
     * @param mixed $idFormulaMedica
     */
    public function setIdFormulaMedica( $idFormulaMedica): void
    {
        $this->idFormulaMedica = $idFormulaMedica;
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
    public function setPrescripcionIdPrescripcionFinal($Prescripcion_idPrescripcion_final): void
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
    public function deleted($idFormulaMedica) : void
    {
        // TODO: Implement deleted() method.
    }
    public static function search($query) : array
    {
        $arrFormulaMedica = array();
        $tmp = new FormulaMedica();
        $getrows = $tmp->getRows($query);



        foreach ($getrows as $valor) {
            $idFormulaMedica = new FormulaMedica();
            $idFormulaMedica->idFormulaMedica = $valor['$idFormulaMedica'];
            $idFormulaMedica->Fecha = $valor['Fecha'];
            $idFormulaMedica->Descripcion = $valor['Descripcion'];
            $idFormulaMedica->Prescripcion_idPrescripcion_final = $valor['Prescripcion_idPrescripcion_final'];
            $idFormulaMedica->Disconnect();
            array_push($arrFormulaMedica, $idFormulaMedica);
        }
        $tmp->Disconnect();
        return $arrFormulaMedica;
    }
    public static function searchForId($idFormulaMedica) : FormulaMedica
    {
        $idFormulaMedica = new FormulaMedica();
        if ($idFormulaMedica > 0){
            $getrow = $idFormulaMedica->getRow("SELECT * FROM optica.formula_medica WHERE $idFormulaMedica =?", array($idFormulaMedica));
            $idFormulaMedica->id = $getrow['$idFormulaMedica'];
            $idFormulaMedica->Fecha = $getrow['Fecha'];
            $idFormulaMedica->Descripcion = $getrow['Descripcion'];
            $idFormulaMedica->Prescripcion_idPrescripcion_final = $getrow['Prescripcion_idPrescripcion_final'];
            $idFormulaMedica->Disconnect();
            return $idFormulaMedica;
        }else{
            $idFormulaMedica->Disconnect();
            unset($idFormulaMedica);
            return NULL;
        }
    }
    public static function getAll() : array
    {
        return FormulaMedica::search("SELECT * FROM optica.formula_medica");
    }

    public static function FormulaMedicaRegistrada ($Descripcion) : bool
    {
        $result = FormulaMedica::search("SELECT id FROM optica.formula_medica where Descripcion = ".$Descripcion);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}





