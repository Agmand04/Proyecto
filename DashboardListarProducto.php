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





<?php
include_once "Model/base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM producto;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="DashboardRegistrarProducto.php">Nuevo<i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Marca</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->Id_Producto ?></td>
					<td><?php echo $producto->Nombre_Producto ?></td>
					<td><?php echo $producto->Precio_Producto ?></td>
					<td><?php echo $producto->Cantidad_Producto ?></td>
					<td><?php echo $producto->Marca_Producto ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->Id_Producto?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->Id_Producto?>"><i class="fa-solid fa-trash"></i></a></td>
				</tr>
				<?php } ?>
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