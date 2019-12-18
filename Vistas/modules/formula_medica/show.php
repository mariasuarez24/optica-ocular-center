<?php
require("../../partials/routes.php");
require("../../../App/Controlador/FormulaMedicaControlador.php");

use App\Controlador\FormulaMedicaControlador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Datos de la Formula Medica</title>
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
                        <h1>Informacion de la Formula Medica</h1>
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
                            Error al consultar el motivo de consulta: <?= ($_GET['mensaje']) ?? "" ?>
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
                <?php if(!empty($_GET["idFormulamedica"]) && isset($_GET["idFormulamedica"])){
                    $DataFormulamedica = FormulaMedicaControlador::searchForID($_GET["idFormulamedica"]);
                    if(!empty($DataFormulamedica)){
                ?>
                <div class="card-header">
                    <h3 class="card-title"><?= $DataFormulamedica->getFecha()  ?></h3>
                </div>
                <div class="card-body">
                    <p>
                        <strong><i class="fas fa-book mr-1"></i> idFormulamedica</strong>
                    <p class="text-muted">
                        <?= $DataFormulamedica->getDescripcion()." ".$DataFormulamedica->getDescripcion() ?>
                    </p>
                    <hr>
                    <strong><i class="fas fa-user mr-1"></i> getDescripcion</strong>
                    <p class="text-muted"><?= $DataFormulamedica->getDescripcion().": ".$DataFormulamedica->getDescripcion() ?></p>
                    </p>

                </div>
                        <strong><i class="fas fa-book mr-1"></i> idFormulamedica</strong>
                        <p class="text-muted">
                            <?= $DataFormulamedica->getPrescripcion_IdPrescripcion_final()." ".$DataFormulamedica->getPrescripcion_IdPrescripcion_final() ?>
                        </p>
                        <hr>
                        <strong><i class="fas fa-user mr-1"></i> Prescripcion_IdPrescripcion_final</strong>
                        <p class="text-muted"><?= $DataFormulamedica->getPrescripcion_IdPrescripcion_final().": ".$DataFormulamedica->getPrescripcion_IdPrescripcion_final() ?></p>
                    </p>

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-auto mr-auto">
                            <a role="button" href="index.php" class="btn btn-success float-right" style="margin-right: 5px;">
                                <i class="fas fa-tasks"></i> Gestionar Formula Medica
                            </a>
                        </div>
                        <div class="col-auto">
                            <a role="button" href="create.php" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-plus"></i> Crear Formula Medica
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
sss