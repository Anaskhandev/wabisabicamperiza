<!-- .site-main -->

<?php
$link = explode('/', (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
// echo print_r($link);
?>

<main class="site-main">
    <!-- ./blog-banner-sec -->
    <section class="blog_banner p-0">
        <div class="owl-carousel">
            <?php foreach ($blog as $d) : ?>
                <div class="item">
                    <div class="text-center content content">
                        <h2 class="text-white text-uppercase mb-lg-0 mb-4">
                            Blog
                        </h2>
                        <h3 class="text-white my-lg-3 mb-4">
                            <?= $d['heading']; ?>
                        </h3>
                        <a href="<?= base_url('blog_internal/') . $d['blog_id']; ?>" class="primary-btn">
                            LEER M&Aacute;s
                        </a>
                    </div>
                    <img src="<?= base_url('assets/front/img/blog_img.jpg'); ?>" alt="">
                    <div class="imgae_overlay"></div>
                </div>
                <!--<div class="item">-->
                <!--    <div class="text-center content">-->
                <!--        <h2 class="text-white text-uppercase mb-lg-0 mb-4">-->
                <!--            Blog-->
                <!--        </h2>-->
                <!--        <h3 class="text-white my-lg-3 mb-4">-->
                <!--            La plataforma Finnovating agiliza la inversion en el sector FinTech-->
                <!--            rompiendo cualquier barrera de tiempo o espacio.-->
                <!--        </h3>-->
                <!--        <a href="#" class="primary-btn">-->
                <!--            Read More-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <img src="<?= base_url('assets/front/img/blog_2.jpeg'); ?>" alt="">-->
                <!--    <div class="imgae_overlay"></div>-->
                <!--</div>-->
                <!--<div class="item">-->
                <!--    <div class="text-center content">-->
                <!--        <h2 class="text-white text-uppercase mb-lg-0 mb-4">-->
                <!--            Blog-->
                <!--        </h2>-->
                <!--        <h3 class="text-white my-lg-3 mb-4">-->
                <!--            La plataforma Finnovating agiliza la inversion en el sector FinTech-->
                <!--            rompiendo cualquier barrera de tiempo o espacio.-->
                <!--        </h3>-->
                <!--        <a href="#" class="primary-btn">-->
                <!--            Read More-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <img src="<?= base_url('assets/front/img/blog_3.jpeg'); ?>" alt="">-->
                <!--    <div class="imgae_overlay"></div>-->
                <!--</div>-->
                <!--<div class="item">-->
                <!--    <div class="text-center content">-->
                <!--        <h2 class="text-white text-uppercase mb-lg-0 mb-4">-->
                <!--            Blog-->
                <!--        </h2>-->
                <!--        <h3 class="text-white my-lg-3 mb-4">-->
                <!--            La plataforma Finnovating agiliza la inversion en el sector FinTech-->
                <!--            rompiendo cualquier barrera de tiempo o espacio.-->
                <!--        </h3>-->
                <!--        <a href="#" class="primary-btn">-->
                <!--            Read More-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <img src="<?= base_url('assets/front/img/blog_4.jpeg'); ?>" alt="">-->
                <!--    <div class="imgae_overlay"></div>-->
                <!--</div>-->
                <!--<div class="item">-->
                <!--    <div class="text-center content">-->
                <!--        <h2 class="text-white text-uppercase mb-0">-->
                <!--            Blog-->
                <!--        </h2>-->
                <!--        <h3 class="text-white my-lg-3 mb-4">-->
                <!--            La plataforma Finnovating agiliza la inversion en el sector FinTech-->
                <!--            rompiendo cualquier barrera de tiempo o espacio.-->
                <!--        </h3>-->
                <!--        <a href="#" class="primary-btn">-->
                <!--            Read More-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <img src="<?= base_url('assets/front/img/blog_5.jpeg'); ?>" alt="">-->
                <!--    <div class="imgae_overlay"></div>-->
                <!--</div>-->
                <!--<div class="item">-->
                <!--    <div class="text-center content">-->
                <!--        <h2 class="text-white text-uppercase mb-0">-->
                <!--            Blog-->
                <!--        </h2>-->
                <!--        <h3 class="text-white my-lg-3 mb-4">-->
                <!--            La plataforma Finnovating agiliza la inversion en el sector FinTech-->
                <!--            rompiendo cualquier barrera de tiempo o espacio.-->
                <!--        </h3>-->
                <!--        <a href="#" class="primary-btn">-->
                <!--            Read More-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <img src="<?= base_url('assets/front/img/blog_6.JPG'); ?>" alt="">-->
                <!--    <div class="imgae_overlay"></div>-->
                <!--</div>-->
                <!--<div class="item">-->
                <!--    <div class="text-center content">-->
                <!--        <h2 class="text-white text-uppercase mb-0">-->
                <!--            Blog-->
                <!--        </h2>-->
                <!--        <h3 class="text-white my-lg-3 mb-4">-->
                <!--            La plataforma Finnovating agiliza la inversion en el sector FinTech-->
                <!--            rompiendo cualquier barrera de tiempo o espacio.-->
                <!--        </h3>-->
                <!--        <a href="#" class="primary-btn">-->
                <!--            Read More-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <img src="<?= base_url('assets/front/img/blog_7.jpeg'); ?>" alt="">-->
                <!--    <div class="imgae_overlay"></div>-->
                <!--</div>-->
                <!--<div class="item">-->
                <!--    <div class="text-center content">-->
                <!--        <h2 class="text-white text-uppercase mb-0">-->
                <!--            Blog-->
                <!--        </h2>-->
                <!--        <h3 class="text-white my-lg-3 mb-4">-->
                <!--            La plataforma Finnovating agiliza la inversion en el sector FinTech-->
                <!--            rompiendo cualquier barrera de tiempo o espacio.-->
                <!--        </h3>-->
                <!--        <a href="#" class="primary-btn">-->
                <!--            Read More-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <img src="<?= base_url('assets/front/img/blog_8.jpeg'); ?>" alt="">-->
                <!--    <div class="imgae_overlay"></div>-->
                <!--</div>-->
            <?php endforeach; ?>
        </div>
        <img src="<?= base_url('assets/front/img/white-shape-up.png'); ?>" alt="" class="d-lg-block w-100 white_border_style" />


    </section>
    <!-- .blog-listing-sec -->
    <section class="blog-listing-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-green font-weight-bold">
                        &Uacute;ltimos Posts
                    </h2>
                </div>
                <div class="col-xl-7 col-12">
                    <div class="listing container-fluid">
                        <div class="row">
                            <?php foreach ($blog as $d) : ?>
                                <div class="col-md-6 blog-boxes">
                                    <a href="<?= base_url('blog_internal/') . $d['blog_id']; ?>">
                                        <div class="b-box">
                                            <div class="img">
                                                <img src="<?= base_url('uploads/blogs/') . $d['image']; ?>" alt="" class="w-100 mb-3" />
                                            </div>
                                            <div class="title">
                                                <h4 class="text-black">
                                                    <?= $d['heading']; ?>
                                                </h4>
                                            </div>
                                            <!--<div class="desc">-->
                                            <!--    <p>-->
                                            <!--        <?php echo substr_replace($d['text'], "...", 145); ?>-->
                                            <!--    </p>-->
                                            <!--</div>-->
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="btns text-right pt-4">
                            <a href="#" class="d-inline-block text-uppercase">
                                ANTERIOR
                            </a>
                            <a href="#" class="d-inline-block text-uppercase">
                                SIGUIENTE
                            </a>
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
            <!--<h5 class="modal-title">Descargar</h5>-->
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
                        <input oninvalid="this.setCustomValidity('Por favor marca esta casilla para continuar')" onchange="this.setCustomValidity('')" class="text-dark" type="checkbox" id="acceptance" name="acceptance" class="d-none mr-3" required />
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
                    <button class="primary-btn click2" onclick="">
                        ENVIAR
                    </button>
                    <a id="link1" href="https://docs.google.com/spreadsheets/d/1NHQu4wnwvnYVPfbnY4k-fOyZmIpSKHB5DpKD4T_Qy9E/edit#gid=0" target="__blank" hidden></a>
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
            <h5 class="modal-title"></h5>
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
                        <input oninvalid="this.setCustomValidity('Por favor marca esta casilla para continuar')" onchange="this.setCustomValidity('')" class="text-dark acceptance" type="checkbox" id="acceptance" name="acceptance" class="d-none mr-3" required />
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
                    <button class="primary-btn click1">
                        ENVIAR
                    </button>
                    <a id="link2" target="__blank" href="https://drive.google.com/file/d/1HEtOm4TzB4JdvO75vCPktmpXf50de7PT/view" hidden></a>
                </div>

            </form>
        </div>
    </div>
</div>