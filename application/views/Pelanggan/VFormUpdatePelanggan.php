<!-- Main content -->
<form action="<?php echo site_url('Pelanggan/UpdateDataPelanggan'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Pelanggan</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <input type="hidden" name="id_pelanggan" value="<?php echo $detail['id_pelanggan']; ?>">
                  <div>
                    <br>
                    <label>Nama Pelanggan</label>
                    <br>
                    <input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>">
                  </div>
                
                  <div>
                    <label>Alamat</label>
                    <br>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $detail['alamat']; ?>">
                  </div>

                  <div>
                    <label>No Telepon</label>
                    <br>
                    <input type="text" name="no_tlp" class="form-control" value="<?php echo $detail['no_tlp']; ?>">
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->