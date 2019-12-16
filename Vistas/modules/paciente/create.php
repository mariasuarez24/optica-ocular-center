<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear nuevo paciente</title>
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
                        <h1>Crear un Nuevo paciente </h1>
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
                <?php if ($_GET['respuesta'] != "correcto"){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                        Error al crear el paciente: <?= $_GET['mensaje'] ?>
                    </div>
                <?php } ?>
            <?php } ?>
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos del Paciente</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" id="frmcreatepaciente" name="frmcreatepaciente" action="../../../App/Controlador/pacientecontrolador.php?action=create">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombres" class="col-sm-2 col-form-label">Ocupacion</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ingrese su ocupacion">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidos" class="col-sm-2 col-form-label">Estado Civil</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder="Ingrese su estado civil">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellidos" class="col-sm-2 col-form-label">Tipo de Afiliacion</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="tipo_afiliacion" name="tipo_afiliacion" placeholder="Ingrese el tipo de afiliacion">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="documento" class="col-sm-2 col-form-label">Fecha ultima Cita </label>
                            <div class="col-sm-10">
                                <input required type="date" max="11" min="7" class="form-control" id="fecha_ultima_cita" name="fecha_ultima_cita" placeholder="Ingrese la fecha de la ultima cita">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="acudiente_idAcudiente" class="col-sm-2 col-form-label">ID Acudiente</label>
                            <div class="col-sm-10">
                                <input required type="text" max="11" min="7" class="form-control" id="acudiente_idAcudiente" name="acudiente_idAcudiente" placeholder="Ingrese el Id del acudiente">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_documento" class="col-sm-2 col-form-label">Tipo Documento</label>
                            <div class="col-sm-10">
                                <select id="tipo_documento" name="tipo_documento" class="custom-select">
                                    <option value=""></option>
                                    <option value="C.C">Cedula de ciudadania</option>
                                    <option value="T.I">Targeta de identidad </option>
                                    <option value="R.C">Registro Civil</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="C.E">Cedula de Extrangeria</option>
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
