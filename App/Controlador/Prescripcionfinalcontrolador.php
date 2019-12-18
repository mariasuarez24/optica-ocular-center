<?php


namespace App\Controlador;

require(__DIR__.'/../Modelos/PrescripcionFinal.php');

use App\Modelos\PrescripcionFinal;


if(!empty($_GET['action'])){
    Prescripcionfinalcontrolador::main($_GET['action']);
}


class Prescripcionfinalcontrolador
{
    static function main($action)
    {
        if ($action == "create") {
            Prescripcionfinalcontrolador::create();
        } else if ($action == "edit") {
            Prescripcionfinalcontrolador::edit();
        } else if ($action == "searchForID") {
            Prescripcionfinalcontrolador::searchForID($_REQUEST['idPersona']);
        } else if ($action == "searchAll") {
            Prescripcionfinalcontrolador::getAll();
        } else if ($action == "activate") {
            Prescripcionfinalcontrolador::activate();
        } else if ($action == "inactivate") {
            Prescripcionfinalcontrolador::inactivate();
        }/*else if ($action == "login"){
            UsuariosController::login();
        }else if($action == "cerrarSession"){
            UsuariosController::cerrarSession();
        }*/

    }
    static public function create()
    {
        try {
            $arrayprescripcionfinal = array();
            $arrayprescripcionfinal['Diagnostico_OI'] = $_POST['Diagnostico_OI'];
            $arrayprescripcionfinal['Diagnostico_OD'] = $_POST['Diagnostico_OD'];
            $arrayprescripcionfinal['AV_OD'] = $_POST['AV_OD'];
            $arrayprescripcionfinal['VL_OD'] = $_POST['VL_OD'];
            $arrayprescripcionfinal['AV_OI'] = $_POST['AV_OI'];
            $arrayprescripcionfinal['VL_OI'] = $_POST['VL_OI'];
            $arrayprescripcionfinal['VP_OD'] = $_POST['VP_OD'];
            $arrayprescripcionfinal['VP_OI'] = $_POST['VP_OI'];
            $arrayprescripcionfinal['DNP_OD'] = $_POST['DNP_OD'];
            $arrayprescripcionfinal['DNP_OI'] = $_POST['DNP_OI'];
            $arrayprescripcionfinal['AB_OD'] = $_POST['AB_OD'];
            $arrayprescripcionfinal['AB_OI'] = $_POST['AB_OI'];


            $prescripcionfinal = new PrescripcionFinal ($arrayprescripcionfinal);
            if($prescripcionfinal->create()){
                header("Location: ../../Vistas/modules/prescripcion_final/index.php?respuesta=correcto");
            }

        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/prescripcion_final/create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }
    static public function edit (){
        try {
            $arrayprescripcionfinal = array();
            $arrayprescripcionfinal['Diagnostico_OI'] = $_POST['Diagnostico_OI'];
            $arrayprescripcionfinal['Diagnostico_OD'] = $_POST['Diagnostico_OD'];
            $arrayprescripcionfinal['AV_OD'] = $_POST['AV_OD'];
            $arrayprescripcionfinal['VL_OD'] = $_POST['VL_OD'];
            $arrayprescripcionfinal['AV_OI'] = $_POST['AV_OI'];
            $arrayprescripcionfinal['VL_OI'] = $_POST['VL_OI'];
            $arrayprescripcionfinal['VP_OD'] = $_POST['VP_OD'];
            $arrayprescripcionfinal['VP_OI'] = $_POST['VP_OI'];
            $arrayprescripcionfinal['DNP_OD'] = $_POST['DNP_OD'];
            $arrayprescripcionfinal['DNP_OI'] = $_POST['DNP_OI'];
            $arrayprescripcionfinal['AB_OD'] = $_POST['AB_OD'];
            $arrayprescripcionfinal['AB_OI'] = $_POST['AB_OI'];
            $arrayprescripcionfinal['idPrescripcion_Final'] = $_POST['idPrescripcion_Final'];

            $user = new PrescripcionFinal($arrayprescripcionfinal);
            $user->update();

            header("Location: ../../Vistas/modules/prescripcion_final/show.php?id=".$user->getIdPrescripcionFinal()."&respuesta=correcto");
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/prescripcion_final/edit.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }
    static public function searchForID ($idPrescripcion_Final){
        try {
            return PrescripcionFinal::searchForId($idPrescripcion_Final);
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../../Vistas/modules/prescripcion_final/manager.php?respuesta=error");
        }
    }

    static public function getAll (){
        try {
            return PrescripcionFinal::getAll();
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../Vistas/modules/prescripcion_final/manager.php?respuesta=error");
        }
    }




}