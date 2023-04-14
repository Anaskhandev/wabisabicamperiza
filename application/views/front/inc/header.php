<!--Errors displaying is disabled-->
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>
<!DOCTYPE html lang="es">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?php echo !empty($first_part) ? $first_part . ' -' : ''; ?> Wabi Sabi </title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- meta tags -->
	<meta name="description" content="La comunidad Wabi Sabi es lo que necesitas para planificar, diseñar, construir y homologar una furgoneta camper. Con nuestro manual de más de 300 páginas, curso y herramientas online vas a poder construir una furgoneta camper acorde a tus necesidades. Encontrarás diagramas detallados de los sistemas de gas, agua y electricidad y una guía paso a paso que te enseña a construir una furgoneta camper sin conocimientos previos. Encuentra las respuestas a todas tus preguntas, incluso a las que aún no se te han ocurrido.">
	<meta name="keywords" content="Comunidad, Wabi Sabi, Comunidad Wabi Sabi, Camperizar Tu Furgoneta, Camperizar, Furgoneta, Furgoneta Ideal">
	<meta name="author" content="Comunidad Wabi Sabi">
	<!-- favicon -->
	<link rel="icon" href="<?= base_url('assets/front/img/site-logo.svg'); ?>" type="image/png" sizes="16x16">

	<!-- bootstrape -->
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/bootstrap.min.css'); ?>">

	<!-- font-awesome -->
	<script src="<?= base_url('assets/front/scripts/font-awesome-5-pro.js'); ?>"></script>

	<!-- recaptcha -->
	<script src="https://www.google.com/recaptcha/api.js"></script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-5649QXKG4G"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-5649QXKG4G');
	</script>

	<!-- custom -->
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/slick.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/owl_carousel_min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/owl_theme_default_min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/fancybox.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/main.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/responsive.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/animate.css'); ?>">
	<script src="<?= base_url('assets/front/scripts/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/front/scripts/bootstrap.min.js'); ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/alert.css'); ?>" />
	<script src="<?php echo base_url('assets/admin/js/alert.js'); ?>"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.5.2/sweetalert2.min.css" integrity="sha512-y6TjkITSFkRB9mZmDaJyDOsyHsYvOo3Np3iAKe02HgMDP4L4vbmbhlzNpbbIVC1x+GUUHvepTd1BKDe4kC6kNg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.5.2/sweetalert2.min.js" integrity="sha512-5ab74DIlwxsKYrjo5FiNQEY2EW61uLBBRL4xSthtQYsBbzDUTehfecsNCnzVzN8NVCk4p52yolL/q8tXp0op9A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="main-body">

	<?php if ($this->session->flashdata('success')) : ?>
		<script>
			// alert_success("<?php
								// echo $this->session->flashdata('success') 
								?>");
		</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('error')) : ?>
		<script>
			alert_danger("<?php echo $this->session->flashdata('error') ?>");
		</script>
	<?php endif; ?>

	<!-- .site-header -->
	<header class="site-header inner-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-xl p-0">
						<a class="navbar-brand m-0 p-0" href="<?= base_url(); ?>">
							<img src="<?= base_url('assets/front/img/white-logo.svg'); ?>" class="site-logo">
							<img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" class="white_logo">
						</a>
						<div class="mobile-menu-open" onclick="openNav()">
							<a class="menu_animate" href="#">
								<img src="<?= base_url('assets/front/img/menu-bar.svg'); ?>" alt="" />
							</a>
						</div>
						<div class="collapse navbar-collapse d-block justify-content-center" id="collapsibleNavbar">
							<div id="mySidenav" class="sidenav w-100 d-xl-flex align-items-center">
								<div class="text-left d-xl-none w-100">
									<img src="<?= base_url('assets/front/img/white-logo.svg'); ?>" class="site-logo">
								</div>

								<a href="javascript:void(0)" class="closebtn d-xl-none" onclick="closeNav()">&times;</a>


								<ul class="navbar-nav mr-xl-auto ml-xl-5 align-items-center justify-content-end right-links d-xl-none">
									<li class="nav-item">
										<a class="nav-link text-uppercase primary-btn" href="<?= base_url('login'); ?>">Log in</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase primary-btn" href="<?= base_url('registro'); ?>">Registrarme</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-lg-auto mr-lg-5 pr-xl-4 align-items-end justify-content-end left-links all-links d-none d-md-flex">
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "") {
																				echo 'active';
																			} ?>" href="<?= base_url(); ?>">INICIO</a>
									</li>
									<!-- <li class="nav-item">
										<a class="nav-link text-uppercase" href="buscador.html">
											Buscador
										</a>
									</li> -->
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "Manual-de-Camperizacion") {
																				echo 'active';
																			} ?>" href="<?= base_url('Manual-de-Camperizacion'); ?>">LIBRO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "blog") {
																				echo 'active';
																			} ?>" href="<?= base_url('blog'); ?>">Blog</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "accesories") {
																				echo 'active';
																			} ?>" href="<?= base_url('accesories'); ?>">Accesorios</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "contact") {
																				echo 'active';
																			} ?>" href="<?= base_url('contact'); ?>">Contacto</a>
									</li>
								</ul>
								<ul class="navbar-nav mr-auto ml-lg-auto align-items-center center-links all-links  d-none d-md-flex">
									<li class="nav-item">
										<a class="nav-link text-uppercase  <?php if ($this->uri->segment(1) == "grade") {
																				echo 'active';
																			} ?>" href="<?= base_url('grade'); ?>">Curso</a>
									</li>

									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "calculator") {
																				echo 'active';
																			} ?>" href="<?= base_url('calculator'); ?>">CALCULADORA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "about") {
																				echo 'active';
																			} ?>" href="<?= base_url('about'); ?>">NOSOTROS</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-lg-auto mr-lg-5 pr-xl-4 align-items-end justify-content-end left-links all-links d-flex d-md-none">
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "") {
																				echo 'active';
																			} ?>" href="<?= base_url(); ?>">INICIO</a>
									</li>
									<!-- <li class="nav-item">
										<a class="nav-link text-uppercase" href="<?= base_url('buscador'); ?>">
											Buscador
										</a>
									</li> -->
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "book") {
																				echo 'active';
																			} ?>" href="<?= base_url('Manual-de-Camperizacion'); ?>">LIBRO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "calculator") {
																				echo 'active';
																			} ?>" href="<?= base_url('calculator'); ?>">CALCULADORA CAMPER</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "ideal") {
																				echo 'active';
																			} ?>" href="<?= base_url('ideal'); ?>">¿CUÁL ES MI FURGONETA IDEAL?</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "accesories") {
																				echo 'active';
																			} ?>" href="<?= base_url('accesories'); ?>">Accesorios</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase  <?php if ($this->uri->segment(1) == "grade") {
																				echo 'active';
																			} ?>" href="<?= base_url('grade'); ?>">Curso</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase  <?php if ($this->uri->segment(1) == "work") {
																				echo 'active';
																			} ?>" href="<?= base_url('work'); ?>">TRABAJA AQUI</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "blog") {
																				echo 'active';
																			} ?>" href="<?= base_url('blog'); ?>">Blog</a>
									</li>

									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "contact") {
																				echo 'active';
																			} ?>" href="<?= base_url('contact'); ?>">Contacto</a>
									</li>
								</ul>
								<ul class="navbar-nav mr-auto ml-lg-auto align-items-center center-links all-links  d-flex d-md-none">


									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "about") {
																				echo 'active';
																			} ?>" href="<?= base_url('about'); ?>">NOSOTROS</a>
									</li>
								</ul>


								<ul class="navbar-nav mr-xl-auto ml-xl-5 align-items-center justify-content-end all-links last-links mb-4 d-xl-none">
									<li class="nav-item">
										<a class="nav-link text-uppercase <?php if ($this->uri->segment(1) == "faq") {
																				echo 'active';
																			} ?>" href="<?= base_url('faq'); ?>">FAQ</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-uppercase" target="_blank" href="https://www.instagram.com/wabisabi_vanlife/?hl=es">REDES SOCIALES</a>
									</li>
								</ul>
								<?php if ($this->session->userdata('auth')) { ?>
									<ul class="navbar-nav mr-xl-auto ml-xl-5 align-items-center justify-content-end right-links d-xl-flex d-none">
										<li class="nav-item">
											<a class="nav-link text-uppercase primary-btn" style="cursor: pointer;"><?= $this->session->userdata('auth')['fn']; ?></a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase primary-btn" href="<?= base_url('login/logout'); ?>">Log Out</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase btn-cart-show"><span class="num_items">1</span><i class="fa fa-lg fa-shopping-cart"></i></a>
										</li>
									</ul>
								<?php } else {; ?>

									<ul class="navbar-nav mr-xl-auto ml-xl-5 align-items-center justify-content-end right-links d-xl-flex d-none">
										<li class="nav-item">
											<a class="nav-link text-uppercase primary-btn" href="<?= base_url('login'); ?>">Log in</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase primary-btn" href="<?= base_url('registro'); ?>">Registrarme</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase btn-cart-show"><span class="num_items">1</span><i class="fa fa-lg fa-shopping-cart"></i></a>
										</li>
									</ul>

								<?php } ?>


								<div class="text-center mb-4 d-xl-none order-4 w-100">
									<img src="<?= base_url('assets/front/img/white-logo.svg'); ?>">
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
			<?php
			$directoryURI = $_SERVER['REQUEST_URI'];
			$path = parse_url($directoryURI, PHP_URL_PATH);
			$components = explode('/', $path);
			$first_part = $components[1];
			?>

			<div class="main-menu text-white">
				<div class="container">
					<div class="align-items-center justify-content-center min-vh-100 row">
						<div class="col-12 text-center">
							<ul>
								<li><span class="inner_text_animate"><a class="<?php if ($first_part == "book") {
																					echo "active";
																				} else {
																					echo "noactive";
																				} ?>" href="<?= base_url('Manual-de-Camperizacion'); ?>">LIBRO</span></a></li>
								<li><span class="inner_text_animate"><a class="<?php if ($first_part == "calculator") {
																					echo "active";
																				} else {
																					echo "noactive";
																				} ?>" href="<?= base_url('calculator'); ?>">CALCULADORA
											CAMPER</span></a></li>
								<li><span class="inner_text_animate"><a class="<?php if ($first_part == "ideal") {
																					echo "active";
																				} else {
																					echo "noactive";
																				} ?>" href="<?= base_url('ideal'); ?>">¿CUÁL ES MI FURGONETA IDEAL?</span></a></li>
								<li><span class="inner_text_animate"><a class="<?php if ($first_part == "grade") {
																					echo "active";
																				} else {
																					echo "noactive";
																				} ?>" href="<?= base_url('grade'); ?>">CURSO</span></a></li>
								<li><span class="inner_text_animate"><a class="<?php if ($first_part == "work") {
																					echo "active";
																				} else {
																					echo "noactive";
																				} ?>" href="<?= base_url('work'); ?>">TRABAJA AQUÍ</span></a></li>
								<li><span class="inner_text_animate"><a class="<?php if ($first_part == "work") {
																					echo "active";
																				} else {
																					echo "noactive";
																				} ?>" target="_blank" href="https://www.instagram.com/wabisabi_vanlife/?hl=es">REDES SOCIALES</span></a></li>
								<li><span class="inner_text_animate"><a class="<?php if ($first_part == "contact") {
																					echo "active";
																				} else {
																					echo "noactive";
																				} ?>" href="<?= base_url('contact'); ?>">CONTACTO</span></a></li>
								<li><span class="inner_text_animate"><a class="<?php if ($first_part == "faq") {
																					echo "active";
																				} else {
																					echo "noactive";
																				} ?>" href="<?= base_url('faq'); ?>">FAQ</span></a></li>
							</ul>
							<div class="nav_footer">
								<ul class="border-0">
									<li><a href="<?= base_url('Manual-de-Camperizacion'); ?>">LIBRO</a></li>
									<li><a href="<?= base_url('grade'); ?>">CURSO</a></li>
									<li><a href="<?= base_url('partner'); ?>">COLABORADORES</a></li>
									<li><a class="mr-0" href="<?= base_url('about'); ?>">NOSOTROS</a></li>
									<li><a class="mr-0" href="<?= base_url('terms'); ?>">CONDICIONES GENERALES DE USO</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Cart Starts -->
		<div class="add_cart" id="mySidenav">
			<div class="d-flex justify-content-between align-items-center cart_heading">
				<div>
					<a href="javascript:void(0)" class="closebtn close_btn" onclick="closeNav()">×</a>
				</div>
				<div>
					<h3 class="m-0">WABI SABI</h3>
				</div>
				<div>
					<!-- <i class="fa fa-search mr-3"></i> -->
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<?php
			$reply = $this->db->select('*')->from('price')->get()->result();
			foreach ($reply as $r) :

			?>
				<div class="container">
					<div class="row justify-content-between add_calculator">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-4 text-lg-left text-center">
									<img class="cart_image" src="<?= base_url('assets/front/img/book_cover1.png') ?>">
								</div>
								<div class="col-lg-6">
									<div>
										<p>Tu Manual de Camperización para camperizar tu furgoneta camper - Libro de tapa blanda
										</p>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<div class="number">
											<span class="minus quantity">-</span>
											<input type="text" name="quantity" id="quantity" value="1" />
											<span class="plus quantity">+</span>
										</div>
										<div class="">
											<p class="m-0"><span id="unit_value"><?php echo $r->master_price; ?></span> €</p>
											<!-- <h5 class="m-0">X   $569.09</h5> -->
										</div>
										<div>
											<i class="fa fa-lock"></i>
										</div>
									</div>
								</div>
								<Div class="col-lg-12 mt-4">
									<select class="form-control" id="book-type">
										<option disabled selected>Elige una opción</option>
										<option>Libro tapa de blanda</option>
										<option>Libro electrónico (Ebook)</option>
									</select>
									<div class="text-center mt-4 d-none">
										<a href="<?= base_url('checkout'); ?>" class="secondary-btn ">
											COMPRAR EN GOOGLE PLAY
										</a>
									</div>
								</Div>
							</div>
						</div>
						<div class="align-items-center btn_side_bar col-lg-12 d-flex flex-column justify-content-end text-center pb-5">
							<div class="text-center mb-4">
								<h5 class="m-0">Subtotal : <span id="total_payment"><?php echo $r->master_price; ?></span> €</h5>
							</div>
							<div id="isCheckoutDiv">
								<a href="<?= base_url('/checkout/book') ?>" class="secondary-btn a_change disabled">COMPRAR</a>
								<input type="hidden" name="isLogin" id="isLogin" value="true" />
								<div class="warning_text">¡Por favor, selecciona una opción!</div>
							</div>
							<div id="iseBooKDiv" style="display:none">
								<a href="http://google.com/" class="secondary-btn">PROCESSED TO AMAZON</a>
								<input type="hidden" name="isLogin" id="isLogin" value="true" />
							</div>
						</div>
					</div>
				</div>
			<?php
			endforeach; ?>
		</div>
		<!-- Cart Ends -->
	</header>
	<!-- </site-header -->