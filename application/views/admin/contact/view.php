
<?php
$table_name = $this->uri->segment(2);
$form_type = $this->uri->segment(4);
$id = $this->uri->segment(4);
$action = base_url('admin/'.$table_name.'/form/reply/').$id;


?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <?php echo !empty($title)?$title:'Contact Reply';?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
        <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Reply</h3>
            </div>     
            <div class="col-md-6">
   
                <form role="form" action="<?php echo $action;?>" method="post" enctype="multipart/form-data">       
                    <div class="box-body">
                        <div class="form-group">
                        <label>Reply</label> 
                        <textarea type="text" class="form-control" id="reply" name="reply" required value="" rows="5"></textarea>
                        <?php echo form_error('heading'); ?>
                    </div> 
                    
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>    
                </form>        
            </div>
          </div>
      </div>
    </div>
  </section>
</div>