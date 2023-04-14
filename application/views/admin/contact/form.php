<?php
$table_name = $this->uri->segment(2);
$form_type = urldecode($this->uri->segment(4));
$id = $this->uri->segment(5);
$email='email';
$action="";
echo $form_type;

if($form_type == "reply"){
    
    $reply= $_POST['reply'];

        $to = $record->email;
        $subject = "Wabi Sabi ~ Contact Message Reply.";
        
        $message = '
        <html>
        <head>
        <title>Wabi Sabi Camperiza Payment Confirmation Email.</title>
        </head>
        <body style=" box-sizing:border-box; margin: 0px; ">
            
            <h2>'.$reply.'</h2>

          <h1>Thank You For Contacting us</h1>
          
          

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
            redirect('http://wabisabicamperiza.com/admin/contact');
        }
        else{
            echo 'error 404';
        }

}else if($form_type == "view"){
?>  
<div class="content-wrapper">
  <section class="content-header">
    <h1>
        <?php echo !empty($title)?$title:'Title';?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">s
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">View Data</h3>
          </div>     
          <div class="col-md-12">
              <div class="box-body box-body-view">
                <small class="text-success"><i class="fa fa-calendar"></i> Created on: <?php  
                echo $record->contact_created_at;?></small> <br>

                <small class="text-info"><i class="fa fa-calendar"></i> Updated on: <?php  
                echo $record->contact_updated_at;?>></small> 
         
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Name</span>
                      <span class="col-md-10 view_details"><?php echo $record->name;?></span>
                  </div>  
                  
                   <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Email</span>
                      <span class="col-md-10 view_details"><?php echo $record->email;?></span>
                  </div>  
                  
                   <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Affair</span>
                      <span class="col-md-10 view_details"><?php echo $record->affair;?></span>
                  </div>  
                
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Message</span>
                      <span class="col-md-10 view_details"><?php echo $record->msg;?></span>
                  </div>  
            
                
                

              </div>      
          </div>
        </div>   
      </div>
    </div>
  </section>
</div>
 <?php 
}



        
?>