<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<div class="col-lg-6 left_side">
					<div class="left-content pb-4">
						<h2 class="text-white text-lg-left text-md-center text-center">
							WABI SABI
							<h3 class="text-orange font-weight-bold">
								LA PLATAFORMA CON TODOS LOS RECURSOS QUE NECESITAS PARA CAMPERIZAR TU FURGONETA
							</h3>
							<P class="text-white font-weight-bold">¿QUIERES SABER CUAL ES TU FURGONETA IDEAL? </P>
						</h2>
						<div class="row que-steps-sec">
							<div class="col-xl-11 col-lg-11 col-md-11">
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
										<div class="tab-content" id="main_form">
											<div class="tab-pane active" role="tabpanel" id="step1">
												<div class="queans-boxes">
													<div class="row">
														<div class="col-md-12">
															<div class="ques-ans">
																<div class="ques">
																	<h5 class="font-weight-bold">
																		<i class="fas fa-caret-right text-green"></i>
																		¿ Voy a utilizar la furgoneta para los fines
																		de semana o para viajes largos ?
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
														<!--<div class="col-md-12">-->
														<!--	<div class="ques-ans">-->
														<!--		<div class="ques">-->
														<!--			<h5 class="font-weight-bold">-->
														<!--				<i-->
														<!--				class="fas fa-caret-right text-green"></i>-->
														<!--				¿ Quiero una ducha interior o exterior ?-->
														<!--			</h5>-->
														<!--		</div>-->
														<!--		<div class="ans">-->
														<!--			<div class="form-group radio-data">-->
														<!--				<input type="radio" name="q2" id="ans3"-->
														<!--				class="d-none" value="EXTERIOR">-->
														<!--				<label for="ans3">EXTERIOR </label>-->
														<!--			</div>-->
														<!--			<div class="form-group radio-data">-->
														<!--				<input type="radio" name="q2" id="ans4"-->
														<!--				class="d-none" value="INTERIOR">-->
														<!--				<label for="ans4">INTERIOR</label>-->
														<!--			</div>-->
														<!--		</div>-->
														<!--	</div>-->
														<!--</div>-->
													</div>
													<div class="row justify-content-end align-items-end bottom-info">
														<!-- <div class="col-md-4 text-center">
                                             <img src="<?= base_url('assets/front/img/white-logo.svg'); ?>" alt="" />
                                          </div> -->
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
																		¿ Quiero una ducha interior o exterior ?
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
														<!-- <div class="col-md-4 text-center">
                                             <img src="<?= base_url('assets/front/img/white-logo.svg'); ?>" alt="" />
                                          </div> -->
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
																		¿ Quiero una ducha fija o extraible ?
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
																		¿ Quiero WC para hacer mis necesidades?
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
																		¿ Quiero gastarme mucho o poco ?
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
																		¿ Vas a viajar solo, con una mascota, con tu
																		pareja o con tu familia ?
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
																		¿ Quieres cocina interior o exterior ?
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
																		¿ Cuanto tiempo quiero dedicarle a la
																		camperización ?
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
																		¿ Quieres una furgoneta para viajar o vivir ?
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
																		¿ Cuantos deportes voy a practicar cuando use
																		mi furgoneta camper ?
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
																	<input required type="email" name="bnr_questions_email" id="email" class="w-100 field" placeholder="Tu direccion de correo electronico" />
																	<div class="form-group checkbox-data mt-3">
																		<input type="checkbox" id="acceptance" name="acceptance" class="text-dark d-none" required />
																		<label for="acceptance"  oninvalid="this.setCustomValidity('Por favor marca esta casilla para continuar')" onchange="this.setCustomValidity('')" class="mb-0">Acepto la <a href="<?= base_url('privacy'); ?>">política de privacidad</a></label>
																	</div>
																	<button type="submit" class="email-btn">
																		<i class="fas fa-arrow-right"></i>
																	</button>
																</div>
															</div>
														</div>
														<!-- <div class="col-lg-2 col-md-3 text-md-right">-->
														<!--   <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />-->
														<!--</div>-->
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
				</div>
				<div class="col-lg-6 right-side p-0">
					<img src="<?= base_url('assets/front/img/green-shape.png'); ?>" alt="" class="d-lg-none w-100" />
					<div class="right-content ml-xl-5 ml-lg-4 mt-lg-0 mt-5">
						<div class="banner-slider">
							<div class="owl-carousel">
								<div class="item">
									<h2 class="text-orange text-lg-left text-md-center text-center">
										MANUAL
										<!--<span class="text-white">-->
										<!--WABI SABI-->
										<!--</span>-->
										DE CAMPERIZACIÓN
									</h2>
									<div class="row justify-content-center mb-4">
										<div class="col-xl-10 text-center">
											<img src="<?= base_url('assets/front/img/book_cover1.png'); ?>" alt="" class="mb-5 ml-auto mr-auto w-50" />
											<div class="right-desc">
												<p class="text-white">
													¡Echa un vistazo a nuestro Manual de Camperización y aprende a camperizar tu furgoneta paso a paso!
												</p>
												<a href="<?= base_url('Manual-de-Camperizacion'); ?>" class="primary-btn">
													VER MANUAL
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<h2 class="text-orange text-lg-left text-md-center text-center">
										CURSO
										<!--<span class="text-white">-->
										<!--	WABI SABI-->
										<!--</span>-->

										DE CAMPERIZACIÓN
									</h2>
									<div class="row justify-content-center mb-4">
										<div class="col-xl-10 text-center">
											<img src="<?= base_url('assets/front/img/screen-monitor.png'); ?>" alt="" />
											<div class="right-desc">
												<p class="text-white">
													El primer curso que te enseña a camperizar una furgoneta
													desde cero, paso a paso y sin conocimientos previos
												</p>
												<a href="<?= base_url('grade'); ?>" class="primary-btn">
													QUIERO APUNTARME
												</a>
											</div>
										</div>
									</div>
									<a href="https://www.youtube.com/watch?v=j2XHj122NMY" data-fancybox="" class="play-icon">
										<i class="fas fa-play" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

<head>
	<title><?= $first_part; ?> - Wabi sabi</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="icon" href="<?= base_url('assets/front/img/favicon.svg'); ?>" type="image/png" sizes="16x16">

	<!-- bootstrape -->
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/bootstrap.min.css'); ?>">

	<!-- font-awesome -->
	<script src="<?= base_url('assets/front/scripts/font-awesome-5-pro.js'); ?>"></script>

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

</head>

<body class="main-body">


	<section class="check_form">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="row justify-content-center">
						<div class="col-lg-8 pr-0">
							<h2>¡Hola Wabi Sabi@!</h2>
							<p>¿Tienes un código de descuento? <a href="#">Pulsa aquí para introducir tu código</a> </p>
							<p>¿Ya eres cliente ? <a href="#"> Pulsa aquí para identificarte</a></p>
							<h6>Detalles de facturación</h6>
							<!--<label class="label_name">Create an account-->
							<!--<input type="checkbox">-->
							<!--<span class="checkmark"></span>-->
							<!--</label>-->
							<div class="d-flex p-0 mt-5">
								<div class="form-group pl-0 col-lg-5">
									<label for="exampleInputEmail1">Nombre</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								</div>
								<div class="form-group pr-0 col-lg-5">
									<label for="exampleInputEmail1">Apellidos</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="form-group p-0 col-lg-10">
								<label for="exampleInputEmail1">Nombre de empresa (Opcional)</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group p-0 col-md-10">
								<label for="inputState">País</label>
								<select id="inputState" class="form-control">
									<option selected>Albania</option>
									<option>Armenia</option>
									<option>Australia</option>
									<option>Austria</option>
									<option>Azerbian</option>
								</select>
							</div>
							<div class="form-group p-0 col-lg-10">
								<label for="exampleInputEmail1">Dirección de envío</label>
								<input type="email" class="form-control mb-3" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Tipo de vía, número, piso, puerta">
								<input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Apartamento, chalet, piso (opcional) ">
							</div>
							<div class="form-group p-0 col-lg-10">
								<label for="exampleInputEmail1">Provincia</label>
								<input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
							</div>
							<div class="form-group p-0 col-lg-10">
								<label for="exampleInputEmail1">Ciudad / Pueblo</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group p-0 col-lg-10">
								<label for="exampleInputEmail1">Código Postal</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group p-0 col-lg-10">
								<label for="exampleInputEmail1">Teléfono</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group p-0 col-lg-10">
								<label for="exampleInputEmail1">Correo electrónico</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<label class="label_name mb-4">Crear cuenta de cliente
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
							<div class="form-group p-0 col-lg-10">
								<label for="exampleInputEmail1">Comentarios adicionales (Opcional)</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Notas sobre tu pedido, ¿Algo que necesite saber el repartidor ? ">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="d-flex justify-content-between">
								<h6>Producto</h6>
								<h6>Subtotal</h6>
							</div>
							<div class="row align-items-center justify-content-center add_calculator">
								<div class="col-lg-4">
									<img src="<?= base_url('assets/front/img/book_cover1.png'); ?>">
								</div>
								<div class="col-lg-8">
									<p>Tu Manual de Camperización para camperizar tu furgoneta</p>
								</div>
							</div>
							<div class="d-flex justify-content-between mt-4">
								<h6>Subtotal</h6>
								<h6>40 €</h6>
							</div>
							<div class="d-flex justify-content-between mt-2">
								<h6>Gastos de envío</h6>
								<p>Gastos de envío gratis a toda España</p>
							</div>
							<div class="d-flex justify-content-between mt-2">
								<h6>Total</h6>
								<h6>40 €</h6>
							</div>
							<div class="col-lg-12 debit_card">
								<div class="d-flex justify-content-between align-items-center">
									<img class="img-fluid" src="<?= base_url('assets/front/img/amex.svg'); ?>" alt="">
									<img class="img-fluid" src="<?= base_url('assets/front/img/visa.svg'); ?>" alt="">
									<img class="img-fluid" src="<?= base_url('assets/front/img/mastercard.svg'); ?>" alt="">
									<h5 class="text-right">Tarjeta de crédito</h5>
								</div>
								<div class="col-lg-12">
									<p>
										<label for="date"></label>
										<input type="date" id="date">
									</p>
								</div>
							</div>
							<!-- <div class="col-lg-12 google_pay">
							<div class="d-flex align-items-center">
								<img class="p-0" src="assets/img/googlepay_round_outline.svg" alt="">
								<p class="mt-3 ml-3">Google Pay</p>
							</div>
						</div> -->
							<div class="col-lg-12 mt-4">
								<p>Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en este sitio web y para otros fines descritos en nuestra <a href=""> política de privacidad. </a></p>
								<p>
									<label>
										<input type="checkbox" value="">
										He leído y acepto los <a href="<?= base_url('terms'); ?>"> términos y condiciones</a> del sitio web
									</label>
								</p>
							</div>
							<div class="col-lg-12 text-center ">
								<a href="#" class="primary-btn w-100 text-decoration-none">
									REALIZAR EL PEDIDO
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- custom js -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript">
		$(function() {
			var $stripeForm = $(".form-validation");
			$('form.form-validation').bind('submit', function(e) {
				var $stripeForm = $(".form-validation"),
					inputSelector = ['input[type=email]', 'input[type=password]',
						'input[type=text]', 'input[type=file]',
						'textarea'
					].join(', '),
					$inputs = $stripeForm.find('.required').find(inputSelector),
					$errorMessage = $stripeForm.find('div.error'),
					valid = true;
				$errorMessage.addClass('hide');
				$('.has-error').removeClass('has-error');
				$inputs.each(function(i, el) {
					var $input = $(el);
					if ($input.val() === '') {
						$input.parent().addClass('has-error');
						$errorMessage.removeClass('hide');
						e.preventDefault();
					}
				});
				if (!$stripeForm.data('cc-on-file')) {
					e.preventDefault();
					Stripe.setPublishableKey($stripeForm.data('stripe-publishable-key'));
					Stripe.createToken({
						number: $('.card-number').val(),
						cvc: $('.card-cvc').val(),
						exp_month: $('.card-expiry-month').val(),
						exp_year: $('.card-expiry-year').val()
					}, stripeResponseHandler);
				}
			});

			function stripeResponseHandler(status, res) {
				if (res.error) {
					$('.error')
						.removeClass('hide')
						.find('.alert')
						.text(res.error.message);
				} else {
					var token = res['id'];
					$stripeForm.find('input[type=text]').empty();
					$stripeForm.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
					$stripeForm.get(0).submit();
				}
			}
		});
	</script>

	<script type="text/javascript">
		<?php if ($this->session->flashdata('success')) { ?>
			sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('success'); ?>", "success");
		<?php } else if ($this->session->flashdata('error')) {  ?>
			sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('error'); ?>", "error");
		<?php } else if ($this->session->flashdata('warning')) {  ?>
			sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('warning'); ?>", "warning");
		<?php } else if ($this->session->flashdata('info')) {  ?>
			sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('info'); ?>", "info");
		<?php } ?>
	</script>