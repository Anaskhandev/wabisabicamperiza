<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Buscador Filter - Wabi sabi</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="icon" href="assets/img/favicon.svg" type="image/png" sizes="16x16">

	<!-- bootstrape -->
	<link rel="stylesheet" href="assets/styles/bootstrap.min.css">

	<!-- font-awesome -->
	<script src="assets/scripts/font-awesome-5-pro.js"></script>

	<!-- custom -->
	<link rel="stylesheet" href="assets/styles/slick.css">
	<link rel="stylesheet" href="assets/styles/owl_carousel_min.css">
	<link rel="stylesheet" href="assets/styles/owl_theme_default_min.css">
	<link rel="stylesheet" href="assets/styles/fancybox.css">
	<link rel="stylesheet" href="assets/styles/bootstrap-datepicker.css">
	<link rel="stylesheet" href="assets/styles/main.css">
	<link rel="stylesheet" href="assets/styles/responsive.css">
	<link rel="stylesheet" href="assets/styles/animate.css">

</head>

<body class="main-body">

	<!-- .site-header -->
	<header class="site-header inner-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-xl p-0">
						<a class="navbar-brand m-0 p-0" href="index.html">
							<img src="assets/img/site-logo.svg" class="site-logo">
						</a>
						<div class="mobile-menu-open" onclick="openNav()">
							<img src="assets/img/menu-bar.svg" alt="" />
						</div>
						<div class="collapse navbar-collapse d-block justify-content-center" id="collapsibleNavbar">
							<div id="mySidenav" class="sidenav w-100 d-xl-flex align-items-center">
								<div class="text-left d-xl-none w-100">
									<img src="assets/img/white-logo.svg" class="site-logo">
								</div>

								<a href="javascript:void(0)" class="closebtn d-xl-none" onclick="closeNav()">&times;</a>


								<ul class="navbar-nav mr-xl-auto ml-xl-5 align-items-center justify-content-end right-links d-xl-none">
									<li class="nav-item">
										<a class="nav-link text-uppercase primary-btn" href="sign-in.html">Log in</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase primary-btn" href="signup.html">Registrarme</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto mr-xl-5 pr-xl-5 align-items-end justify-content-end left-links all-links">
									<li class="nav-item">
										<a class="nav-link text-uppercase active" href="index.html">Home</a>
									</li>
									<!-- <li class="nav-item">
											<a class="nav-link text-uppercase" href="buscador.html">
												Buscador
											</a>
										</li> -->
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="book.html">LIBRO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="blog.html">Blog</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="contact.html">Contacto</a>
									</li>
								</ul>
								<ul class="navbar-nav mr-xl-auto ml-xl-5 align-items-center center-links all-links">
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="curso.html">Curso</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="calculator.html">CALCULADORA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="sobre-nosotros.html">NOSOTROS</a>
									</li>
								</ul>

								<ul class="navbar-nav mr-xl-auto ml-xl-5 align-items-center justify-content-end all-links last-links mb-4 d-xl-none">
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="#">LIBRO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="sobre-nosotros.html">SOBRE NOSOTROS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="faq.html">FAQ</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase" href="#">REDES SOCIALES</a>
									</li>
								</ul>

								<ul class="navbar-nav mr-xl-auto ml-xl-5 align-items-center justify-content-end right-links d-xl-flex d-none">
									<li class="nav-item">
										<a class="nav-link text-uppercase primary-btn" href="sign-in.html">Log in</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase primary-btn" href="signup.html">Registrarme</a>
									</li>
								</ul>
								<div class="text-center mb-4 d-xl-none order-4 w-100">
									<img src="assets/img/white-logo.svg">
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="click_menu">
			<button class="nav-tgl" type="button" aria-label="toggle menu"><span aria-hidden="true"></span>
			</button>
			<div class="main-menu text-white">
				<div class="container">
					<div class="align-items-center justify-content-center min-vh-100 row">
						<div class="col-12 text-center">
							<ul>

								<li><span class="inner_text_animate"><a href="book.html">LIBRO</span></a></li>
								<li><span class="inner_text_animate"><a href="curso.html">CURSO</span></a></li>
								<li><span class="inner_text_animate"><a href="calculator.html">CALCULADORA CAMPER</span></a>
								<li><span class="inner_text_animate"><a href="furgoneta-ideal.html">¿ CUAL ES MI FURGONETA
											IDEAL ?</span></a>
								<li><span class="inner_text_animate"><a href="sobre-nosotros.html">SOBRE NOSOTROS</span></a>
								<li><span class="inner_text_animate"><a href="trabaja-aqui.html">REDES SOCIALES</span></a>
								<li><span class="inner_text_animate"><a href="contact.html">CONTACTO</span></a>
								</li>
								</li>
							</ul>
							<div class="nav_footer">
								<ul class="border-0">
									<li><a href="book.html">LIBRO</a></li>
									<li><a href="curso.html">CURSO</a></li>
									<li><a href="calculator.html">COLABORADORES</a></li>
									<li><a href="faq.html">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- ./site-header -->


	<!-- .site-main -->
	<main class="site-main">


		<!-- .buscador-filter-sec -->
		<section class="buscador-filter-sec pb-0">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-10 col-lg-12">
						<div class="tabbing">
							<form>
								<ul class="nav nav-pills mb-3 main-tabs">
									<li class="nav-item d-inline-block">
										<a class="nav-link text-uppercase" data-toggle="pill" href="#Alquiler">
											ALQUILER
										</a>
									</li>
									<li class="nav-item d-inline-block">
										<a class="nav-link text-uppercase active" data-toggle="pill" href="#Compra">
											COMPRA
										</a>
									</li>
								</ul>


								<div class="tab-content mb-5">
									<div class="tab-pane p-0" id="Alquiler">
										<form>
											<div class="row">
												<div class="col-12">
													<div class="search-date-box">
														<div class="d-flex align-items-center">
															<div class="icon mr-4">
																<i class="fas fa-search text-green"></i>
															</div>
															<div class="dates">
																<h5 class="text-white mb-0">
																	Madrid, 10/11/2021 - 15/11/2021
																</h5>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="row mt-4">

												<!-- Filter (Left Sidebar) -->
												<div class="col-xl-4">
													<div class="fixed-filter">
														<div class="filter-icon d-inline-block d-xl-none">
															<i class="fa fa-filter" aria-hidden="true"></i>
														</div>
														<div id="mobile-filter" class="mobile-filter-box filter-boxes d-none d-xl-block">

															<div class="close-icon d-inline-block d-xl-none">
																<i class="fa fa-times" aria-hidden="true"></i>
															</div>

															<div class="buscador-banner-sec buscador-filter">

																<!-- PRECIO -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			PRECIO
																		</h5>
																	</div>
																	<div class="row prices">
																		<div class="col-6">
																			<h6 class="mb-0">
																				Precio miínimo
																			</h6>
																			<h6 class="d-block text-green font-weight-bold mb-0">$ 0</h6>
																		</div>
																		<div class="col-6 text-right">
																			<h6 class="mb-0">
																				Precio Máximo
																			</h6>
																			<h6 class="d-block text-green font-weight-bold mb-0">$ 100</h6>
																		</div>
																	</div>
																	<div id="price-range" class="range-slider">
																		<div slider id="slider-distance">
																			<div>
																				<div inverse-left style="width:70%;"></div>
																				<div inverse-right style="width:70%;"></div>
																				<div range style="left:30%;right:40%;"></div>
																				<span thumb style="left:30%;"></span>
																				<span thumb style="left:60%;"></span>
																				<div sign style="left:30%;">
																					<span id="value">30</span>
																				</div>
																				<div sign style="left:60%;">
																					<span id="value">60</span>
																				</div>
																			</div>
																			<input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
																				this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
																				var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
																				var children = this.parentNode.childNodes[1].childNodes;
																				children[1].style.width=value+'%';
																				children[5].style.left=value+'%';
																				children[7].style.left=value+'%';children[11].style.left=value+'%';
																				children[11].childNodes[1].innerHTML=this.value;" />

																			<input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
																				this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
																				var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
																				var children = this.parentNode.childNodes[1].childNodes;
																				children[3].style.width=(100-value)+'%';
																				children[5].style.right=(100-value)+'%';
																				children[9].style.left=value+'%';children[13].style.left=value+'%';
																				children[13].childNodes[1].innerHTML=this.value;" />
																		</div>
																	</div>
																</div>

																<!-- LUGAR -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			LUGAR
																		</h5>
																	</div>
																	<div class="form-group">
																		<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
																		<input type="text" name="places" id="places" class="w-100 field" placeholder="Pick up Places">
																	</div>
																	<div class="form-group">
																		<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
																		<input type="text" name="places" id="places" class="w-100 field" placeholder="Pick up Places">
																	</div>
																</div>

																<!-- PLAZAS -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			PLAZAS
																		</h5>
																	</div>
																	<div class="form-group selections">
																		<select name="" class="w-100 field">
																			<option>02</option>
																			<option>03</option>
																			<option>04</option>
																			<option>05</option>
																			<option>06</option>
																		</select>
																	</div>
																</div>

																<!-- INICIO -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			INICIO
																		</h5>
																	</div>
																	<div class="form-group dates">
																		<input type="input" name="date" id="inicio_date" class="w-100 field dates" placeholder="02-Jan-2022">
																	</div>
																</div>

																<!-- DEVOLUCIÓN -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			DEVOLUCIÓN
																		</h5>
																	</div>
																	<div class="form-group dates">
																		<input type="input" name="date" id="devolucion_date" class="w-100 field dates" placeholder="02-Jan-2022">
																	</div>
																</div>


															</div>
														</div>
													</div>
												</div>

												<!-- Filter (Right Side) -->
												<div class="col-xl-8">
													<div id="search_history" class="result-data">
														<div class="title bg-purple mb-4 rounded-0">
															<h4 class="text-white mb-0">
																737 resultados
															</h4>
														</div>

														<div class="main-box">

															<!-- Result1 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-8">
																			<div class="box d-md-flex align-items-center">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="text-uppercase font-weight-bold mb-md-3">
																						CAMPER FIAT DUCATO
																					</h3>
																					<h5 class="mb-md-3">
																						2 plazas
																					</h5>
																					<h5>
																						0 similar
																					</h5>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4 pl-md-0">
																			<div class="right-box text-md-right">
																				<h5 class="mb-md-0">
																					A partir de
																				</h5>
																				<h5 class="font-weight-bold mb-4">
																					20 €
																				</h5>
																				<a href="#" data-toggle="collapse" data-target="#product1" class="primary-btn animated collapsed" data-animation-in="fadeInUp">
																					VER LOS DETALLES
																					<i class="fal fa-angle-down"></i>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="collapse mb-3" data-parent="#search_history" id="product1">
																	<div class="details-boxes">
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lleno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Más Detalles
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Más Detalles
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Maás Detalles
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result2 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-8">
																			<div class="box d-md-flex align-items-center">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/virtuo.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="text-uppercase font-weight-bold mb-md-3">
																						CAMPER FORD TRANSIT
																					</h3>
																					<p>
																						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
																						standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
																						a type specimen book.
																					</p>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4 pl-md-0">
																			<div class="right-box text-md-right">
																				<span class="gray-btn d-inline-block">
																					Patrocinado
																				</span>
																				<a href="#" data-toggle="collapse" data-target="#product2" class="secondary-btn animated collapsed" data-animation-in="fadeInUp">
																					SELECCIONAR
																					<i class="far fa-long-arrow-right ml-2"></i>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result3 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-8">
																			<div class="box d-md-flex align-items-center">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="text-uppercase font-weight-bold mb-md-3">
																						CAMPER PEUGEOT BOXER
																					</h3>
																					<h5 class="mb-md-3">
																						2 plazas
																					</h5>
																					<h5>
																						0 similar
																					</h5>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4 pl-md-0">
																			<div class="right-box text-md-right">
																				<h5 class="mb-md-0">
																					A partir de
																				</h5>
																				<h5 class="font-weight-bold mb-4">
																					20 €
																				</h5>
																				<a href="#" data-toggle="collapse" data-target="#product3" class="primary-btn animated collapsed" data-animation-in="fadeInUp">
																					VER LOS DETALLES
																					<i class="fal fa-angle-down"></i>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="collapse mb-3" data-parent="#search_history" id="product3">
																	<div class="details-boxes">
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Más Detalles
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result4 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-8">
																			<div class="box d-md-flex align-items-center">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="text-uppercase font-weight-bold mb-md-3">
																						CAMPER MERCEDES SPRINTER
																					</h3>
																					<h5 class="mb-md-3">
																						2 plazas
																					</h5>
																					<h5>
																						0 similar
																					</h5>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4 pl-md-0">
																			<div class="right-box text-md-right">
																				<h5 class="mb-md-0">
																					A partir de
																				</h5>
																				<h5 class="font-weight-bold mb-4">
																					20 €
																				</h5>
																				<a href="#" data-toggle="collapse" data-target="#product4" class="primary-btn animated collapsed" data-animation-in="fadeInUp">
																					VER LOS DETALLES
																					<i class="fal fa-angle-down"></i>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="collapse mb-3" data-parent="#search_history" id="product4">
																	<div class="details-boxes">
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Más Detalles
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Maás Detalles
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result5 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-8">
																			<div class="box d-md-flex align-items-center">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="text-uppercase font-weight-bold mb-md-3">
																						CAMPER FIAT DUCATO
																					</h3>
																					<h5 class="mb-md-3">
																						2 plazas
																					</h5>
																					<h5>
																						0 similar
																					</h5>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4 pl-md-0">
																			<div class="right-box text-md-right">
																				<h5 class="mb-md-0">
																					A partir de
																				</h5>
																				<h5 class="font-weight-bold mb-4">
																					20 €
																				</h5>
																				<a href="#" data-toggle="collapse" data-target="#product5" class="primary-btn animated collapsed" data-animation-in="fadeInUp">
																					VER LOS DETALLES
																					<i class="fal fa-angle-down"></i>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="collapse mb-3" data-parent="#search_history" id="product5">
																	<div class="details-boxes">
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lleno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="details">
																			<div class="row align-items-center">
																				<div class="col-md-3">
																					<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3" />
																				</div>
																				<div class="col-md-6">
																					<div class="rattings mb-md-0 mb-3">
																						<div class="rate d-inline-block mr-2">
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star checked"></span>
																							<span class="fa fa-star"></span>
																							<span class="fa fa-star"></span>
																						</div>
																						<div class="counter d-inline-block">
																							35037
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3 text-md-right">
																					<h5 class="font-weight-bold mb-0">
																						20 €
																					</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-12">
																					<ul class="pl-0 mt-4 d-md-flex icons">
																						<li>
																							<img src="assets/img/kilometros.svg">
																							<span>
																								2100 kilometros Incluidos
																							</span>
																						</li>
																						<li>
																							<img src="assets/img/petrol.svg">
																							<span>
																								Lieno a lleno
																							</span>
																						</li>
																						<li>
																							<div class="d-flex align-items-center">
																								<div class="number">
																									10,0
																								</div>
																								<span class="title p-0">
																									Mas Detailes
																								</span>
																							</div>
																						</li>
																						<li class="text-lg-right">
																							<a href="#" class="secondary-btn">
																								Seleccionar
																								<i class="far fa-long-arrow-right"></i>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</form>
									</div>

									<div class="tab-pane p-0 active" id="Compra">
										<form>
											<div class="row">
												<div class="col-12">
													<div class="search-date-box">
														<div class="d-flex align-items-center">
															<div class="icon mr-4">
																<i class="fas fa-search text-green"></i>
															</div>
															<div class="dates">
																<h5 class="text-white mb-0">
																	Madrid, 7.000 €, Medianas.
																</h5>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="row mt-4">

												<!-- Filter (Left Sidebar) -->
												<div class="col-xl-4">
													<div class="fixed-filter">
														<div class="filter-icon compra-filter-icon d-inline-block d-xl-none">
															<i class="fa fa-filter" aria-hidden="true"></i>
														</div>
														<div id="compra-mobile-filter" class="mobile-filter-box filter-boxes d-none d-xl-block">

															<div class="close-icon compra-close-icon d-inline-block d-xl-none">
																<i class="fa fa-times" aria-hidden="true"></i>
															</div>

															<div class="buscador-banner-sec buscador-filter">

																<!-- PRECIO -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			PRECIO
																		</h5>
																	</div>
																	<div class="row prices">
																		<div class="col-6">
																			<h6 class="mb-0">
																				Precio Mínimo
																			</h6>
																			<h6 class="d-block text-green font-weight-bold mb-0">$ 0</h6>
																		</div>
																		<div class="col-6 text-right">
																			<h6 class="mb-0">
																				Precio Máximo
																			</h6>
																			<h6 class="d-block text-green font-weight-bold mb-0">$ 100</h6>
																		</div>
																	</div>
																	<div id="price-range" class="range-slider">
																		<div slider id="slider-distance">
																			<div>
																				<div inverse-left style="width:70%;"></div>
																				<div inverse-right style="width:70%;"></div>
																				<div range style="left:30%;right:40%;"></div>
																				<span thumb style="left:30%;"></span>
																				<span thumb style="left:60%;"></span>
																				<div sign style="left:30%;">
																					<span id="value">30</span>
																				</div>
																				<div sign style="left:60%;">
																					<span id="value">60</span>
																				</div>
																			</div>
																			<input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
																				this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
																				var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
																				var children = this.parentNode.childNodes[1].childNodes;
																				children[1].style.width=value+'%';
																				children[5].style.left=value+'%';
																				children[7].style.left=value+'%';children[11].style.left=value+'%';
																				children[11].childNodes[1].innerHTML=this.value;" />

																			<input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
																				this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
																				var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
																				var children = this.parentNode.childNodes[1].childNodes;
																				children[3].style.width=(100-value)+'%';
																				children[5].style.right=(100-value)+'%';
																				children[9].style.left=value+'%';children[13].style.left=value+'%';
																				children[13].childNodes[1].innerHTML=this.value;" />
																		</div>
																	</div>
																</div>

																<!-- LUGAR -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			TAMAÑO
																		</h5>
																	</div>
																	<div class="form-group checkboxes-data">
																		<input type="checkbox" id="muy_grande" checked="" class="d-none">
																		<label for="muy_grande" class="text-uppercase">
																			<span class="mr-2">MUY GRANDE</span>
																			<img src="assets/img/truck1.svg" alt="">
																		</label>
																	</div>
																	<div class="form-group checkboxes-data">
																		<input type="checkbox" id="GRANDE" class="d-none">
																		<label for="GRANDE" class="text-uppercase">
																			<span class="mr-2">GRANDE</span>
																			<img src="assets/img/truck1.svg" alt="">
																		</label>
																	</div>
																	<div class="form-group checkboxes-data">
																		<input type="checkbox" id="MEDIANA" class="d-none">
																		<label for="MEDIANA" class="text-uppercase">
																			<span class="mr-2">MEDIANA</span>
																			<img src="assets/img/bus1.svg" alt="">
																		</label>
																	</div>
																	<div class="form-group checkboxes-data">
																		<input type="checkbox" id="PEQUEÑA" class="d-none">
																		<label for="PEQUEÑA" class="text-uppercase">
																			<span class="mr-2">PEQUEÑA</span>
																			<img src="assets/img/bus2.svg" alt="">
																		</label>
																	</div>
																</div>

																<!-- PLAZAS -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			PRECIO
																		</h5>
																	</div>
																	<div class="form-group">
																		<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
																		<input type="text" name="places" id="places" class="w-100 field" placeholder="Pick up Places">
																	</div>
																	<div class="form-group">
																		<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
																		<input type="text" name="places" id="places" class="w-100 field" placeholder="Pick up Places">
																	</div>
																</div>

																<!-- INICIO -->
																<div class="mb-4">
																	<div class="title bg-purple text-center mb-4">
																		<h5 class="text-white mb-0">
																			AÑO
																		</h5>
																	</div>
																	<div id="price-range" class="range-slider">
																		<div slider id="slider-distance">
																			<div>
																				<div inverse-left style="width:70%;"></div>
																				<div inverse-right style="width:70%;"></div>
																				<div range style="left:30%;right:40%;"></div>
																				<span thumb style="left:30%;"></span>
																				<span thumb style="left:60%;"></span>
																				<div sign style="left:30%;">
																					<span id="value">30</span>
																				</div>
																				<div sign style="left:60%;">
																					<span id="value">60</span>
																				</div>
																			</div>
																			<input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
																				this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
																				var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
																				var children = this.parentNode.childNodes[1].childNodes;
																				children[1].style.width=value+'%';
																				children[5].style.left=value+'%';
																				children[7].style.left=value+'%';children[11].style.left=value+'%';
																				children[11].childNodes[1].innerHTML=this.value;" />

																			<input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
																				this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
																				var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
																				var children = this.parentNode.childNodes[1].childNodes;
																				children[3].style.width=(100-value)+'%';
																				children[5].style.right=(100-value)+'%';
																				children[9].style.left=value+'%';children[13].style.left=value+'%';
																				children[13].childNodes[1].innerHTML=this.value;" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>


												<!-- Filter (Right Side) -->
												<div class="col-xl-8">

													<div class="result-data compra-result-data">
														<div class="title bg-purple mb-4 rounded-0">
															<h4 class="text-white mb-0">
																750 resultados
															</h4>
														</div>


														<div class="main-box">

															<!-- Result1 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-12">
																			<div class="box d-md-flex">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="font-weight-bold mb-md-3">
																						Volkwagen - TRANSPORTER FURGON CORTO 2.0
																					</h3>
																					<div class="row">
																						<div class="col-lg-8 col-md-7">
																							<div class="row">
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Provincia: <strong>Valencia</strong>
																									</span>
																									<span class="d-block mb-2">
																										Combustible: <strong>Diesel</strong>
																									</span>
																									<span class="d-block mb-2">
																										Cambio: <strong>Manual</strong>
																									</span>
																								</div>
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Matriculacion: <strong>2015</strong>
																									</span>
																									<span class="d-block mb-2">
																										Kilometros: <strong>127.500 km</strong>
																									</span>
																									<span class="d-block mb-2">
																										Potencia: <strong>75 cv</strong>
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-5 pl-md-0">
																							<div class="right-box text-md-right">
																								<h5 class="font-weight-bold mb-md-4 mb-2">
																									22.599 €
																								</h5>
																								<a href="#" class="secondary-btn">
																									SELECCIONAR
																									<i class="far fa-long-arrow-right ml-2" aria-hidden="true"></i>
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-12 main-box">
																			<div class="details-boxes d-inline-block pt-2 pb-2 pl-0 pr-0">
																				<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3 d-inline-block">
																				<div class="rattings mb-md-0 mb-3 d-inline-block">
																					<div class="rate d-inline-block mr-2">
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																					</div>
																					<div class="counter d-inline-block">
																						35037
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result2 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-12">
																			<div class="box d-md-flex">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="font-weight-bold mb-md-3">
																						Volkwagen - TRANSPORTER FURGON CORTO 2.0
																					</h3>
																					<div class="row">
																						<div class="col-lg-8 col-md-7">
																							<div class="row">
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Provincia: <strong>Valencia</strong>
																									</span>
																									<span class="d-block mb-2">
																										Combustible: <strong>Diesel</strong>
																									</span>
																									<span class="d-block mb-2">
																										Cambio: <strong>Manual</strong>
																									</span>
																								</div>
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Matriculacion: <strong>2015</strong>
																									</span>
																									<span class="d-block mb-2">
																										Kilometros: <strong>127.500 km</strong>
																									</span>
																									<span class="d-block mb-2">
																										Potencia: <strong>75 cv</strong>
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-5 pl-md-0">
																							<div class="right-box text-md-right">
																								<h5 class="font-weight-bold mb-md-4 mb-2">
																									22.599 €
																								</h5>
																								<a href="#" class="secondary-btn">
																									SELECCIONAR
																									<i class="far fa-long-arrow-right ml-2" aria-hidden="true"></i>
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-12 main-box">
																			<div class="details-boxes d-inline-block pt-2 pb-2 pl-0 pr-0">
																				<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3 d-inline-block">
																				<div class="rattings mb-md-0 mb-3 d-inline-block">
																					<div class="rate d-inline-block mr-2">
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																					</div>
																					<div class="counter d-inline-block">
																						35037
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result3 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-12">
																			<div class="box d-md-flex">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="font-weight-bold mb-md-3">
																						Volkwagen - TRANSPORTER FURGON CORTO 2.0
																					</h3>
																					<div class="row">
																						<div class="col-lg-8 col-md-7">
																							<div class="row">
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Provincia: <strong>Valencia</strong>
																									</span>
																									<span class="d-block mb-2">
																										Combustible: <strong>Diesel</strong>
																									</span>
																									<span class="d-block mb-2">
																										Cambio: <strong>Manual</strong>
																									</span>
																								</div>
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Matriculacion: <strong>2015</strong>
																									</span>
																									<span class="d-block mb-2">
																										Kilometros: <strong>127.500 km</strong>
																									</span>
																									<span class="d-block mb-2">
																										Potencia: <strong>75 cv</strong>
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-5 pl-md-0">
																							<div class="right-box text-md-right">
																								<h5 class="font-weight-bold mb-md-4 mb-2">
																									22.599 €
																								</h5>
																								<a href="#" class="secondary-btn">
																									SELECCIONAR
																									<i class="far fa-long-arrow-right ml-2" aria-hidden="true"></i>
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-12 main-box">
																			<div class="details-boxes d-inline-block pt-2 pb-2 pl-0 pr-0">
																				<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3 d-inline-block">
																				<div class="rattings mb-md-0 mb-3 d-inline-block">
																					<div class="rate d-inline-block mr-2">
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																					</div>
																					<div class="counter d-inline-block">
																						35037
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result4 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-12">
																			<div class="box d-md-flex">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="font-weight-bold mb-md-3">
																						Volkwagen - TRANSPORTER FURGON CORTO 2.0
																					</h3>
																					<div class="row">
																						<div class="col-lg-8 col-md-7">
																							<div class="row">
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Provincia: <strong>Valencia</strong>
																									</span>
																									<span class="d-block mb-2">
																										Combustible: <strong>Diesel</strong>
																									</span>
																									<span class="d-block mb-2">
																										Cambio: <strong>Manual</strong>
																									</span>
																								</div>
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Matriculacion: <strong>2015</strong>
																									</span>
																									<span class="d-block mb-2">
																										Kilometros: <strong>127.500 km</strong>
																									</span>
																									<span class="d-block mb-2">
																										Potencia: <strong>75 cv</strong>
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-5 pl-md-0">
																							<div class="right-box text-md-right">
																								<h5 class="font-weight-bold mb-md-4 mb-2">
																									22.599 €
																								</h5>
																								<a href="#" class="secondary-btn">
																									SELECCIONAR
																									<i class="far fa-long-arrow-right ml-2" aria-hidden="true"></i>
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-12 main-box">
																			<div class="details-boxes d-inline-block pt-2 pb-2 pl-0 pr-0">
																				<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3 d-inline-block">
																				<div class="rattings mb-md-0 mb-3 d-inline-block">
																					<div class="rate d-inline-block mr-2">
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																					</div>
																					<div class="counter d-inline-block">
																						35037
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result5 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-12">
																			<div class="box d-md-flex">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="font-weight-bold mb-md-3">
																						Volkwagen - TRANSPORTER FURGON CORTO 2.0
																					</h3>
																					<div class="row">
																						<div class="col-lg-8 col-md-7">
																							<div class="row">
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Provincia: <strong>Valencia</strong>
																									</span>
																									<span class="d-block mb-2">
																										Combustible: <strong>Diesel</strong>
																									</span>
																									<span class="d-block mb-2">
																										Cambio: <strong>Manual</strong>
																									</span>
																								</div>
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Matriculacion: <strong>2015</strong>
																									</span>
																									<span class="d-block mb-2">
																										Kilometros: <strong>127.500 km</strong>
																									</span>
																									<span class="d-block mb-2">
																										Potencia: <strong>75 cv</strong>
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-5 pl-md-0">
																							<div class="right-box text-md-right">
																								<h5 class="font-weight-bold mb-md-4 mb-2">
																									22.599 €
																								</h5>
																								<a href="#" class="secondary-btn">
																									SELECCIONAR
																									<i class="far fa-long-arrow-right ml-2" aria-hidden="true"></i>
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-12 main-box">
																			<div class="details-boxes d-inline-block pt-2 pb-2 pl-0 pr-0">
																				<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3 d-inline-block">
																				<div class="rattings mb-md-0 mb-3 d-inline-block">
																					<div class="rate d-inline-block mr-2">
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																					</div>
																					<div class="counter d-inline-block">
																						35037
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<!-- Result6 -->
															<div class="history-results mb-4">
																<div class="result-box">
																	<div class="row align-items-center">
																		<div class="col-md-12">
																			<div class="box d-md-flex">
																				<div class="img mb-md-0 mb-3">
																					<img src="assets/img/product1.png" alt="" />
																				</div>
																				<div class="content">
																					<h3 class="font-weight-bold mb-md-3">
																						Volkwagen - TRANSPORTER FURGON CORTO 2.0
																					</h3>
																					<div class="row">
																						<div class="col-lg-8 col-md-7">
																							<div class="row">
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Provincia: <strong>Valencia</strong>
																									</span>
																									<span class="d-block mb-2">
																										Combustible: <strong>Diesel</strong>
																									</span>
																									<span class="d-block mb-2">
																										Cambio: <strong>Manual</strong>
																									</span>
																								</div>
																								<div class="col-md-6">
																									<span class="d-block mb-2">
																										Matriculacion: <strong>2015</strong>
																									</span>
																									<span class="d-block mb-2">
																										Kilometros: <strong>127.500 km</strong>
																									</span>
																									<span class="d-block mb-2">
																										Potencia: <strong>75 cv</strong>
																									</span>
																								</div>
																							</div>
																						</div>
																						<div class="col-lg-4 col-md-5 pl-md-0">
																							<div class="right-box text-md-right">
																								<h5 class="font-weight-bold mb-md-4 mb-2">
																									22.599 €
																								</h5>
																								<a href="#" class="secondary-btn">
																									SELECCIONAR
																									<i class="far fa-long-arrow-right ml-2" aria-hidden="true"></i>
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-12 main-box">
																			<div class="details-boxes d-inline-block pt-2 pb-2 pl-0 pr-0">
																				<img src="assets/img/logo-hertz.svg" alt="" class="logo mb-md-0 mb-3 d-inline-block">
																				<div class="rattings mb-md-0 mb-3 d-inline-block">
																					<div class="rate d-inline-block mr-2">
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star checked" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																						<span class="fa fa-star" aria-hidden="true"></span>
																					</div>
																					<div class="counter d-inline-block">
																						35037
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>


											</div>
									</div>
								</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			</div>
		</section>
		<!-- ./buscador-banner-sec -->


	</main>
	<!-- ./site-main -->


	<!-- .site-footer -->
	<footer class="site-footer">
		<img src="assets/img/truck-img1.png" alt="" class="d-md-block d-none truck-img" />
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 col-md-7">
					<div class="left-widget">
						<div class="desc text-white text-center">
							<p>
								¿Quieres estar al día de los últimos diseños de camas,
								cocinas, baños, etc además de alertas de últimas ofertas
								en el mercado de furgonetas?
							</p>
						</div>
						<h4 class="text-white text-center">
							¡Danos tu email y te lo contamos todo!
						</h4>
						<div class="forms mt-4">
							<form>
								<div class="row align-items-center">
									<div class="col-md-6 form-group mb-4">
										<input type="text" name="name" id="name" placeholder="Introduzca su nombre" class="field w-100" />
										<i class="fas fa-user"></i>
									</div>
									<div class="col-md-6 form-group mb-4">
										<input type="text" name="name" id="name" placeholder="Introduzca su nombre" class="field w-100" />
										<i class="fas fa-envelope"></i>
									</div>
									<div class="col-lg-6 form-group mb-4">
										<div class="checkboxes-data mb-0">
											<input type="checkbox"  oninvalid="this.setCustomValidity('Por favor marca esta casilla para continuar')" onchange="this.setCustomValidity('')" id="acceptance" class="d-none" required />
											<label for="acceptance" class="text-white">Acepto la politica de privacidad</label>
										</div>
									</div>
									<div class="col-lg-6 text-lg-right text-center form-group mb-4">
										<button class="secondary-btn">
											AVÍSAME
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 col-md-5">
					<ul class="social-link text-center pl-0">
						<li class="d-inline-block">
							<a href="#" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li class="d-inline-block">
							<a href="#" target="_blank">
								<i class="fab fa-tiktok"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="footer-menus">
						<div class="row align-items-center">
							<div class="col-lg-3 col-md-2 text-md-left text-center mb-md-0 mb-3">
								<img src="assets/img/footer-logo.svg" alt="" />
							</div>
							<div class="col-lg-9 col-md-10 text-center">
								<ul class="menus mb-0 pl-0">
									<li>
										<a href="index.html">
											Home
										</a>
									</li>
									<li>
										<a href="book.html" class="active">
											Libro
										</a>
									</li>
									<li>
										<a href="blog.html">
											Blog
										</a>
									</li>
									<li>
										<a href="contact.html">
											Contacto
										</a>
									</li>
									<li>
										<a href="curso.html">
											Curso
										</a>
									</li>
									<li>
										<a href="trabaja-aqui.html">
											Trabaja aquí
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row copyrights">
				<div class="col-md-6 text-md-left text-center">
					<p class="mb-md-0 mb-2 text-white">
						Información básica de protección de datos
					</p>
				</div>
				<div class="col-md-6 text-md-right text-center">
					<p class="mb-md-0 mb-2 text-white">
						© 2022 WABI SABI. ALL RIGHTS RESERVED.
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- ./site-footer -->



	<!-- custom js -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/bootstrap.min.js"></script>
	<script src="assets/scripts/slick.js"></script>
	<script src="assets/scripts/slick-animation.min.js"></script>
	<script src="assets/scripts/owl.carousel.js"></script>
	<script src="assets/scripts/fancybox.min.js"></script>
	<script src="assets/scripts/jquery.matchHeight-min.js"></script>
	<script src="assets/scripts/bootstrap-datepicker.js"></script>
	<script src="assets/scripts/main.js"></script>
	<script>
		jQuery("#inputDate").datepicker({});
		jQuery("#inicio_date").datepicker({});
		jQuery("#devolucion_date").datepicker({});
	</script>

</body>

</html>