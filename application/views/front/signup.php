<!-- .site-main -->
<main class="site-main">

    <section class="contact-form bg-green pb-0">
        <div class="container Sign_in">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center mb-4">
                    <h2>Regístrate Ahora</h2>
                </div>
                <div class="col-xl-8 col-lg-10">
                    <form action="<?= base_url('register/newUser'); ?>" method="post">

                        <?php echo form_open('form'); ?>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Nombre</label>
                                <div class="icon-field">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="fn" id="fname" placeholder="Name" class="field w-100" value="<?php echo set_value('fn'); ?>" />
                                    <?php echo form_error('fn', '<div class="error" style="color: red;">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Correo electrónico</label>
                                <div class="icon-field">
                                    <i class="fas fa-comment-alt-lines"></i>
                                    <input type="email" name="e" value="<?php echo set_value('e'); ?>" id="business" placeholder="Email Adress" class="field w-100" />
                                    <?php echo form_error('e', '<div class="error" style="color: red;">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Contraseña</label>
                                <div class="icon-field">
                                    <i class="fas fa-comment-alt-lines"></i>
                                    <input type="password" name="p" id="business" placeholder="New Password" class="field w-100" />
                                    <?php echo form_error('p', '<div class="error" style="color: red;">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Confirmar Contraseña</label>
                                <div class="icon-field">
                                    <i class="fas fa-comment-alt-lines"></i>
                                    <input type="password" name="cp" id="business" placeholder="Confirm Password" class="field w-100" />
                                    <?php echo form_error('cp', '<div class="error" style="color: red;">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="col-md-12 form-group text-center">
                                <h6>¿Ya eres Wabi Sabi@? <a href="<?= base_url('login'); ?>"> Entrar </a></h6>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="primary-btn text-uppercase">
                                    REGISTRARME
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
<!-- ./site-main -->