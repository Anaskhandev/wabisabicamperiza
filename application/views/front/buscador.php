<!-- .site-main -->
<main class="site-main">


	<!-- .buscador-banner-sec -->
	<section class="buscador-banner-sec bg-green pb-0">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-10">
					<div class="tabbing">
						<form>
							<ul class="nav nav-pills mb-3 justify-content-md-start justify-content-center main-tabs">
								<li class="nav-item d-inline-block">
									<a class="nav-link text-uppercase active" data-toggle="pill" href="#Alquiler">
										ALQUILER
									</a>
								</li>
								<li class="nav-item d-inline-block">
									<a class="nav-link text-uppercase" data-toggle="pill" href="#Compra">
										COMPRA
									</a>
								</li>
							</ul>


							<div class="tab-content main-tab-content mb-5">
								<div class="tab-pane p-0 active" id="Alquiler">
									<div class="row">
										<div class="col-12">
											<ul class="nav nav-pills mb-3 justify-content-md-start justify-content-center inner-tabs border-0">
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase active" data-toggle="pill" href="#Lugar">
														LUGAR
													</a>
												</li>
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase" data-toggle="pill" href="#Plazas">
														PLAZAS
													</a>
												</li>
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase" data-toggle="pill" href="#Inicio">
														INICIO
													</a>
												</li>
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase" data-toggle="pill" href="#Devoluction">
														DEVOLUCIÓN
													</a>
												</li>
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase" data-toggle="pill" href="#Precio">
														PRECIO/DÍA
													</a>
												</li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane p-0 active" id="Lugar">
													<div class="form-group">
														<i class="fas fa-map-marker-alt"></i>
														<input type="text" name="places" id="places" class="w-100 field" placeholder="Pick up Places" />
													</div>
												</div>

												<div class="tab-pane p-0" id="Plazas">
													<div class="form-group">
														<i class="fas fa-list"></i>
														<select name="" class="w-100 field">
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
															<option>6</option>
														</select>
													</div>
												</div>

												<div class="tab-pane p-0" id="Inicio">
													<div class="form-group">
														<i class="fas fa-calendar-check"></i>
														<input type="input" name="date" id="inputDate" class="w-100 field dates" placeholder="INICIO" />
													</div>
												</div>

												<div class="tab-pane p-0" id="Devoluction">
													<div class="form-group">
														<i class="fas fa-calendar-check"></i>
														<input type="input" name="date" id="inputDate" class="w-100 field dates" placeholder="DEVOLUCIÓN" />
													</div>
												</div>

												<div class="tab-pane p-0" id="Precio">
													<div class="row align-items-center form-group">
														<div class="col-lg-2 col-md-3 prices">
															<span class="d-block">Precio Mínimo</span>
															<span class="text-green d-block">20€</span>
														</div>
														<div class="col-lg-8 col-md-6">
															<div class="range-slider">
																<input id="range" type="range" step="10" value="500" min="20" max="1000" class="w-100 range">
																<div id="tooltip" class="tooltip">2500€</div>
															</div>
														</div>
														<div class="col-lg-2 col-md-3 prices">
															<span class="d-block">Precio Máximo</span>
															<span class="text-green d-block">1000€</span>
														</div>
													</div>
												</div>
											</div>


										</div>
									</div>
								</div>

								<div class="tab-pane p-0" id="Compra">
									<div class="row">
										<div class="col-12">
											<ul class="nav nav-pills mb-3 justify-content-md-start justify-content-center inner-tabs border-0">
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase active" data-toggle="pill" href="#Tamanot1">
														TAMAÑO
													</a>
												</li>
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase" data-toggle="pill" href="#Precio1">
														PRECIO
													</a>
												</li>
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase" data-toggle="pill" href="#Ano1">
														AÑO
													</a>
												</li>
												<li class="nav-item d-inline-block">
													<a class="nav-link text-uppercase" data-toggle="pill" href="#Lugar1">
														LUGAR
													</a>
												</li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane p-0 active" id="Tamanot1">
													<div class="form-group checkboxes-data d-inline-block">
														<input type="checkbox" id="muy_grande" checked="" class="d-none">
														<label for="muy_grande" class="text-uppercase">
															<span class="mr-2">MUY GRANDE</span>
															<img src="<?= base_url('assets/front/img/truck1.svg"') ?> alt="">
																</label>
															</div>
															<div class=" form-group checkboxes-data d-inline-block">
															<input type="checkbox" id="GRANDE" class="d-none">
															<label for="GRANDE" class="text-uppercase">
																<span class="mr-2">GRANDE</span>
																<img src="<?= base_url('assets/front/img/truck1.svg"') ?> alt="">
																</label>
															</div>
															<div class=" form-group checkboxes-data d-inline-block">
																<input type="checkbox" id="MEDIANA" class="d-none">
																<label for="MEDIANA" class="text-uppercase">
																	<span class="mr-2">MEDIANA</span>
																	<img src="<?= base_url('assets/front/img/bus1.svg"') ?> alt="">
																</label>
															</div>
															<div class=" form-group checkboxes-data d-inline-block">
																	<input type="checkbox" id="PEQUEÑA" class="d-none">
																	<label for="PEQUEÑA" class="text-uppercase">
																		<span class="mr-2">PEQUEÑA</span>
																		<img src="<?= base_url('assets/front/img/bus2.svg"') ?> alt="">
																</label>
															</div>
														</div>

														<div class=" tab-pane p-0" id="Precio1">
																		<div class="row align-items-center form-group">
																			<div class="col-lg-2 col-md-3 prices">
																				<span class="d-block">Precio Mínimo</span>
																				<span class="text-green d-block">1000€</span>
																			</div>
																			<div class="col-lg-8 col-md-6">
																				<div class="range-slider">
																					<input id="ano-range" type="range" step="250" value="15000" min="1000" max="30000" class="w-100 range">
																					<div id="ano-tooltip" class="tooltip"></div>
																				</div>
																			</div>
																			<div class="col-lg-2 col-md-3 prices">
																				<span class="d-block">Precio Máximo</span>
																				<span class="text-green d-block">30000€</span>
																			</div>
																		</div>
													</div>

													<div class="tab-pane p-0" id="Ano1">
														<div class="row align-items-center form-group">
															<div class="col-lg-9 col-md-9">
																<div class="range-slider">
																	<input id="range" type="range" step="10" value="2500" min="100" max="5000" class="w-100 range">
																	<div id="tooltip" class="tooltip"></div>
																</div>
															</div>
															<div class="col-lg-3 col-md-3 prices">
																<span class="text-green d-block">2022</span>
															</div>
														</div>
													</div>

													<div class="tab-pane p-0" id="Lugar1">
														<div class="row align-items-center">
															<div class="col-md-6">
																<div class="form-group">
																	<i class="fas fa-map-marker-alt"></i>
																	<input type="text" name="places" id="places" class="w-100 field" placeholder="Provincia" />
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
				<div class="col-xl-6 xol-lg-8 text-center">
					<button class="primary-btn pt-3 pb-3 pl-5 pr-5">
						BUSCAR
					</button>

					<div class="mt-4 mb-4">
						<p class="text-white font-weight-bold pb-0">
							Responde nuestro cuestionario para averiguar cuál es la furgoneta que mejor se adapta a tus necesidades y te ayudamos a buscarla.
						</p>
					</div>

					<a href="buscador-filter.html" class="primary-btn">
						¿CUÁL ES MI FURGONETA IDEAL ?
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- ./buscador-banner-sec -->


	<!-- .logos-sec -->
	<section class="logos-sec pt-0 pb-0">
		<img src="<?= base_url('assets/front/img/green-shape.png') ?>" alt="" class="d-lg-block w-100" />
		<div class="container">
			<div class="row">
				<div class="col-12 mt-xl-5">
					<div class="content text-center mb-lg-0 mb-4 mt-lg-0 mt-4">
						<h2 class="text-green mb-lg-5 mb-4">
							Encuentra furgonetas para camperizar o alquila furgonetas camperizadas
						</h2>
					</div>

					<div class="logos pt-xl-5 pt-3 mb-xl-4">
						<div class="row">
							<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3">
								<img src="<?= base_url('assets/front/img/logo-hertz.svg') ?>" alt="" class="w-100" />
							</div>
							<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3">
								<img src="<?= base_url('assets/front/img/logo-sixt.svg') ?>" alt="" class="w-100" />
							</div>
							<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3">
								<img src="<?= base_url('assets/front/img/logo-thrifty.svg') ?>" alt="" class="w-100" />
							</div>
							<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3">
								<img src="<?= base_url('assets/front/img/logo-avis.svg') ?>" alt="" class="w-100" />
							</div>
							<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3">
								<img src="<?= base_url('assets/front/img/logo-enterprice.svg') ?>" alt="" class="w-100" />
							</div>
							<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3">
								<img src="<?= base_url('assets/front/img/logo-europcar.svg') ?>" alt="" class="w-100" />
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<img src="<?= base_url('assets/front/img/orange-shape-up') ?>.png" alt="" class="d-lg-block w-100" />
	</section>
	<!-- ./logos-sec -->


	<!-- .van-listing-sec -->
	<section class="van-listing-sec bg-orange pt-0 pb-0">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-xl-5">
					<div class="content text-center mb-lg-0 mb-4 mt-lg-0 mt-4">
						<h2 class="text-green mb-lg-5 mb-4">
							¡ ENCUENTRA LAS MEJORES OFERTAS DEL MERCADO EN WABI SABI !
						</h2>
					</div>
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-xl-8">
					<h2 class="text-black">
						CONFÍA EN WABI SABI
					</h2>
					<h4 class="mb-4">
						Somos la web de búsqueda de furgonetas camper más fiable del mercado.
					</h4>
					<h4 class="mb-4">
						<strong>Utiliza nuestro buscador de forma gratuita y ahorrate la parte más pesada de hacer planes. </strong>
						Analizamos cientos de compañías de alquiler y venta de furgonetas camper para
						que compares precios y elijas tu opción preferida.¡Aquí encontrarás las mejores ofertas!
					</h4>
				</div>
				<div class="col-xl-4 text-center">
					<img src="<?= base_url('assets/front/img/site-logo.svg') ?>" alt="" class="w-50" />
				</div>
			</div>

			<div class="row mt-xl-5 mt-4">
				<div class="col-lg-4 col-md-6">
					<div class="van-box">
						<a href="#">
							<div class="img">
								<img src="<?= base_url('assets/front/img/van-img1.png') ?>" alt="" class="w-100 mb-4" />
							</div>
							<h4 class="mb-0 font-weight-bold">
								CAMPER FIAT DUCATO
							</h4>
							<span class="d-block text-orange">A partir de 18 €/día</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="van-box">
						<a href="#">
							<div class="img">
								<img src="<?= base_url('assets/front/img/van-img2.png') ?>" alt="" class="w-100 mb-4" />
							</div>
							<h4 class="mb-0 font-weight-bold">
								CAMPER FORD TRANSIT
							</h4>
							<span class="d-block text-orange">A partir de 30 €/día</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="van-box">
						<a href="#">
							<div class="img">
								<img src="<?= base_url('assets/front/img/van-img3.png') ?>" alt="" class="w-100 mb-4" />
							</div>
							<h4 class="mb-0 font-weight-bold">
								CAMPER MERCEDES SPRINTER
							</h4>
							<span class="d-block text-orange">A partir de 20 €/día</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="van-box">
						<a href="#">
							<div class="img">
								<img src="<?= base_url('assets/front/img/van-img3.png') ?>" alt="" class="w-100 mb-4" />
							</div>
							<h4 class="mb-0 font-weight-bold">
								CAMPER PEUGEOT BOXER
							</h4>
							<span class="d-block text-orange">A partir de 20 €/día</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="van-box">
						<a href="#">
							<div class="img">
								<img src="<?= base_url('assets/front/img/van-img1.png') ?>" alt="" class="w-100 mb-4" />
							</div>
							<h4 class="mb-0 font-weight-bold">
								CAMPER CITROËN JUMPER
							</h4>
							<span class="d-block text-orange">A partir de 25 €/día</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="van-box">
						<a href="#">
							<div class="img">
								<img src="<?= base_url('assets/front/img/van-img2.png') ?>" alt="" class="w-100 mb-4" />
							</div>
							<h4 class="mb-0 font-weight-bold">
								CAMPER FORD TRANSIT
							</h4>
							<span class="d-block text-orange">A partir de 30 €/día</span>
						</a>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- .van-listing-sec -->


	<img src="<?= base_url('assets/front/img/orange-shape.png') ?>" alt="" class="d-lg-block w-100" />

</main>
<!-- ./site-main -->