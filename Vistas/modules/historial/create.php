<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear nuevo Historial</title>
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
                        <h1>Crear un Nuevo Historial </h1>
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
                    <h3 class="card-title">Datos del Paciente</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Codg_Rips" class="col-sm-2 col-form-label">Codigo Rips</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Codg_Rips" name="Codg_Rips" placeholder="Ingrese el codigo Rips">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Conducta" class="col-sm-2 col-form-label">Conducta</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Conducta" name="Conducta" placeholder="Ingrese conducta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Control" class="col-sm-2 col-form-label">Control</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Control" name="Control" placeholder="Ingrese control">
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="Citas_idCitas" class="col-sm-2 col-form-label">ID Citas</label>
                            <div class="col-sm-10">
                                <select id="Citas_idCitas" name="Citas_idCitas" class="custom-select">
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
                            <label for="Diagnostico" class="col-sm-2 col-form-label">Diagnostico</label>
                            <div class="col-sm-10">
                                <select id="Diagnostico" name="Diagnostico" class="custom-select">
                                    <option value="C.C"></option>
                                    <option value="T.I"></option>
                                    <option value="R.C"></option>
                                    <option value="Pasaporte"></option>
                                    <option value="C.E"></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Anamnesis" class="col-sm-2 col-form-label">Anamnesis</label>
                            <div class="col-sm-10">
                                <select id="Anamnesis" name="Anamnesis" class="custom-select">
                                    <option value="Alergias"></option>
                                    <option value="Alergias">Alergias</option>
                                    <option value="Historial Familiar">Historial Familiar</option>
                                    <option value="Control Medico">Control Medico</option>
                                    <option value="Medicaciones ">Medicaciones</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Antecedentes" class="col-sm-2 col-form-label">Antecedentes</label>
                            <div class="col-sm-10">
                                <select id="Antecedentes" name="Antecedentes" class="custom-select">
                                    <option value="Alergias"></option>
                                    <option value="Familiares">Familiares</option>
                                    <option value="Miopia">Miopia</option>
                                    <option value="Astigmatismo">Astigmatismo</option>


                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Prescripcion_idPrescripcion_final" class="col-sm-2 col-form-label">ID Prescripcion</label>
                            <div class="col-sm-10">
                                <select id="Prescripcion_idPrescripcion_final" name="Prescripcion_idPrescripcion_final" class="custom-select">
                                    <option value="Alergias"></option>
                                    <option value="Familiares"></option>
                                    <option value="Miopia"></option>
                                    <option value="Astigmatismo"></option>


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

