<?php

namespace App\Modelos;
include ('db_abstract_class.php');

class MotivoConsulta extends db_abstract_class
{
    private $idMotivos_consulta;
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
        $this->idMotivoConsulta = $MotivoConsulta ['$idMotivos_consulta'] ?? null;
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
    public function getidMotivos_consulta()
    {
        return $this->idMotivos_consulta;
    }

    /**
     * @param mixed idMotivos_consulta
     */
    public function setidMotivos_consulta($idMotivos_consulta): void
    {
        $this->idMotivos_consulta = $idMotivos_consulta;
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
  $result = $this->updateRow ("UPDATE optica.motivos_consulta SET $this->Descripcion = ?, $this->Estado = ? WHERE $this->idMotivos_consulta = ?", array(
              $this->Descripcion,
              $this->Estado,
              )
     );
     $this->Disconnect();
        return $result;
    }
    public function deleted($idMotivos_consulta) : void
    {
        // TODO: Implement deleted() method.
    }
 public static function search($query) : array
    {
        $arrMotivoConsulta = array();
        $tmp = new MotivoConsulta();
        $getrows = $tmp->getRows($query);



      foreach ($getrows as $valor) {
          $idMotivos_consulta = new MotivoConsulta();
          $idMotivos_consulta->idMotivos_consulta = $valor['idMotivos_consulta'];
          $idMotivos_consulta->Descripcion = $valor['Descripcion'];
          $idMotivos_consulta->Estado = $valor['Estado'];
          $idMotivos_consulta->Disconnect();
            array_push($arrMotivoConsulta, $idMotivos_consulta);
        }
        $tmp->Disconnect();
        return $arrMotivoConsulta;
    }
 public static function searchForId($idMotivos_consulta) : MotivoConsulta
    {
        $idMotivos_consulta = new MotivoConsulta();
        if ($idMotivos_consulta> 0){
            $getrow = $idMotivos_consulta->getRow("SELECT * FROM optica.motivos_consulta WHERE idMotivos_consulta =?", array($idMotivos_consulta));
            $idMotivos_consulta->id = $getrow['idMotivos_consulta'];
            $idMotivos_consulta->Descripcion = $getrow['Descripcion'];
            $idMotivos_consulta->Estado = $getrow['Estado'];

            return $idMotivos_consulta;
        }else{
            $idMotivos_consulta->Disconnect();
            unset($idMotivos_consulta);
            return NULL;
        }
    }
      public static function getAll() : array
    {
        return MotivoConsulta::search("SELECT * FROM optica.motivos_consulta");
    }

    public static function MotivoConsultaRegistrado ($Descripcion) : bool
    {
        $result = MotivoConsulta::search("SELECT idMotivos_consulta FROM optica.motivos_consulta where Descripcion = '".$Descripcion."';");
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }

}


