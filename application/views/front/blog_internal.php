<!-- .site-main -->
<main class="site-main">

    <!-- .blog-banner-sec -->
    <section class="blog-banner-sec internal_content" style="background-image:linear-gradient(352deg, #101010, #00000026),url(<?php echo base_url('uploads/blogs/') . $blog->image; ?>)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!-- <div class="banner-img">
                                <img src="<?= base_url('assets/front/img/blog-banner.png'); ?>" alt="" class="w-100" />
                            </div> -->
                    <div class="banner-content text-center">
                        <h2 class="text-white text-uppercase mb-0">
                            Blog
                        </h2>
                        <!--<ol class="breadcrumb">-->
                        <!--    <li class="breadcrumb-item">-->
                        <!--        <a href="index.html">Home</a>-->
                        <!--    </li>-->
                        <!--    <li class="breadcrumb-item active" aria-current="page">-->
                        <!--        Blog-->
                        <!--    </li>-->
                        <!--</ol>-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./blog-banner-sec -->


    <!-- .blog-listing-sec -->
    <section class="blog-listing-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-green font-weight-bold">
                        <i class="fa fa-calendar-star mr-2"></i>
                        <span> <?= $blog->blog_created_at; ?></span>
                        <hr>
                    </h3>
                </div>
                <div class="col-xl-7">
                    <div class="internal_content">
                        <h2 class="mb-2"><?= $blog->heading; ?></h2>
                        <span><?= $blog->text; ?></span>
                    </div>
                    <div class="container-fluid contact-form review_form p-0">
                        <div class="row">
                            <div class="col-lg-12 text-left comment-ui">
                                <div class="row">
                                    <div class="col-12 text-left">
                                        <h2 class="text-orange mb-3 text-left">
                                            Nos encanta escucharos
                                        </h2>
                                    </div>


                                    <?php foreach ($data as $d) : ?>

                                        <div class="col-12 text-left">
                                            <div class="d-flex align-items-center justify-content-start mb-3">
                                                <i class="fa fa-user mr-1"></i>
                                                <div>
                                                    <h1 class="mb-0 ml-2"><?= $d->name; ?></h1>
                                                    <!--<h2 class="mb-0 ml-2 email_c"><?= $d->email; ?></h2>-->
                                                </div>
                                                <h3 class="ml-2 ml-md-5 mb-0"><?= $d->blog_comment_created_at; ?></h3>
                                            </div>
                                            <p><?= $d->msg; ?></p>
                                            <?php
                                            $reply = $this->db->select('*')->from('blog_comment_reply')->where(array('blog_id' => $d->blog_id, 'comment_id' => $d->blog_comment_id))->get()->result();
                                            foreach ($reply as $r) :

                                            ?>
                                                <div class="d-flex admin_reply">
                                                    <h3>Admin:</h3>
                                                    <p>
                                                        <?php echo $r->msg; ?></p>
                                                </div>
                                            <?php
                                            endforeach; ?>
                                            <hr />
                                        </div>
                                    <?php
                                    endforeach; ?>
                                </div>
                            </div>
                            <div class="col-lg-12 text-left">
                                <div class="row">
                                    <div class="col-12 text-left">
                                        <h2 class="text-orange mb-2 text-left">
                                            D&eacute;janos tu comentario
                                        </h2>
                                    </div>
                                </div>
                                <form action="<?= base_url('blog/submit'); ?>" method="post">
                                    <div class="row justify-content-start align-items-center">
                                        <div class="col-6 form-group text-left">
                                            <label>Tu nombre</label>
                                            <div class="icon-field">
                                                <i class="fas fa-user"></i>
                                                <input required type="text" name="name" id="name" placeholder="Tu nombre" class="field w-100" />
                                                <input required type="hidden" name="blog_id" id="name" value="<?= $blog->blog_id; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-6 form-group">
                                            <label>Tu correo electrónico</label>
                                            <div class="icon-field">
                                                <i class="fas fa-envelope"></i>
                                                <input required type="email" name="email" id="email" placeholder="Tu correo electrónico" class="field w-100" />
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Tu comentario</label>
                                            <div class="icon-field">
                                                <i class="fas fa-comment-alt-lines"></i>
                                                <textarea required name="msg" id="msg" rows="5" placeholder="Tu comentario" class="w-100 field"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 checkboxes-data mb-2  privacy_policy text-dark">
                                            <input class="text-dark"  oninvalid="this.setCustomValidity('Por favor marca esta casilla para continuar')" onchange="this.setCustomValidity('')" type="checkbox" id="acceptance" class="d-none mr-3" required />
                                            <label for="acceptance" class="text-dark">
                                                Acepto la
                                                <a href="<?= base_url('privacy'); ?>">
                                                    política de
                                                    privacidad
                                                </a>
                                            </label>

                                        </div>
                                        <div class="col-12 text-left">
                                            <button type="submit" class="primary-btn text-uppercase">
                                                ENVIAR
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="sidebar mt-xl-0 mt-4">

                        <h4 class="text-orange text-lg-left text-center">
                            S&eacute; parte de la Comunidad Wabi Sabi
                        </h4>
                        <div class="social-icon text-lg-left text-center">
                            <a href="https://www.instagram.com/wabisabi_vanlife/?hl=es" target="_blank" class="d-inline-block mr-3">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.tiktok.com/@wabisabi_vanlife" target="_blank" class="d-inline-block mr-3">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>

                        <span class="border-bottom"></span>

                        <h4 class="text-orange">
                            Descarga algunos fragmentos de nuestro Manual
                        </h4>

                        <img src="<?= base_url('assets/front/img/COVER2.png'); ?>" alt="" class="w-100 mb-4 report-img" />

                        <div class="text-center">
                            <a href="#" type="button" data-toggle="modal" data-target="#form" class="primary-btn">
                                DESCARGAR
                            </a>
                        </div>

                        <span class="border-bottom"></span>

                        <img src="<?= base_url('assets/front/img/Cover.png'); ?>" alt="" class="w-100 mb-4 report-img" />

                        <div class="text-center">
                            <a href="#" type="button" data-toggle="modal" data-target="#form2" class="primary-btn bg-green text-white">
                                DESCARGAR
                            </a>
                        </div>

                        <!-- <span class="border-bottom"></span>

                            <img src="<?= base_url('assets/front/img/report-img.png'); ?>" alt="" class="w-100 mb-4 report-img" />

                            <div class="text-center">
                                <a href="#" class="primary-btn bg-purple text-white">
                                    Go to Report
                                </a>
                            </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./blog-listing-sec -->
    <!--<section class="contact-form review_form p-0">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="container-fluid">-->
    <!--                <div class="row align-items-center justify-content-center">-->
    <!--                    <div class="col-lg-10 text-left comment-ui mb-5">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-8 text-left">-->
    <!--                                        <h2 class="text-orange mb-5 text-left">-->
    <!--                                            Comments-->
    <!--                                        </h2>-->
    <!--                                    </div>-->
    <!--                            <div class="col-md-8 col-12 text-left">-->
    <!--                                <div class="d-flex align-items-center justify-content-start mb-3">-->
    <!--                                    <i class="fa fa-user mr-1"></i>-->
    <!--                                    <div>-->
    <!--                                        <h1 class="mb-0 ml-2">Test User</h1>-->
    <!--                                        <h2 class="mb-0 ml-2 email_c">example@test.com</h2>-->
    <!--                                    </div>-->
    <!--                                    <h3 class="ml-2 ml-md-5 mb-0">2 hours ago</h3>-->
    <!--                                </div>-->
    <!--                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quos modi totam-->
    <!--                                    iure. Excepturi cupiditate asperiores quo adipisci modi perferendis molestias, officia-->
    <!--                                    dicta earum culpa fugit, voluptatem deleniti odio? Officiis?</p>-->
    <!--                                    <hr/>-->
    <!--                            </div>-->
    <!--                           <div class="col-md-8 col-12 text-left">-->
    <!--                                <div class="d-flex align-items-center justify-content-start mb-3">-->
    <!--                                    <i class="fa fa-user mr-1"></i>-->
    <!--                                    <div>-->
    <!--                                        <h1 class="mb-0 ml-2">Test User</h1>-->
    <!--                                        <h2 class="mb-0 ml-2 email_c">example@test.com</h2>-->
    <!--                                    </div>-->
    <!--                                    <h3 class="ml-2 ml-md-5 mb-0">2 hours ago</h3>-->
    <!--                                </div>-->
    <!--                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quos modi totam-->
    <!--                                    iure. Excepturi cupiditate asperiores quo adipisci modi perferendis molestias, officia-->
    <!--                                    dicta earum culpa fugit, voluptatem deleniti odio? Officiis?</p>-->
    <!--                                    <hr/>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-10 text-left">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-8 text-left">-->
    <!--                                <h2 class="text-orange mb-5 text-left">-->
    <!--                                    Leave a Comments-->
    <!--                                </h2>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <form action="<?= base_url('blog/submit'); ?>" method="post">-->
    <!--                        <div class="row justify-content-start align-items-center">-->
    <!--                            <div class="col-lg-4 col-md-5 form-group text-left">-->
    <!--                                <label>Tu nombre</label>-->
    <!--                                <div class="icon-field">-->
    <!--                                    <i class="fas fa-user"></i>-->
    <!--                                    <input required type="text" name="name" id="name" placeholder="Tu nombre" class="field w-100" />-->
    <!--                                    <input required type="hidden" name="blog_id" id="name" value="<?= $blog->blog_id; ?>" />-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-4 col-md-5 form-group">-->
    <!--                                <label>Tu correo electrónico</label>-->
    <!--                                <div class="icon-field">-->
    <!--                                    <i class="fas fa-envelope"></i>-->
    <!--                                    <input required type="email" name="email" id="email" placeholder="Tu correo electrónico"-->
    <!--                                        class="field w-100" />-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-8 col-md-10 form-group">-->
    <!--                                <label>Tu comentarios</label>-->
    <!--                                <div class="icon-field">-->
    <!--                                    <i class="fas fa-comment-alt-lines"></i>-->
    <!--                                    <textarea required name="msg" id="msg" rows="5" placeholder="Tu comentarios"-->
    <!--                                        class="w-100 field"></textarea>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-8 col-md-10 text-left">-->
    <!--                                <button type="submit" class="primary-btn text-uppercase">-->
    <!--                                    ENVIAR-->
    <!--                                </button>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        </form>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
</main>
<!-- ./site-main -->


<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered main_modal" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel font-weight-bold">Déjanos tus datos para poder descargarte el documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('grade/submit'); ?>" method="post">
                <div class="modal-body info_modal">
                    <div class="form-group">
                        <label for="password1">Nombre</label>
                        <input type="text" required name="name" class="form-control" id="password1">
                    </div>
                    <div class="form-group">
                        <label for="email1">Correo electrónico</label>
                        <input type="email" required name="email" class="form-control" id="email1" aria-describedby="emailHelp">

                    </div>
                    <div class="checkboxes-data privacy_policy mb-0 text-dark">
                        <input class="text-dark" type="checkbox" id="acceptance" name="acceptance" class="d-none mr-3" required />
                        <label for="acceptance" class="text-dark">
                            Acepto la
                            <a href="<?= base_url('privacy'); ?>">
                                política de
                                privacidad
                            </a>
                        </label>

                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button class="secondary-btn click2" onclick="">
                        ENVIAR
                    </button>
                    <a id="link1" href="<?= base_url('assets/front/img/Camper.pdf'); ?>" download hidden></a>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="form2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered main_modal" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel font-weight-bold">Déjanos tus datos para poder descargarte el documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('grade/submit'); ?>" method="post">
                <div class="modal-body info_modal">
                    <div class="form-group">
                        <label for="password1">Nombre</label>
                        <input type="text" required name="name" class="form-control" id="password1">
                    </div>
                    <div class="form-group">
                        <label for="email1">Correo electrónico</label>
                        <input type="email" required name="email" class="form-control" id="email1" aria-describedby="emailHelp">

                    </div>
                    <div class="checkboxes-data privacy_policy mb-0 text-dark">
                        <input class="text-dark acceptance" type="checkbox" id="acceptance" name="acceptance" class="d-none mr-3" required />
                        <label for="acceptance" class="text-dark">
                            Acepto la
                            <a href="<?= base_url('privacy'); ?>">
                                política de
                                privacidad
                            </a>
                        </label>

                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button class="secondary-btn click1">
                        ENVIAR
                    </button>
                    <a id="link2" href="<?= base_url('assets/front/img/Sample.pdf'); ?>" download hidden></a>
                </div>

            </form>
        </div>
    </div>
</div>