<form action="<?php echo site_url('KPelanggan/AddDataPelanggan'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div>
                    <label>Nama Pelanggan</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama" name="nama">
                  </div>
                  
                  <div>
                  <label>No Telepon</label>
                    <input type="text" class="form-control" placeholder="Masukan No Telepon" name="no_tlp">
                      </div>

                      <div>
                  <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                      </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->