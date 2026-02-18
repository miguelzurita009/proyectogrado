<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Duralux || Dashboard</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="vistas/assets/images/favicon.ico" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="vistas/assets/css/bootstrap.min.css" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="vistas/assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="vistas/assets/vendors/css/daterangepicker.min.css" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="vistas/assets/css/theme.min.css" />
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>

    <?php
    if (isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == "ok") {
    
    //<!--! ================================================================ !-->
    //<!--! [Start] Navigation Manu !-->
    //<!--! ================================================================ !-->
          include "modulos/menu.php";   
    //<!--! ================================================================ !-->
    //<!--! [End]  Navigation Manu !-->
    //<!--! ================================================================ !-->
    //<!--! ================================================================ !-->
    //<!--! [Start] Header !-->
    //<!--! ================================================================ !-->
           include "modulos/header.php";    
    //<!--! ================================================================ !-->
    //<!--! [End] Header !-->
    //<!--! ================================================================ !-->
    //<!--! ================================================================ !-->
    //<!--! [Start] Main Content !-->
    //<!--! ================================================================ !-->
        echo '<main class="nxl-container">';
        echo '<div class="nxl-content">';
            //<!-- [ page-header ] start -->

      if (isset($_GET["ruta"])) {
        if ($_GET["ruta"]=="inicio"||
            $_GET["ruta"]=="usuarios"||
            $_GET["ruta"]=="categorias"||
            $_GET["ruta"]=="productos"||
            $_GET["ruta"]=="clientes"||
            $_GET["ruta"]=="ventas"||
            $_GET["ruta"]=="reportes"||
            $_GET["ruta"]=="salir") {
              include "modulos/".$_GET["ruta"].".php";
            } 
            else {
              include "modulos/404.php";
            }
      }
      else
        {

        include "modulos/inicio.php"; 
        }

        echo '</div>';
        //<!-- [ Footer ] start -->
        include "modulos/footer.php";  
        //<!-- [ Footer ] end -->
        echo '</main>';
    }else {
      include "modulos/login.php";
    }
    ?> 
    

    
          
            <!-- [ Main Content ] end -->

    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Theme Customizer !-->
    <!--! ================================================================ !-->
   
    <!--! ================================================================ !-->
    <!--! [End] Theme Customizer !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="vistas/assets/vendors/js/vendors.min.js"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="vistas/assets/vendors/js/daterangepicker.min.js"></script>
    <script src="vistas/assets/vendors/js/apexcharts.min.js"></script>
    <script src="vistas/assets/vendors/js/circle-progress.min.js"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="vistas/assets/js/common-init.min.js"></script>
    <script src="vistas/assets/js/dashboard-init.min.js"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="vistas/assets/js/theme-customizer-init.min.js"></script>
    <!--! END: Theme Customizer !-->
</body>

</html>