<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="shortcut icon" type="image/jpg" href="<?php echo SERVERURL ?>assets/imag/favicon.ico" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo SERVERURL ?>/view/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo SERVERURL?>view/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo SERVERURL?>view/assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo SERVERURL?>view/assets/css/navbar.css">

  <title>Repostitorio - ISTS</title>
</head>
<!-- <header>
    <div class="header-wrapper">
        <div class="logo">
            <a title="Home" href="#">
                <img style="height: 100px;" src="<?php echo SERVERURL ?>/view/assets/img/logotipo.png" alt="Logo">
            </a>
        </div>

    </div>
</header> -->

<body>

  <?php
  require_once "./controller/vista.controlador.php";
  $vt = new VistaControlador();
  $vistas = $vt->CtrMostrarVistas();
  if ($vistas == "404") {
    require_once "./view/contenido/404-view.php";
  } else {
    // include 'modulos/navbar.php';
    // if ($vistas == "home") {
    //    require_once "./view/contenido/home-view.php";
    //     
    // } else {
    //     require_once $vistas;
    // }

    // include 'modulos/footer.php';
    // include 'modulos/scripts.php';
    require_once "./view/contenido/home-view.php";
    include "./view/modulos/scripts.php";
  }
  ?>
</body>

</html>