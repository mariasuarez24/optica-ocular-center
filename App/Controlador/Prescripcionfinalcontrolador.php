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
            Prescripcionfinalcontrolador::searchForID($_REQUEST['idPrescripcion_Final']);
        } else if ($action == "searchAll") {
            Prescripcionfinalcontrolador::getAll();
        } else if ($action == "activate") {
            Prescripcionfinalcontrolador::activate();
        } else if ($action == "inactivate") {
            Prescripcionfinalcontrolador::inactivate();
        }/*else if ($action == "login"){
            Prescripcionfinalcontrolador::login();
        }else if($action == "cerrarSession"){
            Prescripcionfinalcontrolador::cerrarSession();
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


