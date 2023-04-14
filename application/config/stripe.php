<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
/* 
| ------------------------------------------------------------------- 
|  Stripe API Configuration 
| ------------------------------------------------------------------- 
| 
| You will get the API keys from Developers panel of the Stripe account 
| Login to Stripe account (https://dashboard.stripe.com/) 
| and navigate to the Developers » API keys page 
| Remember to switch to your live publishable and secret key in production! 
| 
|  stripe_api_key            string   Your Stripe API Secret key. 
|  stripe_publishable_key    string   Your Stripe API Publishable key. 
|  stripe_currency           string   Currency code. 
*/ 
// Old Stripe keys
//$config['stripe_key'] = 'pk_test_51JUed2HunsRRB5CfTroEB34d9nTzUT8cwYa9HKCChJYfEKPUb3aZ4scBw1TDWJxGuy6cKtarZ2xebtocbTqvEKjM00t3k8M23G';
//$config['stripe_secret'] = 'sk_test_51JUed2HunsRRB5Cf29lJ5BvxF3otu7acRuD7146ImWvSeVEX1G2XMyAobbfkmXVFIaQl363nOVnuFkOF7ugrO6Sz00bUrw7XLZ';
//$config['stripe_currency']        = 'usd';

//wabisabi original STRIPE KEYS
$config['stripe_publishable_key'] = '';
$config['stripe_secret'] = '';
$config['stripe_currency']        = 'eur';