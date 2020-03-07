<?php

namespace App\Controlador;
require(__DIR__.'/../Modelos/FormulaMedica.php');
use App\Modelos\FormulaMedica;

if(!empty($_GET['action'])){
    FormulaMedicaControlador::main($_GET['action']);
}

class FormulaMedicaControlador
{
    static function main($action)
    {
        if ($action == "create") {
            FormulaMedicaControlador::create();
        } else if ($action == "edit") {
            FormulaMedicaControlador::edit();
        } else if ($action == "searchForID") {
            FormulaMedicaControlador::searchForID($_REQUEST['idFormulamedica']);
        } else if ($action == "searchAll") {
            FormulaMedicaControlador::getAll();
        } else if ($action == "activate") {
            FormulaMedicaControlador::activate();
        } else if ($action == "inactivate") {
            FormulaMedicaControlador::inactivate();
        }/*else if ($action == "login"){
            FormulaMedicaControlador::login();
        }else if($action == "cerrarSession"){
            FormulaMedicaControlador::cerrarSession();
        }*/

    }

    static public function create()
    {
        try {
            $arrayFormulamedica= array();
            $arrayFormulamedica['Fecha'] = $_POST['Fecha'];
            $arrayFormulamedica['Descripcion'] = $_POST['Descripcion'];
            $arrayFormulamedica['Prescripcion_idPrescripcion_final'] = '';
            if(!FormulaMedica::FormulaMedicaRegistrada($arrayFormulamedica['Descripcion'])){
                $Formulamedica = new FormulaMedica($arrayFormulamedica);
                if($Formulamedica->create()){
                    header("Location: ../../Vistas/modules/formula_medica/index.php?respuesta=correcto");
                }
            }else{
                header("Location: ../../Vistas/modules/formula_medica/create.php?respuesta=error&mensaje=Formulamedica ya registrado");
            }
        } catch (Exception $e) {
            header("Location: ../../Vistas/modules/formula_medica/create.php?respuesta=error&mensaje=" . $e->getMessage());
        }
    }
    static public function edit (){
        try {
            $arrayFormulamedica = array();
            $arrayFormulamedica['Fecha'] = $_POST['Fecha'];
            $arrayFormulamedica['Descripcion'] = $_POST['Descripcion'];
            $arrayFormulamedica['Prescripcion_idPrescripcion_final'] = '';
            $user = new FormulaMedica($arrayFormulamedica);
            $user->update();

            header("Location: ../../Vistas/modules/formula_medica/show.php?id=".$user->getidFormulamedica()."&respuesta=correcto");
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/formula_medica/edit.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }

    static public function activate (){
        try {
            $ObjFormulamedica = FormulaMedica::searchForId($_GET['idFormulamedica']);
            $ObjFormulamedica->setPrescripcion_idPrescripcion_final("");
            if($ObjFormulamedica->update()){
                header("Location: ../../Vistas/modules/formula_medica/index.php");
            }else{
                header("Location: ../../Vistas/modules/formula_medica/index.php?respuesta=error&mensaje=Error al guardar");
            }
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/formula_medica/index.php?respuesta=error&mensaje=".$e->getMessage());
        }
    }

    static public function inactivate (){
        try {
            $ObjFormulamedica = FormulaMedica::searchForId($_GET['Id']);
            $ObjFormulamedica->setPrescripcion_idPrescripcion_final("");
            if($ObjFormulamedica->update()){
                header("Location: ../../Vistas/modules/formula_medica/index.php");
            }else{
                header("Location: ../../Vistas/modules/formula_medica/index.php?respuesta=error&mensaje=Error al guardar");
            }
        } catch (\Exception $e) {
            //var_dump($e);
            header("Location: ../../Vistas/modules/formula_medica/index.php?respuesta=error");
        }
    }

    static public function searchForID ($idFormulamedica){
        try {
            return FormulaMedica::searchForId($idFormulamedica);
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../../Vistas/modules/formula_medica/manager.php?respuesta=error");
        }
    }

    static public function getAll (){
        try {
            return FormulaMedica::getAll();
        } catch (\Exception $e) {
            var_dump($e);
            //header("Location: ../Vistas/modules/persona/manager.php?respuesta=error");
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