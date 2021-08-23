<?php
require_once './core/configGeneral.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php echo SERVERURL ?>administracion/view-admin/assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Administración</title>

</head>

<body class="sb-nav-fixed">
    <?php
    require_once "./administracion/controller-admin/vista.controlador.php";
    $vt = new VistaControladorAdm();
    $vistas = $vt->CtrMostrarVistas();
    if ($vistas == "login" || $vistas == "404") {
        if ($vistas == "login") {
            include "./administracion/view-admin/contenido/login-view.php";
        }elseif ($vistas == "404") {
            include "./administracion/view-admin/contenido/404-view.php";
           
        }
    } else {
    ?>
        <?php include 'modulos/navbar.php'; ?>
        

            <?php require_once $vistas; ?>


            <!-- <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a> -->

        

        <!--====== Scripts -->
        <?php include 'modulos/scripts.php'; ?>

    <?php
    }
    ?>
</body>

</html>