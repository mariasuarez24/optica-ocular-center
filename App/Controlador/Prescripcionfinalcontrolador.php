<?php


namespace App\Controlador;

require(__DIR__.'/../Models/Usuarios.php');
use App\Models\Usuarios;

if(!empty($_GET['action'])){
    UsuariosController::main($_GET['action']);
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
            $arrayUsuario = array();
            $arrayUsuario['nombres'] = $_POST['nombres'];
            $arrayUsuario['apellidos'] = $_POST['apellidos'];
            $arrayUsuario['tipo_documento'] = $_POST['tipo_documento'];
            $arrayUsuario['documento'] = $_POST['documento'];
            $arrayUsuario['telefono'] = $_POST['telefono'];
            $arrayUsuario['direccion'] = $_POST['direccion'];
            $arrayUsuario['rol'] = 'Cliente';
            $arrayUsuario['estado'] = 'Activo';
            if(!Usuarios::usuarioRegistrado($arrayUsuario['documento'])){
                $Usuario = new Usuarios ($arrayUsuario);
                if($Usuario->create()){
                    header("Location: ../../views/modules/usuarios/index.php?respuesta=correcto");
                }
            }else{
                header("Location: ../../views/modules/usuarios/create.php?respuesta=error&mensaje=Usuario ya registrado");
            }
        } catch (Exception $e) {
            header("Location: ../../views/modules/usuarios/create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }



}