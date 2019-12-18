<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear Persona</title>
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
                        <h1>Crear una Nueva Persona</h1>
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
            
            <?php if(!empty($_GET['respuesta'])){ ?>
                <?php if ($_GET['respuesta'] != "correcto"){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                        Error al crear el usuario: <?= $_GET['mensaje'] ?>
                    </div>
                <?php } ?>
            <?php } ?>

            
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Persona</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" id="frmCreatepersona" name="frmCreatepersona" action="../../../App/Controlador/personacontrolador.php?action=create">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese sus nombres">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo_documento" class="col-sm-2 col-form-label">Tipo Documento</label>
                            <div class="col-sm-10">
                                <select id="tipo_documento" name="tipo_documento" class="custom-select">
                                    <option value="TARJETA DE IDENTIDAD">Tarjeta de Identidad</option>
                                    <option value="CEDULA DE CIUDADANIA">Cedula de Ciudadania</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="numero_documento" class="col-sm-2 col-form-label">Documento</label>
                            <div class="col-sm-10">
                                <input required type="number" maxlength="10" class="form-control" id="numero_documento" name="numero_documento" placeholder="Ingrese su documento">
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingrese su ciudad">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="genero" class="col-sm-2 col-form-label">Genero</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="genero" name="genero" placeholder="Ingrese su genero">
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                                <input required type="number" maxlength="10" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su telefono">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="email" name="email" placeholder="Ingrese su email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-sm-2 col-form-label">direccion</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha nacimiento</label for="fecha_nacimiento">
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" id="fecha_nacimiento" name="fecha_nacimiento" im-insert="false">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rol" class="col-sm-2 col-form-label">Rol</label>
                            <div class="col-sm-10">
                                <select id="rol" name="rol" class="custom-select">
                                    <option value="">Medico</option>
                                    <option value="">Secretaria</option>
                                    <option value="">Paciente</option>
                                    <option value="">Administrador</option>
                                </select>
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