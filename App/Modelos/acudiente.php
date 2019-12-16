<?php


namespace App\Modelos;
include ('db_abstract_class.php');

class acudiente extends db_abstract_class
{
    private $idAcudiente;
    private $parentezco;

    /**
     * acudiente constructor.
     * @param $idAcudiente
     * @param $parentezco
     */
    public function __construct($acudiente=array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idAcudiente = $acudiente ['idAcudiente'] ?? null;
        $this->parentezco = $acudiente ['parentezco'] ?? null;
    }

    /**
     * @return mixed
     */
    public function getIdAcudiente()
    {
        return $this->idAcudiente;
    }

    /**
     * @param mixed $idAcudiente
     */
    public function setIdAcudiente($idAcudiente): void
    {
        $this->idAcudiente = $idAcudiente;
    }

    /**
     * @return mixed
     */
    public function getParentezco()
    {
        return $this->parentezco;
    }

    /**
     * @param mixed $parentezco
     */
    public function setParentezco($parentezco): void
    {
        $this->parentezco = $parentezco;
    }
    public function store()
    {
        $this->insertRow("INSERT INTO optica.acudiente VALUES (NULL, ?, ?, ?)", array(
                $this->parentezco,
                123,
                1,
            )
        );
        $this->Disconnect();
    }


    public function update()
    {
        $this->updateRow("UPDATE optica.acudiente SET parentezco = ?  WHERE idAcudiente = ?", array(
                $this->parentezco,

            )
        );
        $this->Disconnect();
    }
    public function deleted($idAcudiente)
    {
        // TODO: Implement deleted() method.
    }

    public static function search($query)
    {
        $acudiente = array();
        $tmp = new acudiente();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $acudiente = new $acudiente();
            $acudiente->idAcudiente = $valor['$idAcudiente'];
            $acudiente->parentezco = $valor['parentezco'];
            $acudiente->Disconnect();
            array_push($acudiente, $acudiente);
        }
        $tmp->Disconnect();
        return $acudiente;
    }


    public static function searchForId($idAcudiente)
    {
        $acudiente = new acudiente();
        if ($acudiente > 0){
            $getrow = $acudiente->getRow("SELECT * FROM optica.acudiente WHERE idAcudiente =?", array($idAcudiente));
            $acudiente->idAcudiente = $getrow['idAcudiente'];
            $acudiente->Especializacion = $getrow['parentezco'];
            $acudiente->Disconnect();
            return $acudiente;
        }else{
            $acudiente->Disconnect();
            unset($acudiente);
            return NULL;
        }
    }

    public static function getAll()
    {
        return acudiente::buscar("SELECT * FROM optica.acudiente");
    }

    public static function acudienteregistrada ($parentezco) : bool
    {
        $result = acudiente::search("SELECT idAcudiente FROM optica.acudiente where parentezco = '".$parentezco."'");
        if (count($result) > 0){
            return true;
        }else{
            return false;
        }
    }


}