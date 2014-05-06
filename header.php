<?php
require_once './config.php';
require_once './medoo.min.php';
require_once './user.php';
session_start();

$db = new medoo(array(
    'database_type' => 'mysql',
    'database_name' => Config::dbname,
    'server' => Config::dbhost,
    'username' => Config::dbuser,
    'password' => Config::dbpassword,
    'port' => 3306,
    'charset' => 'utf8'
        ));
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <base href="<?php echo Config::baseHref; ?>" >
        <title>ez-notes</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>

        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>