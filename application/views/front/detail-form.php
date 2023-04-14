	<body class="main-body">
       <main>
        <section class="inner-banner bg-purple pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-uppercase text-white">
                            CUSTOMER DETAIL
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="comparization-sec carso-sec3 bg-green pt-0 pb-0 contact-form">
            <img src="<?= base_url('assets/front/img/blue-shape-down.png');?>" alt="" class="d-lg-block w-100" />
                <div class="container Sign_in">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 text-center mb-4">
                            <h2>LET'S CONNECT</h2>
                        </div>
                        <div class="col-xl-8 col-lg-10">
                            <form action="<?= base_url('checkout/submit');?>" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Nombre</label>
                                        <div class="icon-field">
                                            <i class="fas fa-user"></i>
                                            <input type="text" required name="name" id="fname" placeholder="Full Name" class="field w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Correo electrónico</label>
                                        <div class="icon-field">
                                            <i class="fas fa-comment-alt-lines"></i>
                                            <input type="email" required name="email" id="business" placeholder="Email Adress" class="field w-100" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 form-group">
                                        <label>Phone number</label>
                                        <div class="icon-field">
                                            <i class="fas fa-envelope"></i>
                                            <input type="text" required name="phone" id="" placeholder="No#" class="field w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Request</label>
                                        <div class="icon-field">
                                            <i class="fas fa-envelope"></i>
                                            <input type="text" name="request" id="email" placeholder="Any special request?" class="field w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Description</label>
                                        <div class="icon-field">
                                            <i class="fas fa-envelope"></i>
                                            <input value="Test Wabi" readonly type="text" name="description" id="email"  class="field w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Amount</label>
                                        <div class="icon-field">
                                            <i class="fa fa-weibo"></i>
                                            <input type="text" name="amount" id="fname" placeholder="Amount" class="field w-100" value="100" readonly />
                                        </div>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label>Address</label>
                                        <div class="icon-field">
                                            <i class="fa fa-address-card"></i>
                                            <input type="text" required name="adrs" id="business" placeholder="Address" class="field w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group text-center">
                                        <h6 class="text-white">Your information is safe with us.</h6>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type=submit class="primary-btn text-uppercase">
											Complete
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <section class="p-0">
            <img src="<?= base_url('assets/front/img/green-shape.png');?>" alt="" class="d-lg-block w-100">
        </section>
       </main>
