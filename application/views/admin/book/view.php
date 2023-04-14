<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <?php echo !empty($title) ? $title : 'Payment'; ?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">View Data</h3>
          </div>
          <div class="col-md-12">
            <div class="box-body box-body-view">
              <small class="text-success"><i class="fa fa-calendar"></i> Time: <?php
                                                                                $db = $record->created_at;
                                                                                $timestamp = strtotime($db);
                                                                                echo date("F j, Y, g:i a", $timestamp); ?></small> <br>

              <?php if (!empty($record->transection_id)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Transection id</span>
                  <span class="col-md-10 view_details"><?php echo $record->transection_id; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->User_Id_entered)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">DNI/VAT</span>
                  <span class="col-md-10 view_details"><?php echo $record->User_Id_entered; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->quantity)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Quantity</span>
                  <span class="col-md-10 view_details"><?php echo $record->quantity; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->amount)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Amount</span>
                  <span class="col-md-10 view_details"><?php echo $record->amount; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->book_type)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Book type</span>
                  <span class="col-md-10 view_details"><?php echo $record->book_type; ?></span>
                </div>
              <?php endif; ?>



              <?php if (!empty($record->first_name)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Name</span>
                  <span class="col-md-10 view_details"><?php echo $record->first_name . ' ' . $record->last_name; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->description)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Description</span>
                  <span class="col-md-10 view_details"><?php echo $record->description; ?></span>
                </div>
              <?php endif; ?>



              <?php if (!empty($record->country)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Country</span>
                  <span class="col-md-10 view_details"><?php echo $record->country; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->street_name)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Street name</span>
                  <span class="col-md-10 view_details"><?php echo $record->street_name; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->street_number)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Street Number</span>
                  <span class="col-md-10 view_details"><?php echo $record->street_number; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->city)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">City</span>
                  <span class="col-md-10 view_details"><?php echo $record->city; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->state)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">State</span>
                  <span class="col-md-10 view_details"><?php echo $record->state; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->zipcode)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Zip code</span>
                  <span class="col-md-10 view_details"><?php echo $record->zipcode; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->phone_number)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Phone number </span>
                  <span class="col-md-10 view_details"><?php echo $record->phone_number; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->email)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Email</span>
                  <span class="col-md-10 view_details"><?php echo $record->email; ?></span>
                </div>
              <?php endif; ?>

              <?php if (!empty($record->note)) : ?>
                <div class="form-group clearfix">
                  <span class="col-md-2 view_label">Note</span>
                  <span class="col-md-10 view_details"><?php echo $record->note; ?></span>
                </div>
              <?php endif; ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>