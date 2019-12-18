<?php
require("../../partials/routes.php");
require("../../../App/Controlador/FormulaMedicaControlador.php");

use App\Controlador\FormulaMedicaControlador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Editar Formula Medica</title>
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
                        <h1>Editar Nueva Formula Medica</h1>
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
                        Error al crear el motivo de consulta: <?= ($_GET['mensaje']) ?? "" ?>
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
                    <h3 class="card-title">Motivos Consulta</h3>
                </div>
                <!-- /.card-header -->
                <?php if(!empty($_GET["idFormulamedica"]) && isset($_GET["idFormulamedica"])){ ?>
                <p>
                    <?php
                    $DataFormulaMedica = FormulaMedicaControlador::searchForID($_GET["idFormulamedica"]);
                    if(!empty($DataMotivoConsulta)){
                    ?>

                    <!-- form start -->
                            <form class="form-horizontal" method="post" id="frmEditFormulaMedica" name="frmEditFormulaMedica" action="../../../app/Controlador/FormulaMedicaControlador.php?action=edit">
                                <input id="id" name="id" value="<?php echo $DataFormulaMedica->getidFormulamedica(); ?>" hidden required="required" type="text">
                                    <div class="form-group row">
                                        <label for="Fecha" class="col-sm-2 col-form-label">Fecha</label for="Fecha">
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" id="Fecha" name="Fecha" im-insert="false">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="Descripcion" name="Descripcion" value="<?= $DataFormulaMedica->getDescripcion(); ?>" placeholder="Ingrese su descripcion">
                                        </div>
                                    </div
                                    <div class="form-group row">
                                        <label for="Prescripcion_IdPrescripcion_final" class="col-sm-2 col-form-label">Prescripcion_IdPrescripcion_final</label>
                                        <div class="col-sm-10">
                                            <select id="Prescripcion_IdPrescripcion_final" name="Prescripcion_IdPrescripcion_final" class="custom-select">
                                                <option <?= ($DataFormulaMedica->getPrescripcion_IdPrescripcion_final() == "") ? "selected":""; ?> value=""></option>
                                                <option <?= ($DataFormulaMedica->getPrescripcion_IdPrescripcion_final() == "") ? "selected":""; ?> value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
        <!-- /.card-footer -->
            </section>
        <?php }else{ ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                No se encontro ningun registro con estos parametros de busqueda <?= ($_GET['mensaje']) ?? "" ?>
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

<?php require ('../../partials/footer.php');?>
</div>
<!-- ./wrapper -->
<?php require ('../../partials/scripts.php');?>
</body>
</html>
