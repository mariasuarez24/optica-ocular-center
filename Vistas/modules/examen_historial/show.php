<?php
require("../../partials/routes.php");
require("../../../App/Controlador/ExamenesHistorialControlador.php");

use App\Controlador\ExamenesHistorialControlador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Datos de examenes historial</title>
    <?php require("../../partials/head_imports.php"); ?>
</head>
<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">
    <?php require("../../partials/navbar_customization.php"); ?>

    <?php require("../../partials/sliderbar_main_menu.php"); ?>
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
                        <h1>Informacion de examenes historial</h1>
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
                            Error al consultar examenes historial: <?= ($_GET['mensaje']) ?? "" ?>
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
                <?php if(!empty($_GET["id"]) && isset($_GET["id"])){
                    $DataExamenesHistorial= ExamenesHistorialControlador::searchForID($_GET["id"]);
                    if(!empty($DataExamenesHistorial)){
                ?>
                <div class="card-header">
                    <h3 class="card-title"><?= $DataExamenesHistorial->getOjo_Derecho()  ?></h3>
                </div>
                <div class="card-body">
                    <p>
                        <strong><i class="fas fa-book mr-1"></i> Ojo_Derecho</strong>
                        <p class="text-muted">
                            <?= $DataExamenesHistorial->getOjo_Derecho() ?>
                        </p>
                        <hr>
                        <strong><i class="fas fa-user mr-1"></i> Ojo_Izquierdo</strong>
                        <p class="text-muted"><?= $DataExamenesHistorial->getOjo_Izquierdo()?></p>
                    </p>

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-auto mr-auto">
                            <a role="button" href="index.php" class="btn btn-success float-right" style="margin-right: 5px;">
                                <i class="fas fa-tasks"></i> Gestionar Examenes Historial
                            </a>
                        </div>
                        <div class="col-auto">
                            <a role="button" href="create.php" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-plus"></i> Crear Examenes Historial
                            </a>
                        </div>
                    </div>
                </div>
                    <?php }else{ ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            No se encontro ningun registro con estos parametros de busqueda <?= ($_GET['mensaje']) ?? "" ?>
                        </div>
                    <?php }
                } ?>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
        <!-- /.content-wrapper -->

        <?php require ('../../partials/footer.php');?>
    </div>
    <!-- ./wrapper -->
    <?php require ('../../partials/scripts.php');?>
</body>
</html>





</html>
