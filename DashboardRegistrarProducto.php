<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>ESCOINFER ESCOBILLAS</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="Asset/css/Dashboard/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="Asset/css/Dashboard/style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="Asset/css/Dashboard/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="Asset/css/Dashboard/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="Asset/css/Dashboard/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="Asset/css/Dashboard/custom.css" />
   <script src="https://kit.fontawesome.com/4cc7d63c22.js" crossorigin="anonymous"></script>
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="Dashboard.php"><img class="logo_icon img-responsive" src="./Asset/img/usuario.png"
                           alt="#" /></a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <div class="logo_img"><img class="img-responsive" src="./Asset/img/logo.png" alt="#" />
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <h4>General</h4>
               <ul class="list-unstyled components">
                  <li class="active">
         
                   
                  </li>
                  <li><a href="View/Producto/listar.php"><i class="fa fa-clock-o orange_color"></i> <span>Productos</span></a></li>
                   <li><a href="View/Cliente/ListarCliente.php"><i class="fa fa-clock-o orange_color"></i> <span>Clientes</span></a></li>
               
                  <li><a href="View/Empleado/ListarEmpleado.php"><i class="fa fa-clock-o orange_color"></i> <span>Empleados</span></a></li>
                  <li><a href="View/Venta/ListarVenta.php"><i class="fa fa-clock-o orange_color"></i> <span>Ventas</span></a></li>
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                           class="fa fa-bars"></i></button>
                     
                     <div class="right_topbar">
                        <div class="icon_info">
                           <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></a></li>
                           </ul>
                           <ul class="user_profile_dd">
                              <li>
                                    <a class="dropdown-item" href="index.php"><i class="fa fa-sign-out"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <h2>Dashboard</h2>
                        </div>
                     </div>
               </div>
                  <!-- graph -->






<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="../../Controller/Producto/registrarProductoController.php">
		<input type="hidden">
		<label for="Id_Producto">Id:</label>
		<input class="form-control" name="Id_Producto" required type="text" id="Id_Producto" placeholder="Escribe el código">

		<label for="Nombre_Producto">Nombre:</label>
		<input required id="Nombre" name="Nombre_Producto" cols="30" rows="Nombre_Producto" class="form-control"></input>

		<label for="Precio_Producto">Precio:</label>
		<input class="form-control" name="Precio_Producto" required type="number" id="Precio_Producto" placeholder="Ingresa el precio">

		<label for="Cantidad_Producto">Cantidad:</label>
		<input class="form-control" name="Cantidad_Producto" required type="number" id="Cantidad_Producto" placeholder="Ingresa la cantidad">

		<label for="Marca_Producto">Marca:</label>
		<input class="form-control" name="Marca_Producto" required type="text" id="Marca_Producto" placeholder="Ingresa la marca">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>

			</tbody>
		</table>
	</div>

                  
                                          </div>
                                          <!-- Carousel controls -->
                                          <a class="carousel-control left carousel-control-prev"
                                             href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                          </a>
                                          <a class="carousel-control right carousel-control-next"
                                             href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  
                     
               <!-- footer -->
               <div class="container-fluid">
                  <div class="footer">
                     <p>Copyright © 2022 Paula Valbuena<br><br>
                     </p>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="Asset/js/jquery.min.js"></script>
   <script src="Asset/js/Dashboard/popper.min.js"></script>
   <script src="Asset/js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="Asset/js/Dashboard/animate.js"></script>
   <!-- select country -->
   <script src="Asset/js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="Asset/js/Dashboard/owl.carousel.js"></script>
   <!-- chart js -->
   <script src="Asset/js/Dashboard/Chart.min.js"></script>
   <script src="Asset/js/Dashboard/Chart.bundle.min.js"></script>
   <script src="Asset/js/Dashboard/utils.js"></script>
   <script src="Asset/js/Dashboard/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="Asset/js/Dashboard/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="Asset/js/Dashboard/custom.js"></script>
   <script src="Asset/js/Dashboard/chart_custom_style1.js"></script>
</body>

</html>