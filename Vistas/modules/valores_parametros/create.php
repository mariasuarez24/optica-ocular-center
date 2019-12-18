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
                        <h1>Valores Parametros</h1>
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
                    <h3 class="card-title">Valores Parametros</h3>
                </div>
                <!-- /.card-header -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <!-- form start -->
                        <div class="form-group row">
                            <label for="Examenes_idExamenes" class="col-sm-2 col-form-label">Id examenes</label>
                            <div class="col-sm-10">
                                <select id="Examenes_idExamenes" name="Examenes_idExamenes" class="custom-select">
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="Parametros_idParametros" class="col-sm-2 col-form-label">Id parametros</label>
                        <div class="col-sm-10">
                            <select id="Parametros_idParametros" name="Parametros_idParametros"
                                    class="custom-select">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Ojo_derecho" class="col-sm-2 col-form-label">Ojo derecho</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="Ojo_derecho" name="Ojo_derecho"
                                   placeholder="Ingrese dato ojo derecho">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Ojo_izquierdo" class="col-sm-2 col-form-label">Ojo izquierdo</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="Ojo_izquierdo" name="Ojo_izquierdo"
                                   placeholder="Ingrese dato ojo izquierdo">
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Enviar</button>
                        <button type="submit" class="btn btn-default float-right">Cancelar</button>
                    </div>
                </form>
                    <!-- /.card-footer -->
            </div>
        </section>
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
