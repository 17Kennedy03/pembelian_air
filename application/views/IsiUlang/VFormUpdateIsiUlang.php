<!-- Main content -->
<form action="<?php echo site_url('IsiUlang/UpdateDataIsiUlang'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Data Isi Ulang</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <input type="hidden" name="id_ulang" value="<?php echo $detail['id_ulang']; ?>">
                  <div>
                    <br>
                    <label>Tanggal</label>
                    <br>
                    <input type="date" name="tanggal" class="form-control">
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->