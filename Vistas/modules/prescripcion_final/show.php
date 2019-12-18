<?php
require("../../partials/routes.php");
require("../../../App/Controlador/Prescripcionfinalcontrolador.php");

use App\Controlador\Prescripcionfinalcontroladorntrolador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Datos Prescripción final</title>
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
                        <h1>Información de la prescripción final</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= $baseURL; ?>/Vistas/">Optica Ocular Center</a></li>
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
                        Error al crear la prescripción final : <?= ($_GET['mensaje']) ?? "" ?>
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
                    $Dataprescripcionfinal = Prescripcionfinalcontrolador::searchForID($_GET["id"]);
                    if(!empty($Dataprescripcionfinal)){
                        ?>
                        <div class="card-header">
                            <h3 class="card-title"><?= $Dataprescripcionfinal->getDiagnosticoOI()  ?></h3>
                        </div>
                        <div class="card-body">
                            <p>
                                <strong><i class="fas fa-book mr-1"></i> Diagnostico ojo izquierdo </strong>
                            <p class="text-muted">
                                <?= $Dataprescripcionfinal->getDiagnosticoOI() ?>
                            </p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Diagnostico ojo derecho</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getDiagnosticoOD() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> AV- ojo derecho</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getAVOD() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> VL- ojo derecho</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getVLOD() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> AV- ojo izquierdo</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getAVOI() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> VL- ojo izquierdo</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getVLOI() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> VL- ojo derecho</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getVLOD() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> VP- ojo derecho</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getVPOD() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> VP- ojo izquierdo</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getVPOI() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> DNP- ojo derecho</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getDNPOD() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> DNP- ojo izquierdo</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getDNPOI() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> AB- ojo derecho</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getABOD() ?></p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> AB- ojo izquierdo</strong>
                            <p class="text-muted"><?= $Dataprescripcionfinal->getABOI() ?></p>
                            <hr>


                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-auto mr-auto">
                                    <a role="button" href="index.php" class="btn btn-success float-right" style="margin-right: 5px;">
                                        <i class="fas fa-tasks"></i> Gestionar prescripción final
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a role="button" href="create.php" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-plus"></i> Crear prescripción final
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
