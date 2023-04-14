<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StripeBookPaymentController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper('url');
    }

    public function index()
    {
        $content['main_content'] = 'stripe-book-page';
        $this->load->view('front/inc/view', $content);
    }

    public function handleBookPayment()
    {
        require_once('application/libraries/stripe-php-master/init.php');
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));

        try {
            $totalPrice = $this->session->userdata('amount');
            $fullName = $this->session->userdata('first_name') . ' ' . $this->session->userdata('last_name');
            $data = array(
                'user_id' =>    $this->session->userdata('login_user_id'),
                'first_name' =>    $this->session->userdata('first_name'),
                'last_name' => $this->session->userdata('last_name'),
                'company' => $this->session->userdata('company'),
                'User_Id_entered' => $this->session->userdata('User_Id'),
                'country' => $this->session->userdata('country'),
                'street_name' => $this->session->userdata('street_name'),
                'street_number' => $this->session->userdata('street_number'),
                'city' => $this->session->userdata('city'),
                'state' => $this->session->userdata('state'),
                'zipcode' => $this->session->userdata('zipcode'),
                'phone_number' => $this->session->userdata('phone_number'),
                'email' => $this->session->userdata('email'),
                'note' => $this->session->userdata('note'),
                'quantity' => $this->session->userdata('quantity'),
                'amount' => $this->session->userdata('total_payment'),
                'book_type' => $this->session->userdata('book_type'),
            );
            $res = \Stripe\Charge::create([
                "amount" => $totalPrice * 100,
                "currency" => "eur",
                "source" => $this->input->post('stripeToken'),
                "description" => $fullName . ' Stripe Book Payment!',
            ]);
            $data['transection_id'] = $res->id;
            $this->db->insert('book_payments', $data);
            //$this->sendMail();
            if ($res->id) {
                $this->session->unset_userdata('first_name');
                $this->session->unset_userdata('last_name');
                $this->session->unset_userdata('company');
                $this->session->unset_userdata('country');
                $this->session->unset_userdata('User_Id');
                $this->session->unset_userdata('street_name');
                $this->session->unset_userdata('street_number');
                $this->session->unset_userdata('city');
                $this->session->unset_userdata('state');
                $this->session->unset_userdata('zipcode');
                $this->session->unset_userdata('phone_number');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('note');
                $this->session->unset_userdata('quantity');
                $this->session->unset_userdata('total_payment');
                $this->session->unset_userdata('book_type');
            }
            $this->session->set_flashdata('title', 'Hola Wabi Sabi@');
            $this->session->set_flashdata('success', '¡Gracias por tu pedido!');
            $this->session->set_flashdata('footer', 'Pronto te llegará un correo con todos los detalles');

            redirect('Manual-de-Camperizacion');
            //redirect('/make-stripe-payment', 'refresh');
        } catch (Stripe\Exception\CardException $ex) {
            $this->session->set_flashdata('title', '¡Vaya! Algo ha salido mal...');
            $this->session->set_flashdata('error', 'Por favor , inténtelo de nuevo');
            redirect('/make-stripe-book-payment', 'refresh');
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
            <th style='text-align:left'>Name:</th><td>" . $this->session->userdata('name') . "</td> 
        </tr> 
        <tr style='background-color: #e0e0e0;'> 
            <th style='text-align:left'>Email:</th><td>" . $this->session->userdata('email') . "</td> 
        </tr>
        <tr> 
            <th style='text-align:left'>Phone Number:</th><td>" . $this->session->userdata('phone') . "</td> 
        </tr> 
        <tr> 
            <th style='text-align:left'>Request:</th><td>" . $this->session->userdata('request') . "</td> 
        </tr> 
        <tr> 
            <th style='text-align:left'>Description:</th><td>" . $this->session->userdata('description') . "</td> 
        </tr> 
        <tr> 
            <th style='text-align:left'>Address:</th><td>" . $this->session->userdata('adrs') . "</td> 
        </tr> 
        <tr> 
            <th style='text-align:left'>Amount:</th><td>" . $this->session->userdata('amount') . " $</td> 
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

        mail($to, $subject, $message, $headers);
    }
}
