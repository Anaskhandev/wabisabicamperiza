<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class StripePaymentController extends CI_Controller {
    
    public function __construct() {
       parent::__construct();
       $this->load->library("session");
       $this->load->helper('url');
    }
    
    public function index()
    {
        $this->load->view('front/checkout');
    }
    
    public function handlePayment()
    {
        require_once('application/libraries/stripe-php-master/init.php');
         \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
     
         try
         {
            $totalPrice = $this->session->userdata('amount');
            $fullName = $this->session->userdata('name');
            $today = date("Ymd");
            $rand = strtoupper(substr(uniqid(sha1(time())),0,12));
            $unique = $today . $rand;
            $payment_id = $unique;
            $data = [
                'payment_id'=>$payment_id,
                'name'=>$this->session->userdata('name'),
                'email'=>$this->session->userdata('email'),
                'phone'=>$this->session->userdata('phone'),
                'request'=>$this->session->userdata('request'),
                'description'=>$this->session->userdata('description'),
                'amount'=>$this->session->userdata('amount'),
                'adrs'=>$this->session->userdata('adrs'),
            ];
             $res = \Stripe\Charge::create ([
                 "amount" => $totalPrice * 100,
                 "currency" => "eur",
                 "source" => $this->input->post('stripeToken'),
                 "description" => $fullName.' Stripe Payment!' 
             ]);
             $this->db->insert('checkout',$data);
             $this->sendMail();
             $this->session->unset_userdata('amount');
             $this->session->set_flashdata('title', 'CUSTOMER DETAIL');
             $this->session->set_flashdata('success', 'Payment has been successful.');
             redirect('/make-stripe-payment', 'refresh');
         }
         catch(Stripe\Exception\CardException $ex)
         {
            $this->session->set_flashdata('title', 'CUSTOMER DETAIL');
            $this->session->set_flashdata('error', 'Payment failed.');
            redirect('/make-stripe-payment', 'refresh');
         }
    }
    public function sendMail()
    {
        $to = $this->session->userdata('email');
        $subject = "Wabi Sabi Camperiza Payment Confirmation Email.";
        
        $message = "
        <html>
        <head>
        <title>Wabi Sabi Camperiza Payment Confirmation Email.</title>
        </head>
        <body>
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing='0' style='border: 2px dashed #FB4314; width: 100%;'> 
        <tr> 
            <th style='text-align:left'>Name:</th><td>".$this->session->userdata('name')."</td> 
        </tr> 
        <tr style='background-color: #e0e0e0;'> 
            <th style='text-align:left'>Email:</th><td>".$this->session->userdata('email')."</td> 
        </tr>
        <tr> 
            <th style='text-align:left'>Phone Number:</th><td>".$this->session->userdata('phone')."</td> 
        </tr> 
        <tr> 
            <th style='text-align:left'>Request:</th><td>".$this->session->userdata('request')."</td> 
        </tr> 
        <tr> 
            <th style='text-align:left'>Description:</th><td>".$this->session->userdata('description')."</td> 
        </tr> 
        <tr> 
            <th style='text-align:left'>Address:</th><td>".$this->session->userdata('adrs')."</td> 
        </tr> 
        <tr> 
            <th style='text-align:left'>Amount:</th><td>".$this->session->userdata('amount')." $</td> 
        </tr> 
        </table>
        </body>
        </html>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <info@wabisabicamperiza.com>' . "\r\n";
        
        mail($to,$subject,$message,$headers);
    }
}