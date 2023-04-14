<div class="content-wrapper">
  <section class="content-header">
    <h1>
        <?php echo !empty($title)?$title:'Payment';?>
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
                <small class="text-success"><i class="fa fa-calendar"></i> Time: <?php  
                $db = $record->checkout_created_at;
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

                 <?php if(!empty($record->phone)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Phone</span>
                      <span class="col-md-10 view_details"><?php echo $record->phone;?></span>
                  </div>  
                <?php endif;?>

                 <?php if(!empty($record->request)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Special Request</span>
                      <span class="col-md-10 view_details"><?php echo $record->request;?></span>
                  </div>  
                <?php endif;?>
                
                

                 <?php if(!empty($record->adrs)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Address</span>
                      <span class="col-md-10 view_details"><?php echo $record->adrs;?></span>
                  </div>  
                <?php endif;?>
                
                  <?php if(!empty($record->description)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Description</span>
                      <span class="col-md-10 view_details"><?php echo $record->description;?></span>
                  </div>  
                <?php endif;?>
                
                

                 <?php if(!empty($record->amount)):?>
                  <div class="form-group clearfix">
                      <span class="col-md-2 view_label">Amount</span>
                      <span class="col-md-10 view_details"><?php echo $record->amount;?></span>
                  </div>  
                <?php endif;?>


              </div>      
          </div>
        </div>   
      </div>
    </div>
  </section>
</div>