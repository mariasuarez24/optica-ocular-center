<?php


namespace App\Controlador;

require('C:\laragon\www\optica-ocular-center\App\Modelos\Examenes.php');

use App\Modelos\ValoresParametros;

if(!empty($_GET['action'])){
    Valoresparametroscontrolador::main($_GET['action']);
}

class Valoresparametroscontrolador
{
    static function main($action)
    {
        if ($action == "create") {
            Valoresparametroscontrolador::create();
        } else if ($action == "edit") {
            Valoresparametroscontrolador::edit();
        } else if ($action == "searchForID") {
            Valoresparametroscontrolador::searchForID($_REQUEST['idExamenes']);
        } else if ($action == "searchAll") {
            Valoresparametroscontrolador::getAll();

        }/*else if ($action == "login"){
            Parametroscontrolador::login();
        }else if($action == "cerrarSession"){
            Parametroscontrolador::cerrarSession();
        }*/

    }
    static public function create()
    {
        try {
            $arrayValoresparametros = array();
            $arrayValoresparametros['Examenes_idExamenes'] = $_POST['Examenes_idExamenes'];
            $arrayValoresparametros['Parametros_idParametros'] = $_POST['Parametros_idParametros'];
            $arrayValoresparametros['Ojo_derecho'] = $_POST['Ojo_derecho'];
            $arrayValoresparametros['Ojo_izquierdo'] = $_POST['Ojo_izquierdo'];
            $arrayValoresparametros->create();
            header("Location: ../../Vistas/modules/valores_parametros/index.php?respuesta=correcto&action=create");
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/valores_parametros /create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }
    static public function edit (){
        try {
            $arrayValoresparametros = array();
            $arrayValoresparametros['Examenes_idExamenes'] = $_POST['Examenes_idExamenes'];
            $arrayValoresparametros['Parametros_idParametros'] = $_POST['Parametros_idParametros'];
            $arrayValoresparametros['Ojo_derecho'] = $_POST['Ojo_derecho'];
            $arrayValoresparametros['Ojo_izquierdo'] = $_POST['Ojo_izquierdo'];


            $user = new ValoresParametros($arrayValoresparametros);
            $user->update();

            header("Location: ../../Vistas/modules/valores_parametros/show.php?id=".$user->getIdParametros()."&respuesta=correcto");
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/valores_parametros/edit.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }
    static public function searchForID ($idValoresParametros){
        try {
            return ValoresParametros::searchForId($idValoresParametros);
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../../Vistas/modules/valores_parametros/manager.php?respuesta=error");
        }
    }

    static public function getAll (){
        try {
            return ValoresParametros::getAll();
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../Vistas/modules/valores_parametros/manager.php?respuesta=error");
        }
    }

}
