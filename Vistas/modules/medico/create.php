<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Medico</title>
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
                        <h1>Medico</h1>
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
                    <h3 class="card-title">Medico</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Especializacion" class="col-sm-2 col-form-label">Especializacion</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Especializacion" name="Especializacion" placeholder="Ingrese Especializacion">
                                    </div>
                                </div>
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Licencia" class="col-sm-2 col-form-label">Licencia</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control" id="Licencia" name="Licencia" placeholder="Ingrese Licencia">
                                    </div>
                                </div>

                    <div class="form-group row">
                        <label for="persona_id_persona" class="col-sm-2 col-form-label">persona_id_persona</label>
                        <div class="col-sm-10">
                            <select id="persona_id_persona" name="persona_id_persona" class="custom-select">
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