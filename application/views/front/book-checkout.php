<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?= $first_part; ?> - Wabi Sabi</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="icon" href="<?= base_url('assets/front/img/favicon.svg'); ?>" type="image/png" sizes="16x16">

	<!-- bootstrape -->
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/bootstrap.min.css'); ?>">

	<!-- font-awesome -->
	<script src="<?= base_url('assets/front/scripts/font-awesome-5-pro.js'); ?>"></script>

	<!-- custom -->
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/slick.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/owl_carousel_min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/owl_theme_default_min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/fancybox.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/main.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/responsive.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?= base_url('assets/front/styles/animate.css'); ?>">
	<script src="<?= base_url('assets/front/scripts/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/front/scripts/bootstrap.min.js'); ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/alert.css'); ?>" />
	<script src="<?php echo base_url('assets/admin/js/alert.js'); ?>"></script>

</head>

<body class="main-body">


	<section class="check_form">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<form action="<?= base_url('Checkout/book_processed'); ?>" method="POST">
						<div class="row justify-content-center">
							<div class="col-lg-8 pr-0">
								<h2>¡Hola Wabi Sabi@!</h2>
								<p>¿Tienes un código de descuento ? <a href="#">Pulsa aquí para introducir tu código</a> </p>
								<p>¿Ya eres cliente ? <a href="#"> Pulsa aquí para identificarte</a></p>
								<!-- <p>Have you cupon <a href="#">Click here to enter your code</a> </p>
						<p>Returning customer? <a href="#">Click here to login</a></p> -->
								<h5>Detalles de facturación</h5>
								<!-- <label class="label_name">Create an account
								<input type="checkbox">
								<span class="checkmark"></span>
							</label> -->
								<div class="d-flex p-0 mt-5">
									<div class="form-group pl-0 col-lg-5">
										<label for="first_name">Nombre*</label>
										<input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp" required>
									</div>
									<div class="form-group pr-0 col-lg-5">
										<label for="last_name">Apellidos*</label>
										<input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp">
									</div>
								</div>
								<div class="form-group p-0 col-lg-10">
									<label for="User_Id">DNI/VAT*</label>
									<input type="text" class="form-control" id="User_Id" name="User_Id" aria-describedby="emailHelp" required>
								</div>
								<div class="form-group p-0 col-lg-10">
									<label for="company">Nombre de empresa (Opcional)</label>
									<input type="text" class="form-control" id="company" name="company" aria-describedby="emailHelp">
								</div>
								<div class="form-group p-0 col-md-10">
									<label for="country">País</label>
									<select id="country" class="form-control" name="country" required>
										<option selected value="España">España</option>
										<option value="Albania">Albania</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Åland Islands">Åland Islands</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote D'ivoire">Cote D'ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guernsey">Guernsey</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-bissau">Guinea-bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
										<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jersey">Jersey</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
										<option value="Korea, Republic of">Korea, Republic of</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
										<option value="Moldova, Republic of">Moldova, Republic of</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Helena">Saint Helena</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
										<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
										<option value="Thailand">Thailand</option>
										<option value="Timor-leste">Timor-leste</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Viet Nam">Viet Nam</option>
										<option value="Virgin Islands, British">Virgin Islands, British</option>
										<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
								<div class="form-group p-0 col-lg-10">
									<label for="street_name">Dirección de envío*</label>
									<input type="text" class="form-control mb-3" id="street_name" name="street_name" required  aria-describedby="emailHelp" placeholder="Tipo de vía, número, piso, puerta" required>
									<input type="text" class="form-control" id="street_number" name="street_number"  required aria-describedby="emailHelp" placeholder="Apartamento, chalet, piso (opcional)  ">
								</div>
								<div class="form-group p-0 col-lg-10">
									<label for="city">Ciudad / Pueblo*</label>
									<input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp" required>
								</div>
								<div class="form-group p-0 col-lg-10">
									<label for="state">Provincia*</label>
									<input type="text" class="form-control" id="state" name="state" aria-describedby="emailHelp" required>
								</div>
								<div class="form-group p-0 col-lg-10">
									<label for="zipcode">Código Postal*</label>
									<input type="text" class="form-control" id="zipcode" name="zipcode" aria-describedby="emailHelp" required>
								</div>
								<div class="form-group p-0 col-lg-10">
									<label for="phone_number">Teléfono*</label>
									<input type="text" class="form-control" id="phone_number" name="phone_number" aria-describedby="emailHelp" required>
								</div>
								<div class="form-group p-0 col-lg-10">
									<label for="email">Correo electrónico*</label>
									<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
								</div>
								<!-- <label class="label_name mb-4">Create an account
								<input type="checkbox">
								<span class="checkmark"></span>
							 </label> -->
								<div class="form-group p-0 col-lg-10">
									<label for="note">Notas adicionales (Opcional)</label>
									<input type="text" class="form-control" id="note" name="note" aria-describedby="emailHelp" placeholder="Notas sobre tu pedido, ¿Algo que necesite saber el repartidor ? ">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="d-flex justify-content-between">
									<h6>Producto</h6>
									<h6>Subtotal</h6>
								</div>
								<div class="row align-items-center justify-content-center add_calculator">
									<div class="col-lg-4">
										<img src="<?= base_url('assets/front/img/book_cover1.png'); ?>">
									</div>
									<div class="col-lg-8">
										<p>Tu Manual de Camperización para camperizar tu furgoneta</p>
									</div>
								</div>
								<div class="d-flex justify-content-between mt-4">
									<h6>Formato del libro</h6>
									<h6><?= $this->session->userdata('book_type'); ?></h6>
								</div>
								<div class="d-flex justify-content-between mt-4">
									<h6>Subtotal</h6>
									<h6><?= $this->session->userdata('total_payment'); ?> €</h6>
								</div>
								<div class="d-flex justify-content-between mt-2">
									<h6>Gastos de envío</h6>
									<p class="text-right">Gastos de envío gratis a toda España</p>
								</div>
								<div class="d-flex justify-content-between mt-2">
									<h6>Total</h6>
									<h6><?= $this->session->userdata('total_payment'); ?> €</h6>
								</div>
								<!-- <div class="col-lg-12 debit_card">
							<div class="d-flex justify-content-between align-items-center">
								<img class="img-fluid" src="<?= base_url('assets/front/img/amex.svg'); ?>" alt="">
								<img class="img-fluid" src="<?= base_url('assets/front/img/visa.svg'); ?>" alt="">
								<img class="img-fluid" src="<?= base_url('assets/front/img/mastercard.svg'); ?>" alt="">
								<h5>Card</h5>
							</div>
							<div class="col-lg-12">
								<p>
									<label for="date"></label>
									<input type="date" id="date">
								  </p>
							</div>
						</div> -->
								<!-- <div class="col-lg-12 google_pay">
							<div class="d-flex align-items-center">
								<img class="p-0" src="assets/img/googlepay_round_outline.svg" alt="">
								<p class="mt-3 ml-3">Google Pay</p>
							</div>
						</div> -->
								<div class="col-lg-12 mt-4">
									<p>Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en este sitio web y para otros fines descritos en nuestra <a href="<?= base_url('/privacy'); ?>"> política de privacidad. </a></p>
									<p>
										Ver los <a href="<?= base_url('terms'); ?>">t&eacute;rminos y condiciones</a> del sitio web. <br /><br />
										<!-- <script>
									        function InvalidMsg(textbox) {
                                                if (textbox.value == '') {
                                                    textbox.setCustomValidity('Por favor marca esta casilla para continuar');
                                                }
                                                else if (textbox.validity.typeMismatch){
                                                    textbox.setCustomValidity('Por favor marca esta casilla para continuar');
                                                }
                                                else {
                                                   textbox.setCustomValidity('');
                                                }
												textbox.reportValidity();
                                                return true;
                                            }   
									    </script> -->
										<label>
											<input type="checkbox" value="" oninvalid="this.setCustomValidity('Por favor marca esta casilla para continuar')" onchange="this.setCustomValidity('')" required>
											He le&iacute;do y acepto la política de privacidad, los términos y condiciones del sitio web.
										</label>
									</p>
								</div>
								<div class="col-lg-12 text-center ">
									<input type="submit" name="place_order_btn" class="primary-btn w-100 text-decoration-none" value="Realizar Pedido" />
									<!-- <a href="#" class="primary-btn w-100 text-decoration-none">
								PLACE ORDER
							</a> -->
								</div>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</section>
	<!-- custom js -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript">
		$(function() {
			var $stripeForm = $(".form-validation");
			$('form.form-validation').bind('submit', function(e) {
				var $stripeForm = $(".form-validation"),
					inputSelector = ['input[type=email]', 'input[type=password]',
						'input[type=text]', 'input[type=file]',
						'textarea'
					].join(', '),
					$inputs = $stripeForm.find('.required').find(inputSelector),
					$errorMessage = $stripeForm.find('div.error'),
					valid = true;
				$errorMessage.addClass('hide');
				$('.has-error').removeClass('has-error');
				$inputs.each(function(i, el) {
					var $input = $(el);
					if ($input.val() === '') {
						$input.parent().addClass('has-error');
						$errorMessage.removeClass('hide');
						e.preventDefault();
					}
				});
				if (!$stripeForm.data('cc-on-file')) {
					e.preventDefault();
					Stripe.setPublishableKey($stripeForm.data('stripe-publishable-key'));
					Stripe.createToken({
						number: $('.card-number').val(),
						cvc: $('.card-cvc').val(),
						exp_month: $('.card-expiry-month').val(),
						exp_year: $('.card-expiry-year').val()
					}, stripeResponseHandler);
				}
			});

			function stripeResponseHandler(status, res) {
				if (res.error) {
					$('.error')
						.removeClass('hide')
						.find('.alert')
						.text(res.error.message);
				} else {
					var token = res['id'];
					$stripeForm.find('input[type=text]').empty();
					$stripeForm.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
					$stripeForm.get(0).submit();
				}
			}
		});
	</script>

	<script type="text/javascript">
		<?php if ($this->session->flashdata('success')) { ?>
			sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('success'); ?>", "success");
		<?php } else if ($this->session->flashdata('error')) {  ?>
			sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('error'); ?>", "error");
		<?php } else if ($this->session->flashdata('warning')) {  ?>
			sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('warning'); ?>", "warning");
		<?php } else if ($this->session->flashdata('info')) {  ?>
			sweetAlert("<?php echo $this->session->flashdata('title'); ?>", "<?php echo $this->session->flashdata('info'); ?>", "info");
		<?php } ?>
	</script>