<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <?php echo !empty($title) ? $title : 'Title'; ?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data</h3>
          </div>
          <div class="col-md-6">
            <form role="form" action="<?php echo base_url('admin/price/'); ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Book Price ( € )</label>
                  <input type="number" class="form-control" id="master_price" name="master_price" value="<?php echo !empty($record->master_price) ? $record->master_price : '' ?>" required>
                  <?php echo form_error('master_price'); ?>
                </div>

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