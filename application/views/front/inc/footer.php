<!-- .site-footer -->
<footer class="site-footer">
    <img src="<?= base_url('assets/front/img/truck-img1.png'); ?>" alt="" class="d-md-block d-none truck-img" />
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-7">
                <div class="left-widget">
                    <div class="desc text-white text-center">
                        <p>
                            ¿Quieres saber cuánto cuesta camperizar una furgoneta camper?
                        </p>
                    </div>
                    <h4 class="text-white text-center">
                        ¡Danos tu email y te lo contamos todo!
                    </h4>
                    <div class="forms mt-4">
                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup {
                                background: #fff;
                                clear: left;
                                font: 14px Helvetica, Arial, sans-serif;
                                width: 600px;
                            }

                            .mce_inline_error {
                                background: white;
                                box-shadow: 0px 0px 10px rgb(0, 0, 0, 0.2);
                                position: absolute;
                                padding: 5px 10px;
                                border-radius: 10px;
                                top: 50px;
                            }

                            .required.mce_inline_error {
                                position: initial;
                                background-color: transparent;
                            }

                            #mce-success-response {
                                color: #3cb08e;
                                position: relative;
                                /* left: 20%; */
                                font-weight: 800;
                                font-size: 30px;
                            }

                            .fa-warning {
                                position: initial !important;
                                color: orange !important;
                            }

                            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="">
                            <form action="https://wabisabicamperiza.us12.list-manage.com/subscribe/post?u=780fd0ef148f068f65681537e&amp;id=b6c442aeb2&amp;f_id=00132ce0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="row">
                                    <div class="mc-field-group col-md-6 form-group mb-4">
                                        <i class="fas fa-user"></i>
                                        </label>
                                        <input type="text" value="" name="FNAME" placeholder="Introduzca su nombre" class="required field w-100" id="mce-FNAME" required>
                                        <span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
                                    </div>
                                    <div class="mc-field-group col-md-6 form-group mb-4">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" value="" name="EMAIL" placeholder="Introduce tu correo electrónico" class="required field w-100 email" id="mce-EMAIL" required>
                                        <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                                    </div>
                                    <div class="col-12 row align-items-center justify-content-between">
                                        <div class="mc-field-group col-sm-6 col-12 input-group">
                                            <ul class="px-0">
                                                <li>
                                                    <input type="checkbox" class="required" value="1" name="group[54196][1]" id="mce-group[54196]-54196-0">
                                                    <label for="mce-group[54196]-54196-0 " class="text-white">Acepto la <a class="text-white policy_page" href="<?= base_url('privacy'); ?>">politica de
                                                            privacidad</a></label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="mce-responses" class="clear foot">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                        </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_780fd0ef148f068f65681537e_b6c442aeb2" tabindex="-1" value=""></div>
                                        <div class="optionalParent col-6 d-flex justify-content-end">
                                            <div class="clear foot">
                                                <input type="submit" value="AVÍSAME" name="subscribe" id="mc-embedded-subscribe" class="secondary-btn">
                                                <!-- <p class="brandingLogo"><a href="http://eepurl.com/ie7i_f" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p> -->
                                            </div>
                                        </div>
                                        <div class="response mx-auto" id="mce-success-response" style="display:none"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <script>

                        </script>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                        <script type='text/javascript'>
                            (function($) {
                                window.fnames = new Array();
                                window.ftypes = new Array();
                                fnames[0] = 'EMAIL';
                                ftypes[0] = 'email';
                                fnames[1] = 'FNAME';
                                ftypes[1] = 'text';
                                fnames[2] = 'LNAME';
                                ftypes[2] = 'text';
                                fnames[3] = 'ADDRESS';
                                ftypes[3] = 'address';
                                fnames[4] = 'PHONE';
                                ftypes[4] = 'phone';
                                fnames[5] = 'BIRTHDAY';
                                ftypes[5] = 'birthday';
                            }(jQuery));
                            var $mcj = jQuery.noConflict(true);
                            /**
                                To customize your embedded form validation messages, place this code before the closing script tag.
                            */
                            $mcj.extend($mcj.validator.messages, {
                                required: "<i class='fa fa-warning'></i> Por favor complete este campo",
                                remote: "<i class='fa fa-warning'></i>Por favor arregla este campo",
                                email: "<i class='fa fa-warning'></i>Por favor, introduce una dirección de correo electrónico válida.",
                                url: "<i class='fa fa-warning'></i>Por favor introduzca un URL válido.",
                                date: "<i class='fa fa-warning'></i>Por favor introduzca una fecha valida.",
                                dateISO: "Please enter a valid date (ISO).",
                                number: "Please enter a valid number.",
                                digits: "Please enter only digits.",
                                creditcard: "Please enter a valid credit card number.",
                                equalTo: "Please enter the same value again.",
                                accept: "Please enter a value with a valid extension.",
                                maxlength: $mcj.validator.format("Please enter no more than {0} characters."),
                                minlength: $mcj.validator.format("Please enter at least {0} characters."),
                                rangelength: $mcj.validator.format("Please enter a value between {0} and {1} characters long."),
                                range: $mcj.validator.format("Please enter a value between {0} and {1}."),
                                max: $mcj.validator.format("Please enter a value less than or equal to {0}."),
                                min: $mcj.validator.format("Please enter a value greater than or equal to {0}."),
                                mc_birthday: "Please enter a valid month and day.",
                                mc_date: "Please enter a valid date.",
                                mc_phone: "Please enter a valid phone number.",
                            });
                        </script>
                        <!--End mc_embed_signup-->
                        <!-- <form action="<?= base_url('home/newsletter'); ?>" method="post">
                            <div class="row align-items-center">
                                <div class="col-md-6 form-group mb-4">
                                    <input required type="text" name="name" id="name" placeholder="Introduzca su nombre" class="field w-100" />
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group mb-4">
                                    <input required type="email" name="email" id="email" placeholder="Introduce tu correo electrónico" class="field w-100" />
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="col-lg-6 form-group mb-4">
                                    <div class="checkboxes-data mb-0">
                                        <input type="checkbox" oninvalid="this.setCustomValidity('Por favor marca esta casilla para continuar')" onchange="this.setCustomValidity('')" id="acceptance" class="footer_check" required />
                                        <label for="acceptance" id="footer_accept" class="text-white">Acepto la <a class="text-white policy_page" href="<?= base_url('privacy'); ?>">politica de
                                                privacidad</a></label>

                                    </div>
                                </div>
                                <div class="col-lg-6 text-lg-right text-center form-group mb-4">
                                    <button type="submit" class="secondary-btn">
                                        AVÍSAME
                                    </button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-5">
                <ul class="social-link text-center pl-0">
                    <li class="d-inline-block">
                        <a href="https://www.instagram.com/wabisabi_vanlife/?hl=es" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a href="https://www.tiktok.com/@wabisabi_vanlife" target="_blank">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-menus">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2 text-md-left text-center mb-md-0 mb-3">
                            <img src="<?= base_url('assets/front/img/footer-logo.svg'); ?>" alt="" />
                        </div>
                        <div class="col-lg-9 col-md-10 text-center">
                            <ul class="menus mb-0 pl-0">
                                <li>
                                    <a href="<?= base_url(); ?>" class="active">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Manual-de-Camperizacion'); ?>">
                                        Libro
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('blog'); ?>">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('contact'); ?>">
                                        Contacto
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('grade'); ?>">
                                        Curso
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('work'); ?>">
                                        Trabaja aquí
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyrights">
            <div class="col-md-6 text-md-left text-center">
                <p class="mb-md-0 mb-2 text-white">
                    Información básica de protección de datos
                </p>
            </div>
            <div class="col-md-6 text-md-right text-center">
                <p class="mb-md-0 mb-2 text-white">
                    © 2022 WABI SABI. ALL RIGHTS RESERVED.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- ./site-footer -->



<!-- custom js -->
<script src="<?= base_url('assets/front/scripts/slick.js'); ?>"></script>
<script src="<?= base_url('assets/front/scripts/slick-animation.min.js'); ?>"></script>
<script src="<?= base_url('assets/front/scripts/owl.carousel.js'); ?>"></script>
<script src="<?= base_url('assets/front/scripts/fancybox.min.js'); ?>"></script>
<script src="<?= base_url('assets/front/scripts/jquery.matchHeight-min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/MotionPathPlugin.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
<script>
    // Steps 
    // ------------step-wizard-------------
    $(document).ready(function() {
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function() {

            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);

        });
        $(".prev-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });
    });

    function nextTab(elem) {
        jQuery(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        jQuery(elem).prev().find('a[data-toggle="tab"]').click();
    }


    jQuery('.nav-tabs').on('click', 'li', function() {
        jQuery('.nav-tabs li.active').removeClass('active');
        jQuery(this).addClass('active');
    });
    $(document).ready(function() {
        $(window).scroll(function(e) {

            var scrollPercent = ($(window).scrollTop() / $(document).height()) * 100;
            console.log(scrollPercent)
            if (scrollPercent >= 0.1) {
                $('.behind').css('width', '50%')
            }
            if (scrollPercent >= 0.5) {
                $('.behind').css('width', '55%')
            }
            if (scrollPercent >= 1) {
                $('.behind').css('width', '65%')
            }
            if (scrollPercent >= 1.5) {
                $('.behind').css('width', '75%')
            }
            if (scrollPercent >= 2) {
                $('.behind').css('width', '85%')
            }
            if (scrollPercent >= 2.5) {
                $('.behind').css('width', '95%')
            }
            if (scrollPercent >= 3) {
                $('.behind').css('width', '100%')
            }
            if (scrollPercent >= 17) {
                $('.module1 .car-img').css('animation', 'down 2s linear forwards')
            }
            if (scrollPercent <= 17) {
                $('.module1 .car-img').css('animation', 'up 2s linear forwards')
            }

        })
    })
</script>
<script>
    jQuery(document).ready(function(jQuery) {
        //alert("okkk");
        $(document).ready('#quantity', function() {
            if ($("#isLogin").val() == 'false') {
                swal("Cart", "Please login first!", "error");
                $('#quantity').val(1)
                return false;
            }
            let quantity = $("#quantity").val();
            let unit_value = parseFloat($("#unit_value").text());
            if (quantity == 0) {
                swal("Cart", "Sorry! quantity can not be 0.", "error");
                $("#quantity").val(1);
                $("#total_payment").text(unit_value);
                $.ajax({
                    url: "<?php echo base_url(); ?>Manual/totalAmout",
                    type: "POST",
                    data: {
                        "total_payment": unit_value,
                        'quantity': 1
                    },
                    dataType: "json",
                    success: function(data) {
                        alert(data);
                    },
                    error: function(data) {
                        alert(data);
                    }
                });
                return false;
            }
            let total_payment = quantity * unit_value;
            $("#total_payment").empty();
            $("#total_payment").text(total_payment);
            $.ajax({
                url: "<?php echo base_url(); ?>Manual/totalAmout",
                type: "POST",
                data: {
                    "total_payment": total_payment,
                    'quantity': quantity
                },
                dataType: "json",
                success: function(data) {
                    //alert(data);
                },
                error: function(data) {
                    //alert(data);
                }
            });
            return false;
        });
        $(document).on('change', '#quantity', function() {
            if ($("#isLogin").val() == 'false') {
                swal("Cart", "Please login first!", "error");
                $('#quantity').val(1)
                return false;
            }
            let quantity = $("#quantity").val();
            let unit_value = parseFloat($("#unit_value").text());
            if (quantity == 0) {
                swal("Cart", "Sorry! quantity can not be 0.", "error");
                $("#quantity").val(1);
                $("#total_payment").text(unit_value);
                $.ajax({
                    url: "<?php echo base_url(); ?>Manual/totalAmout",
                    type: "POST",
                    data: {
                        "total_payment": unit_value,
                        'quantity': 1
                    },
                    dataType: "json",
                    success: function(data) {
                        alert(data);
                    },
                    error: function(data) {
                        alert(data);
                    }
                });
                return false;
            }
            let total_payment = quantity * unit_value;
            $("#total_payment").empty();
            $("#total_payment").text(total_payment);
            $.ajax({
                url: "<?php echo base_url(); ?>Manual/totalAmout",
                type: "POST",
                data: {
                    "total_payment": total_payment,
                    'quantity': quantity
                },
                dataType: "json",
                success: function(data) {
                    //alert(data);
                },
                error: function(data) {
                    //alert(data);
                }
            });
            return false;
        });
        $(document).on('change', '#book-type', function() {
            if ($("#isLogin").val() == 'false') {
                swal("Cart", "Please login first!", "error");
                return false;
            }
            let book_type = $(this).val();
            if (book_type == "Ebook") {
                $("#isCheckoutDiv").css("display", 'none');
                $("#iseBooKDiv").css("display", 'block');
                return false;
            } else {
                $("#isCheckoutDiv").css("display", 'block');
                $("#iseBooKDiv").css("display", 'none');
            }
            $.ajax({
                url: "<?php echo base_url(); ?>Manual/bookType",
                type: "POST",
                data: {
                    "book_type": book_type
                },
                dataType: "json",
                success: function(data) {
                    //alert(data);
                },
                error: function(data) {
                    //alert(data);
                }
            });

        });
    });
</script>
<script type="text/javascript">
    <?php
    function abcd()
    {
        $flashdata = array();

        if (!empty($_SESSION['__ci_vars'])) {
            foreach ($_SESSION['__ci_vars'] as $key => &$value) {
                is_int($value) or $flashdata[$key] = $_SESSION[$key];
            }
        }
        unset($_SESSION[$key]);
        return $flashdata;
    }
    ?>
    <?php if ($this->session->flashdata('success')) { ?>
        Swal.fire({
            title: "<?php echo $this->session->flashdata('title'); ?>",
            footer: "<?php echo $this->session->flashdata('footer'); ?>",
            text: "<?php echo $this->session->flashdata('success'); ?>",
            icon: "success"
        });
        setTimeout(() => {
            <?php
            abcd()
            ?>
        }, 10000);
    <?php } else if ($this->session->flashdata('error')) {  ?>
        sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('error'); ?>", "error");
        setTimeout(() => {
            <?php
            abcd()
            ?>
        }, 10000);
    <?php } else if ($this->session->flashdata('warning')) {  ?>
        sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('warning'); ?>", "warning");
        setTimeout(() => {
            <?php
            abcd()
            ?>
        }, 10000);
    <?php } else if ($this->session->flashdata('info')) {  ?>
        sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('info'); ?>", "info");
        setTimeout(() => {
            <?php
            abcd()
            ?>
        }, 10000);
    <?php } ?>
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="<?= base_url('assets/front/scripts/main.js'); ?>"></script>
<script>
    $(document).on('click', '.next-btn', function() {
        let step = $(this).data('step');
        let input_name = 'q' + step;
        let selected_val = $('input[name="' + input_name + '"]:checked').val();
        // alert(selected_val);
        //return false;
        $.ajax({
            url: "<?php echo base_url(); ?>Home/multiStepSelectedValue",
            type: "POST",
            data: {
                "selected_val": selected_val,
                'step': step
            },
            dataType: "json",
            success: function(data) {
                console.log("success");
                console.log(data);
            },
            error: function(data) {
                console.log("error");
                console.log(data);
                //alert(data);
            }
        });
    });
    $(document).on('click', '.previous-btn', function() {
        let step = $(this).data('step');
        let input_name = 'q' + step;
        let selected_val = $('input[name="' + input_name + '"]:checked').val();
        //alert(selected_val); 
        //return false;
        $.ajax({
            url: "<?php echo base_url(); ?>Home/multiStepPreviousSelectedValue",
            type: "POST",
            data: {
                "selected_val": selected_val,
                'step': step
            },
            dataType: "json",
            success: function(data) {
                console.log("success");
                console.log(data);
            },
            error: function(data) {
                console.log("error");
                console.log(data);
                //alert(data);
            }
        });
    });
</script>
</body>

</html>