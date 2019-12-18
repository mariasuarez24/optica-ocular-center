<?php
require("../../partials/routes.php");
require("../../../App/controlador/personacontrolador.php");

use App\controlador\personacontrolador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Editar Persona</title>
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
                        <h1>Editar Nuevo persona</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= $baseURL; ?>/Views/">optica ocular center</a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <?php if(!empty($_GET['respuesta'])){ ?>
                <?php if ($_GET['respuesta'] == "error"){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            Error al crear el usuario: <?= ($_GET['mensaje']) ?? "" ?>
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
                <?php if(!empty($_GET["id"]) && isset($_GET["id"])){ ?>
                    <p>
                    <?php
                    $Datapersona = personacontrolador::searchForID($_GET["id"]);
                        if(!empty($DataUsuario)){
                    ?>
                            <!-- form start -->
                            <form class="form-horizontal" method="post" id="frmEditpersona" name="frmEditpersona" action="../../../App/controlador/personacontrolador.php?action=edit">
                                <input id="id" name="id" value="<?php echo $Datapersona->getIdPersona(); ?>" hidden required="required" type="text">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="nombres" name="nombres" value="<?= $Datapersona->getnombres(); ?>" placeholder="Ingrese sus nombres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $Datapersona->getApellidos(); ?>" placeholder="Ingrese sus apellidos">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="numero_documento" class="col-sm-2 col-form-label">numero_documento</label>
                                        <div class="col-sm-10">
                                            <input required type="number" minlength="6" class="form-control" id="numero_documento" name="numero_documento" value="<?= $Datapersona->getNumeroDocumento(); ?>" placeholder="Ingrese su documento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tipo_documento" class="col-sm-2 col-form-label">Tipo Documento</label>
                                        <div class="col-sm-10">
                                            <select id="tipo_documento" name="tipo_documento" class="custom-select">
                                                <option <?= ($Datapersona->getTipoDocumento() == "CEDULA DE CIUDADANIA") ? "selected":""; ?> value="C.C">Cedula de Ciudadania</option>
                                                <option <?= ($Datapersona->getTipoDocumento() == "TARJETA DE IDENTIDAD") ? "selected":""; ?> value="T.I">Tarjeta de Identidad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
                                        <div class="col-sm-10">
                                            <input required type="text"  class="form-control" id="ciudad" name="ciudad" value="<?= $Datapersona->getCiudad(); ?>" placeholder="Ingrese su ciudad">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="genero" class="col-sm-2 col-form-label">genero</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="genero" name="genero" value="<?= $Datapersona->getGenero(); ?>" placeholder="Ingrese su genero">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="email" name="email" value="<?= $Datapersona->getemail(); ?>" placeholder="Ingrese su email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm-2 col-form-label">telefono</label>
                                        <div class="col-sm-10">
                                            <input required type="number"  maxlength="10" class="form-control" id="telefono" name="telefono" value="<?= $Datapersona->getEmail(); ?>" placeholder="Ingrese su telefono">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                        <div class="col-sm-10">
                                            <select id="estado" name="estado" class="custom-select">
                                                <option <?= ($Datapersona->getEstado() == "Activo") ? "selected":""; ?> value="Activo">Activo</option>
                                                <option <?= ($Datapersona->getEstado() == "Inactivo") ? "selected":""; ?> value="Inactivo">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rol" class="col-sm-2 col-form-label">Rol</label>
                                        <div class="col-sm-10">
                                            <select id="rol" name="rol" class="custom-select">
                                                <option <?= ($Datapersona->getRol() == "Medico") ? "selected":""; ?> value="Empleado">Medico</option>
                                                <option <?= ($Datapersona->getRol() == "Secretaria") ? "selected":""; ?> value="Secretaria">Secretaria</option>
                                                <option <?= ($Datapersona->getRol() == "Paciente") ? "selected":""; ?> value="Paciente">Paciente</option>
                                                <option <?= ($Datapersona->getRol() == "Administrador") ? "selected":""; ?> value="Administrador">Administrador</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="direccion" class="col-sm-2 col-form-label">direccion</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="direccion" name="direccion" value="<?= $Datapersona->getDireccion(); ?>" placeholder="Ingrese su direccion">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fecha_nacimiento" class="col-sm-2 col-form-label">fecha_nacimiento</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?= $Datapersona->getFechaNacimiento(); ?>" placeholder="Ingrese su fecha_nacimiento">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Enviar</button>
                                    <a href="index.php" role="button" class="btn btn-default float-right">Cancelar</a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                    <?php }else{ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                No se encontro ningun registro con estos parametros de busqueda <?= ($_GET['mensaje']) ?? "" ?>
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

    <?php require ('../../partials/footer.php');?>
</div>
<!-- ./wrapper -->
<?php require ('../../partials/scripts.php');?>
</body>
</html>
