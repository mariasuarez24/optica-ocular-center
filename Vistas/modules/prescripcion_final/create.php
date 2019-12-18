<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Examen</title>
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
                <form class="form-horizontal" method="post" id="frmCreateParametros" name="frmCreateParametros" action="../../../app/Controller/ParametrosController.php?action=create">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Diagnostico_OI" class="col-sm-2 col-form-label">Diagnostico ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese diagnostico ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Diagnostico_OD" class="col-sm-2 col-form-label">Diagnostico ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Diagnostico_OD" name="Diagnostico_OD" placeholder="Ingrese diagnostico ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="AV-OD" class="col-sm-2 col-form-label">AV- Ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="AV-OD" name="AV-OD" placeholder="Ingrese AV- ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VL-OD" class="col-sm-2 col-form-label">VL- Ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VL-OD" name="VL-OD" placeholder="Ingrese VL- ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="AV-OI" class="col-sm-2 col-form-label">AV- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="AV-OI" name="AV-OI" placeholder="Ingrese AV ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VL-OI" class="col-sm-2 col-form-label">VL- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VL-OI" name="VL-OI" placeholder="Ingrese VL ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VP-OD" class="col-sm-2 col-form-label">VP- Ojo derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VP-OD" name="VP-OD" placeholder="Ingrese VP ojo derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VP-OI" class="col-sm-2 col-form-label">VP- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VP-OI" name="VP-OI" placeholder="Ingrese VP ojo izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="VP-OI" class="col-sm-2 col-form-label">VP- Ojo izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="VP-OI" name="VP-OI" placeholder="Ingrese VP ojo izquierdo">
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
