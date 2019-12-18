<?php


namespace App\Controlador;

require('C:\laragon\www\optica-ocular-center\App\Modelos\Examenes.php');

use App\Modelos\Examenes;


if(!empty($_GET['action'])){
    Examenescontrolador::main($_GET['action']);
}

class Examenescontrolador
{
    static function main($action)
    {
        if ($action == "create") {
            Examenescontrolador::create();
        } else if ($action == "edit") {
            Examenescontrolador::edit();
        } else if ($action == "searchForID") {
            Examenescontrolador::searchForID($_REQUEST['idExamenes']);
        } else if ($action == "searchAll") {
            Examenescontrolador::getAll();

        }/*else if ($action == "login"){
            UsuariosController::login();
        }else if($action == "cerrarSession"){
            UsuariosController::cerrarSession();
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
            header("Location: ../../Vistas/modules/examenes/index.php?respuesta=correcto");
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/examenes /create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }
    static public function edit (){
        try {
            $arrayExamen = array();
            $arrayExamen['Nombre'] = $_POST['Nombre'];
            $arrayExamen['Descripcion'] = $_POST['Descripcion'];
            $arrayExamen['idExamenes'] = $_POST['idExamenes'];

            $user = new Examenes($arrayExamen);
            $user->update();

            header("Location: ../../Vistas/modules/examenes/show.php?id=".$user->getIdExamenes()."&respuesta=correcto");
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/examenes/edit.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }
    static public function searchForID ($idExamenes){
        try {
            return Examenes::searchForId($idExamenes);
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../../views/modules/usuarios/manager.php?respuesta=error");
        }
    }

    static public function getAll (){
        try {
            return Examenes::getAll();
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../Vista/modules/persona/manager.php?respuesta=error");
        }
    }

}