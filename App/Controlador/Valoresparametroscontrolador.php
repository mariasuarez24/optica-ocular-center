<?php


namespace App\Controlador;

require('../Models/Usuarios.php');

use App\Controllers\UsuariosController;
use App\Modelos\ValoresParametros;

if(!empty($_GET['action'])){
    Valoresparametroscontrolador::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}

class Valoresparametroscontrolador
{
    static function main($action)
    {
        if ($action == "create") {
            Valoresparametroscontrolador::create();
        }/* else if ($action == "editar") {
            UsuariosController::editar();
        } else if ($action == "buscarID") {
            UsuariosController::buscarID($_REQUEST['idPersona']);
        } else if ($action == "ActivarUsuario") {
            UsuariosController::ActivarPersona();
        } else if ($action == "InactivarUsuario") {
            UsuariosController::InactivarPersona();
        }else if ($action == "login"){
            UsuariosController::login();
        }else if($action == "cerrarSession"){
            UsuariosController::cerrarSession();
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


            if(!ValoresParametros::usuarioRegistrado($arrayValoresparametros['Examenes_idExamenes'])){
                $Usuario = new ValoresParametros ($arrayValoresparametros);
                $Usuario->create();
                header("Location: ../../Vistas/modules/valores_parametros/index.php?respuesta=correcto&action=create");
            }else{
                header("Location: ../../Vistas/modules/valores_parametros/create.php?respuesta=error&mensaje=Usuario ya registrado");
            }
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/valores_parametros/create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }


}