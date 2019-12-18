<?php

namespace App\controlador;
require(__DIR__.'/../Modelos/persona.php');
use App\Modelos\persona;

if(!empty($_GET['action'])){
    personacontrolador::main($_GET['action']);
}

class personacontrolador{

    static function main($action)
    {
        if ($action == "create") {
            personacontrolador::create();
        } else if ($action == "edit") {
            personacontrolador::edit();
        } else if ($action == "searchForID") {
            personacontrolador::searchForID($_REQUEST['idPersona']);
        } else if ($action == "searchAll") {
            personacontrolador::getAll();
        } else if ($action == "activate") {
            personacontrolador::activate();
        } else if ($action == "inactivate") {
            personacontrolador::inactivate();
        }/*else if ($action == "login"){
            personacontrolador::login();
        }else if($action == "cerrarSession"){
            personacontrolador::cerrarSession();
        }*/

    }

    static public function create()
    {
        try {
            $arraypersona = array();
            $arraypersona['nombres'] = $_POST['nombres'];
            $arraypersona['apellidos'] = $_POST['apellidos'];
            $arraypersona['numero_documento'] = $_POST['numero_documento'];
            $arraypersona['tipo_documento'] = $_POST['tipo_documento'];
            $arraypersona['ciudad'] = $_POST['ciudad'];
            $arraypersona['genero'] = $_POST['genero'];
            $arraypersona['email'] = $_POST['email'];
            $arraypersona['telefono'] = $_POST['telefono'];
            $arraypersona['estado'] = 'Activo';
            $arraypersona['rol'] = 'Cliente';
            $arraypersona['direccion'] = $_POST['direccion'];
            $arraypersona['fecha_nacimiento'] = $_POST['fecha_nacimiento'];

            if(!persona::personaregistrada($arraypersona['numero_documento'])){
                $persona = new persona ($arraypersona);
                var_dump($persona->create());
                    header("Location: ../../Vistas/modules/persona/index.php?respuesta=correcto");

            }else{
                header("Location: ../../Vistas/modules/persona/create.php?respuesta=error&mensaje=Usuario ya registrado");
            }
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/persona/create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }

    static public function edit (){
        try {

            $arraypersona = array();
            $arraypersona['nombres'] = $_POST['nombres'];
            $arraypersona['apellidos'] = $_POST['apellidos'];
            $arraypersona['numero_documento'] = $_POST['numero_documento'];
            $arraypersona['tipo_documento'] = $_POST['tipo_documento'];
            $arraypersona['ciudad'] = $_POST['ciudad'];
            $arraypersona['genero'] = $_POST['genero'];
            $arraypersona['email'] = $_POST['email'];
            $arraypersona['telefono'] = $_POST['telefono'];
            $arraypersona['estado'] = 'Activo';
            $arraypersona['rol'] = 'Cliente';
            $arraypersona['direccion'] = $_POST['direccion'];
            $arraypersona['fecha_nacimiento'] = $_POST['fecha_nacimiento'];
            $arraypersona['idPersona'] = $_POST['idPersona'];


            $user = new persona($arraypersona);
            $user->update();

            header("Location: ../../Vistas/modules/persona/show.php?id=".$user->getIdPersona()."&respuesta=correcto");
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/persona/edit.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }

    static public function activate (){
        try {
            $Objpersona = persona::searchForIdPersona($_GET['Id']);
            $Objpersona->setEstado("Activo");
            if($Objpersona->update()){
                header("Location: ../../Vistas/modules/persona/index.php");
            }else{
                header("Location: ../../Vistas/modules/persona/index.php?respuesta=error&mensaje=Error al guardar");
            }
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/persona/index.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }

    static public function inactivate (){
        try {
            $Objpersona = persona::searchForIdPersona($_GET['Id']);
            $Objpersona->setEstado("Inactivo");
            if($Objpersona->update()){
                header("Location: ../../Vistas/modules/persona/index.php");
            }else{
                header("Location: ../../Vistas/modules/persona/index.php?respuesta=error&mensaje=Error al guardar");
            }
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/persona/index.php?respuesta=error");
        }
    }

    static public function searchForID ($id){
        try {
            return persona::searchForIdPersona($id);
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../../views/modules/persona/manager.php?respuesta=error");
        }
    }

    static public function getAll (){
        try {
            return persona::getAll();
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../Vista/modules/persona/manager.php?respuesta=error");
        }
    }

    /*public static function personaIsInArray($idPersona, $ArrPersonas){
        if(count($ArrPersonas) > 0){
            foreach ($ArrPersonas as $Persona){
                if($Persona->getIdPersona() == $idPersona){
                    return true;
                }
            }
        }
        return false;
    }

    static public function selectPersona ($isMultiple=false,
                                          $isRequired=true,
                                          $id="idConsultorio",
                                          $nombre="idConsultorio",
                                          $defaultValue="",
                                          $class="",
                                          $where="",
                                          $arrExcluir = array()){
        $arrPersonas = array();
        if($where != ""){
            $base = "SELECT * FROM persona WHERE ";
            $arrPersonas = Persona::buscar($base.$where);
        }else{
            $arrPersonas = Persona::getAll();
        }

        $htmlSelect = "<select ".(($isMultiple) ? "multiple" : "")." ".(($isRequired) ? "required" : "")." id= '".$id."' name='".$nombre."' class='".$class."'>";
        $htmlSelect .= "<option value='' >Seleccione</option>";
        if(count($arrPersonas) > 0){
            foreach ($arrPersonas as $persona)
                if (!UsuariosController::personaIsInArray($persona->getIdPersona(),$arrExcluir))
                    $htmlSelect .= "<option ".(($persona != "") ? (($defaultValue == $persona->getIdPersona()) ? "selected" : "" ) : "")." value='".$persona->getIdPersona()."'>".$persona->getNombres()." ".$persona->getApellidos()."</option>";
        }
        $htmlSelect .= "</select>";
        return $htmlSelect;
    }*/

    /*
    public function buscar ($Query){
        try {
            return Persona::buscar($Query);
        } catch (Exception $e) {
            header("Location: ../Vista/modules/persona/manager.php?respuesta=error");
        }
    }

    static public function asociarEspecialidad (){
        try {
            $Persona = new Persona();
            $Persona->asociarEspecialidad($_POST['Persona'],$_POST['Especialidad']);
            header("Location: ../Vista/modules/persona/managerSpeciality.php?respuesta=correcto&id=".$_POST['Persona']);
        } catch (Exception $e) {
            header("Location: ../Vista/modules/persona/managerSpeciality.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }

    static public function eliminarEspecialidad (){
        try {
            $ObjPersona = new Persona();
            if(!empty($_GET['Persona']) && !empty($_GET['Especialidad'])){
                $ObjPersona->eliminarEspecialidad($_GET['Persona'],$_GET['Especialidad']);
            }else{
                throw new Exception('No se recibio la informacion necesaria.');
            }
            header("Location: ../Vista/modules/persona/managerSpeciality.php?id=".$_GET['Persona']);
        } catch (Exception $e) {
            var_dump($e);
            //header("Location: ../Vista/modules/persona/manager.php?respuesta=error");
        }
    }

    public static function login (){
        try {
            if(!empty($_POST['Usuario']) && !empty($_POST['Contrasena'])){
                $tmpPerson = new Persona();
                $respuesta = $tmpPerson->Login($_POST['Usuario'], $_POST['Contrasena']);
                if (is_a($respuesta,"Persona")) {
                    $hydrator = new ReflectionHydrator(); //Instancia de la clase para convertir objetos
                    $ArrDataPersona = $hydrator->extract($respuesta); //Convertimos el objeto persona en un array
                    unset($ArrDataPersona["datab"],$ArrDataPersona["isConnected"],$ArrDataPersona["relEspecialidades"]); //Limpiamos Campos no Necesarios
                    $_SESSION['UserInSession'] = $ArrDataPersona;
                    echo json_encode(array('type' => 'success', 'title' => 'Ingreso Correcto', 'text' => 'Sera redireccionado en un momento...'));
                }else{
                    echo json_encode(array('type' => 'error', 'title' => 'Error al ingresar', 'text' => $respuesta)); //Si la llamda es por Ajax
                }
                return $respuesta; //Si la llamada es por funcion
            }else{
                echo json_encode(array('type' => 'error', 'title' => 'Datos Vacios', 'text' => 'Debe ingresar la informacion del usuario y contraseña'));
                return "Datos Vacios"; //Si la llamada es por funcion
            }
        } catch (Exception $e) {
            var_dump($e);
            header("Location: ../login.php?respuesta=error");
        }
    }

    public static function cerrarSession (){
        session_unset();
        session_destroy();
        header("Location: ../Vista/modules/persona/login.php");
    }*/

}