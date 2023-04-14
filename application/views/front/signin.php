<main>
    <section class="contact-form bg-green pb-0">
        <div class="container Sign_in">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-12 text-center mb-4">
                    <h2>Login Usuario</h2>
                </div>
                <div class="col-xl-8 col-lg-10">
                    <form action="<?= base_url('login/sigin'); ?>" method="post">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-10 form-group">
                                <label>Correo electrónico</label>
                                <div class="icon-field">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="e" id="email" placeholder="Enter Email" class="field w-100" />
                                </div>
                            </div>
                            <div class="col-md-10 form-group">
                                <label>Contraseña</label>
                                <div class="icon-field">
                                    <i class="fas fa-user"></i>
                                    <input type="password" name="p" id="pass" placeholder="Enter Password" class="field w-100" />
                                </div>
                            </div>
                            <div class="col-md-10 form-group">
                                <h6 class="text-light">¿Has olvidado tu contraseña?<a href="<?= base_url('registro'); ?>"> Registrate aquí</a> </h6>
                            </div>
                            <div class="col-md-10 text-center">
                                <button class="primary-btn text-uppercase">
                                    ENTRAR
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <img src="<?= base_url('assets/front/img/green-shape.png'); ?>" alt="" class="d-lg-block w-100" />

</main>