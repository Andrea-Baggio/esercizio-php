<!DOCTYPE html>
<html lang="en">

<?php
    include 'setting.php';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "<script>console.log('Connected successfully.');</script>";
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aziende</title>

    <!-- adminlte css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- bootstrap 4.6 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
</head>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
    <nav class="navbar navbar-expand navbar-light">
        <li class="nav-item d-none d-sm-inline-block">
            <h4><a href="index.php" class="nav-link">Aziende</a></h4>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="create.php" class="nav-link">Create</a>
        </li>
        </ul>
    </nav><!-- /.navbar -->


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>