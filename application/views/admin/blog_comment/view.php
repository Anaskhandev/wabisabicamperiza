<?php
$table_name = $this->uri->segment(2);
$id = $this->uri->segment(4);
$action = base_url('admin/'.$table_name.'/submit')
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
        <?php echo !empty($title)?$title:'Blog Comment';?>
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
                $db = $record->blog_created_at;
                $timestamp = strtotime($db);
                echo date("F j, Y, g:i a",$timestamp);?></small> <br>

                <?php if(!empty($record->name)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Name</span>
                      <span class="col-md-10 view_details"><?php echo $record->name;?></span>
                  </div>  
                <?php endif;?>

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

                 <?php if(!empty($record->heading)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Blog Name</span>
                      <span class="col-md-10 view_details"><?php echo $record->heading;?></span>
                  </div>  
                <?php endif;?>
                
                <form role="form" action="<?php echo $action;?>" class="view_form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Reply</label> 
                        <textarea type="text" class="form-control" id="reply" name="reply" required value="" rows="2"></textarea>
                        <?php echo form_error('heading'); ?>
                        <input required type="hidden" name="blog_id" id="name" value="<?= $record->blog_id;?>" />
                        <input required type="hidden" name="blog_comment_id" id="name" value="<?= $record->blog_comment_id;?>" />
                    </div>
                    <button type="submit" class="btn-primary">Reply <i class="fa fa-mail-reply" aria-hidden="true"></i></button>
                </form>
                

              </div>      
          </div>
        </div>   
      </div>
    </div>
  </section>
</div>