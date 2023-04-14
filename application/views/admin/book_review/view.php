<?php
$table_name = $this->uri->segment(2);
$id = $this->uri->segment(4);
$action = base_url('admin/'.$table_name.'/form/reply/').$id 
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
        <?php echo !empty($title)?$title:'Book Reviews';?>
        <?php echo $id; ?>
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
               

                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Name</span>
                      <span class="col-md-10 view_details"><?php echo $record->name;?></span>
                  </div>  

                 <?php if(!empty($record->email)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Email</span>
                      <span class="col-md-10 view_details"><?php echo $record->email;?></span>
                  </div>  
                <?php endif;?>

                 <?php if(!empty($record->msg)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Message</span>
                      <span class="col-md-10 view_details"><?php echo $record->msg;?></span>
                  </div>  
                <?php endif;?>

                 <?php if(!empty($record->affair)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Affair</span>
                      <span class="col-md-10 view_details"><?php echo $record->affair;?></span>
                  </div>  
                <?php endif;?>
                
                <!--<form role="form" action="<?php echo $action;?>" class="view_form" method="post" enctype="multipart/form-data">-->
                <!--    <div class="form-group">-->
                <!--        <label>Reply</label> -->
                <!--        <textarea type="text" class="form-control" id="reply" name="reply" required value="" rows="2"></textarea>-->
                <!--        <?php echo form_error('heading'); ?>-->
                <!--    </div>-->
                <!--    <button type="submit" class="btn-primary">Reply <i class="fa fa-mail-reply" aria-hidden="true"></i></button>-->
                <!--</form>-->
                

              </div>      
          </div>
        </div>   
      </div>
    </div>
  </section>
</div>