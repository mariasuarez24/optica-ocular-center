<?php

namespace App\Modelos;
include ('db_abstract_class.php');

class medico extends db_abstract_class
{
private $idMedico;
private $Especializacion;
private $Licencia;

    /* Relaciones */
    private $Citas;


    /**
     * medico constructor.
     * @param $idMedico
     * @param $Especializacion
     * @param $Licencia
     */
    public function __construct($medico=array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idMedico = $medico ['idMedico'] ?? null;
        $this->Especializacion = $medico ['Especializacion'] ?? null;
        $this->Licencia = $medico ['Licencia'] ?? null;
    }

    /**
     * @return mixed
     */
    public function getIdMedico()
    {
        return $this->idMedico;
    }

    /**
     * @param mixed $idMedico
     */
    public function setIdMedico($idMedico): void
    {
        $this->idMedico = $idMedico;
    }

    /**
     * @return mixed
     */
    public function getEspecializacion()
    {
        return $this->Especializacion;
    }

    /**
     * @param mixed $Especializacion
     */
    public function setEspecializacion($Especializacion): void
    {
        $this->Especializacion = $Especializacion;
    }

    /**
     * @return mixed
     */
    public function getLicencia()
    {
        return $this->Licencia;
    }

    /**
     * @param mixed $Licencia
     */
    public function setLicencia($Licencia): void
    {
        $this->Licencia = $Licencia;
    }

    public function store()
    {
        $this->insertRow("INSERT INTO optica.medico VALUES (NULL, ?, ?, ?)", array(
                $this->Especializacion,
                $this->Licencia,
                123,
            )
        );
        $this->Disconnect();
    }

    public function update()
    {
        $this->updateRow("UPDATE optica.medico SET Especializacion = ?, Licencia = ?  WHERE idMedico = ?", array(
                $this->Especializacion,
                $this->Licencia,
            )
        );
        $this->Disconnect();
    }

    public function deleted($idMedico)
    {
        // TODO: Implement deleted() method.
    }

    public static function search($query)
    {
        $medico = array();
        $tmp = new medico();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $medico = new $medico();
            $medico->idMedico = $valor['idMedico'];
            $medico->Especializacion = $valor['Especializacion'];
            $medico->Licencia = $valor['Licencia'];
            $medico->Disconnect();
            array_push($medico, $medico);
        }
        $tmp->Disconnect();
        return $medico;
    }

    public static function searchForId($idMedico)
    {
        $medico = new medico();
        if ($medico > 0){
            $getrow = $medico->getRow("SELECT * FROM optica.medico WHERE idMedico =?", array($idMedico));
            $medico->idMedico = $getrow['idMedico'];
            $medico->Especializacion = $getrow['Especializacion'];
            $medico->Licencia = $getrow['Licencia'];
            $medico->Disconnect();
            return $medico;
        }else{
            $medico->Disconnect();
            unset($medico);
            return NULL;
        }
    }

    public static function getAll()
    {
        return medico::buscar("SELECT * FROM optica.medico");
    }

    public static function medicoregistrada ($Licencia) : bool
    {
        $result = medico::search("SELECT idMedico FROM optica.medico where Licencia = '".$Licencia."'");
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }





}