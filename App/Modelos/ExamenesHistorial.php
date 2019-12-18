<?php


namespace App\Modelos;
include ('db_abstract_class.php');

class ExamenesHistorial extends db_abstract_class
{
    private $idExamenesHistorial;
    private $Valores_parametros_idValoresParametros;
    private $Ojo_Derecho;
    private $Ojo_Izquierdo;
    private $historial_idHistorial;
    /**
     * ExamenesHistorial constructor.
     * @param $idExamenHistorial
     * @param $Valores_parametros_idValoresParametros
     * @param $Ojo_Derecho
     * @param $Ojo_Izquierdo
     * @param $historial_idHistorial
     */

    public function __construct()
    {
        parent::__construct();
        $this->idExamenesHistorial = $ExamenesHistorial ['idExamenHistorial'] ?? null;
        $this->Valores_parametros_idValoresParametros = $ExamenesHistorial['Valores_parametros_idValoresParametros'] ?? null;
        $this->Ojo_Derecho = $ExamenesHistorial ['Ojo_Derecho'] ?? null;
        $this->Ojo_Izquierdo = $ExamenesHistorial['Ojo_Izquierdo'] ?? null;
        $this->historial_idHistorial = $ExamenesHistorial ['historial_idHistorial'] ?? null;
    }

    /*Metodo destructor cierra conexion. */
    function __destruct()
    {
        $this->Disconnect();
    }

    /**
     * @return mixed
     */
    public function getidExamenesHistorial()
    {
        return $this->idExamenesHistorial;
    }

    /**
     * @param mixed $idExamenesHistorial
     */
    public function setidExamenesHistorial($idExamenesHistorial): void
    {
        $this->$idExamenesHistorial = $idExamenesHistorial;
    }

    /**
     * @return mixed
     */
    public function getValores_parametros_idValoresParametros()
    {
        return $this->Valores_parametros_idValoresParametros;
    }

    /**
     * @param mixed $Valores_paremetros_idValoresParametros
     */
    public function setValores_parametros_idValoresParametros($Valores_parametros_idValoresParametros): string
    {
        $this->Valores_paremetros_idValoresParametros = $Valores_parametros_idValoresParametros;
    }

    /**
     * @return mixed
     */
    public function getOjo_Derecho()
    {
        return $this->Ojo_Derecho;
    }

    /**
     * @param mixed $Ojo_Derecho
     */
    public function setOjo_Derecho($Ojo_Derecho): void
    {
        $this->Ojo_Derecho = $Ojo_Derecho;
    }

    /**
     * @return mixed
     */
    public function getOjo_Izquierdo()
    {
        return $this->Ojo_Izquierdo;
    }

    /**
     * @param mixed $Ojo_Izquierdo
     */
    public function setOjo_Izquierdo($Ojo_Izquierdo): void
    {
        $this->Ojo_Izquierdo = $Ojo_Izquierdo;
    }

    /**
     * @return mixed
     */
    public function gethistorial_idHistorial()
    {
        return $this->historial_idHistorial;
    }

    /**
     * @param mixed $Historial
     */
    public function sethistorial_idHistorial($historial_idHistorial): void
    {
        $this->historial_idHistorial = $historial_idHistorial;
    }

    protected function store()
    {
        // TODO: Implement store() method.
    }

    public function create(): bool
    {
        $result = $this->insertRow("INSERT INTO optica.examenes_historial  VALUES (NULL, ?, ?, ?, ?)", array(
                $this->Valores_parametros_idValoresParametros,
                $this->Ojo_Derecho,
                $this->Ojo_Izquierdo,
                $this->historial_idHistorial,
            )
        );
        $this->Disconnect();
        return $result;

    }

    public function update(): bool
    {
        $result = $this->updateRow("UPDATE optica.examenes_historial SET $this->Valores_parametros_idValoresParametros = ?, $this->Ojo_Derecho = ?,  $this->Ojo_Izquierdo = ?, $this->historial_idHistorial = ? WHERE $this->idExamenesHistorial = ?", array(
                $this->Valores_parametros_idValoresParametros,
                $this->Ojo_Derecho,
                $this->Ojo_Izquierdo,
                $this->historial_idHistorial,
            )
        );
        $this->Disconnect();
        return $result;
    }

    public function deleted($idExamenesHistorial): void
    {
        // TODO: Implement deleted() method.
    }

    public static function search($query): array
    {
        $arrExamenesHistorial = array();
        $tmp = new ExamenesHistorial();
        $getrows = $tmp->getRows($query);


        foreach ($getrows as $valor) {
            $idExamenesHistorial = new ExamenesHistorial();
            $idExamenesHistorial->idExamenesHistorial = $valor['idExamenesHistorial'];
            $idExamenesHistorial->Valores_parametros_idValoresParametros = $valor['Valores_parametros_idValoresParametros'];
            $idExamenesHistorial->Ojo_Derecho = $valor['Ojo_Derecho'];
            $idExamenesHistorial->Ojo_Izquierdo = $valor['Ojo_Izquierdo'];
            $idExamenesHistorial->historial_idHistorial = $valor['historial_idHistorial'];
            $idExamenesHistorial->Disconnect();
            array_push($arrExamenesHistorial, $idExamenesHistorial);
        }
        $tmp->Disconnect();
        return $arrExamenesHistorial;
    }

    public static function searchForId($idExamenesHistorial): ExamenesHistorial
    {
        $idExamenesHistorial = new ExamenesHistorial();
        if ($idExamenesHistorial > 0) {
            $getrow = $idExamenesHistorial->getRow("SELECT * FROM optica.examenes_historial WHERE idExamenesHistorial =?", array($idExamenesHistorial));
            $idExamenesHistorial->idExamenesHistorial = $getrow['idExamenesHistorial'];
            $idExamenesHistorial->Valores_parametros_idValoresParametros = $getrow['Valores_parametros_idValoresParametros'];
            $idExamenesHistorial->Ojo_Derecho = $getrow['Ojo_Derecho'];
            $idExamenesHistorial->Ojo_Izquierdo = $getrow['Ojo_Izquierdo'];
            $idExamenesHistorial->historial_idHistorial = $getrow['historial_idHistorial'];
            $idExamenesHistorial->Disconnect();
            return $idExamenesHistorial;
        } else {
            $idExamenesHistorial->Disconnect();
            unset($idExamenesHistorial);
            return NULL;
        }
    }

    public static function getAll(): array
    {
        return ExamenesHistorial::search("SELECT * FROM optica.examenes_historial");
    }

    public static function ExamenesHistorialRegistrado($Descripcion): bool
    {
        $result = ExamenesHistorial::search("SELECT id FROM optica.examenes_historial where Valores_paremetros_idValoresParametros = " . $Valores_paremetros_idValoresParametros);
        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }














}