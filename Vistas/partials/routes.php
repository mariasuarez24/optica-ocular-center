<?php
    $basePath = realpath($_SERVER["DOCUMENT_ROOT"])."\\optica-ocular-center\\";
    require($basePath.'vendor\\autoload.php');
    $dotenv = Dotenv\Dotenv::create($basePath);
    $dotenv->load();

    $baseURL = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".getenv('ROOT_FOLDER');
    $adminlteURL = $baseURL."/vendor/almasaeed2010/adminlte";
?>


