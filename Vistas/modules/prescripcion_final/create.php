<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Motivos Consulta</title>
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
                        <h1>Prescripcion Final</h1>
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
                    <h3 class="card-title">Prescripcion Final</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="OD" class="col-sm-2 col-form-label">OD</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="OD" name="OD" placeholder="Ingrese dato Ojo Derecho">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="OI" class="col-sm-2 col-form-label">OI</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="OI" name="OI" placeholder="Ingrese dato Ojo Izquierdo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo_documento" class="col-sm-2 col-form-label">Tipo Documento</label>
                            <div class="col-sm-10">
                                <select id="tipo_documento" name="tipo_documento" class="custom-select">
                                    <option value="C.C">Cedula de Ciudadania</option>
                                    <option value="T.I">Tarjeta de Identidad</option>
                                    <option value="R.C">Registro Civil</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="C.E">Cedula de Extranjeria</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="documento" class="col-sm-2 col-form-label">Documento</label>
                            <div class="col-sm-10">
                                <input required type="number" max="11" min="7" class="form-control" id="documento" name="documento" placeholder="Ingrese su documento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                                <input required type="number" max="11" min="6" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su telefono">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion">
                            </div>
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