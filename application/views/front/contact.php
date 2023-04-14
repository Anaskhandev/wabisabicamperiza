

		<!-- .site-main -->
		<main class="site-main">
            <!-- .contact-banner -->
            <section class="contact-banner">
				<div class="behind contact_animate position-absolute"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 animate_contact">
                            <div class="left-content position-relative">
                                <h2 class="text-white">
                                    HOLA, 
                                    ¿HABLAMOS?
                                </h2>

                                <h3 class="text-black">
                                    CONTÁCTANOS
                                </h3>

                                <p class="text-white">
                                    Dudas, comentarios, algún pensamiento que
                                    quieras compartir con nosotros. Pregúntanos
                                    lo que quieras. Estaremos encantados de leer
                                    a todos los que queráis saber más de la
                                    comunidad Wabi Sabi.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="<?= base_url('assets/front/img/site-logo.svg');?>" alt="" class="contact-img" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- ./contact-banner -->



            <section class="contact-form bg-green pb-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <form action="<?= base_url('contact/submit');?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Tu nombre</label>
                                        <div class="icon-field">
                                            <i class="fas fa-user"></i>
                                            <input required type="text" name="name" id="fname" placeholder="Tu nombre" class="field w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Tu correo electrónico</label>
                                        <div class="icon-field">
                                            <i class="fas fa-envelope"></i>
                                            <input required type="email" name="email" id="email" placeholder="Tu correo electrónico" class="field w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Asunto</label>
                                        <div class="icon-field">
                                            <i class="fas fa-comment-alt-lines"></i>
                                            <input required type="text" name="affair" id="business" placeholder="Asunto" class="field w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Tu mensaje</label>
                                        <div class="icon-field">
                                            <i class="fas fa-comment-alt-lines"></i>
                                            <textarea name="msg" id="message" rows="5" placeholder="Tu mensaje" class="w-100 field"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 checkboxes-data mb-0  privacy_policy text-white">
                  <input class="text-dark" type="checkbox" id="acceptance" class="d-none mr-3" required/>
                                            <label for="acceptance" class="text-white">
                                                Acepto la 
                                            <a class="text-white" href="<?= base_url('privacy');?>">
                                                política de
                                                privacidad
                                            </a>
                                            </label>
                                           
                                        </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" id="onclick" class="primary-btn text-uppercase">
                                            ENVIAR
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
                
            <img src="<?= base_url('assets/front/img/green-shape.png');?>" alt="" class="d-lg-block w-100" />

        </main>
        
        
		<!-- ./site-main -->

