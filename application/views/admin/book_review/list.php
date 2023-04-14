<?php
$table_name = $this->uri->segment(2);
$record_id = $this->uri->segment(2).'_id';
// $form_type = $this->uri->segment(4);
$id = $this->uri->segment(4);
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <?php echo !empty($title)?$title:'Book Reviews ';?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body">
            <table id="datatable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S.No</th> 
                  <th>Name</th>
                  <th>Email</th>
                  <th>Affair</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>            
                <?php $i=1; if(!empty($records)): foreach($records as $record):?>    
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo !empty($record->name)?$record->name:'';?></td>
                  <td><?php echo !empty($record->email)?$record->email:'';?></td>
                  <td><?php echo !empty($record->affair)?$record->affair:'';?></td>
                  <td><?php echo !empty($record->msg)?$record->msg:'';?></td>
                  <td>
                    <!--<a href="<?php echo !empty($record->$record_id)?base_url('admin/'.$table_name.'/view/').$record->$record_id:'';?>"><span class="view_icon"><i class="fa fa-mail-reply" aria-hidden="true"></i></span></a>-->
                     <a href="<?php echo !empty($record->$record_id)?base_url('admin/'.$table_name.'/view/').$record->$record_id:'';?>"><span class="view_icon"><i class="fa fa-eye" aria-hidden="true"></i></span></a>
                    <a href="<?php echo !empty($record->$record_id)?base_url('admin/'.$table_name.'/delete/').$record->$record_id:'';?>"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                  </td>
                </tr>
                <?php $i++; endforeach;?>  
                <?php else:?>
                  <tr>
                    <td>No Record Found</td>
                  </tr>
                <?php endif;?>
              </tbody>
            </table>
          </div>
        </div>   
      </div>
    </div>
  </section>
</div>