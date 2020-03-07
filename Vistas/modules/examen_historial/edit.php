<?php
require("../../partials/routes.php");
require("../../../App/Controlador/ExamenesHistorialControlador.php");

use App\Controlador\ExamenesHistorialControlador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Editar Examenes Historial</title>
    <?php require("../../partials/head_imports.php"); ?>
</head>
<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">
    <?php require("../../partials/navbar_customization.php"); ?>

    <?php require("../../partials/sliderbar_main_menu.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Editar Nuevos Examenes Historial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= $baseURL; ?>/Vistas/">optica-ocular-center</a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <?php if(!empty($_GET['respuesta'])){ ?>
                <?php if ($_GET['respuesta'] == "error"){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            Error al crear Examenes Historial <?= ($_GET['mensaje']) ?? "" ?>
                    </div>
                <?php } ?>
            <?php } else if (empty($_GET['id'])) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Error!</h5>
                    Faltan criterios de busqueda <?= ($_GET['mensaje']) ?? "" ?>
                </div>
            <?php } ?>

            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Examenes Historial</h3>
                </div>
                <!-- /.card-header -->
                <?php if(!empty($_GET["idExamenhistorial"]) && isset($_GET["idExamenhistorial"])){ ?>
                    <p>
                    <?php
                    $DataExamenesHistorial = ExamenesHistorialControlador::searchForID($_GET["id"]);
                        if(!empty($DataExamenesHistorial)){
                    ?>
                            <!-- form start -->
                            <form class="form-horizontal" method="post" id="frmEditExamenesHistorialfrmEditExamenesHistorialfrmEditExamenesHistorialv" name="frmEditExamenesHistorial"
                                  action="../../../App/Controlador/ExamenesHistorialControlador.php?action=edit">
                                <input id="idExamenHistorial" name="idExamenHistorial" value="<?php echo $DataExamenesHistorial->getidExamenesHistorial(); ?>" hidden
                                       required="required" type="text">
                                <div class="card-body">
                                    <div class="form-group row">

                        <label for="Valores_Parametros_idValoresParametros" class="col-sm-2 col-form-label">Valores_Parametros_idValoresParametros</label>
                        <div class="col-sm-10">
                            <select id="Valores_Parametros_idValoresParametros" name="Valores_Parametros_idValoresParametros" class="custom-select">
                                <option <?= ($DataExamenesHistorial->getEstado() == "") ? "selected":""; ?> value=""></option>
                                <option <?= ($DataExamenesHistorial->getEstado() == "") ? "selected":""; ?> value=""></option>
                            </select>
                        </div>
                    </div>


                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="Ojo_Derecho" class="col-sm-2 col-form-label">Ojo_Derecho</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="Ojo_Derecho-control" id="Ojo_Derecho" name="Ojo_Derecho" value="<?= $DataExamenesHistorial->getOjo_Derecho(); ?>" placeholder="Ingrese valor para ojo derecho">
                                        </div>
                                    </div
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="Ojo_Izquierdo" class="col-sm-2 col-form-label">Ojo_Izquierdo</label>
                                            <div class="col-sm-10">
                                                <input required type="text" class="Ojo_Izquierdo-control" id="Ojo_Izquierdo" name="Ojo_Izquierdo" value="<?= $DataExamenesHistorial->getOjo_Izquierdo(); ?>" placeholder="Ingrese valor para ojo izquierdo">
                                            </div>
                                        </div
                                        <form class="form-horizontal" method="post" id="frmEditExamenesHistorial" name="frmEditExamenesHistorial" action="../../../App/Controlador/ExamenesHistorialControlador.php?action=edit">
                                            <input id="id" name="id" value="<?php echo $DataExamenesHistorial->getId(); ?>" hidden required="required" type="text">
                                            <div class="form-group row">
                                                <label for="historial_idHistorial" class="col-sm-2 col-form-label">historial_idHistorial</label>
                                                <div class="col-sm-10">
                                                    <select id="historial_idHistorial" name="historial_idHistorial" class="custom-select">
                                                        <option <?= ($DataExamenesHistorial->gethistorial_idHistorial() == "") ? "selected":""; ?> value=""></option>
                                                        <option <?= ($DataExamenesHistorial->gethistorial_idHistorial() == "") ? "selected":""; ?> value=""></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info">Enviar</button>
                                                <a href="index.php" role="button" class="btn btn-default float-right">Cancelar</a>
                                            </div>
                                            <!-- /.card-footer -->
                                        </form>
                        <?php } else { ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                No se encontro ningun registro con estos parametros de
                                busqueda <?= ($_GET['mensaje']) ?? "" ?>
                            </div>
                        <?php } ?>
                    </p>
                <?php } ?>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php require('../../partials/footer.php'); ?>
</div>
<!-- ./wrapper -->
<?php require('../../partials/scripts.php'); ?>
</body>
</html>