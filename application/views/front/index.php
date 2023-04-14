<!-- .site-main -->
<main class="site-main">
	<script>
		$(document).ready(function() {

			var abcd = '<?php echo $this->session->userdata('message'); ?>';
			if (abcd == "") {
				console.log(abcd)
			} else {
				console.log(abcd)
				$('#first_hero_para').text('TU FURGONETA IDEAL ES UNA FURGONETA ' + abcd)
				$('.que-steps-sec').addClass('justify-content-center')
				$('.que-steps-sec').html(`<img src="<?= base_url('assets/front/img/' . $this->session->userdata('message') . '-.png'); ?>" alt="" class="img-fluid">`)
			}
		})
	</script>
	<?php
	$this->session->unset_userdata('message');
	?>


	<!-- .site-banner -->
	<section class="site-banner p-0" id="site-banner">
		<!--<div id="progressBar"></div>-->
		<div class="behind position-absolute"></div>
		<img src="<?= base_url('assets/front/img/road-car.png'); ?>" alt="" class="img_road img-fluid position-absolute">
		<!--<img src="<?= base_url('assets/front/img/bus_yellow.png'); ?>" alt="" class="img_bus img-fluid position-absolute">-->
		<div class="container main_sec">

			<div class="row">
				<div class="col-lg-6 left_side">

					<img src="<?= base_url('assets/front/img/road-01.png'); ?>" alt="" class="img_road2 img-fluid position-absolute">
					<img src="<?= base_url('assets/front/img/bus_yellow.png'); ?>" alt="" class="img_bus2 img-fluid position-absolute">
					<h2 class="text-white text-md-left mt-4 heading_main">
						WABI SABI
					</h2>
					<h3 class="mb-4">
						LA PLATAFORMA CON TODOS LOS RECURSOS QUE NECESITAS PARA CAMPERIZAR TU FURGONETA
					</h3>
					<ul class="road nav nav-tabs" id="myTab" role="tablist">
						<img class="img-fluid cursor" src="<?= base_url('assets/front/img/cursor.png'); ?>">
						<img class="img-fluid wood" src="<?= base_url('assets/front/img/Wood.png'); ?>" alt="">
						<li href="#home" class=" nav-item smoothScroll2 justify-content-center position-absolute cars d-flex align-items-center">
							<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">BUSCA TU FURGONETA</a>
						</li>
						<li class=" nav-item smoothScroll2 justify-content-center position-absolute stop d-flex align-items-center">
							<a data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class=" m-0 nav-link">MANUAL DE CAMPERIZACIÓN</a>
						</li>
						<li class="smoothScroll2 justify-content-center position-absolute dig d-flex align-items-center">
							<a class=" m-0 nav-link" id="vid-tab" data-toggle="tab" href="#vid_main" role="tab" aria-controls="vid_main" aria-selected="false">CURSO DE CAMPERIZACIÓN</a>
						</li>
						<li class="smoothScroll2 justify-content-center position-absolute kangaroo d-flex align-items-center">
							<a class=" m-0 nav-link" id="calc-tab" data-toggle="tab" href="#calc_main" role="tab" aria-controls="calc_main" aria-selected="false">CALCULADORA CAMPER</a>
						</li>
						<li class="smoothScroll2 justify-content-center position-absolute pump d-flex align-items-center">
							<a class=" m-0 nav-link" id="PRO-tab" data-toggle="tab" href="#PROFESOR" role="tab" aria-controls="PROFESOR" aria-selected="false">TRABAJA AQUÍ</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-6 right-side d-flex flex-column align-items-center justify-content-center" id="changing_head">

					<div class="tab-content tabs_of_right" id="myTabContent">
						<div class="right-content tab-pane  fade ml-xl-5 ml-lg-4 mt-lg-0 mt-0 pt-3 form_main w-100 active show" id="home" role="tabpanel" aria-labelledby="home-tab">

							<h2 class="text-orange mb-1">
								&iquest;CU&Aacute;L ES TU FURGONETA IDEAL?
							</h2>
							<P class="text-white  mb-md-5 mb-2" id="first_hero_para">RESPONDE EL CUESTIONARIO WABI SABI PARA SABER CUÁL ES TU FURGONETA IDEAL
							</P>
							<div class="row que-steps-sec h-75">
								<div class="col-12">
									<div class="wizard">
										<div class="wizard-inner">
											<div class="connecting-line"></div>
											<ul class="nav nav-tabs d-none" role="tablist">
												<li role="presentation" class="active">
													<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step
															1</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"><span class="round-tab">2</span> <i>Step 2</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Step 5</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> <i>Step 6</i></a>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">6</span> <i>Step 7</i></a>
												</li>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"><span class="round-tab">6</span> <i>Step 8</i></a>
												</li>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step9" data-toggle="tab" aria-controls="step9" role="tab"><span class="round-tab">6</span> <i>Step 9</i></a>
												</li>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step10" data-toggle="tab" aria-controls="step10" role="tab"><span class="round-tab">6</span> <i>Step 10</i></a>
												</li>
												</li>
												<li role="presentation" class="disabled">
													<a href="#step11" data-toggle="tab" aria-controls="step11" role="tab"><span class="round-tab">6</span> <i>Step 11</i></a>
												</li>
											</ul>
										</div>
										<form role="form" action="<?= base_url('home/bnrSubmit'); ?>" method="post" class="login-box">
											<div class="tab-content d-flex align-items-center" id="main_form">
												<div class="tab-pane active" role="tabpanel" id="step1">
													<div class="queans-boxes">
														<div class="row">
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Voy a utilizar la furgoneta para los fines
																			de semana o para viajes largos?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q1" id="ans1" class="d-none" value="FINES DE SEMANA" checked>
																			<label for="ans1">FINES DE SEMANA </label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q1" id="ans2" class="d-none" value="LARGOS">
																			<label for="ans2">LARGOS</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row justify-content-end align-items-end bottom-info">
														</div>
													</div>
													<div class="col-lg-12 mt-lg-3 mt-3 text-center">
														<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="1">Siguiente</button>
														</li>
													</div>
												</div>
												<div class="tab-pane" role="tabpane2" id="step2">
													<div class="queans-boxes">
														<div class="row">
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Quiero una ducha interior o exterior?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q2" id="ans3" class="d-none" value="EXTERIOR" checked>
																			<label for="ans3">EXTERIOR </label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q2" id="ans4" class="d-none" value="INTERIOR">
																			<label for="ans4">INTERIOR</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row justify-content-end align-items-end bottom-info">
														</div>
													</div>
													<div class="row justify-content-center align-items-center mt-lg-3 mt-2">
														<div class="col-md-4 text-md-left text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-2 previous-btn" data-step="1">ANTERIOR</button>
															</li>
														</div>
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="2">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step3">
													<div class="queans-boxes">
														<div class="row">
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Quiero una ducha fija o extraible?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q3" id="ans5" class="d-none" value="FIJA" checked>
																			<label for="ans5">FIJA</label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q3" id="ans6" class="d-none" value="EXTRAIBLE">
																			<label for="ans6">EXTRAIBLE</label>
																		</div>
																	</div>
																</div>
															</div>
															<!--<div class="col-md-12">-->
															<!--	<div class="ques-ans">-->
															<!--		<div class="ques">-->
															<!--			<h5 class="font-weight-bold">-->
															<!--				<i-->
															<!--				class="fas fa-caret-right text-green"></i>-->
															<!--				¿ Quiero WC para hacer mis necesidades?-->
															<!--			</h5>-->
															<!--		</div>-->
															<!--		<div class="ans">-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q4" id="ans7"-->
															<!--				class="d-none" value="SI">-->
															<!--				<label for="ans7">SI</label>-->
															<!--			</div>-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q4" id="ans8"-->
															<!--				class="d-none" value="No">-->
															<!--				<label for="ans8">No</label>-->
															<!--			</div>-->
															<!--		</div>-->
															<!--	</div>-->
															<!--</div>-->
														</div>
														<div class="row justify-content-between justify-content-md-around align-items-end bottom-info">
														</div>
													</div>
													<div class="row justify-content-center align-items-center mt-lg-3 mt-2">
														<div class="col-md-4 text-md-left text-center text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-2 previous-btn" data-step="2">ANTERIOR</button>
															</li>
														</div>
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="3">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpane1" id="step4">
													<div class="queans-boxes">
														<div class="row">
															<!--<div class="col-md-12">-->
															<!--	<div class="ques-ans">-->
															<!--		<div class="ques">-->
															<!--			<h5 class="font-weight-bold">-->
															<!--				<i-->
															<!--				class="fas fa-caret-right text-green"></i>-->
															<!--				¿ Quiero una ducha fija o extraible ?-->
															<!--			</h5>-->
															<!--		</div>-->
															<!--		<div class="ans">-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q3" id="ans5"-->
															<!--				class="d-none" value="FIJA">-->
															<!--				<label for="ans5">FIJA</label>-->
															<!--			</div>-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q3" id="ans6"-->
															<!--				class="d-none" value="EXTRAIBLE">-->
															<!--				<label for="ans6">EXTRAIBLE</label>-->
															<!--			</div>-->
															<!--		</div>-->
															<!--	</div>-->
															<!--</div>-->
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Quiero WC para hacer mis necesidades?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q4" id="ans7" class="d-none" value="SI" checked>
																			<label for="ans7">SI</label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q4" id="ans8" class="d-none" value="No">
																			<label for="ans8">NO</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row justify-content-center align-items-center bottom-info mt-lg-3 mt-2">
														<div class="col-md-4 text-md-left text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-2 previous-btn" data-step="3">ANTERIOR</button>
															</li>
														</div>
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="4">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step5">
													<div class="queans-boxes">
														<div class="row">
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Quiero gastarme mucho o poco?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q5" id="ans77" class="d-none" value="MUCHO" checked>
																			<label for="ans77">MUCHO</label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q5" id="ans88" class="d-none" value="POCO">
																			<label for="ans88">POCO</label>
																		</div>
																	</div>
																</div>
															</div>
															<!--<div class="col-md-12">-->
															<!--	<div class="ques-ans">-->
															<!--		<div class="ques">-->
															<!--			<h5 class="font-weight-bold">-->
															<!--				<i-->
															<!--				class="fas fa-caret-right text-green"></i>-->
															<!--				¿ Vas a viajar solo, con una mascota, con tu-->
															<!--				pareja o con tu familia ?-->
															<!--			</h5>-->
															<!--		</div>-->
															<!--		<div class="ans">-->
															<!--			<div class="row">-->
															<!--				<div class="col-md-6">-->
															<!--					<div class="form-group radio-data">-->
															<!--						<input type="radio" name="q6"-->
															<!--						id="ans9" class="d-none" value="SOLO">-->
															<!--						<label for="ans9">SOLO</label>-->
															<!--					</div>-->
															<!--				</div>-->
															<!--				<div class="col-md-6">-->
															<!--					<div class="form-group radio-data">-->
															<!--						<input type="radio" name="q6"-->
															<!--						id="ans10" class="d-none" value="PAREJA">-->
															<!--						<label for="ans10">PAREJA</label>-->
															<!--					</div>-->
															<!--				</div>-->
															<!--				<div class="col-md-6">-->
															<!--					<div class="form-group radio-data">-->
															<!--						<input type="radio" name="q6"-->
															<!--						id="ans11" class="d-none" value="MASCOTA">-->
															<!--						<label for="ans11">MASCOTA</label>-->
															<!--					</div>-->
															<!--				</div>-->
															<!--				<div class="col-md-6">-->
															<!--					<div class="form-group radio-data">-->
															<!--						<input type="radio" name="q6"-->
															<!--						id="ans12" class="d-none" value="FAMILIA">-->
															<!--						<label for="ans12">FAMILIA</label>-->
															<!--					</div>-->
															<!--				</div>-->
															<!--			</div>-->
															<!--		</div>-->
															<!--	</div>-->
															<!--</div>-->
														</div>
													</div>
													<div class="row justify-content-center align-items-center bottom-info mt-lg-3 mt-2">
														<div class="col-md-4 text-md-left text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-2 previous-btn" data-step="4">ANTERIOR</button>
															</li>
														</div>
														<!-- <div class="col-md-4 text-center">-->
														<!--   <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />-->
														<!--</div> -->
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="5">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step6">
													<div class="queans-boxes">
														<div class="row">
															<!--<div class="col-md-12">-->
															<!--	<div class="ques-ans">-->
															<!--		<div class="ques">-->
															<!--			<h5 class="font-weight-bold">-->
															<!--				<i-->
															<!--				class="fas fa-caret-right text-green"></i>-->
															<!--				¿ Quiero gastarme mucho o poco ?-->
															<!--			</h5>-->
															<!--		</div>-->
															<!--		<div class="ans">-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q5" id="ans7"-->
															<!--				class="d-none" value="MUCHO">-->
															<!--				<label for="ans7">MUCHO</label>-->
															<!--			</div>-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q5" id="ans8"-->
															<!--				class="d-none" value="POCO">-->
															<!--				<label for="ans8">POCO</label>-->
															<!--			</div>-->
															<!--		</div>-->
															<!--	</div>-->
															<!--</div>-->
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Vas a viajar solo, con una mascota, con tu
																			pareja o con tu familia?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group radio-data">
																					<input type="radio" name="q6" id="ans9" class="d-none" value="SOLO" checked>
																					<label for="ans9">SOLO</label>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group radio-data">
																					<input type="radio" name="q6" id="ans10" class="d-none" value="PAREJA">
																					<label for="ans10">PAREJA</label>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group radio-data">
																					<input type="radio" name="q6" id="ans11" class="d-none" value="MASCOTA">
																					<label for="ans11">MASCOTA</label>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group radio-data">
																					<input type="radio" name="q6" id="ans12" class="d-none" value="FAMILIA">
																					<label for="ans12">FAMILIA</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row justify-content-center align-items-center bottom-info mt-lg-3 mt-2">
														<div class="col-md-4 text-md-left text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-2 previous-btn" data-step="5">ANTERIOR</button>
															</li>
														</div>
														<!-- <div class="col-md-4 text-center">-->
														<!--   <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />-->
														<!--</div>-->
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="6">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step7">
													<div class="queans-boxes">
														<div class="row">
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Quieres cocina interior o exterior?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q7" id="ans13" class="d-none" value="INTERIOR" checked>
																			<label for="ans13">INTERIOR </label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q7" id="ans14" class="d-none" value="EXTERIOR">
																			<label for="ans14">EXTERIOR</label>
																		</div>
																	</div>
																</div>
															</div>
															<!--<div class="col-md-12">-->
															<!--	<div class="ques-ans">-->
															<!--		<div class="ques">-->
															<!--			<h5 class="font-weight-bold">-->
															<!--				<i-->
															<!--				class="fas fa-caret-right text-green"></i>-->
															<!--				¿ Cuanto tiempo quiero dedicarle a la-->
															<!--				camperizaciOn ?-->
															<!--			</h5>-->
															<!--		</div>-->
															<!--		<div class="ans">-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q8" id="ans15"-->
															<!--				class="d-none" value="MUCHO">-->
															<!--				<label for="ans15">MUCHO </label>-->
															<!--			</div>-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q8" id="ans16"-->
															<!--				class="d-none" value="ALGO MODESTO">-->
															<!--				<label for="ans16">ALGO MODESTO</label>-->
															<!--			</div>-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q8" id="ans17"-->
															<!--				class="d-none" value="POCO">-->
															<!--				<label for="ans17">POCO </label>-->
															<!--			</div>-->
															<!--		</div>-->
															<!--	</div>-->
															<!--</div>-->
														</div>
													</div>
													<div class="row justify-content-center align-items-center bottom-info mt-lg-3 mt-3">
														<div class="col-md-4 text-md-left text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-2 previous-btn" data-step="6">ANTERIOR</button>
															</li>
														</div>
														<!-- <div class="col-md-4 text-center">-->
														<!--   <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />-->
														<!--</div>-->
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="7">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step8">
													<div class="queans-boxes">
														<div class="row">
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Cuánto tiempo quiero dedicarle a la
																			camperización?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q8" id="ans15" class="d-none" value="MUCHO" checked>
																			<label for="ans15">MUCHO </label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q8" id="ans16" class="d-none" value="ALGO MODESTO">
																			<label for="ans16">LO NORMAL</label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q8" id="ans17" class="d-none" value="POCO">
																			<label for="ans17">POCO </label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row justify-content-center align-items-center bottom-info mt-lg-3 mt-3">
														<div class="col-md-4 text-md-left text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-2 previous-btn" data-step="7">ANTERIOR</button>
															</li>
														</div>
														<!-- <div class="col-md-4 text-center">-->
														<!--   <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />-->
														<!--</div>-->
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="8">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step9">
													<div class="queans-boxes">
														<div class="row">
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Quieres una furgoneta para viajar o vivir?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q9" id="ans18" class="d-none" value="VIAJAR" checked>
																			<label for="ans18">VIAJAR</label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q9" id="ans19" class="d-none" value="VIVIR">
																			<label for="ans19">VIVIR</label>
																		</div>
																	</div>
																</div>
															</div>
															<!--<div class="col-md-12">-->
															<!--	<div class="ques-ans">-->
															<!--		<div class="ques">-->
															<!--			<h5 class="font-weight-bold">-->
															<!--				<i-->
															<!--				class="fas fa-caret-right text-green"></i>-->
															<!--				Cuantos deportes voy a practicer cuando use-->
															<!--				mi furgoneta camper ?-->
															<!--			</h5>-->
															<!--		</div>-->
															<!--		<div class="ans">-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q10" id="ans20"-->
															<!--				class="d-none" value="NINGUNO">-->
															<!--				<label for="ans20">NINGUNO</label>-->
															<!--			</div>-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q10" id="ans21"-->
															<!--				class="d-none" value="UNO 0 DOS">-->
															<!--				<label for="ans21">UNO 0 DOS</label>-->
															<!--			</div>-->
															<!--			<div class="form-group radio-data">-->
															<!--				<input type="radio" name="q10" id="ans22"-->
															<!--				class="d-none" value="MAS DE DOS">-->
															<!--				<label for="ans22">MAS DE DOS</label>-->
															<!--			</div>-->
															<!--		</div>-->
															<!--	</div>-->
															<!--</div>-->
														</div>
													</div>
													<div class="row justify-content-center align-items-center bottom-info mt-lg-3 mt-2">
														<div class="col-md-4 text-md-left text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-2 previous-btn" data-step="8">ANTERIOR</button>
															</li>
														</div>
														<!-- <div class="col-md-4 text-center">-->
														<!--   <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />-->
														<!--</div>-->
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-2 next-btn" data-step="9">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step10">
													<div class="queans-boxes">
														<div class="row">
															<div class="col-md-12">
																<div class="ques-ans">
																	<div class="ques">
																		<h5 class="font-weight-bold">
																			<i class="fas fa-caret-right text-green"></i>
																			¿Cuántos deportes voy a practicar cuando use
																			mi furgoneta camper?
																		</h5>
																	</div>
																	<div class="ans">
																		<div class="form-group radio-data">
																			<input type="radio" name="q10" id="ans20" class="d-none" value="NINGUNO" checked>
																			<label for="ans20">NINGUNO</label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q10" id="ans21" class="d-none" value="UNO 0 DOS">
																			<label for="ans21">UNO 0 DOS</label>
																		</div>
																		<div class="form-group radio-data">
																			<input type="radio" name="q10" id="ans22" class="d-none" value="MAS DE DOS">
																			<label for="ans22">MAS DE DOS</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row justify-content-center align-items-center bottom-info mt-lg-3 mt-3">
														<div class="col-md-4 text-md-left text-center">
															<button type="button" class="primary-btn text-uppercase prev-step mb-md-0 mb-3 previous-btn" data-step="9">ANTERIOR</button>
															</li>
														</div>
														<!-- <div class="col-md-4 text-center">-->
														<!--   <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />-->
														<!--</div>-->
														<div class="col-md-4 text-md-right text-center">
															<button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-3 next-btn" data-step="10">Siguiente</button>
															</li>
														</div>
													</div>
												</div>
												<div class="tab-pane" role="tabpanel" id="step11">
													<div class="row">
														<div class="col-12 text-center">
															<h3 class="text-blue font-weight-bold">
																Déjanos tu e-mail para descargar tu respuesta
															</h3>
														</div>
													</div>
													<div class="queans-boxes">
														<div class="row align-items-center">
															<div class="col-lg-10 col-md-9">
																<div class="form-group">
																	<label>Correo*</label>
																	<div class="input-btn">
																		<input required type="email" oninvalid="this.setCustomValidity('Por favor, rellene esta casilla')" onchange="this.setCustomValidity('')" name="bnr_questions_email" id="email" class="w-100 field" placeholder="Tu direccion de correo electronico" />
																		<div class="g-recaptcha mt-2" data-sitekey=""></div>
																		<div class="form-group checkbox-data mt-3">
																			<input type="checkbox" id="acceptance" name="acceptance" class="text-dark d-none" required />
																			<label for="acceptance" class="mb-0">Acepto la <a href="<?= base_url('privacy'); ?>">política de privacidad</a></label>
																		</div>
																		<button type="submit" class="email-btn">
																			<i class="fas fa-arrow-right"></i>
																		</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="right-content  ml-lg-4 mt-lg-0 pt-md-5 pt-4 camperizon w-100 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="banner-slider">
								<div class="item">
									<h2 class="text-orange text-lg-left text-md-center text-left mb-2   ml-lg-5">
										MANUAL
										<!--<span class="text-white">-->
										<!--WABI SABI-->
										<!--</span>-->
										DE CAMPERIZACIÓN
									</h2>
									<p class="text-white   ml-lg-5">¡APRENDE A CAMPERIZAR TU FURGONETA PASO A PASO! </p>
									<div class="row justify-content-center mb-4">
										<div class="col-xl-10 text-center">
											<img src="<?= base_url('assets/front/img/book_updated.jpeg'); ?>" alt="" class="mb-5 ml-auto mr-auto w-50" />
											<div class="right-desc">
												<a href="<?= base_url('Manual-de-Camperizacion'); ?>" class="primary-btn">
													VER MANUAL
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="right-content  ml-lg-4 mt-lg-0 pt-md-5 pt-4 vid_main w-100 tab-pane fade" id="vid_main" role="tabpanel" aria-labelledby="vid_main-tab">
							<div class="banner-slider">
								<div class="item">
									<h2 class="text-orange text-lg-left text-md-center text-left mb-0 ml-lg-5">
										CURSO DE CAMPERIZACIÓN
									</h2>
									<P class="text-white ml-lg-5">
										EL PRIMER CURSO QUE TE ENSEÑA A CAMPERIZAR UNA FURGONETA DESDE CERO
									</P>
									<div class="row justify-content-center mb-4">
										<div class="col-xl-10 text-center">
											<img src="<?= base_url('assets/front/img/screen-monitor.png'); ?>" alt="" />
											<div class="right-desc">
												<!-- <p class="text-white">
													El primer curso que te enseña a camperizar una furgoneta
													desde cero, paso a paso y sin conocimientos previos
												</p> -->
												<a href="<?= base_url('grade'); ?>" class="primary-btn mt-5">
													QUIERO APUNTARME
												</a>
											</div>
										</div>
									</div>
									<!-- <a href="https://www.youtube.com/watch?v=j2XHj122NMY" data-fancybox="" class="play-icon">
										<i class="fas fa-play" aria-hidden="true"></i>
									</a> -->
								</div>
							</div>
						</div>
						<div class="right-content  ml-lg-4 mt-lg-0 pt-md-5 pt-4 calc_main w-10 tab-pane fade" id="calc_main" role="tabpanel" aria-labelledby="calc_main-tab">
							<div class="banner-slider">
								<div class="item">
									<h2 class="text-orange text-lg-left text-md-center text-left mb-1 ml-lg-5">
										CALCULA LOS EQUIPOS DE TU FURGONETA

									</h2>
									<P class="text-white  ml-lg-5">LA CALCULADORA CAMPER DE WABI SABI TE AYUDA A CALCULAR LOS EQUIPOS QUE NECESITA TU FURGONETA RESPONDIENDO A UNAS SENCILLAS PREGUNTAS
									</P>

									<div class="row justify-content-center mb-4">
										<div class="col-xl-11 text-center">
											<div class="row">

												<!-- <a href="<?= base_url('calculator#tabs-1'); ?>" class="calc_main_box px-2 col-lg-6 col-md-6">
													<div class="calculator_card calculator_card_main mb-3 bg-lightgray">
														<h3 class="mb-4 font-weight-bold">Calculador paneles <br>
															solar</h3>
														<img class="my-3" src="<?= base_url('assets/front/img/electro_1.png') ?>" alt="">
													</div>
												</a>
												<a href="<?= base_url('calculator#tabs-3'); ?>" class="calc_main_box px-2 col-lg-6 col-md-6">
													<div class="calculator_card calculator_card_main mb-3 bg-lightgray">
														<h3 class="mb-4 font-weight-bold">Calculador controlador <br>
															solar</h3>
														<img class="my-3" src="<?= base_url('assets/front/img/electro_2.png') ?>" alt="">
													</div>
												</a>
												<a href="<?= base_url('calculator#tabs-2'); ?>" class="calc_main_box px-2 col-lg-6 col-md-6">
													<div class="calculator_card calculator_card_main mb-3 bg-lightgray">
														<h3 class="mb-4 font-weight-bold">Calculador inversor<br>
															230 V / 12V
														</h3>
														<img class="my-3" src="<?= base_url('assets/front/img/electro_4.png') ?>" alt="">
													</div>
												</a>
												<a href="<?= base_url('calculator#tabs-2'); ?>" class="calc_main_box px-2 col-lg-6 col-md-6">
													<div class="calculator_card calculator_card_main mb-3 bg-lightgray">
														<h3 class="mb-4 font-weight-bold">Calculador bateria <br>
															secundaria</h3>
														<img class="my-3" src="<?= base_url('assets/front/img/electro_3.png') ?>" alt="">
													</div>
												</a> -->
												<img src="<?= base_url('/assets/front/img/calculadora_home.png'); ?>" class="img-fluid mx-auto" alt="">
												<div class="right-desc mt-4 col-12">
													<a href="<?= base_url('calculator'); ?>" class="primary-btn">
														DESCUBRE M&Aacute;S
													</a>
												</div>
											</div>

										</div>
									</div>
									</a>
								</div>
							</div>
						</div>
						<div class="right-content  ml-lg-4 mt-lg-0 pt-md-5 pt-4 PROFESOR w-100 tab-pane fade" id="PROFESOR" role="tabpanel" aria-labelledby="PROFESOR-tab">
							<div class="banner-slider">
								<div class="item">
									<h2 class="text-orange text-lg-left text-md-center text-left mb-0">
										HAZTE PROFESOR
									</h2>
									<P class="text-white font-weight">GANA DINERO MIENTRAS VIAJAS SIENDO PROFESOR DEL CURSO DE CAMPERIZACION WABI SABI
									</P>
									<div class="row justify-content-center mb-4">
										<div class="col-xl-11 text-center d-flex flex-column">

											<img src="<?= base_url('assets/front/img/home_bus_ppl.png'); ?>" alt="" class="img-fluid">
											<a href="<?= base_url('work'); ?>" class="secondary-btn mx-auto mt-5">
												TRABAJA AQU&iacute;
											</a>

										</div>
									</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<ul class="nav nav-tabs tabs-home ml-xl-5 ml-lg-4 mb-5 mt-md-2 mt-5" id="myTab" role="tablist">

						<button class="prev_tabs"><i class="fa fa-chevron-left"></i></button>
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="vid_main-tab" data-toggle="tab" href="#vid_main" role="tab" aria-controls="vid_main" aria-selected="false"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="calc_main-tab" data-toggle="tab" href="#calc_main" role="tab" aria-controls="calc_main" aria-selected="false"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="PROFESOR-tab" data-toggle="tab" href="#PROFESOR" role="tab" aria-controls="PROFESOR" aria-selected="false"></a>
						</li>
						<button class="next_tabs"><i class="fa fa-chevron-right"></i></button>
					</ul>
				</div>
				<div class="banner-slider">

				</div>

			</div>
		</div>
	</section>
	<!-- ./site-banner -->

	<!-- .compare-sec -->
	<section class="compare-sec bg-green pb-0 pt-lg-5 pt-md-0">
		<img src="<?= base_url('assets/front/img/black-shape.png'); ?>" alt="" class="d-lg-none w-100" />
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-5">
					<div class="content mb-lg-0 mb-4 mt-lg-0 mt-4">
						<h2 class="text-white text-md-left text-center mb-lg-5 mb-4">
							CAMPERIZAR TU FURGONETA NUNCA HABÍA SIDO TAN FÁCIL
						</h2>
						<div class="video-img text-center">
							<img style="width: 100%;" src="<?= base_url('assets/front/img/blog_2.jpeg'); ?>" alt="" />
							<a href="https://www.youtube.com/watch?v=R0Qrm51udqQ" data-fancybox="" class="play-icon">
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7">
					<div class="compare-box text-md-left text-center">
						<div class="d-md-flex ml-xl-5 align-items-center">
							<div class="img mb-ld-0">
								<img src="<?= base_url('assets/front/img/search.svg'); ?>" alt="" />
							</div>
							<div class="desc">
								<h3 class="text-uppercase text-orange font-weight-bold">
									1. ENCUENTRA TU FURGONETA IDEAL
								</h3>
								<p class="text-white">
									Si tienes claro que te gusta la Van Life y no tienes ni idea de qué furgoneta camperizar, en Wabi Sabi te ayudamos a seleccionar tu furgoneta ideal. <br /><br />
									¡Es muy fácil! Solo tienes que responder nuestro cuestionario ''¿Cuál es mi furgoneta ideal?'' y te enviaremos a tu e-mail una
									lista con las furgonetas que mejor se adaptan a tus necesidades.

									<!-- <p class="text-white">
                           Si todavÍa no lo tienes claro, alquila una furgoneta camper y vive la
                           experiencia. ¡Seguro que volverás!
                        </p> -->
							</div>
						</div>
					</div>
					<div class="compare-box text-md-left text-center">
						<div class="d-md-flex ml-xl-5 align-items-center">
							<div class="img mb-ld-0">
								<img src="<?= base_url('assets/front/img/monitor.svg'); ?>" alt="" />
							</div>
							<div class="desc">
								<h3 class="text-uppercase text-orange font-weight-bold">
									2. COMPRA EL MANUAL WABI SABI
								</h3>
								<p class="text-white">
									Un Manual de 300 páginas donde te enseñamos a camperizar tu furgoneta, con más de 500 ilustraciones, presupuestos para la camperización
									de diferentes furgonetas, esquemas, explicaciones detalladas del proceso de construcción, planos de furgonetas,
									, descuentos para el proceso de homologación y mucho más... <br /><br />
									¡Toda la información que necesitas en un solo lugar!
								</p>
								<!-- <p class="text-white">
                           Créeme si mi abuela lo intentase, ella también podría.
                        </p> -->
							</div>
						</div>
					</div>
					<div class="compare-box text-md-left text-center">
						<div class="d-md-flex ml-xl-5 align-items-center">
							<div class="img mb-ld-0">
								<img src="<?= base_url('assets/front/img/people.svg'); ?>" alt="" />
							</div>
							<div class="desc">
								<h3 class="text-uppercase text-orange font-weight-bold">
									3. USA LA CALCULADORA CAMPER
								</h3>
								<p class="text-white">
									En Wabi Sabi hemos creado una calculadora que te ayuda a seleccionar los equipos que necesitas en función de tus necesidades.
									Responde unas sencillas preguntas y averigua las especificaciones que necesitan los equipos que necesita tu furgoneta. <br /><br />
									¿A qué estás esperando? ¡Pruéba ahora nuestra versión gratuita!
								</p>
								<!-- <p class="text-white">
                        </p> -->
								<!-- <p class="text-white">
                           Conoce nuevos lugares, gente interesante y disfruta de la libertad.
                        </p> -->
							</div>
						</div>
					</div>
					<div class="compare-box text-md-left text-center">
						<div class="d-md-flex ml-xl-5 align-items-center">
							<div class="img mb-ld-0">
								<img src="<?= base_url('assets/front/img/icon4444.png'); ?>" alt="" />
							</div>
							<div class="desc">
								<h3 class="text-uppercase text-orange font-weight-bold">
									4. GANA DINERO EN NUESTRA PLATAFORMA
								</h3>
								<p class="text-white">
									Ganar dinero mientras viajas no es un sueño, es una realidad y con esta plataforma te vamos a ayudar a ello. <br /><br />
									¡En Wabi Sabi te ofrecemos la oportunidad de poder ganar dinero mientras viajas convirtiéndote en profesor de nuestro Curso de Camperización!
								</p>
								<!-- <p class="text-white">
                           Comparte tu experiencia en la comunidad Wabi Sabi y gana dinero mientras viajas.
                        </p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--compare-sec -->
	<!-- .modules-sec -->
	<section class="modules-sec bg-orange pt-0 pb-0 position-relative overflow-hidden">
		<img src="<?= base_url('assets/front/img/green-shape.png'); ?>" alt="" class="d-lg-block w-100" />
		<div class="container">
			<div class="row">
				<div class="col-12 mt-xl-5">
					<div class="content text-center mb-lg-0 mb-4 mt-lg-0 mt-4">
						<h2 class="text-green mb-lg-5 mb-4">
							MANUAL PASO A PASO
						</h2>
					</div>
				</div>
			</div>
			<!-- <div class="row">
            <div class="col-12 text-center">
            	<img src="<?= base_url('assets/front/img/modules-img.png'); ?>" alt="" />
            </div>
         </div> -->
			<d iv class="row all-modules d-md-flex d-none">
				<div class="col-12">
					<div class="row module-listing justify-content-center">
						<div class="col-xl-4 col-lg-4 col-md-6 modules module1">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module1.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 1</h4>
										<p class="text-white text-uppercase">
											INTRODUCCIÓN
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											Te enseñamos todo lo que necesitas saber antes de empezar la camperización de tu furgoneta,
											el proceso que recomendamos seguir y nuestra historia de cómo empezamos esta aventura. Infórmate sobre cuánto
											cuesta camperizar una furgoneta ,cuánto tiempo se tarda en hacerlo y cuál es la furgoneta que mejor se
											adapta a tus necesidades.
										</p>
									</div>
								</div>
							</div>
							<div class="car-img">
								<img src="<?= base_url('assets/front/img/module1-car.png'); ?>" alt="" class="" />
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 modules module2">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module3.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 3</h4>
										<p class="text-white text-uppercase">
											DISEÑO
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											En este capítulo te vamos a enseñar dónde puedes encontrar la inspiración que necesitas para crear el diseño inicial, y
											también te ayudaremos a crearlo con ayuda de los planos de las furgonetas
											medianas y grandes más camperizadas del mercado. Además, te diremos cómo distribuir de manera eficiente los equipos tales como la batería,
											los depósitos, bombas, inversores y muchos más.
										</p>
									</div>
								</div>
							</div>
							<div class="car-img">
								<img src="<?= base_url('assets/front/img/module1-car.png'); ?>" alt="" class="" />
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 modules module3">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module4.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 4 Y 5</h4>
										<p class="text-white text-uppercase">
											FASE DE CONSTRUCCIÓN
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											En este capítulo te explicamos paso a paso todo lo que necesitas
											saber del proceso constructivo: puesta a punto, aislamiento, revestimiento,
											sistema eléctrico, sistema de agua, fabricación de muebles, cama, ducha
											y mucho más.
										</p>
									</div>
								</div>
							</div>
							<div class="car-img">
								<img src="<?= base_url('assets/front/img/module1-car.png'); ?>" alt="" class="" />
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 modules module4">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module2.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 2</h4>
										<p class="text-white text-uppercase">
											PLANIFICACIÓN DEL PROCESO
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											Te mostramos cómo planificar
											el proceso de camperización: presupuestos, herramientas, esquemas, planificación de tiempo, lista de materiales
											y recomendaciones previas que necesitas saber antes de empezar. Además, en este capítulo diferentes
											Wabi-Sabi@s te muestran sus furgonetas camperizadas y su proceso de aprendizaje.
									</div>
								</div>
							</div>
							<div class="car-img">
								<img src="<?= base_url('assets/front/img/module1-car.png'); ?>" alt="" class="" />
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 modules module5">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module5.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 6</h4>
										<p class="text-white text-uppercase">
											HOMOLOGACIÓN Y VAN LIFE
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											Hacer papeleos e informarse de que se necesita para pasar la ITV es algo que a todo el mundo
											le da mucho miedo. En este capítulo te guiamos y te explicamos lo que necesitas para homologar tu furgoneta camper.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="module-shape">
						<img src="<?= base_url('assets/front/img/module-shape.png'); ?>" alt="" class="w-100" />
					</div>
				</div>
		</div>
		<div class="row all-modules d-md-none">
			<div class="col-12 module-listing">
				<div class="row modules-slider">
					<div class="owl-carousel">
						<div class="item modules">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module1.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 1</h4>
										<p class="text-white text-uppercase">
											SELECCIÓN DE FURGONETA
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											Te enseñamos todo lo que necesitas saber antes de empezar la camperización de tu furgoneta,
											el proceso que recomendamos seguir y nuestra historia de cómo empezamos esta aventura. Infórmate sobre cuánto
											cuesta camperizar una furgoneta ,cuánto tiempo se tarda en hacerlo y cuál es la furgoneta que mejor se
											adapta a tus necesidades.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item modules">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module2.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 2</h4>
										<p class="text-white text-uppercase">
											PLANIFICACIÓN DEL PROCESO
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											Te mostramos cómo planificar
											el proceso de camperización: presupuestos, herramientas, esquemas, planificación de tiempo, lista de materiales
											y recomendaciones previas que necesitas saber antes de empezar.Además, en este capítulo diferentes
											Wabi-Sabi@s te muestran sus furgonetas camperizadas y su proceso de aprendizaje.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item modules">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module3.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 3</h4>
										<p class="text-white text-uppercase">
											FASE DE CONSTRUCCIÓN
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											En este capítulo te vamos a enseñar dónde puedes encontrar la inspiración que necesitas para crear el diseño inicial, y
											también te ayudaremos a crearlo con ayuda de los planos de las furgonetas
											medianas y grandes más camperizadas del mercado. Además, te diremos cómo distribuir de manera eficiente los equipos tales
											como la batería,
											los depósitos, bombas, inversores y mucho más.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="items modules">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module4.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 4 Y 5</h4>
										<p class="text-white text-uppercase">
											CAMPERIZACIONES
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											En este capítulo te explicamos paso a paso todo lo que necesitas
											saber del proceso constructivo: puesta a punto, aislamiento, revestimiento,
											sistema eléctrico, sistema de agua, fabricación de muebles, cama, ducha
											y mucho más.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="item modules">
							<div class="module-box">
								<div class="front-box">
									<div class="icon">
										<img src="<?= base_url('assets/front/img/module5.svg'); ?>" alt="" />
									</div>
									<div class="content">
										<h4 class="text-orange mt-3 mb-3">CAPÍTULO 6</h4>
										<p class="text-white text-uppercase">
											HOMOLOGACIÓN Y FUTURAS MEJORAS
										</p>
									</div>
								</div>
								<div class="back-box">
									<div class="text-white">
										<p class="mb-0">
											Hacer papeleos e informarse de que se necesita para pasar la ITV es algo que a todo el mundo
											le da mucho miedo. En este capítulo te guiamos y te explicamos lo que necesitas para homologar tu furgoneta camper.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center mt-xl-0 p-0">
				<a href="<?= base_url('Manual-de-Camperizacion'); ?>" class="secondary-btn">
					COMPRAR
				</a>
			</div>
		</div>
		</div>
	</section>
	<!-- ./modules-sec -->
	<!-- .all-products -->
	<section class="all-products pt-0">
		<img src="<?= base_url('assets/front/img/orange-shape.png'); ?>" alt="" class="d-lg-block w-100" />
		<div class="container">
			<div class="row justify-content-center text-center mt-xl-0 mt-4 all-product-slider">
				<div class="owl-carousel">

					<?php foreach ($home_slider_one as $d) : ?>
						<div class="item mt-xl-5">
							<div class="product-img mb-lg-0 mb-4">
								<img src="<?= base_url('uploads/home_slider_one/') . $d['image']; ?>" alt="" />
							</div>
						</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</section>
	<!-- ./all-products -->
	<!--<section class="campare_sec">-->
	<!--	<div class="container">-->
	<!--		<div class="row text-white justify-content-left text-center">-->
	<!--			<div class="para_camp col-xl-4 col-lg-6 mb-5">-->
	<!--				 <img src="<?= base_url('assets/front/img/img-2.png'); ?>" alt=""> -->
	<!--				<h2 class="mb-3">Manual de Camperización</h2>-->
	<!--				<p>Un manual para camperizar tu furgoneta-->
	<!--					camper paso a paso sin conocimientos previos-->
	<!--				</p>-->
	<!--				<div class="btn_compare">-->
	<!--					<a href="<?= base_url('Manual-de-Camperizacion'); ?>" class="primary-btn text-uppercase px-5">-->
	<!--						COMPRAR-->
	<!--					</a>-->
	<!--				</div>-->
	<!--             <div class="d-flex align-items-center justify-content-between">-->
	<!--               <div>-->
	<!--               	<img src="<?= base_url('assets/front/img/tools_side.png'); ?>" alt="">-->
	<!--               </div>-->
	<!--               <div>-->
	<!--               	<img src="<?= base_url('assets/front/img/img-1.png'); ?>" alt="">-->
	<!--               </div>-->
	<!--            </div>-->
	<!--         </div>-->
	<!--      </div>-->
	<!--   </div>-->
	<!--</section>-->
	<img src="<?= base_url('assets/front/img/green-shape-up.png'); ?>" alt="" class="d-lg-block w-100" />
	<section class="comparization-sec carso-sec3 bg-green pt-0 pb-0">
		<div class="container">
			<div class="row pt-5 pb-5 align-items-center">
				<div class="col-lg-6">
					<div class="row align-items-center pt-xl-5 pb-xl-5 text-md-left text-center">
						<div class="col-md-5">
							<img src="<?= base_url('assets/front/img/circle-img.svg'); ?>" alt="" class="circle_logo w-75 mb-md-0 mb-4" />
						</div>
						<div class="col-md-7">
							<h3 class="text-white mb-4">
								Descubre nuestra
								CALCULADORA
								CAMPER
							</h3>
							<a href="<?= base_url('/calculator'); ?>" class="primary-btn">
								¡Enseñame más!
							</a>
							<p class="text-white mt-4">
								Prueba GRATIS la calculadora camper WABI SABI que te ayudará a dimensionar los sistemas de tu furgoneta camper
							</p>
						</div>
						<div class="col-12">
							<div class="mt-4 text-white">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="cust-info">
						<div class="info">
							<p>
								Usando nuestra calculadora eléctrica te
								ayudaremos a dimensionar tu equipo
								eléctrico respondiendo unas sencillas
								preguntas
							</p>
							<h5 class="mt-4">Wabi Sabi</h5>
						</div>
						<div class="cust-img">
							<img src="<?= base_url('assets/front/img/white-logo.svg'); ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="book_carosuel bg-gray">
		<img src="<?= base_url('assets/front/img/green-shape.png'); ?>" alt="" class="d-lg-block w-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="font-weight-bold text-center mb-1">¡ECHA UN VISTAZO!</h2>
				</div>
			</div>
			<div class="row justify-content-center align-items-center text-center">
				<div class="col-xl-10 col-lg-8 col-md-10">
					<div class="testi-slider">
						<div class="owl-carousel">

							<?php foreach ($home_slider_two as $d) : ?>
								<div class="item">
									<div>
										<img src="<?= base_url('uploads/home_slider_two/') . $d['image']; ?>" alt="">
									</div>
								</div>
							<?php endforeach; ?>

						</div>
						<button class="primary-btn text-uppercase px-5 btn-cart-show">
							COMPRAR
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- .courses-sec -->
	<section class="courses-sec pt-0">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-xl-8">
					<h2 class="text-green">
						Este curso está pensado para ti...
					</h2>
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-xl-9 justify-content-center">
					<div class="courses-slider d-flex flex-column align-items-center">
						<div class="owl-carousel">
							<div class="item">
								<div class="course-box text-center">
									<img src="<?= base_url('assets/front/img/icon1.svg'); ?>" alt="" class="mb-lg-4" />
									<h4>
										Si empiezas desde cero
									</h4>
									<p>
										Formación 100% práctica que no requiere de conocimientos previos. Aprenderás cómo camperizar una furgoneta con instrucciones
										precisas y fáciles de entender.
									</p>
								</div>
							</div>
							<div class="item">
								<div class="course-box text-center">
									<img src="<?= base_url('assets/front/img/icon2.svg'); ?>" alt="" class="mb-lg-4" />
									<h4>
										Si dispones de poco tiempo
									</h4>
									<p>
										Te ayudamos a organizar tu horario. Te explicamos cuánto tiempo tienes que invertir en cada uno de los procesos de camperización.
									</p>
								</div>
							</div>
							<div class="item">
								<div class="course-box text-center">
									<img src="<?= base_url('assets/front/img/icon3.svg'); ?>" alt="" class="mb-lg-4" />
									<h4>
										Si no sabes nada sobre construcción
									</h4>
									<p>
										Te mostramos en cada proceso las herramientas que necesitas. Aprenderás a
										utilizarlas con instrucciones claras y sencillas.
									</p>
								</div>
							</div>
						</div>
						<a href="<?php echo base_url('/grade') ?>" class="secondary-btn">
							VER CURSO
						</a>
					</div>
				</div>
			</div>
		</div>
		<img src="<?= base_url('assets/front/img/blue-shape.png'); ?>" alt="" class="d-lg-block shape-img w-100" />
	</section>
	<!-- ./courses-sec -->
	<!-- .aboveall-sec -->
	<section class="aboveall-sec pb-0 pb-0">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-xl-8">

					<h2 class="text-white">
						Pero sobre todo...
					</h2>
				</div>
			</div>
			<div class="row justify-content-center mt-4 mb-5">
				<div class="col-xl-9 justify-content-center">
					<div class="courses-slider">
						<div class="owl-carousel">
							<div class="item">
								<div class="course-box course-box2  text-center">
									<img src="<?= base_url('assets/front/img/icon4.svg'); ?>" alt="" class="mb-lg-4" />
									<p class="font-weight-bold">
										Si te gustan los retos y las aventuras
									</p>
								</div>
							</div>
							<div class="item">
								<div class="course-box course-box2 text-center">
									<img src="<?= base_url('assets/front/img/icon5.svg'); ?>" alt="" class="mb-lg-4" />
									<p class="font-weight-bold">
										Si quieres viajar donde quieras por la mitad de precio y con las mejores
										vistas
									</p>
								</div>
							</div>
							<div class="item">
								<div class="course-box course-box2 text-center">
									<img src="<?= base_url('assets/front/img/icon6.svg'); ?>" alt="" class="mb-lg-4" />
									<p class="font-weight-bold">
										Si te gusta disfrutar de los pequeños placeres de la vida
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<img src="<?= base_url('assets/front/img/orange-shape-up.png'); ?>" alt="" class="d-lg-block w-100" />
	</section>
	<!-- ./aboveall-sec -->
	<!-- .doubt-sec -->
	<section class="doubt-sec bg-orange p-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-lg-left text-center mb-lg-0 mb-4">
					<h2 class="text-white mb-4">
						<span class="rotate">?</span>
						Tienes dudas?
					</h2>
					<h3 class="mb-4">
						PROGRAMA UNA LLAMADA CON NUESTRO
						EQUIPO Y RESUELVE TODAS TUS DUDAS
					</h3>
					<a href="https://calendly.com/wabisabi-vanlife/15min?back=1&month=2022-07" class="secondary-btn" target="_blank">
						PROGRAMAR LLAMADA
					</a>
				</div>
				<div class="col-lg-6">
					<div class="mobile-img text-lg-right text-center">
						<img src="<?= base_url('assets/front/img/mobile_gif.gif'); ?>" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./doubt-sec -->
	<!-- .faq-sec -->
	<section class="faq-sec pt-0 pb-0">
		<img src="<?= base_url('assets/front/img/orange-shape.png'); ?>" alt="" class="d-lg-block w-100" />
		<div class="container">
			<div class="row align-items-center pt-4 text-lg-left text-center">
				<div class="col-lg-6">
					<h2 class="text-orange mb-4">
						PREGUNTAS FRECUENTES
					</h2>
					<p>
						Respondemos todas las preguntas frecuentes que tienen todos los Wabi Sabios y Wabi Sabias al
						principio
					</p>
					<a href="<?= base_url('faq'); ?>" class="primary-btn">
						¿Dudas?
					</a>
				</div>
			</div>
		</div>
		<div class="products-slider mt-5">
			<div class="owl-carousel owl-theme">

				<?php foreach ($home_slider_three as $d) : ?>
					<div class="item">
						<div class="product-box text-center">
							<img src="<?= base_url('uploads/home_slider_three/') . $d['image']; ?>" alt="" class="w-100" />
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
		<div class="container">
			<div class="row justify-content-center align-items-center text-center mt-4">
				<div class="col-xl-5 col-lg-8 col-md-10">
					<h4 class="text-white">
						TÚ TAMBIÉN PUEDES HACERLO
						EN POCO TIEMPO Y CON LA AYUDA QUE NECESITAS
					</h4>
					<a href="<?php echo base_url('/book') ?>" class="primary-btn" data-group="1">
						VER MANUAL
					</a>

				</div>
			</div>
		</div>
		<img src="<?= base_url('assets/front/img/orange-shape-up.png'); ?>" alt="" class="d-lg-block w-100" />
	</section>
	<!-- ./faq-sec -->
	<!-- .opertunity-sec -->
	<section class="opertunity-sec bg-orange">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-xl-5 col-lg-6">
					<h2>
						ADEMÁS,TIENES LA OPORTUNIDAD DE SER PROFESOR DEL CURSO
					</h2>
				</div>
				<div class="col-xl-5 col-lg-6 text-center">
					<img src="<?= base_url('assets/front/img/train-img.png'); ?>" alt="" class="mb-4" />
					<p>
						¡GANA DINERO ONLINE DESDE DÓNDE QUIERAS Y CÓMO QUIERAS!
					</p>
					<a href="<?= base_url('work'); ?>" html" class="secondary-btn">
						TRABAJA AQUÍ
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- ./opertunity-sec -->
	<!-- .colaborate-sec -->
	<section class="colaborate-sec bg-green pt-0">
		<img src="<?= base_url('assets/front/img/orange-shape.png'); ?>" alt="" class="d-lg-block w-100 shape-img" />
		<div class="container">
			<div class="row justify-content-center align-items-center text-center">
				<div class="col-xl-10">
					<div class="img">
						<img src="<?= base_url('assets/front/img/book3.jpeg'); ?>" alt="" class="mb-4" />
					</div>
					<h2 class="text-white">
						¿CREES QUE PODEMOS COLABORAR DE ALGUNA FORMA?
					</h2>
					<a href="<?= base_url('contact'); ?>" class=" primary-btn">
						LLÁMANOS Y COMENTAMOS
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- ./colaborate-sec -->
	<!-- .testimonial-sec -->
	<section class="testimonial-sec py-0">
		<img src="<?= base_url('assets/front/img/green-shape.png'); ?>" alt="" class="d-lg-block w-100 shape-img" />
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 text-center">
					<h2 class="text-orange mb-0">
						COMUNIDAD WABI SABI
					</h2>
				</div>
			</div>
			<div class="row justify-content-center align-items-center mt-xl-5 mt-0">
				<div class="col-xl-3 text-center">
					<img src="<?= base_url('assets/front/img/client-bg-left.png'); ?>" alt="" class="w-100 left-img d-xl-block d-none" />
				</div>
				<div class="col-xl-6 col-lg-8 col-md-10">
					<div class="testi-slider">
						<div class="owl-carousel d-flex align-items-center">
							<?php if (!empty($reviews)) { ?>
								<?php foreach ($reviews as $d) : ?>
									<div class="item">
										<div class="testi-box text-center">
											<div class="quote-img">
												<img src="<?= base_url('assets/front/img/quote-icon.png'); ?>" alt="" class="w-auto ml-auto mr-auto" />
											</div>
											<div class="desc">
												<p>
													<?= $d['msg']; ?>
												</p>
											</div>
											<div class="cilent-info">
												<h5 class="text-green font-weight-bold mb-1">
													<?= $d['name']; ?>
												</h5>
												<span><?= $d['affair']; ?></span>
											</div>
											<div class="client-img">
												<img src="<?= base_url('uploads/reviews/') . $d['image']; ?>" alt="" class="w-auto ml-auto mr-auto" />
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							<?php } else { ?>
								<p>no reviews found</p>
							<?php } ?>


						</div>
					</div>
				</div>
				<div class="col-xl-3 text-center">
					<img src="<?= base_url('assets/front/img/client-bg-right.png'); ?>" alt="" class="w-100 right-img d-xl-block d-none" />
				</div>
			</div>
		</div>
	</section>
	<!-- ./testimonial-sec -->
	<section class="contact-form review_form">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="text-orange mb-2">
						¿QUIERES DEJARNOS TU OPINIÓN SOBRE NUESTROS PRODUCTOS?
					</h2>
				</div>
			</div>
			<form action="<?= base_url('home/reviews'); ?>" method="post" enctype="multipart/form-data">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-4 col-md-5 form-group mb-3">
						<label>Tu nombre</label>
						<div class="icon-field">
							<i class="fas fa-user"></i>
							<input required type="text" name="name" id="fname" placeholder="Tu nombre" class="field w-100" />
						</div>
					</div>
					<div class="col-lg-4 col-md-5 form-group mb-3">
						<label>Tu correo electrónico</label>
						<div class="icon-field">
							<i class="fas fa-envelope"></i>
							<input required type="email" name="email" id="email" placeholder="Tu correo electrónico" class="field w-100" />
						</div>
					</div>
					<div class="col-lg-8 col-md-10 form-group mb-3">
						<label>Producto</label>
						<div class="icon-field">
							<i class="fas fa-comment-alt-lines"></i>
							<input required type="text" name="affair" id="business" placeholder="Manual de camperización, Curso, Calculadora Camper…" class="field w-100" />
						</div>
					</div>
					<div class="col-lg-8 col-md-10 form-group mb-2">
						<label>Tu mensaje</label>
						<div class="icon-field">
							<i class="fas fa-comment-alt-lines"></i>
							<textarea required name="msg" id="message" rows="5" placeholder="Tu mensaje" class="w-100 field"></textarea>
						</div>
					</div>
					<div class="col-lg-8 col-md-10 form-group">
						<label>
							Foto de perfil</label>
						<div class="icon-field border_field d-flex">
							<i class="fas fa-image"></i>
							<button style="display:block;width:120px; border: 1px solid black; border-radius: 3px; height:30px;" onclick="document.getElementById('fileToUpload').click()">Elegir foto</button>
							<p id="pic_name" class=" mb-0 ml-2">No se ha seleccionado ninguna foto</p>
							<input required type="file" placeholder="Elegir foto" name="fileToUpload" id="fileToUpload" class="field w-100 d-none" />
							<script>
								$(document).ready(function() {
									$("#fileToUpload").change(function() {
										filename = this.files[0].name;
										//   console.log(filename);
										$('#pic_name').text(filename)
									});
								})
							</script>
						</div>
					</div>
					<div class="col-lg-8 col-md-10 form-group">
						<div class="g-recaptcha" data-sitekey=""></div>
					</div>
					<div class="col-lg-8 checkboxes-data mb-0  privacy_policy text-dark">
						<input type="checkbox" oninvalid="this.setCustomValidity('Por favor marca esta casilla para continuar')" onchange="this.setCustomValidity('')" id="acceptance2" name="acceptance2" class="text-dark" required />
						<label for="acceptance2" class="mb-0 text-dark">Acepto la <a href="<?= base_url('privacy'); ?>">política de privacidad</a></label>
					</div>
					<div class="col-lg-8 col-md-10 text-center mt-3">
						<button type="submit" class="primary-btn text-uppercase">
							ENVIAR
						</button>
					</div>
				</div>
			</form>
		</div>
	</section>


	<div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body container">
					<div class="notice d-flex justify-content-between align-items-center row">
						<div class="cookie-text col-md-9">Utilizamos cookies propias y de terceros para fines analíticos y para mostrarte publicidad personalizada en base a un perfil elaborado a partir de tus hábitos de navegación (por ejemplo, páginas visitadas). Clica <a href="<?= base_url('cookie'); ?>">AQUÍ</a> para más información. Puedes aceptar todas las cookies pulsando el botón "Aceptar" o rechazar su uso pulsando el botón "Rechazar"</div>
						<div class="buttons d-flex flex-column flex-lg-row col-md-3">
							<button id="accept_c" class="btn btn-success btn-sm1" data-dismiss="modal">Aceptar</button>
							<button id="reject_c" class="btn btn-secondary btn-sm2" data-dismiss="modal">Rechazar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<!-- ./site-main -->