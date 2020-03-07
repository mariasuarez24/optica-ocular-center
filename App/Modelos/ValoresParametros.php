<?php


namespace App\Modelos;
include ('db_abstract_class.php');


class ValoresParametros extends db_abstract_class
{
    private $idValoresParametros;
    private $idExamenes;
    private $idParametros;
    private $Ojo_derecho;
    private $Ojo_izquierdo;

    /**
     * ValoresParametros constructor.
     * @param $id
     * @param $Examenes_idExamenes
     * @param $Parametros_idParametros
     * @param $Ojo_derecho
     * @param $Ojo_izquierdo
     */
    public function __construct($valoresparametros = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idValoresParametros = $valoresparametros['idValoresParametros'] ?? null;
        $this->idExamenes = $valoresparametros['Examenes_idExamenes'] ?? null;
        $this->idParametros = $valoresparametros['Parametros_idParametros'] ?? null;
        $this->Ojo_derecho = $valoresparametros['Ojo_derecho'];
        $this->Ojo_izquierdo = $valoresparametros['Ojo_derecho'] ;

    }

    /**
     * @return mixed|null
     */
    public function getIdValoresParametros(): int
    {
        return $this->idValoresParametros;
    }

    /**
     * @param mixed|null $idValoresParametros
     */
    public function setIdValoresParametros(int $idValoresParametros): void
    {
        $this->idValoresParametros = $idValoresParametros;
    }

    /**
     * @return mixed|null
     */
    public function getIdExamenes(): string
    {
        return $this->idExamenes;
    }

    /**
     * @param mixed|null $idExamenes
     */
    public function setIdExamenes(string $idExamenes): void
    {
        $this->idExamenes = $idExamenes;
    }

    /**
     * @return mixed|null
     */
    public function getIdParametros(): string
    {
        return $this->idParametros;
    }

    /**
     * @param mixed|null $idParametros
     */
    public function setIdParametros(string $idParametros): void
    {
        $this->idParametros = $idParametros;
    }

    /**
     * @return mixed
     */
    public function getOjoDerecho()
    {
        return $this->Ojo_derecho;
    }

    /**
     * @param mixed $Ojo_derecho
     */
    public function setOjoDerecho($Ojo_derecho): void
    {
        $this->Ojo_derecho = $Ojo_derecho;
    }

    /**
     * @return mixed
     */
    public function getOjoIzquierdo()
    {
        return $this->Ojo_izquierdo;
    }

    /**
     * @param mixed $Ojo_izquierdo
     */
    public function setOjoIzquierdo($Ojo_izquierdo): void
    {
        $this->Ojo_izquierdo = $Ojo_izquierdo;
    }


    public function create(): bool
    {
        $result = $this->insertRow("INSERT INTO optica.valores_paremetros VALUES (NULL, ?, ?, ?, ?)", array(
                $this->idExamenes,
                $this->idParametros,
                $this->Ojo_derecho,
                $this->Ojo_derecho,

            )
        );
        $this->Disconnect();
        return $result;
    }

    public function update(): bool
    {
        $result = $this->updateRow("UPDATE optica.valores_paremetros SET Examenes_idExamenes = ?, Parametros_idParametros = ?, Ojo_derecho = ?, Ojo_izquierdo = ? WHERE idValoresParametros ", array(

                $this->idExamenes,
                $this->idParametros,
                $this->Ojo_derecho,
                $this->Ojo_izquierdo,
                $this->idValoresParametros
            )
        );
        $this->Disconnect();
        return $result;
    }



    public static function search($query): array
    {
        $arrayValoresparametros = array();
        $tmp = new ValoresParametros();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $valoresparametros = new ValoresParametros();
            $valoresparametros->idValoresParametros = $valor['idValoresParametros'];
            $valoresparametros->idExamenes = $valor['Examenes_idExamenes'];
            $valoresparametros->idParametros = $valor['Parametros_idParametros'];
            $valoresparametros->Ojo_derecho = $valor['Ojo_derecho'];
            $valoresparametros->Ojo_izquierdo = $valor['Ojo_izquierdo'];
            $valoresparametros->Disconnect();
            array_push($arrayValoresparametros, $valoresparametros);
        }
        $tmp->Disconnect();
        return $arrayValoresparametros;
    }
    public static function searchForId( $idValoresParametros) : ValoresParametros
    {
        $valoresparametros = new ValoresParametros();
        if ($idValoresParametros > 0){
            $getrow = $valoresparametros->getRow("SELECT * FROM optica.valores_paremetros WHERE idValoresParametros =?", array($idValoresParametros));
            $valoresparametros->idValoresParametros = $getrow['idValoresParametros'];
            $valoresparametros->idExamenes = $getrow['Examenes_idExamenes'];
            $valoresparametros->idParametros = $getrow['Parametros_idParametros'];
            $valoresparametros->Ojo_derecho = $getrow['Ojo_derecho'];
            $valoresparametros->Ojo_izquierdo = $getrow['Ojo_izquierdo'];

            $valoresparametros->Disconnect();
            return $valoresparametros;
        }else{
            $valoresparametros->Disconnect();
            unset($valoresparametros);
            return NULL;
        }
    }


    public static function getAll(): array
    {
        return ValoresParametros:: search("SELECT * FROM optica.valores_paremetros");
    }

    /* public static function valoresparametrosRegistrado ($idExamenes): bool
     {
         $result = ValoresParametros::search("SELECT idValoresParametros FROM optica.valores_paremetros where Examenes_idExamenes = " . $idExamenes);
         if (count($result) > 0) {
             return true;
         } else {
             return false;
         }
     } */


    protected function store()
    {
        // TODO: Implement store() method.
    }

    protected function deleted($idExamenes)
    {
        // TODO: Implement deleted() method.
    }
}