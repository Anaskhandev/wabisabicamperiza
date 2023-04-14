<!-- .site-main -->
<main class="site-main">

    <!-- .que-steps-sec -->
    <section class="">
        <div class="container">
            <div class="row justify-content-center mt-5 que-steps-sec">
                <div class="col-xl-8 col-lg-10 col-md-11">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs d-none" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
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
                            </ul>
                        </div>

                        <form role="form" action="<?= base_url('home/bnrSubmit'); ?>" method="post" class="login-box">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="row mb-5">
                                        <div class="col-12 text-center">
                                            <h3 class="text-blue font-weight-bold">
                                                ¿CUÁL ES MI FURGONETA IDEAL?
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="queans-boxes">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="ques-ans">
                                                    <div class="ques">
                                                        <h5 class="font-weight-bold">
                                                            <i class="fas fa-caret-right text-green"></i>
                                                            ¿Voy a utilizar la furgoneta para los fines de semana o para viajes largos?
                                                        </h5>
                                                    </div>
                                                    <div class="ans">
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q1" id="ans1" class="d-none" checked>
                                                            <label for="ans1">FINES DE SEMANA </label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q1" id="ans2" class="d-none">
                                                            <label for="ans2">LARGOS </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                            <input type="radio" name="q2" id="ans3" class="d-none" checked>
                                                            <label for="ans3">EXTERIOR </label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q2" id="ans4" class="d-none">
                                                            <label for="ans4">INTERIOR</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end align-items-end bottom-info mt-md-5">
                                            <div class="col-md-4 text-center">
                                                <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />
                                            </div>
                                            <div class="col-md-4 text-md-right text-center">
                                                <button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-3">Siguiente</button></li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h3 class="text-blue font-weight-bold">
                                                ¿CUÁL ES MI FURGONETA IDEAL?
                                            </h3>
                                        </div>
                                    </div>
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
                                                            <input type="radio" name="q3" id="ans5" class="d-none" checked>
                                                            <label for="ans5">FIJA</label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q3" id="ans6" class="d-none">
                                                            <label for="ans6">EXTRAIBLE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                            <input type="radio" name="q4" id="ans7" class="d-none" checked>
                                                            <label for="ans7">SI</label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q4" id="ans8" class="d-none">
                                                            <label for="ans8">NO</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end align-items-end bottom-info mt-md-5">
                                            <div class="col-md-4 text-md-left text-center">
                                                <button type="button" class="secondary-btn text-uppercase prev-step mb-md-0 mb-3">ANTERIOR</button></li>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />
                                            </div>
                                            <div class="col-md-4 text-md-right text-center">
                                                <button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-3">Siguiente</button></li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h3 class="text-blue font-weight-bold">
                                                ¿CUÁL ES MI FURGONETA IDEAL?
                                            </h3>
                                        </div>
                                    </div>
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
                                                            <input type="radio" name="q5" id="ans9" class="d-none" checked>
                                                            <label for="ans9">MUCHO</label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q5" id="ans10" class="d-none">
                                                            <label for="ans10">POCO</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="ques-ans">
                                                    <div class="ques">
                                                        <h5 class="font-weight-bold">
                                                            <i class="fas fa-caret-right text-green"></i>
                                                            ¿Vas a viajar solo, con una mascota, con tu pareja o con tu familia?
                                                        </h5>
                                                    </div>
                                                    <div class="ans">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group radio-data">
                                                                    <input type="radio" name="q6" id="ans11" class="d-none" checked>
                                                                    <label for="ans11">SOLO</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group radio-data">
                                                                    <input type="radio" name="q6" id="ans12" class="d-none">
                                                                    <label for="ans12">PAREJA</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group radio-data">
                                                                    <input type="radio" name="q7" id="ans13" class="d-none">
                                                                    <label for="ans13">MASCOTA</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group radio-data">
                                                                    <input type="radio" name="q7" id="ans14" class="d-none">
                                                                    <label for="ans14">FAMILIA</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end align-items-end bottom-info mt-md-5">
                                            <div class="col-md-4 text-md-left text-center">
                                                <button type="button" class="secondary-btn text-uppercase prev-step mb-md-0 mb-3">ANTERIOR</button></li>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />
                                            </div>
                                            <div class="col-md-4 text-md-right text-center">
                                                <button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-3">Siguiente</button></li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h3 class="text-blue font-weight-bold">
                                                ¿CUÁL ES MI FURGONETA IDEAL?
                                            </h3>
                                        </div>
                                    </div>
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
                                                            <input type="radio" name="q8" id="ans15" class="d-none" checked>
                                                            <label for="ans15">INTERIOR </label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q8" id="ans16" class="d-none">
                                                            <label for="ans16">EXTERIOR</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="ques-ans">
                                                    <div class="ques">
                                                        <h5 class="font-weight-bold">
                                                            <i class="fas fa-caret-right text-green"></i>
                                                            ¿Cuánto tiempo quiero dedicarle a la camperización?
                                                        </h5>
                                                    </div>
                                                    <div class="ans">
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q9" id="ans17" class="d-none" checked>
                                                            <label for="ans17">MUCHO </label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q9" id="ans18" class="d-none">
                                                            <label for="ans18">LO NORMAL</label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q9" id="ans19" class="d-none">
                                                            <label for="ans19">POCO </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end align-items-end bottom-info mt-md-5">
                                            <div class="col-md-4 text-md-left text-center">
                                                <button type="button" class="secondary-btn text-uppercase prev-step mb-md-0 mb-3">ANTERIOR</button></li>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />
                                            </div>
                                            <div class="col-md-4 text-md-right text-center">
                                                <button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-3">Siguiente</button></li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step5">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h3 class="text-blue font-weight-bold">
                                                ¿CUÁL ES MI FURGONETA IDEAL?
                                            </h3>
                                        </div>
                                    </div>
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
                                                            <input type="radio" name="q10" id="ans20" class="d-none" checked>
                                                            <label for="ans20">VIAJAR </label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q10" id="ans21" class="d-none">
                                                            <label for="ans21">VIVIR</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="ques-ans">
                                                    <div class="ques">
                                                        <h5 class="font-weight-bold">
                                                            <i class="fas fa-caret-right text-green"></i>
                                                            ¿Cuantos deportes voy a practicar cuando use mi furgoneta camper?
                                                        </h5>
                                                    </div>
                                                    <div class="ans">
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q11" id="ans22" class="d-none" checked>
                                                            <label for="ans22">NINGUNO</label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q11" id="ans23" class="d-none">
                                                            <label for="ans23">UNO 0 DOS</label>
                                                        </div>
                                                        <div class="form-group radio-data">
                                                            <input type="radio" name="q11" id="ans24" class="d-none">
                                                            <label for="ans24">MAS DE DOS</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end align-items-end bottom-info mt-md-5">
                                            <div class="col-md-4 text-md-left text-center">
                                                <button type="button" class="secondary-btn text-uppercase prev-step mb-md-0 mb-3">ANTERIOR</button></li>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />
                                            </div>
                                            <div class="col-md-4 text-md-right text-center">
                                                <button type="button" class="primary-btn text-uppercase next-step mt-md-0 mt-3">Siguiente</button></li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step6">
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
                                            <div class="col-lg-2 col-md-3 text-md-right">
                                                <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" />
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
    </section>
    <!-- ./que-steps-sec -->

</main>
<!-- ./site-main -->