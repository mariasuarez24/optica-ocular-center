<?php require("../../partials/routes.php");
require("../../../App/Controlador/Valoresparametroscontrolador.php");

use App\Controlador\Valoresparametroscontrolador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Editar Parametro</title>
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
                        <h1>Editar Nuevo Parametro</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= $baseURL; ?>/Vistas/">Optica ocular center </a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <?php if (!empty($_GET['respuesta'])) { ?>
                <?php if ($_GET['respuesta'] == "error") { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                        Error al crear el Parametro: <?= ($_GET['mensaje']) ?? "" ?>
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
                    <h3 class="card-title">Horizontal Form</h3>
                </div>
                <!-- /.card-header -->
                <?php if (!empty($_GET["id"]) && isset($_GET["id"])) { ?>
                    <p>
                    <?php
                    $DataValoresparametros = \App\Controlador\Valoresparametroscontrolador::searchForID($_GET["id"]);
                    if (!empty($DataValoresparametros)) {
                        ?>
                        <!-- form start -->
                        <form class="form-horizontal" method="post" id="frmEditValoresparametros" name="frmEditValoresparametros"
                              action="../../../App/Controlador/Valoresparametroscontrolador.php?action=edit">
                            <input id="idValoresParametros" name="idValoresParametros" value="<?php echo $DataValoresparametros->getIdValoresParametros(); ?>" hidden
                                   required="required" type="text">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Examenes_idExamenes" class="col-sm-2 col-form-label">Examenes_idExamenes</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control" id="Examenes_idExamenes" name="Examenes_idExamenes"
                                               value="<?= $DataValoresparametros->getIdExamenes(); ?>"
                                               placeholder="Ingrese el IdExamenes">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Parametros_idParametros" class="col-sm-2 col-form-label">Parametros_idParametros</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control" id="Parametros_idParametros" name="Parametros_idParametros"
                                               value="<?= $DataValoresparametros->getIdParametros(); ?>"

                                               placeholder="Ingrese el IdParametros">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Ojo_derecho" class="col-sm-2 col-form-label">Ojo_derecho</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control" id="Ojo_derecho" name="Ojo_derecho"
                                               value="<?= $DataValoresparametros->getOjoDerecho(); ?>"

                                               placeholder="Ingrese descripción ojo derecho">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Ojo_izquierdo" class="col-sm-2 col-form-label">Ojo_izquierdo</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control" id="Ojo_izquierdo" name="Ojo_izquierdo"
                                               value="<?= $DataValoresparametros->getOjoIzquierdo(); ?>"

                                               placeholder="Ingrese descripción ojo Izquierdo">
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

