<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear nueva cita</title>
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
                        <h1>Crear una nueva cita </h1>
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
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Informacion de la cita</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
                            <div class="col-sm-10">
                                <input required type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hora" class="col-sm-2 col-form-label">Hora</label>
                            <div class="col-sm-10">
                                <input required type="time" class="form-control" id="hora" name="hora" placeholder="Ingrese la hora">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="duracion" class="col-sm-2 col-form-label">Duracion</label>
                            <div class="col-sm-10">
                                <input required type="time" class="form-control" id="duracion" name="duracion" placeholder="Ingrese la duracion">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="documento" class="col-sm-2 col-form-label">Estado </label>
                            <div class="col-sm-10">
                                <input required type="text" max="11" min="7" class="form-control" id="estado" name="estado" placeholder="Ingrese su estado ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="motivos_consulta_idMotivos_consulta" class="col-sm-2 col-form-label">Motivos de Consulta</label>
                            <div class="col-sm-10">
                                <select id="motivos_consulta_idMotivos_consulta" name="motivos_consulta_idMotivos_consulta" class="custom-select">
                                    <option value="C.C"></option>
                                    <option value="T.I"></option>
                                    <option value="R.C"></option>
                                    <option value="Pasaporte"></option>
                                    <option value="C.E"></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="paciente_idPaciente" class="col-sm-2 col-form-label">ID Paciente</label>
                            <div class="col-sm-10">
                                <select id="paciente_idPaciente" name="paciente_idPaciente" class="custom-select">
                                    <option value="C.C"></option>
                                    <option value="T.I"></option>
                                    <option value="R.C"></option>
                                    <option value="Pasaporte"></option>
                                    <option value="C.E"></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Medico_idMedico" class="col-sm-2 col-form-label">ID Medico</label>
                            <div class="col-sm-10">
                                <select id="Medico_idMedico" name="Medico_idMedico" class="custom-select">
                                    <option value="C.C"></option>
                                    <option value="T.I"></option>
                                    <option value="R.C"></option>
                                    <option value="Pasaporte"></option>
                                    <option value="C.E"></option>
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

