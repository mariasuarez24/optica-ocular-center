<?php


namespace App\Controlador;

require('C:\laragon\www\optica-ocular-center\App\Modelos\ExamenesHistorial.php');

use App\Modelos\ExamenesHistorial;

if(!empty($_GET['action'])){
    ExamenesHistorialControlador::main($_GET['action']);
}


class ExamenesHistorialControlador
    { static function main($action)
    {
        if ($action == "create") {
            ExamenesHistorialControlador::create();
        } else if ($action == "edit") {
            ExamenesHistorialControlador::edit();
        } else if ($action == "searchForID") {
            ExamenesHistorialControlador::searchForID($_REQUEST['idExamenesHistorial']);
        } else if ($action == "searchAll") {
            ExamenesHistorialControlador::getAll();

        }/*else if ($action == "login"){
            ExamenesHistorialControlador::login();
        }else if($action == "cerrarSession"){
            ExamenesHistorialControlador::cerrarSession();
        }*/

    }
    static public function create()
    {
        try {
            $arrayexameneshistorial = array();
            $arrayexameneshistorial['Valores_Parametros_idValoresParametros'] = $_POST['Valores_Parametros_idValoresParametros'];
            $arrayexameneshistorial['Ojo_Derecho'] = $_POST['Ojo_Derecho'];
            $arrayexameneshistorial['Ojo_Izquierdo'] = $_POST['Ojo_Izquierdo'];
            $arrayexameneshistorial['historial_idHistorial'] = $_POST['historial_idHistorial'];
            $ExamenesHistorial = new ExamenesHistorial($arrayexameneshistorial);
            $ExamenesHistorial->create();
            header("Location: ../../Vistas/modules/examenes_historial/index.php?respuesta=correcto");
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/examenes_historial/create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }

    static public function edit (){
        try {
            $arrayexameneshistorial = array();
            $arrayexameneshistorial['Valores_Parametros_idValoresParametros'] = $_POST['Valores_Parametros_idValoresParametros'];
            $arrayexameneshistorial['Ojo_Derecho'] = $_POST['Ojo_Derecho'];
            $arrayexameneshistorial['Ojo_Izquierdo'] = $_POST['Ojo_Izquierdo'];
            $arrayexameneshistorial['historial_idHistorial'] = $_POST['historial_idHistorial'];
            $arrayexameneshistorial['idExamenhistorial'] = $_POST['idExamenhistorial'];

            $user = new ExamenesHistorial($arrayexameneshistorial);
            $user->update();

            header("Location: ../../Vistas/modules/examenes_historial/show.php?id=".$user->getidExamenesHistorial()."&respuesta=correcto");
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/examenes_historial/edit.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }

    static public function searchForID ($idExamenesHistorial){
        try {
            return Exameneshistorial::searchForId($idExamenesHistorial);
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../../Vistas/modules/examenes_historial/manager.php?respuesta=error");
        }
    }

    static public function getAll (){
        try {
            return Exameneshistorial::getAll();
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../Vistas/modules/persona/manager.php?respuesta=error");
        }
    }

}