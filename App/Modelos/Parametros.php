<?php


namespace App\Modelos;

include ('db_abstract_class.php');

class Parametros extends db_abstract_class
{
    private $idParametros;
    private $Nombre;
    private $Descripcion;

    /**
     * parametros constructor.
     * @param $idparametros
     * @param $Nombre
     * @param $Descripcion
     * @throws \Exception
     */
    public function __construct($parametros = array())
    {
        parent::__construct();//Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idParametros = $parametros['idParametros'] ?? null ;
        $this->Nombre = $parametros['Nombre'] ?? null;
        $this->Descripcion = $parametros['Descripcion'] ?? null;

    }

    /**
     * @return mixed|null
     */
    public function getIdParametros(): int
    {
        return $this->idParametros;
    }

    /**
     * @param mixed|null $idParametros
     */
    public function setIdParametros(int $idParametros): void
    {
        $this->idParametros = $idParametros;
    }

    /**
     * @return mixed|null
     */
    public function getNombre(): string
    {
        return $this->Nombre;
    }

    /**
     * @param mixed|null $Nombre
     */
    public function setNombre(string $Nombre): void
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed|null
     */
    public function getDescripcion(): string
    {
        return $this->Descripcion;
    }

    /**
     * @param mixed|null $Descripcion
     */
    public function setDescripcion(string $Descripcion): void
    {
        $this->Descripcion = $Descripcion;
    }

    /* Metodo destructor cierra la conexion. */



    public function create() : bool
    {
        $result = $this->insertRow("INSERT INTO optica.parametros VALUES (NULL, ?, ?)", array(
                $this->Nombre,
                $this->Descripcion,

            )
        );
        $this->Disconnect();
        return $result;
    }

    public function update() : bool
    {
        $result = $this->updateRow("UPDATE optica.parametros SET Nombre = ?, Descripcion = ? WHERE idParametros = ?", array(
                $this->Nombre,
                $this->Descripcion,
                $this->idParametros,
            ));
        $this->Disconnect();
        return $result;
    }

    public function deleted($idParametros) : void
    {
        // TODO: Implement deleted() method.
    }

    public static function search($query): array
    {
        $arrParametros = array();
        $tmp = new Parametros();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Parametros = new Parametros();
            $Parametros->idParametros = $valor['idParametros'];
            $Parametros->Nombre = $valor['Nombre'];
            $Parametros->Descripcion = $valor['Descripcion'];
            $Parametros->Disconnect();
            array_push($arrParametros, $Parametros);
        }
        $tmp->Disconnect();
        return $arrParametros;

    }
    public static function searchForId($idParametros) : Parametros
    {
        $Parametros = new Parametros();
        if ($idParametros > 0){
            $getrow = $Parametros->getRow("SELECT * FROM optica.parametros WHERE idParametros =?", array($idParametros));
            $Parametros->idParametros = $getrow['idParametros'];
            $Parametros->Nombre = $getrow['Nombre'];
            $Parametros->Descripcion = $getrow['Descripcion'];

            $Parametros->Disconnect();
            return $Parametros;
        }else{
            $Parametros->Disconnect();
            unset($Parametros);
            return NULL;
        }
    }
    public static function getAll() : array
    {
        return Parametros::search("SELECT * FROM optica.parametros");
    }

    public static function parametrosRegistrados ($Nombre) : bool
    {
        $result = Parametros::search("SELECT idParametros FROM optica.parametros where Nombre = '".$Nombre."'");
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