<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<style>
	#mySidenav{
		display: none;
	}
	h3{
		font-size: 24px;
		font-weight: 700;
	}
</style>
<section>
	<div class="container">
		<h3 style="text-align:center">
			Proporcione sus detalles de pago</h3><br />
		<div class="row">
			<div class="col-xl-6 col-md-8 col-12 mx-auto">
				<div class="panel panel-default">
					<div class="panel-body">
						<!-- <?php if ($this->session->flashdata('success')) { ?>
						<div class="alert alert-success text-center">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
							<p><?php echo $this->session->flashdata('success'); ?></p>
						</div>
						<?php } ?> -->
						<form role="form" action="<?php echo base_url('handleStripeBookPayment'); ?>" method="post" class="form-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_publishable_key') ?>" id="payment-form">
							<div class='form-group'>
								<div class='col-xs-12 form-group required'>
									<label class='control-label'>Nombre en la tarjeta</label>
									<input class='form-control' size='4' type='text'>
								</div>
							</div>
							<div class='form-group'>
								<div class='col-xs-12 form-group required'>
									<label class='control-label'>N&uacute;mero de tarjeta</label>
									<input autocomplete='off' class='form-control card-number' size='20' type='text'>
								</div>
							</div>
							<div class='form-group row'>
								<div class='col-xs-12 col-md-4 form-group cvc required'>
									<label class='control-label'>CVC</label>
									<input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
								</div>
								<div class='col-xs-12 col-md-4 form-group expiration required'>
									<label class='control-label'>Fetcha de vencimiento</label>
									<input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
								</div>
								<div class='col-xs-12 col-md-4 form-group expiration required'>
									<label class='control-label'>Año de vencimiento</label>
									<input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
								</div>
							</div>
							<div class='form-group row' hidden>
								<div class='col-md-12 error form-group ' >
									<div class='alert-danger alert'>Error occured while making the payment.</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 d-flex align-items-center justify-content-center">
									<?php
									if (!$this->session->userdata('amount')) {
									?><button class="btn btn-danger btn-lg btn-block" type="button"><a style="text-decoration:none;color:white" href="<?php echo base_url('checkout'); ?>">Go to Home Page</a></button><?php
																																																					} else {
																																																						?><button class="btn btn-danger btn-lg btn-block" type="submit">Pagar (€<?= $this->session->userdata('amount') ? $this->session->userdata('amount') : 0 ?>)</button><?php
																																																																																														}
																																																																																															?>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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