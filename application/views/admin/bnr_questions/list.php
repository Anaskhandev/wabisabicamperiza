<?php
$table_name = $this->uri->segment(2);
$record_id = $this->uri->segment(2).'_id';
$form_type = $this->uri->segment(4);
$id = $this->uri->segment(5);
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <?php echo !empty($title)?$title:'Banner Answers';?>
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
                  <th>Q 1</th>
                  <th>Q 2</th>
                  <th>Q 3</th>
                  <th>Q 4</th>
                  <th>Q 5</th>
                  <th>Q 6</th>
                  <th>Q 7</th>
                  <th>Q 8</th>
                  <th>Q 9</th>
                  <th>Q 10</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>            
                <?php $i=1; if(!empty($records)): foreach($records as $record):?>    
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo !empty($record->q1)?$record->q1:'';?></td>
                  <td><?php echo !empty($record->q2)?$record->q2:'';?></td>
                  <td><?php echo !empty($record->q3)?$record->q3:'';?></td>
                  <td><?php echo !empty($record->q4)?$record->q4:'';?></td>
                  <td><?php echo !empty($record->q5)?$record->q5:'';?></td>
                  <td><?php echo !empty($record->q6)?$record->q6:'';?></td>
                  <td><?php echo !empty($record->q7)?$record->q7:'';?></td>
                  <td><?php echo !empty($record->q8)?$record->q8:'';?></td>
                  <td><?php echo !empty($record->q9)?$record->q9:'';?></td>
                  <td><?php echo !empty($record->q10)?$record->q10:'';?></td>
                  <td><?php echo !empty($record->bnr_questions_email)?$record->bnr_questions_email:'';?></td>
                  <td>
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
