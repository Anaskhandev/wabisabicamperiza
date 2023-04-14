<main>
    <section class="inner-banner bg-orange pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-uppercase text-white">
                        MANUAL DE CAMPERIZACIÓN
                    </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--    <div class="add_cart" id="mySidenav">-->

    <!--        <div class="d-flex justify-content-between align-items-center cart_heading">-->
    <!--            <div>-->
    <!--                <a href="javascript:void(0)" class="closebtn close_btn" onclick="closeNav()">×</a>-->
    <!--            </div>-->
    <!--            <div>-->
    <!--            <h3 class="m-0">WABI SABI</h3>-->
    <!--            </div>-->
    <!--            <div>-->
    <!--                <i class="fa fa-search mr-3"></i>-->
    <!--                <i class="fa fa-lock"></i>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="container">-->
    <!--            <div class="row justify-content-between add_calculator">-->
    <!--                <div class="col-lg-12">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-4 text-lg-left text-center">-->
    <!--                            <img class="cart_image" src="assets/front/img/book_cover1.png" alt-"">-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-6">-->
    <!--                            <div>-->
    <!--                                <p>Tu Manual de Camperización para camperizar tu furgoneta-->
    <!--</p>-->
    <!--                            </div>-->
    <!--                            <div class="d-flex justify-content-between align-items-center">-->
    <!--                                <div class="number">-->
    <!--                	                <span class="minus quantity">-</span>-->
    <!--                	                <input type="text" name="quantity" id="quantity" value="1"/>-->
    <!--                	                <span class="plus quantity">+</span>-->
    <!--                                </div>-->
    <!--                                <div class="">-->
    <!--                                    <p class="m-0"><span id="unit_value">39</span> €</p>-->
    <!-- <h5 class="m-0">X   $569.09</h5> -->
    <!--                                </div>-->
    <!--                                <div>-->
    <!--                                    <i class="fa fa-lock"></i>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <Div class="col-lg-12 mt-4">-->
    <!--                            <select class="form-control" id="book-type">-->
    <!--                            <option>Elige una opción</option>-->
    <!--                            <option>Libro de tapa blanda</option>-->
    <!--                            <option>Libro electrónico (Ebook)</option>-->
    <!--                            </select>-->
    <!--                            <div class="text-center mt-4">-->
    <!--   <a href="<?= base_url('checkout'); ?>" class="secondary-btn">-->
    <!--  	COMPRAR EN GOOGLE PLAY-->
    <!--</a>-->
    <!--                            </div>-->
    <!--                        </Div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                    <div class="align-items-center btn_side_bar col-lg-12 d-flex flex-column justify-content-end text-center pb-5">-->
    <!--                <div class="text-center mb-4">-->
    <!--                <h5 class="m-0">Subtotal : <span id="total_payment">39</span> €</h5>-->
    <!--            </div>-->
    <!--                <div id="isCheckoutDiv">-->

    <!--                        <a id="comprar_book" href="<?= base_url('checkout'); ?>" class="secondary-btn a_change">COMPRAR</a>-->
    <!--                        <input type="hidden" name="isLogin" id="isLogin" value="true"/>-->

    <!--                </div>-->
    <!--                <div id="iseBooKDiv" style="display:none">-->
    <!--                    <a href="https://play.google.com/store/books?hl=es&gl=US" class="secondary-btn">COMPRAR EN GOOGLE PLAY</a>-->
    <!--                    <input type="hidden" name="isLogin" id="isLogin" value="true"/>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div> -->
    <section class="book_detail pb-0 pt-0">
        <img src="<?= base_url('assets/front/img/orange-shape.png'); ?>" alt="" class="d-lg-block w-100" />
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-6 mb-lg-0 d-flex align-items-center justify-content-center">
                    <?php
                    $reply = $this->db->select('*')->from('price')->get()->result();
                    foreach ($reply as $r) :

                    ?>
                        <div class="price_img"><?php echo $r->master_price; ?>€</div>
                    <?php
                    endforeach;
                    ?>
                    <img class="book_ima mb-5ge" src="<?= base_url('assets/front/img/book_image.png'); ?>" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="text-green text-left mb-4">¿QUÉ INCLUYE EL MANUAL WABI SABI?</h2>
                    <h5 class="text-left">Tu guía paso a paso para camperizar tu furgoneta camper</h5> <br />
                    <ul class="text-left p-0">
                        <li><i class="fa fa-play text-green mr-2"></i>Libro de más de 300 páginas para ayudarte a construir una furgoneta paso a paso.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Diferentes tipos de camperización que se adaptan a tus necesidades.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Más de 600 ilustraciones, esquemas detallados y planos de diferentes furgonetas.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Lista de la compra de materiales, equipos y herramientas necesarias.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Presupuestos personalizados de furgonetas de diferentes tamaños.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Diagramas detallados de los sistemas de gas, agua y electricidad.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Innumerables consejos para ayudarte a ahorrar tiempo y dinero en la camperización.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Todo lo que necesitas saber para homologar tu furgoneta camper.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Descuentos para la homologación de tu furgoneta camper.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Consejos para empezar a vivir la Van Life.</li>
                        <li><i class="fa fa-play text-green mr-2"></i>Todos los recursos que necesitas saber en un solo lugar.</li>
                    </ul>
                    <div class="btn_compare my-5 text-lg-center">
                        <button class="primary-btn text-uppercase px-5 btn-cart-show">
                            COMPRAR
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?= base_url('assets/front/img/green-shape-up.png'); ?>" alt="" class="d-lg-block up_img w-100">
    </section>
    <section class="about_detail bg-green">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <h2 class="text-white text-center">¿QUÉ TE VAMOS A ENSEÑAR?</h2>
                </div>
                <div class="d-flex col-12 p-0 row">

                    <div class="col-lg-4 details text-center  text-white positon-relative mt-5">
                        <img class="straight_line d-lg-block d-sm-none" src="<?= base_url('assets/front/img/line-bg.png'); ?>" alt="">
                        <img class="icon" src="<?= base_url('assets/front/img/cloud-icon.png'); ?>" alt="">
                        <h3 class="font-weight-bold mt-3">PLANIFICA</h3>
                        <p>Encuentra la inspiración que necesitas y empieza a crear una idea que se adapte a tus necesidades.</p>
                    </div>
                    <div class="col-lg-4 details text-center  text-white positon-relative mt-5">
                        <img class="straight_line" src="<?= base_url('assets/front/img/line-bg.png'); ?>" alt="">
                        <img class="icon" src="<?= base_url('assets/front/img/pencil-icon.png'); ?>" alt="">
                        <h3 class="font-weight-bold mt-3">DISEÑA </h3>
                        <p>Diseña diferentes conceptos que definan tu idea inicial, y conoce los materiales y equipos que necesitas para que todo pueda funcionar.</p>
                    </div>
                    <div class="col-lg-4 details text-center  text-white positon-relative mt-5">
                        <img class="straight_line d-lg-none d-sm-block" src="<?= base_url('assets/front/img/line-bg.png'); ?>" alt="">
                        <img class="round_line" src="<?= base_url('assets/front/img/bg-round-line.png'); ?>" alt="">
                        <img class="icon" src="<?= base_url('assets/front/img/buld-icon.png'); ?>" alt="">
                        <h3 class="font-weight-bold mt-3">CREA</h3>
                        <p>Entiende lo que necesitas para crear ese concepto.
                            ¿Cuál es el diseño que cubrirá todas mis necesidades ? ¿Cuánto tiempo y presupuesto me llevará desarrollarlo?</p>
                    </div>
                </div>
                <div class="d-flex flex-md-row flex-column-reverse col-12 p-0 row">

                    <div class="col-lg-4 details text-center text-white positon-relative mt-5">
                        <img class="left_line" src="<?= base_url('assets/front/img/line-bg.png'); ?>" alt="">
                        <img class="icon" src="<?= base_url('assets/front/img/net-icon.png'); ?>" alt="">
                        <h3 class="font-weight-bold mt-3">VIAJA</h3>
                        <p>Ya tienes todo lo necesario para vivir tu primera aventura ¡Disfruta!</p>
                    </div>
                    <div class="col-lg-4 details text-center  text-white positon-relative mt-5">
                        <img class="left_line" src="<?= base_url('assets/front/img/line-bg.png'); ?>" alt="">
                        <img class="icon" src="<?= base_url('assets/front/img/van-icon.png'); ?>" alt="">
                        <h3 class="font-weight-bold mt-3">CONSTRUYE</h3>
                        <p>Crea la furgoneta de tus sueños aplicando todo lo aprendido en la fase de planificación y diseño. Te enseñamos un paso a paso de todo lo que tienes qué hacer y saber.</p>
                    </div>
                    <div class="col-lg-4 details text-center  text-white positon-relative mt-5">
                        <img class="straight_line d-lg-none d-sm-block" src="<?= base_url('assets/front/img/line-bg.png'); ?>" alt="">
                        <img class="icon" src="<?= base_url('assets/front/img/setting-icon.png'); ?>" alt="">
                        <h3 class="font-weight-bold mt-3">DESARROLLA</h3>
                        <p>Entiende cómo conectar todos los sistemas entre sí generando los esquemas y diagramas que te ayudarán a definir tu fase de construcción.</p>
                    </div>
                </div>

                <button class="primary-btn btn-cart-show">
                    COMPRAR
                </button>
            </div>
        </div>
    </section>
    <section id="book_carosuel" class="book_carosuel bg-gray pt-0">
        <img src="<?= base_url('assets/front/img/green-shape.png'); ?>" alt="" class="d-lg-block down_img w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="font-weight-bold text-center mt-5 mb-lg-0 mb-3">¡ ECHA UN VISTAZO !</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center text-center flex-column">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="testi-slider">
                        <div class="owl-carousel">
                            <div class="item">
                                <div>
                                    <img src="<?= base_url('assets/front/img/D 01.png'); ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="<?= base_url('assets/front/img/2.png'); ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="<?= base_url('assets/front/img/3.png'); ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="<?= base_url('assets/front/img/4.png'); ?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <img src="<?= base_url('assets/front/img/1.png'); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('/checkout/book'); ?>" class="primary-btn mt-3">
                    ¡ LO QUIERO !
                </a>
            </div>
        </div>
    </section>
    <section class="introduction_sec pb-0 pt-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <h2 class="font-weight-bold text-center my-4">INDICE MANUAL DE CAMPERIZACIÓN</h2>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <h3 class="text-orange">CAPÍTULO 1 </h3>
                    <h3 class="text-green">INTRODUCCIÓN Y CAMPERIZACIONES</h3>
                    <p class="font-weight-bold">Te enseñamos todo lo que necesitas saber antes de empezar la camperización de tu furgoneta, el proceso que recomendamos seguir y nuestra historia de cómo empezamos esta aventura. También te contamos cuánto cuesta camperizar una furgoneta ,cuánto tiempo se tarda en hacerlo y cuál es la furgoneta que mejor se adapta a tus necesidades.
                    </p>
                    <ul class="p-0">
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">El proceso de conversión de una furgoneta camper</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿De dónde hemos sacado nuestras conclusiones ?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>"> ¿Qué es Wabi Sabi?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Cómo usar este manual?</li>
                        <!-- <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Planificación del tiempo plantilla</li>
                            <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Herramientas plantilla</li>
                            <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Ejemplos de camperizaciones</li>
                            <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Búsqueda de diseños inspiracionales. Diseño cama,
                                coc5na y baño</li> -->
                    </ul>
                </div>
                <div class="col-lg-5">
                    <img class="mt-1 detail_img" src="<?= base_url('assets/front/img/book1.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row align-items-center justify-content-center">
                <div class="offset-lg-1 col-lg-5">
                    <h3 class="text-orange">CAPÍTULO 2 </h3>
                    <h3 class="text-green">PLANIFICACIÓN DEL PROCESO</h3>
                    <p class="font-weight-bold">Te mostramos cómo planificar el proceso de camperización: presupuestos, herramientas, esquemas, planificación del tiempo, lista de materiales y recomendaciones previas que necesitas saber antes de empezar. Además, en este capítulo diferentes Wabi-Sabios te muestran sus diferentes furgonetas camperizadas y su proceso de aprendizaje.
                    </p>
                    <ul class="p-0">
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Por qué es importante planificar?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Cuánto cuesta camperizar una furgoneta ?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Ejemplos de camperizaciones </li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Optimización del proceso de camperización</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Presupuestos camperizaciones</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Lista de la compra: Materiales, equipos y herramientas</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Planificación del tiempo</li>
                    </ul>
                </div>
                <div class="col-lg-5 ">
                    <img class="mt-1 detail_img" src="<?= base_url('assets/front/img/book2.png'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row flex-row-reverse align-items-center justify-content-center">
                <div class="col-lg-5">
                    <h3 class="text-orange">CAPÍTULO 3 </h3>
                    <h3 class="text-green">DISEÑO Y DESARROLLO DE TU IDEA</h3>
                    <p class="font-weight-bold">En este capítulo te vamos a enseñar dónde puedes encontrar la inspiración que necesitas para crear un diseño inicial, y te ayudaremos a crearlo con ayuda de los planos de las furgonetas medianas y grandes más camperizadas del mercado. Además, te diremos cómo distribuir de manera eficiente los equipos tales como la batería, los depósitos bombas, inversores y muchos más.
                    </p>
                    <ul class="p-0">
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Define tus necesidades, requerimientos y especificaciones</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Diseños de furgonetas pequeñas, medianas y grandes</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Qué tamaño de furgoneta debería comprar?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>"> Planifica y crea tu primer diseño </li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Qué estilo quiero dar a mi furgoneta?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Inspiración. Ejemplos de diseños de baños, cocinas, mesas, etc.</li>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <img class="mt-1 detail_img" src="<?= base_url('assets/front/img/book5.jpeg'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row flex-row-reverse align-items-center justify-content-center">
                <<div class="col-lg-5">
                    <h3 class="text-orange">CAPÍTULO 4 </h3>
                    <h3 class="text-green">FASE CONSTRUCCIÓN 1</h3>
                    <p class="font-weight-bold">En este capítulo te explicamos paso a paso todo lo que necesitas saber del proceso constructivo.
                    </p>
                    <ul class="p-0">
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Puesta a punto</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Ventanas y claraboyas</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Bacas y escaleras</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Aislamiento</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Paredes y suelo</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Fabricación de muebles</li>
                    </ul>
            </div>
            <div class="offset-lg-1 col-lg-5">
                <img class="my-5 detail_img" src="<?= base_url('assets/front/img/book4.jpeg'); ?>" alt="">
            </div>
        </div>
        </div>
        <div class="container mt-3">
            <div class="row align-items justify-content-center">
                <div class="offset-lg-1 col-lg-5">
                    <h3 class="text-orange">CAPÍTULO 5 </h3>
                    <h3 class="text-green">FASE CONSTRUCCIÓN 2</h3>
                    <p class="font-weight-bold">En este capítulo te explicamos paso a paso todo lo que necesitas saber de los sistemas y esquemas que harán funcionar los equipos de vuestra furgoneta camper.
                    </p>
                    <ul class="p-0">
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Sistema eléctrico
                            <ul>
                                <li> - Consideraciones previas y explicaciones generales</li>
                                <li> - Paneles solares y relés automáticos</li>
                                <li> - Esquema general carga batería secundaria</li>
                                <li> - Instalación placa solar paso a paso</li>
                                <li> - ¿Cómo calcular la potencia de paneles solares (W)? </li>
                                <li> - ¿Qué tipo de batería elegir para tu furgoneta camper?</li>
                                <li> - ¿Cómo calcular la capacidad de tu batería (Ah)? </li>
                                <li> - Reguladores solares</li>
                                <li> - Cálculo de la intensidad y tensión máxima regulador solar (Ah, V)</li>
                                <li> - Instalación sistema 12 V y esquemas </li>
                                <li> - ¿Qué tamaño de inversor necesito? </li>
                                <li> - Instalación sistema 230 V y esquemas</li>
                                <li> - Instalación luces</li>
                                <li> - Sección cableado</li>
                            </ul>
                        </li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Sistema de agua
                            <ul>
                                <li> - Depósitos de agua, bombas y calentadores de agua</li>
                                <li> - Esquemas de agua e instalación</li>
                            </ul>
                        </li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Sistema de gas

                            <ul>
                                <li> - Consideraciones importantes</li>
                                <li> - Bombonas</li>
                                <li> - ¿Qué tiene que cumplir una instalación de gas?</li>
                                <li> - Equipos en una instalación de gas</li>
                                <li> - Instalación de los equipos de gas</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <img class="my-2 detail_img" src="<?= base_url('assets/front/img/book3.png'); ?>" alt="">
                    <img class="detail_img" src="<?= base_url('assets/front/img/book4.png'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="container pt-0 mt-3">
            <div class="row flex-row-reverse align-items-center justify-content-center">
                <div class="col-lg-5">
                    <h3 class="text-orange">CAPÍTULO 6 </h3>
                    <h3 class="text-green">HOMOLOGACIÓN Y VAN LIFE</h3>
                    <p class="font-weight-bold">Hacer papeleos e informarse de que se necesita para pasar la ITV es algo que a todo el mundo le da mucho miedo. En este capítulo te guiamos y te explicamos qué necesitas para homologar tu furgoneta camper.</p>
                    <ul class="p-0">
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Por qué hay que homologar una furgoneta camper? </li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Qué pasa si no tenemos la ITV pasada? </li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Qué cosas NO hay que homologar en una camper?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Qué cosas hay que homologar en una camper?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>"> ¿Cuáles son los documentos necesarios que debo llevar a la ITV?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Las reglas de la Van Life</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Dónde dormir?</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Apps para encontrar sitios dónde dormir</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Seguro para tu furgoneta camper</li>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <img class="my-5 detail_img" src="<?= base_url('assets/front/img/book3.jpeg'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row align-items-center justify-content-center">
                <div class="offset-lg-1 col-lg-5">
                    <!--<h3 class="text-orange">CAPÍTULO 7 -</h3>-->
                    <h3 class="text-green">ANEXOS</h3>
                    <!-- <p class="font-weight-bold">Lee información detallada sobre cada fase de la
                        camperización y todas las opciones disponibles. Incluye
                        ejemplos de diagramas eléctricos, de agua y de gas para
                        que puedas crear el sistema que mejor se adapte a tus
                        necesidades
                        </p> -->
                    <ul class="p-0">
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Planificación</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Presupuestos</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">Planos de furgonetas</li>
                        <li><img class="mr-2" src="<?= base_url('assets/front/img/checked.svg'); ?>">¿Qué estilo quiero dar a mi furgoneta camper?</li>
                </div>
                <div class="col-lg-5">
                    <img class="mt-2 detail_img" src="<?= base_url('assets/front/img/book5.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
        <img src="<?= base_url('assets/front/img/orange-shape-up.png'); ?>" alt="" class="d-lg-block w-100">
    </section>
    <section class="bg-orange p-0">
        <div class="container">
            <div id="accordion" class="accordion pt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <h2 class="text-green text-center">PREGUNTAS FRECUENTES</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion-ques faq-acc">
                            <div class="ques collapsed" data-toggle="collapse" href="#faq1" aria-expanded="true">
                                <i class="fas fa-caret-right left-icon"></i>
                                <h5 class="text-black mb-0">
                                    ¿Se hacen envíos a España, las Islas Canarias y Latinoamérica ?
                                </h5>
                                <i class="far fa-angle-up icon"></i>
                            </div>
                            <div id="faq1" class="collapse show" data-parent="#accordion">
                                <div class="answers ml-0">
                                    <p>
                                        Sí, para España y las islas Canarias tu libro se entregará entre 4-11 días laborales.
                                    </p>
                                    <p>
                                        Si lo compras desde algún país de Latinomerica, te recomendamos que lo compres desde <a href="https://www.amazon.es/Manual-Camperizaci%C3%B3n-Wabi-Guillermo-Torres/dp/B0BQ9F6JRX/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=FWKBN0M761YY&keywords=Manual+de+camperizaci%C3%B3n+Wabi+Sabi&qid=1671297864&sprefix=manual+de+camperizaci%C3%B3n+wabi+sabi%2Caps%2C81&sr=8-1">Amazon.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-ques faq-acc">
                            <div class="ques collapsed" data-toggle="collapse" href="#faq2" aria-expanded="false">
                                <i class="fas fa-caret-right left-icon"></i>
                                <h5 class="text-black mb-0">
                                    ¿Dónde se puede comprar el Manual de camperización?

                                </h5>
                                <i class="far fa-angle-up icon"></i>
                            </div>
                            <div id="faq2" class="collapse" data-parent="#accordion">
                                <div class="answers ml-0">
                                    <p></p>
                                    El Manual de Camperización Wabi Sabi se puede comprar tanto en formato físico como en formato digital.
                                    </p>
                                    <p>
                                        Lo encontrarás en nuestra <strong>web, Amazon y Google Play. </strong> Aquí tienes los enlaces:
                                    </p>
                                    <p> <a href="https://play.google.com/store/books/details?id=LKWfEAAAQBAJ&pli=1">Google Play</a></p>
                                    <p> <a href="https://www.amazon.es/Manual-Camperizaci%C3%B3n-Wabi-Guillermo-Torres/dp/B0BQ9F6JRX/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=FWKBN0M761YY&keywords=Manual+de+camperizaci%C3%B3n+Wabi+Sabi&qid=1671297864&sprefix=manual+de+camperizaci%C3%B3n+wabi+sabi%2Caps%2C81&sr=8-1">Amazon.</a> </p>
                                    <p> <a href="https://wabisabicamperiza.com/checkout/book">Web</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-ques faq-acc">
                            <div class="ques collapsed" data-toggle="collapse" href="#faq3" aria-expanded="false">
                                <i class="fas fa-caret-right left-icon"></i>
                                <h5 class="text-black mb-0">
                                    ¿Qué tipos de furgonetas (marca/modelo) me enseñará a construir Wabi Sabi?
                                </h5>
                                <i class="far fa-angle-up icon"></i>
                            </div>
                            <div id="faq3" class="collapse" data-parent="#accordion">
                                <div class="answers ml-0">
                                    <p>
                                        En el Manual de Camperización Wabi Sabi te mostramos camperizaciones de muchas marcas de furgonetas diferentes y de todos los tamaños (grandes, medianas y pequeñas).
                                        Algunas marcas y modelos incluyen: Mercedes Sprinter, Citroën Jumper, Peugeot Boxer, Fiat Ducato, Renault Máster, Volkswagen T5 y mucho más.
                                        <br /><br />Incluso si vuestra furgoneta no aparece en el Manual, podréis replicar fácilmente las camperizaciones expuestas ya que hemos considerado todas
                                        las dimensiones de las furgonetas existentes del mercado, teniendo en cuenta las longitudes, anchuras y alturas de furgonetas grandes, medianas y pequeñas.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 text-center mt-xl-0 p-0">
                                <button class="secondary-btn btn-cart-show">
                                    COMPRAR
                                </button>
                            </div>
                        </div>
                    </div>
    </section>
    <section class="pt-0 client_about">
        <img src="<?= base_url('assets/front/img/orange-shape.png'); ?>" alt="" class="d-lg-block w-100">
        <div class="container mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="offset-lg-1 col-lg-5">
                    <h3 class="mb-4 font-weight-bold">PLANIFICA, CONSTRUYE
                        Y RECORRE EL MUNDO</h3>
                    <ul class="text-left p-0">
                        <div class="d-flex">
                            <i class="fa fa-check-circle-o text-green mr-4"></i>
                            <li>¿Quieres despertarte con una vista nueva cada mañana?</li>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-check-circle-o text-green mr-4"></i>
                            <li>¿Siempre has soñado con tener una furgoneta camper pero no
                                sabes si te lo puedes permitir?
                            </li>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-check-circle-o text-green mr-4"></i>
                            <li>¿Siempre has querido construir una furgoneta camper pero no
                                sabes por dónde empezar?</li>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-check-circle-o text-green mr-4"></i>
                            <li>¿Quieres escapar de tu rutina diaria y vivir cada día cómo si fuese
                                el último?
                            </li>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-check-circle-o text-green mr-4"></i>
                            <li>Este manual de camperización te ayudará a planificar, diseñar,
                                camperizar y homologar una furgoneta camper paso a paso que se adapte a tus
                                necesidades, tanto económicas como personales. En este manual
                                encontrarás respuesta a todas tus preguntas, incluso a aquellas
                                que todavía no te has planteado aún...</li>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-check-circle-o text-green mr-4"></i>
                            <li>En definitiva, este manual te ayudará ahorrar tiempo, dinero y a
                                evitar costosos errores que muchos aventureros han cometido en el
                                proceso de camperización. En esta guía encontrarás esquemas y diagramas
                                detallados de los sistemas de gas, agua, electricidad y hasta
                                explicaciones paso a paso que te ayuden a construir tu
                                hotel de 5 estrellas con vistas al mar</li>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-6 text-center">
                    <img class="user_client" src="<?= base_url('assets/front/img/bed_view.jpeg'); ?>" alt="">
                    <!--<div class="img_overlay d-md-none d-lg-block"></div>-->
                </div>
            </div>
        </div>
    </section>
    <!--<section class="tress_sec">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center align-items-center">-->
    <!--            <div class="col-lg-6 text-center">-->
    <!--                <img src="<?= base_url('assets/front/img/tree-logo.png'); ?>" alt="">-->
    <!--            </div>-->
    <!--            <div class="col-lg-6">-->
    <!--                <h3>Plantamos árboles por el futuro de <br>-->
    <!--                    nuestros hijos-->
    <!--                    </h3>-->
    <!--                    <p>Plantamos árboles por el futuro de nuestros hijos</p>-->
    <!--                    <p>Todo lo que creamos en Librio, desde los libros hasta los folletos-->
    <!--                        publicitarios y las láminas, está impreso en papel 100% reciclado.-->
    <!--                        Ni un solo árbol ha sido talado para crear nuestros productos.</p>-->
    <!--                        <p>Sin embargo, incluso el papel reciclado fue una vez un árbol, por lo-->
    <!--                            que por cada producto que creamos hacemos una donación a-->
    <!--                            Trees for the Future.</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <section class="disponible_sec">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 bg_yellow">
                    <h2 class="text-center text-white mt-3 font-weight-bold m-0">DISPONIBLE EN</h2>
                </div>
                <div class="col-12 col-lg-10 mx-auto mt-5 owl-carousel logos_carousel">
                    <div class="logo_item d-flex align-items-center mx-md-5 mx-sm-3">
                        <img src="<?= base_url('assets/front/img/Amazon.png'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="logo_item d-flex align-items-center mx-md-5 mx-sm-3">
                        <img src="<?= base_url('assets/front/img/casa.png'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="logo_item d-flex align-items-center mx-md-5 mx-sm-3">
                        <img src="<?= base_url('assets/front/img/site-logo.svg'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="logo_item d-flex align-items-center mx-md-5 mx-sm-3">
                        <img src="<?= base_url('./assets/front/img/googlebooks.png'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="review_cards">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <h2 class="text-center font-weight-bold m-0">Opiniones de nuestros clientes</h2>
                </div>
                <div class="col-12 col-lg-6 mx-auto mt-5 owl-carousel review_carousel">
                    <?php if (!empty($book_review)) { ?>
                        <?php foreach ($book_review as $d) : ?>
                            <div class="card item">
                                <div class="card-body text-lg-left text-md-left text-center">
                                    <p class="card-text"><?php echo $d['msg']; ?></p>
                                    <div class="d-xl-flex d-lg-flex d-md-block justify-content-between align-items-center">
                                        <div class="d-lg-flex">
                                            <!--<div class="mr-lg-4 mr-md-4 mr-0">-->
                                            <!--    <img src="<?= base_url('assets/front/img/user-img.png'); ?>" alt="">-->
                                            <!--</div>-->
                                            <div>
                                                <p class="mb-0 font-weight-bold"><?php echo $d['name']; ?></p>
                                                <span class="text-gray"><?php echo $d['affair']; ?></span>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php } else { ?>
                        <p>no reviews found</p>
                    <?php } ?>
                </div>
                <!--<div class="col-lg-6  mt-5">-->
                <!--    <div class="card">-->
                <!--      <div class="card-body text-lg-left text-md-left text-center">-->
                <!--        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae facilis nobis reprehenderit dolores rem! Accusamus dolore neque eaque nihil nisi porro dicta aspernatur perspiciatis blanditiis unde hic, labore officia saepe. Eius optio doloribus deleniti rerum sint hic asperiores, eum maiores officia? Quis veritatis omnis vel corrupti, natus quo quia accusantium?</p>-->
                <!--        <div class="d-xl-flex d-lg-flex d-md-block justify-content-between align-items-center">-->
                <!--            <div class="d-lg-flex">-->
                <!--                <div class="mr-lg-4 mr-md-4 mr-0">-->
                <!--                    <img src="<?= base_url('assets/front/img/user-img.png'); ?>" alt="">-->
                <!--                </div>-->
                <!--                <div>-->
                <!--                    <p class="mb-0 font-weight-bold">Unknown printer</p>-->
                <!--                    <span class="text-gray">UK</span>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div>-->
                <!--              <i class="fa fa-star"></i>-->
                <!--              <i class="fa fa-star"></i>-->
                <!--              <i class="fa fa-star"></i>-->
                <!--              <i class="fa fa-star"></i>-->
                <!--              <i class="fa fa-star"></i>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--<div class="col-lg-6 mt-5">-->
                <!--  <div class="card">-->
                <!--    <div class="card-body text-lg-left text-md-left text-center">-->
                <!--      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae facilis nobis reprehenderit dolores rem! Accusamus dolore neque eaque nihil nisi porro dicta aspernatur perspiciatis blanditiis unde hic, labore officia saepe. Eius optio doloribus deleniti rerum sint hic asperiores, eum maiores officia? Quis veritatis omnis vel corrupti, natus quo quia accusantium?</p>-->
                <!--      <div class="d-xl-flex d-lg-flex d-md-block justify-content-between align-items-center">-->
                <!--          <div class="d-lg-flex">-->
                <!--              <div class="mr-lg-4 mr-md-4 mr-0">-->
                <!--                  <img src="<?= base_url('assets/front/img/user-img.png'); ?>" alt="">-->
                <!--              </div>-->
                <!--              <div>-->
                <!--                  <p class="mb-0 font-weight-bold">Unknown printer</p>-->
                <!--                  <span class="text-gray">UK</span>-->
                <!--              </div>-->
                <!--          </div>-->
                <!--          <div>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--          </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-6 mt-5">-->
                <!--  <div class="card">-->
                <!--    <div class="card-body text-lg-left text-md-left text-center">-->
                <!--      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae facilis nobis reprehenderit dolores rem! Accusamus dolore neque eaque nihil nisi porro dicta aspernatur perspiciatis blanditiis unde hic, labore officia saepe. Eius optio doloribus deleniti rerum sint hic asperiores, eum maiores officia? Quis veritatis omnis vel corrupti, natus quo quia accusantium?</p>-->
                <!--      <div class="d-xl-flex d-lg-flex d-md-block justify-content-between align-items-center">-->
                <!--          <div class="d-lg-flex">-->
                <!--              <div class="mr-lg-4 mr-md-4 mr-0">-->
                <!--                  <img src="<?= base_url('assets/front/img/user-img.png'); ?>" alt="">-->
                <!--              </div>-->
                <!--              <div>-->
                <!--                  <p class="mb-0 font-weight-bold">Unknown printer</p>-->
                <!--                  <span class="text-gray">UK</span>-->
                <!--              </div>-->
                <!--          </div>-->
                <!--          <div>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--            <i class="fa fa-star"></i>-->
                <!--          </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <section class="contact-form review_form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="text-orange mb-2 mt-0">
                        ¿QUIERES DEJARNOS TU OPINIÓN?
                    </h2>
                </div>
            </div>
            <form action="<?= base_url('manual/reviews'); ?>" method="post" enctype="multipart/form-data" class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-md-5 form-group mb-3">
                    <label>Tu nombre</label>
                    <div class="icon-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" id="name" placeholder="Tu nombre" class="field w-100" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 form-group mb-3">
                    <label>Tu correo electrónico</label>
                    <div class="icon-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Tu correo electrónico" class="field w-100" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 form-group mb-3">
                    <label>Asunto</label>
                    <div class="icon-field">
                        <i class="fas fa-comment-alt-lines"></i>
                        <input type="text" name="affair" id="affair" placeholder="Asunto" class="field w-100" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 form-group mb-2">
                    <label>Tu opinión</label>
                    <div class="icon-field">
                        <i class="fas fa-comment-alt-lines"></i>
                        <textarea name="msg" id="msg" rows="5" placeholder="Tu mensaje" class="w-100 field"></textarea>
                    </div>
                </div>
                <div class="col-lg-8 checkboxes-data mb-0  privacy_policy text-dark">
                    <input class="text-dark" type="checkbox" id="acceptance" class="d-none mr-3" required />
                    <label for="acceptance" class="text-dark">
                        Acepto la
                        <a href="<?= base_url('privacy'); ?>">
                            política de
                            privacidad
                        </a>
                    </label>

                </div>
                <div class="col-lg-8 col-md-10 text-center">
                    <button class="primary-btn text-uppercase">
                        ENVIAR
                    </button>
                </div>
            </form>
        </div>
        <script>
            jQuery(document).ready(function(jQuery) {
                //alert("okkk");
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
    </section>
</main>