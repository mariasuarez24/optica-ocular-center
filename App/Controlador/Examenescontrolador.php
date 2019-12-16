<?php


namespace App\Controlador;

require('C:\laragon\www\optica-ocular-center\App\Modelos\Examenes.php');

use App\Modelos\Examenes;


if(!empty($_GET['action'])){
    Examenescontrolador::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}

class Examenescontrolador
{
    static function main($action)
    {
        if ($action == "create") {
            Examenescontrolador::create();
        }/* else if ($action == "editar") {
            Examenescontrolador::editar();
        } else if ($action == "buscarID") {
            Examenescontrolador::buscarID($_REQUEST['idPersona']);
        } else if ($action == "ActivarExamen") {
            Examenescontrolador::ActivarExamen();
        } else if ($action == "InactivarExamen") {
            Examenescontrolador::InactivarExamen();
        }else if ($action == "login"){
            Examenescontrolador::login();
        }else if($action == "cerrarSession"){
            Examenescontrolador::cerrarSession();
        }*/

    }
    static public function create()
    {
        try {
            $arrayExamen = array();
            $arrayExamen['Nombre'] = $_POST['Nombre'];
            $arrayExamen['Descripcion'] = $_POST['Descripcion'];
            $Examenes = new Examenes ($arrayExamen);
            $Examenes->create();
            header("Location: ../../Vistas/modules/examenes/index.php?respuesta=correcto&action=create");
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/examenes /create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }

}