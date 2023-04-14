<?php
$table_name = $this->uri->segment(2);
$form_type = urldecode($this->uri->segment(4));
$id = $this->uri->segment(5);
$email='email';
$action="";

 $reply= $_POST['reply'];

        $to = $record->email;
        $subject = "Wabi Sabi ~ Blog Comment Reply Reply.";
        
        $message = '
        <html>
        <head>
        <title>Wabi Sabi Camperiza Payment Confirmation Email.</title>
        </head>
        <body style=" box-sizing:border-box; margin: 0px; ">
            
            <h2>'.$reply.'</h2>
          
          

        </body>
        </html>
        ';
        
        // Always set content-type when sending HTML email
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // More headers
        $headers .= 'From: <info@wabisabicamperiza.com>' . "\r\n";
        
        if(mail($to,$subject,$message,$headers)){
            $this->session->set_flashdata('success', 'reply sent Successfully.');
            redirect('http://wabisabicamperiza.com/admin/'. $table_name);
        }
        else{
            echo 'error 404';
        }


?>