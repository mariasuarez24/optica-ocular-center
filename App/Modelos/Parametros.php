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

    /* Metodo destructor cierra la conexion. */


    /**
     * @return mixed
     */
    public function getIdparametros()
    {
        return $this->id;
    }

    /**
     * @param mixed $idparametros
     */
    public function setIdparametros($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
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
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }
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
        $result = $this->updateRow("UPDATE optica.parametros SET Nombre = ?, Descripcion = ? WHERE id = ?", array(
                $this->Nombre,
                $this->Descripcion,
            )
        );

        $this->Disconnect();
    }

    public function deleted($id) : void
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
            $Parametros->idParametros = $valor['id'];
            $Parametros->Nombre = $valor['Nombre'];
            $Parametros->Descripcion = $valor['Descripcion'];
            $Parametros->Disconnect();
            array_push($arrParametros, $Parametros);
        }
        $tmp->Disconnect();
        return $arrParametros;

    }
    public static function searchForId($id) : Parametros
    {
        $Parametros = new Parametros();
        if ($id > 0){
            $getrow = $Parametros->getRow("SELECT * FROM optica.parametros WHERE id =?", array($id));
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
        return Parametros::search("SELECT * FROM optica.parametrosarametros");
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