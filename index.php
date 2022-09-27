<?php  include("Model/base_de_datos.php") ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>ESCOINFER ESCOBILLAS</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="Asset/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="Asset/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="Asset/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="Asset/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="Asset/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/4cc7d63c22.js" crossorigin="anonymous"></script>

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="Asset/css/style.css"/>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><i class="fa fa-phone"></i> +57 3125856952</li>
						<li><a href="https://www.google.com/intl/es-419/gmail/about/"><i class="fa fa-envelope-o"></i> EscoinferE@gmail.com</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="View/Login-registro.php"><i class="fa fa-user-o"></i> MI CUENTA</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./Asset/img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Categorias</option>
										<option value="1">Pintura</option>
										<option value="1">Hogar</option>
										<option value="1">Construccion</option>
									</select>
									<input class="input" placeholder="Busca Aquí">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Tus Favoritos</span>
										<div class="qty">3</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Tu carro</span>
										<div class="qty">10</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./Asset/img/product01.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Taladro</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$450.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./Asset/img/product02.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Martillo</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Articulos Seleccionados</small>
											<h5>SUBTOTAL: $150.000</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Pinturas y Elementos</a></li>
						<li><a href="#">Construccion</a></li>
						<li><a href="#">Hogar</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./Asset/img/shop01.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Hogar<br></h3>
								<a href="#" class="cta-btn">Visualizar<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./Asset/img/shop02.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Herramientas</h3>
								<a href="#" class="cta-btn">Visualizar<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./Asset/img/shop03.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Decoración</h3>
								<a href="#" class="cta-btn">Visualizar<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Productos Nuevos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product01.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Martillo</a></h3>
												<h4 class="product-price">$35.000<del class="product-old-price">$45.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>  	
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carro</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product02.jpg" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Alicate</a></h3>
												<h4 class="product-price">$40.000 <del class="product-old-price">$55.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carro</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product03.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Tubo PVC xmetro</a></h3>
												<h4 class="product-price">$5.000 <del class="product-old-price">$7.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar al carro</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product04.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Puntillas</a></h3>
												<h4 class="product-price">$2.000<del class="product-old-price">$5.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carro</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product05.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Tornillos</a></h3>
												<h4 class="product-price">$3.000<del class="product-old-price">$6.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar al carro</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">MÁS VENDIDOS</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Cementos</a></li>
									<li><a data-toggle="tab" href="#tab2">Arandelas</a></li>
									<li><a data-toggle="tab" href="#tab2">Tuercas</a></li>
									<li><a data-toggle="tab" href="#tab2">Lamparas</a></li>
									<li><a data-toggle="tab" href="#tab2">Canales</a></li>
									<li><a data-toggle="tab" href="#tab2">Chapas</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product06.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Ducha Monocontrtol	</a></h3>
												<h4 class="product-price">$400.000 <del class="product-old-price">$690.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar al carro</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product07.jpg" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Grifería para Lavamanos</a></h3>
												<h4 class="product-price">$250.900 <del class="product-old-price">$350.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar al Carro</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product08.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Cemento Cemex</a></h3>
												<h4 class="product-price">$32.000<del class="product-old-price">$45.000</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart">Agregar al Carro</i></button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product09.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">Estuco Acrilico</a></h3>
												<h4 class="product-price">$35.000 <del class="product-old-price">$50.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al Carro</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./Asset/img/product10.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">CATEGORIA</p>
												<h3 class="product-name"><a href="#">PULIDORA 4 1/2 PULG 1100W FRENO MECANICO GA4541R</a></h3>
												<h4 class="product-price">$659.900 <del class="product-old-price">$761.950</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a Favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Ver</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al Carro</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Suscribete a nuestro <strong>Boletin Informativo</strong></p>
							<form>
								<div class="container">
  			<div class="row justify-content-center">
 		 <div class="col-md-5">
   		<div class="card">
     	<h2 class="card-title text-center">Contáctenos<a href="http://opensnippets.com"></a></h2>
      	<div class="card-body py-md-4">
       	<form _lpchecked="1">
          <div class="form-group">
             <input type="text" class="form-control" id="name" placeholder="Nombre">
        </div>
        <div class="form-group">
             <input type="email" class="form-control" id="email" placeholder="Correo">
                            </div>
							 <div class="form-group">
             <input type="text" class="form-control" id="Celular" placeholder="Celular">
                            </div>
							 <div class="form-group">
             <input type="text" class="form-control" id="Compañia" placeholder="Compañia">
                            </div>

			<textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" placeholder="Deja tu opinion..."></textarea> 

  
   <div class="d-flex flex-row align-items-center justify-content-between">
                                <button class="btn btn-primary">Enviar</button>
          </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">

			<!-- top footer -->
			<div class="section">

				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
				<div class="header-logo">
					<a href="index.php" class="logo">
						<img src="./Asset/img/logo.png" alt="">
					</a>
				</div>
			<div class="col-md-3">
				</div>

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Paula Isabella Valbuena Castañeda
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<li><i class="fa fa-phone"></i> +57 3125856952</li>
						<li><a href="https://www.google.com/intl/es-419/gmail/about/"><i class="fa fa-envelope-o"></i> EscoinferE@gmail.com</a></li>
							</span>
						</div>
					</div>
					
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="Asset/js/jquery.min.js"></script>
		<script src="Asset/js/bootstrap.min.js"></script>
		<script src="Asset/js/slick.min.js"></script>
		<script src="Asset/js/nouislider.min.js"></script>
		<script src="Asset/js/jquery.zoom.min.js"></script>
		<script src="Asset/js/main.js"></script>

	</body>
</html>
