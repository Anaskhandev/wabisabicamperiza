<?php
$table_name = $this->uri->segment(2);
$record_id = $this->uri->segment(2) . '_id';
$form_type = $this->uri->segment(4);
$id = $this->uri->segment(5);
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <?php echo !empty($title) ? $title : 'Book Payments'; ?>
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
                  <th>Quantity</th>
                  <th>Amount</th>
                  <th>BookType</th>
                  <th>Street Number</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Created At</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                if (!empty($records)) : foreach ($records as $record) : ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $record->first_name . " " . $record->last_name ?></td>
                      <td><?php echo !empty($record->quantity) ? $record->quantity : ''; ?></td>
                      <td>$<?php echo !empty($record->amount) ? $record->amount : ''; ?></td>
                      <td><?php echo !empty($record->book_type) ? $record->book_type : ''; ?></td>
                      <td><?php echo !empty($record->street_number) ? $record->street_number : ''; ?></td>
                      <td><?php echo !empty($record->city) ? $record->city : ''; ?></td>
                      <td><?php echo !empty($record->state) ? $record->state : ''; ?></td>
                      <td><?php echo !empty($record->created_at) ? $record->created_at : ''; ?></td>
                      <td>
                        <a href="<?php echo !empty($record->book_payment_id) ? base_url('admin/books/view/') . $record->book_payment_id : ''; ?>"><span class="view_icon"><i class="fa fa-eye" aria-hidden="true"></i></span></a>

                        <a href="<?php echo !empty($record->book_payment_id) ? base_url('admin/books/delete/') . $record->book_payment_id : ''; ?>"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                      </td>
                    </tr>
                  <?php $i++;
                  endforeach; ?>
                <?php else : ?>
                  <tr align="center">
                    <td colspan="20">No Record Found</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
            <div>
                                    <button name="submit_form" id="csv_down" class="submit-button btn btn-primary m-5">Download
                                        CSV</button>
                                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
 <script>
            $(document).ready(function() {
                
                $('#csv_down').click(function() {
                    ExportToExcel()
                })

                function ExportToExcel(type, fn, dl) {
                    var elt = document.getElementById('datatable');
                    var wb = XLSX.utils.table_to_book(elt, {
                        sheet: "sheet1"
                    });
                    return dl ?
                        XLSX.write(wb, {
                            bookType: type,
                            bookSST: true,
                            type: 'base64'
                        }) :
                        XLSX.writeFile(wb, fn || ('Data.' + (type || 'xlsx')));
                }
                $('#csv_down').click(function() {
                    ExportToExcel()
                })



            })
        </script>