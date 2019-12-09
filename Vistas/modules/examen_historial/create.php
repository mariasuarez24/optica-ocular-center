<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Examen_Historial</title>
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
                        <h1>Examenes_historial</h1>
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
                    <h3 class="card-title">Examenes_Historial</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                        <div class="form-group row">
                            <label for="Valores_Parametros_id_ValoresParametros" class="col-sm-2 col-form-label">Valores_Parametros_id_ValoresParametros</label>
                            <div class="col-sm-10">
                                <select id="Estado" name="Estado" class="custom-select">
                                    <option value=""></option>
                                    <option value=""></option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Ojo Derecho" class="col-sm-2 col-form-label">Ojo Derecho</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Ojo Derecho" name="Ojo Derecho" placeholder="Ingrese valor Ojo Derecho">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Ojo Izquierdo" class="col-sm-2 col-form-label">Ojo Izquierdo</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Ojo Izquierdo" name="Ojo Izquierdo" placeholder="Ingrese valor Ojo Izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Historial_id_Historial" class="col-sm-2 col-form-label">Historial_id_Historial</label>
                            <div class="col-sm-10">
                                <select id="Historial_id_Historial" name="Historial_id_Historial" class="custom-select">
                                    <option value=""></option>
                                    <option value=""></option>

                                </select>
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
