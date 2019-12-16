<?php

namespace App\Modelos;
include ('db_abstract_class.php');

class MotivoConsulta extends db_abstract_class
{
    private $idMotivoConsulta;
    private $Descripcion;
    private $Estado;

    /**
     * MotivoConsulta constructor.
     * @param $idMotivoConsulta
     * @param $Descripcion
     * @param $Estado
     */
    public function __construct($MotivoConsulta = array())
    {
        parent::__construct();
        $this->idMotivoConsulta = $MotivoConsulta ['id'] ?? null;
        $this->Descripcion = $MotivoConsulta['Descripcion'] ?? null;
        $this->Estado = $MotivoConsulta ['Estado'] ?? null;
    }
    /*Metodo destructor cierra conexion. */
    function __destruct()
    {
        $this->Disconnect();
    }
    /**
     * @return mixed
     */
    public function getIdMotivoConsulta()
    {
        return $this->idMotivoConsulta;
    }

    /**
     * @param mixed $idMotivoConsulta
     */
    public function setIdMotivoConsulta($idMotivoConsulta): void
    {
        $this->idMotivoConsulta = $idMotivoConsulta;
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
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado): void
    {
        $this->Estado = $Estado;
    }

    protected function store()
    {
        // TODO: Implement store() method.
    }

   public function create()  :bool
   {
       $result = $this->insertRow("INSERT INTO optica.motivos_consulta VALUES (NULL, ?, ?)",array(
            $this->Descripcion,
            $this->Estado,
         )
        );
$this->Disconnect();
  return $result;

   }
public function update(): bool
{
  $result = $this->updateRow ("UPDATE optica.MotivoConsulta SET $this->Descripcion = ?, $this->Estado = ? WHERE $this->idMotivoConsulta = ?", array(
              $this->Descripcion,
              $this->Estado,
              )
     );
     $this->Disconnect();
        return $result;
    }
    public function deleted($idMotivoConsulta) : void
    {
        // TODO: Implement deleted() method.
    }
 public static function search($query) : array
    {
        $arrMotivoConsulta = array();
        $tmp = new MotivoConsulta();
        $getrows = $tmp->getRows($query);



      foreach ($getrows as $valor) {
            $idMotivoConsulta = new MotivoConsulta();
            $idMotivoConsulta->id = $valor['$idMotivoConsulta'];
            $idMotivoConsulta->Descripcion = $valor['Descripcion'];
            $idMotivoConsulta->Estado = $valor['Estado'];
            $idMotivoConsulta->Disconnect();
            array_push($arrMotivoConsulta, $idMotivoConsulta);
        }
        $tmp->Disconnect();
        return $arrMotivoConsulta;
    }
 public static function searchForId($idMotivoConsulta) : MotivoConsulta
    {
        $idMotivoConsulta = new MotivoConsulta();
        if ($idMotivoConsulta > 0){
            $getrow = $idMotivoConsulta->getRow("SELECT * FROM optica.MotivoConsulta WHERE idMotivoConsulta =?", array($idMotivoConsulta));
            $idMotivoConsulta->id = $getrow['idMotivoConsulta'];
            $idMotivoConsulta->Descripcion = $getrow['Descripcion'];
            $idMotivoConsulta->Estado = $getrow['Estado'];
            $idMotivoConsulta->Disconnect();
            return $idMotivoConsulta;
        }else{
            $idMotivoConsulta->Disconnect();
            unset($idMotivoConsulta);
            return NULL;
        }
    }
      public static function getAll() : array
    {
        return MotivoConsulta::search("SELECT * FROM optica.MotivoConsulta");
    }

    public static function MotivoConsultaRegistrado ($Descripcion) : bool
    {
        $result = MotivoConsulta::search("SELECT id FROM optica.MotivoConsulta where Descripcion = ".$Descripcion);
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}


