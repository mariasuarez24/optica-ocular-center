<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Prescripción Final</title>
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
                        <h1>Prescripción Final</h1>
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
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Prescripción Final</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" id="frmCreateParametros" name="frmCreateParametros" action="../../../App/Controlador/Prescripcionfinalcontrolador.php?action=create">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Diagnostico_OI" class="col-sm-2 col-form-label">Diagnostico ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Diagnostico_OI" name="Diagnostico_OI" placeholder="Ingrese diagnostico ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Diagnostico_OD" class="col-sm-2 col-form-label">Diagnostico ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Diagnostico_OD" name="Diagnostico_OD" placeholder="Ingrese diagnostico ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="AV_OD" class="col-sm-2 col-form-label">AV- Ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="AV_OD" name="AV_OD" placeholder="Ingrese AV- ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VL_OD" class="col-sm-2 col-form-label">VL- Ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VL_OD" name="VL_OD" placeholder="Ingrese VL- ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="AV_OI" class="col-sm-2 col-form-label">AV- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="AV_OI" name="AV_OI" placeholder="Ingrese AV- ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VL_OI" class="col-sm-2 col-form-label">VL- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VL_OI" name="VL_OI" placeholder="Ingrese VL- ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VP_OD" class="col-sm-2 col-form-label">VP- Ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VP_OD" name="VP_OD" placeholder="Ingrese VP- ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VP_OI" class="col-sm-2 col-form-label">VP- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VP_OI" name="VP_OI" placeholder="Ingrese VP- ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="DNP_OD" class="col-sm-2 col-form-label">DNP- Ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="DNP_OD" name="DNP_OD" placeholder="Ingrese DNP- ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="DNP_OI" class="col-sm-2 col-form-label">DNP- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="DNP_OI" name="DNP_OI" placeholder="Ingrese DNP- ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="AB_OD" class="col-sm-2 col-form-label">AB- Ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="AB_OD" name="AB_OD" placeholder="Ingrese AB- ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="AB_OI" class="col-sm-2 col-form-label">AB- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="AB_OI" name="AB_OI" placeholder="Ingrese AB- ojo izquierdo">
                            </div>
                        </div>


                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Enviar</button>
                            <button type="submit" class="btn btn-default float-right">Cancelar</button>
                        </div>
                        <!-- /.card-footer -->
                </form>
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
