<?php

namespace App\Controlador;

require(__DIR__.'/../Modelos/Parametros.php');
use App\Modelos\Parametros;

if(!empty($_GET['action'])){
    Parametroscontrolador::main($_GET['action']);
}



class Parametroscontrolador
{

    static function main($action)
    {
        if ($action == "create") {
            Parametroscontrolador::create();
        } else if ($action == "edit") {
            Parametroscontrolador::edit();
        } else if ($action == "searchForID") {
            Parametroscontrolador::searchForID($_REQUEST['idExamenes']);
        } else if ($action == "searchAll") {
            Parametroscontrolador::getAll();

        }/*else if ($action == "login"){
            Parametroscontrolador::login();
        }else if($action == "cerrarSession"){
            Parametroscontrolador::cerrarSession();
        }*/

    }
    static public function create()
    {
        try {
            $arrayParametros = array();
            $arrayParametros['Nombre'] = $_POST['Nombre'];
            $arrayParametros['Descripcion'] = $_POST['Descripcion'];
            $Parametros = new Parametros ($arrayParametros);
            $Parametros->create();
            header("Location: ../../Vistas/modules/parametros/index.php?respuesta=correcto");
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/parametros /create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }
    static public function edit (){
        try {
            $arrayParametros = array();
            $arrayParametros['Nombre'] = $_POST['Nombre'];
            $arrayParametros['Descripcion'] = $_POST['Descripcion'];
            $arrayExamen['idParametros'] = $_POST['idParametros'];

            $user = new Parametros($arrayParametros);
            $user->update();

            header("Location: ../../Vistas/modules/parametros/show.php?id=".$user->getIdParametros()."&respuesta=correcto");
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/parametros/edit.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }
    static public function searchForID ($idParametros){
        try {
            return Parametros::searchForId($idParametros);
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../../views/modules/parametros/manager.php?respuesta=error");
        }
    }

    static public function getAll (){
        try {
            return Parametros::getAll();
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../Vista/modules/parametros/manager.php?respuesta=error");
        }
    }

}