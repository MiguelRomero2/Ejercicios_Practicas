
<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Registro de Auto</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">

  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" href="lib/xchart/xcharts.css">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">



  <script src="lib/chart-master/Chart.js"></script>



</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b><span>DESA</span>RROLLO<span> WEB</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start --> 
        <ul class="nav top-menu">
          <!-- settings start -->
         

    
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
      
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->


   
   
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="img/Romero.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"> Miguel Romero</h5>
          <h5 class="centered">
        
          
          
          
    
        
        </h5> 
        
     



        <li class="mt">
<a href="cliente.php">
  <i class="fa fa-user"></i>
  <span>Cliente</span>
  </a>
  <ul class="sub">
    <li>
     <a href="listado_clientes.php">Listado de clientes</a>
    </li>
  </ul>
 </li>

<li class="mt">
<a class="active" href="auto.php">
  <i class="fa fa-car"></i>
  <span>Auto</span>
  </a>
  <ul class="sub">
    <li>
      <a href="listado_autos.php"> Listado Autos</a>
    </li>
  </ul>
</li>

<li class="mt">
<a href="auto2.php">
  <i class="fa fa-car"></i>
  <span>Auto 2</span>
  </a>
</li>

<li class="mt">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Tablas</span>
              </a>
            <ul class="sub">
              <li>
                <a href="listado_clientes.php">Listado de clientes</a>
              </li>
        
              <li>
                <a href="listado_autos.php">Listado de autos</a>
              </li>
            </ul>
          </li>
        </ul>

        <li class="mt">
<a href="formulario_complejo.php">
  <i class="fa fa-user"></i>
  <span>Formulario Complejo</span>
  </a>
</li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->


    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-car"></i> Registrar auto</h3>
        <!-- BASIC FORM ELELEMNTS -->

        <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Información del auto</h4>


<!----------------------------- AQUÍ DEBES COLOCAR TU FORMULARIO ------------------------------->
  <form role="form" class="form-horizontal" method="get" action="auto_database.php">
    <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-car"></i>  Marca </label>
        <div class="col-lg-8">
        <input type="text" placeholder="Marca del Auto" name="marca" id="marca" class="form-control" value="" required>
        </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-desktop"></i>  Placa </label>
        <div class="col-lg-8">
        <input type="number" placeholder="Numero de placa" name="placa" id="Numero de Placa" class="form-control" value="" required>
        </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-calendar"></i>  Año </label>
        <div class="col-lg-8">
        <input type="number" placeholder="Año " name="año" id="Año" class="form-control" value="" required>
        </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-plane"></i>  País </label>
        <div class="col-lg-8">
        <input type="text" placeholder="País" name="aís" id="Paísmarca" class="form-control" value="" required>
        </div>
       </div>
          <br>
       <div class="form-group">
        <div class="col-lg-offset-2 col-lg-12">
        <button class="btn btn-theme" type="submit">Registrar Auto</button>
        </div>
        </div>
  </form>


<!----------------------------------------------------------------------------------------->
                 
                      </div>


                   


          </div>


      

        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>

  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>
  <script type="text/javascript" src="js/md5.min.js"></script>

  <script>
 
</script>


</body>

</html>
