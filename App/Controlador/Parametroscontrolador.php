<?php

namespace App\Controll;

require('../Modelos/Parametros.php');
use App\Modelos\Parametros;

if(!empty($_GET['action'])){
    Parametroscontrolador::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}



class Parametroscontrolador
{

    static function main($action)
    {
        if ($action == "create") {
            Parametroscontrolador::create();
        }/* else if ($action == "editar") {
            Parametroscontrolador::editar();
        } else if ($action == "buscarID") {
            Parametroscontrolador::buscarID($_REQUEST['idPersona']);
        } else if ($action == "ActivarParametro") {
            Parametroscontrolador::ActivarParametro();
        } else if ($action == "ActivarParametro") {
            Parametroscontrolador::InactivarParametro();
        }else if ($action == "login"){
            Parametroscontrolador::login();
        }else if($action == "cerrarSession"){
            Parametroscontrolador::cerrarSession();
        }*/

    }

    static public function create()
    {
        try {
            $arrParametros = array();
            $arrParametros['Nombre'] = $_POST['Nombre'];
            $arrParametros['Descripcion'] = $_POST['Descripcion'];


            if(!Parametros::parametrosRegistrados($arrParametros['Nombre'])){
                $Parametros = new Parametros ($arrParametros);
                $Parametros->create();
                header("Location: ../../Vistas/modules/parametros/index.php?respuesta=correcto&action=create");
            }else{
                header("Location: ../../Vistas/modules/parametros/create.php?respuesta=error&mensaje=Parametros ya registrados");
            }
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/parametros/create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }

}