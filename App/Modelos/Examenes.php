<?php


namespace App\Modelos;
include ('db_abstract_class.php');


class Examenes extends db_abstract_class
{
private $idExamenes;
private $Nombre;
private $Descripcion;


    /**
     * examenes constructor.
     * @param $id
     * @param $Nombre
     * @param $Descripcion
     * @throws \Exception
     */
    public function __construct($Examen = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        $this->idExamenes = $Examen['idExamenes'] ?? null;
        $this->Nombre = $Examen['Nombre'] ?? null;
        $this->Descripcion = $Examen['Descripcion'] ?? null;
    }

    /**
     * @return mixed|null
     */
    public function getIdExamenes(): int
    {
        return $this->idExamenes;
    }

    /**
     * @param mixed|null $idExamenes
     */
    public function setIdExamenes( string $idExamenes): void
    {
        $this->idExamenes = $idExamenes;
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


    public function create() : bool
    {
        $result = $this->insertRow("INSERT INTO optica.examenes VALUES (NULL, ?, ?)", array(
                $this->Nombre,
                $this->Descripcion,

            )
        );
        $this->Disconnect();
        return $result;
    }
    public function update() : bool
    {
        $result = $this->updateRow("UPDATE optica.examenes SET Nombre = ?, Descripcion  = ? WHERE idExamenes = ?", array(
            $this->Nombre,
            $this->Descripcion,
        ));
        $this->Disconnect();
        return $result;
    }
    public function deleted($idExamenes) : void
    {
        // TODO: Implement deleted() method.
    }

    public static function search($query) : array
    {
        $arrayExamen = array();
        $tmp = new Examenes();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Examen = new Examenes();
            $Examen->idExamenes = $valor['idExamenes'];
            $Examen->Nombre = $valor['Nombre'];
            $Examen->Descripcion = $valor['Descripcion'];

            $Examen->Disconnect();
            array_push($arrayExamen, $Examen);
        }
        $tmp->Disconnect();
        return $arrayExamen;
    }
    public static function searchForId( $idExamenes) : Examenes
    {
        $Examen = new Examenes();
        if ($idExamenes > 0){
            $getrow = $Examen->getRow("SELECT * FROM optica.examenes WHERE idExamenes =?", array($idExamenes));
            $Examen->idExamenes = $getrow['idExamenes'];
            $Examen->Nombre = $getrow['Nombre'];
            $Examen->Descripcion = $getrow['Descripcion'];

            $Examen->Disconnect();
            return $Examen;
        }else{
            $Examen->Disconnect();
            unset($Examen);
            return NULL;
        }
    }

    public static function getAll() : array
    {
        return Examenes::search("SELECT * FROM optica.examenes");
    }




    protected function store()
    {
        // TODO: Implement store() method.
    }
}